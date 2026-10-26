<?php

namespace App\Http\Controllers;

use App\Portfolio\Portfolio;
use Illuminate\Http\Response;
use Illuminate\View\View;

class PortfolioController extends Controller
{
    public function __construct(private Portfolio $portfolio) {}

    public function home(): View
    {
        return view('gallery', [
            'page' => 'home',
            'title' => null,
            'metaDescription' => $this->portfolio->get('description'),
            'images' => $this->portfolio->homeImages(),
            'showCaptions' => false,
        ]);
    }

    public function category(string $category): View
    {
        $details = $this->portfolio->category($category) ?? abort(404);

        return view('gallery', [
            'page' => $category,
            'title' => $details['heading'],
            'metaDescription' => $this->portfolio->get('name').' — '.$details['heading'].'. '.$details['intro'],
            'images' => $this->portfolio->categoryImages($category),
            'showCaptions' => true,
        ]);
    }

    public function album(string $album): View
    {
        $details = $this->portfolio->album($album) ?? abort(404);

        return view('gallery', [
            'page' => $details['category'],
            'title' => $details['title'],
            'metaDescription' => $this->portfolio->get('name').' for '.$details['title'].'. '.$details['description'].'.',
            'images' => $this->portfolio->images($album),
            'showCaptions' => true,
            'album' => $details,
        ]);
    }

    public function clients(): View
    {
        return view('clients', [
            'page' => 'clients',
            'title' => 'Clients',
            'metaDescription' => 'Brands '.$this->portfolio->get('name').' has modelled for: '
                .$this->portfolio->albums()->pluck('title')->join(', ', ' and ').'.',
        ]);
    }

    public function about(): View
    {
        return view('about', [
            'page' => 'about',
            'title' => 'About',
            'metaDescription' => $this->portfolio->get('description'),
        ]);
    }

    public function contact(): View
    {
        return view('contact', [
            'page' => 'contact',
            'title' => 'Contact',
            'metaDescription' => 'Bookings and enquiries for '.$this->portfolio->get('name').'.',
        ]);
    }

    public function placeholder(string $album, int $number): Response
    {
        $details = $this->portfolio->album($album) ?? abort(404);

        abort_if($number < 1 || $number > 50, 404);

        return response()
            ->view('placeholder', [
                'album' => $details,
                'number' => $number,
                'width' => Portfolio::PLACEHOLDER_WIDTH,
                'height' => Portfolio::PLACEHOLDER_HEIGHT,
            ])
            ->header('Content-Type', 'image/svg+xml')
            ->header('Cache-Control', 'public, max-age=86400');
    }

    public function sitemap(): Response
    {
        $urls = collect([route('home'), route('clients'), route('about'), route('contact')])
            ->merge($this->portfolio->categories()->keys()->map(fn ($slug) => route('category', $slug)))
            ->merge($this->portfolio->albums()->keys()->map(fn ($slug) => route('album', $slug)));

        return response()
            ->view('sitemap', ['urls' => $urls])
            ->header('Content-Type', 'application/xml');
    }
}
