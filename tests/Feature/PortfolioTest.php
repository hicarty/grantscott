<?php

namespace Tests\Feature;

use App\Portfolio\Portfolio;
use Illuminate\Support\Facades\File;
use Tests\TestCase;

class PortfolioTest extends TestCase
{
    public function test_home_page_shows_the_scrolling_gallery(): void
    {
        $this->get('/')
            ->assertOk()
            ->assertSee('Haven Carty')
            ->assertSee('Suits · Knitwear · E-commerce')
            ->assertSee('h-gallery', false);
    }

    public function test_each_section_lists_its_brands(): void
    {
        $this->get('/suits')->assertOk()->assertSee('Katchi Blazers')->assertSee('Adebayo Jones');
        $this->get('/knitwear')->assertOk()->assertSee('John Smedley')->assertSee('MARS Knitwear');
        $this->get('/e-commerce')->assertOk()
            ->assertSee('All Riot')->assertSee('Truth')->assertSee('Travel')
            ->assertSee('Positiva Dye')->assertSee('Big Wide Grin');
    }

    public function test_clients_page_links_every_album(): void
    {
        $response = $this->get('/clients')->assertOk()->assertDontSee('All clients');

        foreach (array_keys(config('portfolio.albums')) as $slug) {
            $response->assertSee(route('album', $slug), false);
            $this->get(route('album', $slug))->assertOk();
        }
    }

    public function test_text_pages_render(): void
    {
        $this->get('/about')->assertOk()->assertSee('Haven Carty');
        $this->get('/contact')->assertOk()->assertSee('Contact');
    }

    public function test_contact_page_shows_configured_details(): void
    {
        config([
            'portfolio.contact.email' => 'bookings@example.com',
            'portfolio.contact.instagram' => '@example',
        ]);
        $this->app->forgetInstance(Portfolio::class);

        $this->get('/contact')
            ->assertSee('mailto:bookings@example.com', false)
            ->assertSee('https://www.instagram.com/example/', false);
    }

    public function test_measurements_only_show_when_set(): void
    {
        $this->get('/about')->assertDontSee('Measurements');

        config(['portfolio.measurements.Height' => '6\'1"']);
        $this->app->forgetInstance(Portfolio::class);

        $this->get('/about')->assertSee('Measurements')->assertSee('Height');
    }

    public function test_unknown_pages_are_not_found(): void
    {
        $this->get('/album/not-a-brand')->assertNotFound();
        $this->get('/people')->assertNotFound();
        $this->get('/placeholder/not-a-brand/1.svg')->assertNotFound();
    }

    public function test_placeholder_is_an_svg_image(): void
    {
        $this->get('/placeholder/john-smedley/1.svg')
            ->assertOk()
            ->assertHeader('Content-Type', 'image/svg+xml')
            ->assertSee('JOHN SMEDLEY');
    }

    public function test_photos_in_the_album_folder_replace_placeholders(): void
    {
        $root = storage_path('framework/testing/portfolio');
        File::ensureDirectoryExists($root.'/john-smedley');
        imagepng(imagecreatetruecolor(400, 600), $root.'/john-smedley/02-look.png');
        imagepng(imagecreatetruecolor(400, 600), $root.'/john-smedley/01-look.png');

        try {
            $portfolio = new Portfolio(config('portfolio'), $root);
            $images = $portfolio->images('john-smedley');

            $this->assertCount(2, $images);
            $this->assertFalse($images[0]['placeholder']);
            $this->assertStringEndsWith('john-smedley/01-look.png', $images[0]['src']);
            $this->assertSame([400, 600], [$images[0]['width'], $images[0]['height']]);
            $this->assertTrue($portfolio->images('mars-knitwear')->first()['placeholder']);
        } finally {
            File::deleteDirectory($root);
        }
    }

    public function test_sitemap_lists_all_pages(): void
    {
        $this->get('/sitemap.xml')
            ->assertOk()
            ->assertSee(route('category', 'knitwear'), false)
            ->assertSee(route('album', 'big-wide-grin'), false);
    }
}
