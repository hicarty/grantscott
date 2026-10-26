<?php

/*
|--------------------------------------------------------------------------
| Haven Carty — Model Portfolio content
|--------------------------------------------------------------------------
|
| Everything the site shows lives here, so the portfolio can be updated
| without touching templates.
|
| Photographs: drop .jpg / .jpeg / .png / .webp files into
| public/images/portfolio/{album-slug}/ and they appear in that album
| (sorted by filename). Until an album folder has photos, a neutral
| placeholder is shown in its place. Optional per-image captions can be
| set in the album's 'captions' array, keyed by filename.
|
*/

return [

    'name' => 'Haven Carty',

    'role' => 'Model',

    'tagline' => 'Suits · Knitwear · E-commerce',

    'description' => 'Haven Carty is a model specialising in tailoring, knitwear and e-commerce, '
        .'working with brands including John Smedley, MARS Knitwear, Katchi Blazers and Adebayo Jones.',

    // About page text, one string per paragraph.
    'bio' => [
        'Haven Carty is a model specialising in suits, knitwear and e-commerce, working with tailoring and '
            .'knitwear brands and online retailers.',
    ],

    // Shown in the About page sidebar. Leave a value null to hide that row.
    'measurements' => [
        'Height' => null,
        'Chest' => null,
        'Waist' => null,
        'Inside leg' => null,
        'Suit' => null,
        'Collar' => null,
        'Shoe' => null,
        'Hair' => null,
        'Eyes' => null,
    ],

    'contact' => [
        'email' => env('PORTFOLIO_EMAIL'),
        'phone' => env('PORTFOLIO_PHONE'),
        'agency' => env('PORTFOLIO_AGENCY'),
        'agency_url' => env('PORTFOLIO_AGENCY_URL'),
        'instagram' => env('PORTFOLIO_INSTAGRAM'),
    ],

    // Top-level portfolio sections, in menu order.
    'categories' => [
        'suits' => [
            'title' => 'Suits',
            'heading' => 'Suits & Tailoring',
            'intro' => 'Tailoring, blazers and formalwear.',
        ],
        'knitwear' => [
            'title' => 'Knitwear',
            'heading' => 'Knitwear',
            'intro' => 'Fine-gauge and heritage knitwear.',
        ],
        'e-commerce' => [
            'title' => 'E-Commerce',
            'heading' => 'E-Commerce',
            'intro' => 'Product and on-model imagery for online retail.',
        ],
    ],

    // One album per client. 'category' must be a key of 'categories'.
    'albums' => [
        'john-smedley' => [
            'title' => 'John Smedley',
            'category' => 'knitwear',
            'description' => 'Knitwear',
            'url' => 'https://www.johnsmedley.com',
            'captions' => [],
        ],
        'mars-knitwear' => [
            'title' => 'MARS Knitwear',
            'category' => 'knitwear',
            'description' => 'Knitwear',
            'url' => null,
            'captions' => [],
        ],
        'katchi-blazers' => [
            'title' => 'Katchi Blazers',
            'category' => 'suits',
            'description' => 'Blazers & Tailoring',
            'url' => null,
            'captions' => [],
        ],
        'adebayo-jones' => [
            'title' => 'Adebayo Jones',
            'category' => 'suits',
            'description' => 'Suits & Tailoring',
            'url' => null,
            'captions' => [],
        ],
        'all-riot' => [
            'title' => 'All Riot',
            'category' => 'e-commerce',
            'description' => 'E-commerce',
            'url' => null,
            'captions' => [],
        ],
        'truth' => [
            'title' => 'Truth',
            'category' => 'e-commerce',
            'description' => 'E-commerce',
            'url' => null,
            'captions' => [],
        ],
        'travel' => [
            'title' => 'Travel',
            'category' => 'e-commerce',
            'description' => 'E-commerce',
            'url' => null,
            'captions' => [],
        ],
        'positiva-dye' => [
            'title' => 'Positiva Dye',
            'category' => 'e-commerce',
            'description' => 'E-commerce',
            'url' => null,
            'captions' => [],
        ],
        'big-wide-grin' => [
            'title' => 'Big Wide Grin',
            'category' => 'e-commerce',
            'description' => 'E-commerce',
            'url' => null,
            'captions' => [],
        ],
    ],

    // Albums sampled for the home page gallery, and how many images from each.
    'home' => [
        'albums' => ['katchi-blazers', 'john-smedley', 'adebayo-jones', 'mars-knitwear', 'all-riot', 'positiva-dye', 'big-wide-grin', 'truth', 'travel'],
        'per_album' => 1,
    ],

    // How many placeholder frames an album shows before real photos are added.
    'placeholders_per_album' => 4,

];
