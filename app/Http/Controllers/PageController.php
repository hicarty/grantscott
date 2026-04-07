<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    /**
     * Display the specified page.
     *
     * @param  string  $page
     * @return \Illuminate\View\View|\Illuminate\Http\RedirectResponse
     */
    public function show($page = 'home')
    {
        // Define allowed pages to prevent unauthorized access
        $allowedPages = ['home', 'about', 'contact', 'projects', 'people', 'places-and-spaces', 'films'];

        if (!in_array($page, $allowedPages)) {
            abort(404); // Page not found
        }

        // Special handling for films (redirect to Vimeo)
        if ($page === 'films') {
            return redirect('https://vimeo.com/user93899994');
        }

        // Dynamic data based on the current page
        $data = $this->getPageData($page);

        // Render the view dynamically (e.g., 'home' -> resources/views/home.blade.php)
        return view($page, $data);
    }

    /**
     * Get data for the specified page.
     *
     * @param  string  $page
     * @return array
     */
    private function getPageData($page)
    {
        // Example data; in a real app, fetch from database or config
        $pageData = [
            'home' => [
                'title' => 'Home - Charles Mooney Photography',
                'content' => 'Welcome to the portfolio!',
                'meta_description' => 'Photographer portfolio showcasing work.',
            ],
            'about' => [
                'title' => 'About Us',
                'content' => 'About the photographer...',
                'meta_description' => 'Learn about Charles Mooney Photography.',
            ],
            'contact' => [
                'title' => 'Contact Us',
                'content' => 'Get in touch...',
                'meta_description' => 'Contact details for Charles Mooney Photography.',
            ],
            'projects' => [
                'title' => 'Projects',
                'content' => 'View our projects...',
                'meta_description' => 'Explore photography projects.',
            ],
            'people' => [
                'title' => 'People',
                'content' => 'People photography...',
                'meta_description' => 'People-focused photography work.',
            ],
            'places-and-spaces' => [
                'title' => 'Places and Spaces',
                'content' => 'Places and spaces photography...',
                'meta_description' => 'Places and spaces photography work.',
            ],
        ];

        return $pageData[$page] ?? [];
    }
}