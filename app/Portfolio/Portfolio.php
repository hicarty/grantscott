<?php

namespace App\Portfolio;

use Illuminate\Support\Collection;

/**
 * Reads the portfolio content from config/portfolio.php and resolves the
 * images for each album from public/images/portfolio/{slug}/.
 */
class Portfolio
{
    public const IMAGE_EXTENSIONS = ['jpg', 'jpeg', 'png', 'webp', 'gif'];

    // Portrait 2:3 frame used for placeholders.
    public const PLACEHOLDER_WIDTH = 1000;

    public const PLACEHOLDER_HEIGHT = 1500;

    public function __construct(
        private array $config,
        private string $imageRoot,
        private string $imageUrlPrefix = 'images/portfolio',
    ) {}

    public function get(string $key, mixed $default = null): mixed
    {
        return data_get($this->config, $key, $default);
    }

    public function categories(): Collection
    {
        return collect($this->config['categories'] ?? [])
            ->map(fn (array $category, string $slug) => ['slug' => $slug] + $category);
    }

    public function category(string $slug): ?array
    {
        return $this->categories()->get($slug);
    }

    public function albums(?string $category = null): Collection
    {
        return collect($this->config['albums'] ?? [])
            ->map(fn (array $album, string $slug) => $this->normaliseAlbum($slug, $album))
            ->when($category, fn (Collection $albums) => $albums->where('category', $category));
    }

    public function album(string $slug): ?array
    {
        return $this->albums()->get($slug);
    }

    /**
     * Images for one album: real photos if the album folder has any,
     * otherwise placeholder frames.
     */
    public function images(string $slug): Collection
    {
        $album = $this->album($slug);

        if (! $album) {
            return collect();
        }

        $photos = $this->photos($album);

        return $photos->isNotEmpty() ? $photos : $this->placeholders($album);
    }

    public function categoryImages(string $category): Collection
    {
        return $this->albums($category)
            ->flatMap(fn (array $album) => $this->images($album['slug']))
            ->values();
    }

    public function homeImages(): Collection
    {
        $perAlbum = (int) $this->get('home.per_album', 1);

        return collect($this->get('home.albums', []))
            ->flatMap(fn (string $slug) => $this->images($slug)->take($perAlbum))
            ->values();
    }

    /**
     * First image of an album, used for the Clients thumbnail grid.
     */
    public function cover(string $slug): ?array
    {
        return $this->images($slug)->first();
    }

    public function hasPhotos(string $slug): bool
    {
        $album = $this->album($slug);

        return $album !== null && $this->photos($album)->isNotEmpty();
    }

    private function normaliseAlbum(string $slug, array $album): array
    {
        return [
            'slug' => $slug,
            'title' => $album['title'] ?? $slug,
            'category' => $album['category'] ?? null,
            'description' => $album['description'] ?? null,
            'url' => $album['url'] ?? null,
            'captions' => $album['captions'] ?? [],
        ];
    }

    private function photos(array $album): Collection
    {
        $directory = $this->imageRoot.DIRECTORY_SEPARATOR.$album['slug'];

        if (! is_dir($directory)) {
            return collect();
        }

        return collect(scandir($directory))
            ->filter(fn (string $file) => in_array(strtolower(pathinfo($file, PATHINFO_EXTENSION)), self::IMAGE_EXTENSIONS, true))
            ->sort(SORT_NATURAL | SORT_FLAG_CASE)
            ->map(function (string $file) use ($album, $directory) {
                [$width, $height] = @getimagesize($directory.DIRECTORY_SEPARATOR.$file) ?: [self::PLACEHOLDER_WIDTH, self::PLACEHOLDER_HEIGHT];

                return [
                    'src' => asset($this->imageUrlPrefix.'/'.$album['slug'].'/'.rawurlencode($file)),
                    'width' => $width,
                    'height' => $height,
                    'title' => $album['title'],
                    'description' => $album['captions'][$file] ?? $album['description'],
                    'album' => $album['slug'],
                    'placeholder' => false,
                ];
            })
            ->values();
    }

    private function placeholders(array $album): Collection
    {
        $count = max(1, (int) $this->get('placeholders_per_album', 4));

        return collect(range(1, $count))->map(fn (int $n) => [
            'src' => route('placeholder', ['album' => $album['slug'], 'number' => $n]),
            'width' => self::PLACEHOLDER_WIDTH,
            'height' => self::PLACEHOLDER_HEIGHT,
            'title' => $album['title'],
            'description' => $album['description'],
            'album' => $album['slug'],
            'placeholder' => true,
        ]);
    }
}
