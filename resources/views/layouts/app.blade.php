<!DOCTYPE html>
<html lang="en-GB" class="no-js" prefix="og: http://ogp.me/ns#">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    @php
        $siteName = $portfolio->get('name');
        $pageTitle = $title ? $title.' — '.$siteName : $siteName.' — '.$portfolio->get('role').' | '.$portfolio->get('tagline');
        $shareImage = isset($images) ? $images->first() : $portfolio->cover($portfolio->albums()->keys()->first());
    @endphp
    <title>{{ $pageTitle }}</title>
    <meta name="description" content="{{ $metaDescription }}">
    <link rel="canonical" href="{{ url()->current() }}">

    <meta property="og:site_name" content="{{ $siteName }}">
    <meta property="og:title" content="{{ $title ?? $siteName }}">
    <meta property="og:description" content="{{ $metaDescription }}">
    <meta property="og:type" content="website">
    <meta property="og:url" content="{{ url()->current() }}">
    @if ($shareImage && ! $shareImage['placeholder'])
        <meta property="og:image" content="{{ $shareImage['src'] }}">
        <meta property="og:image:width" content="{{ $shareImage['width'] }}">
        <meta property="og:image:height" content="{{ $shareImage['height'] }}">
    @endif
    <meta name="twitter:card" content="summary_large_image">

    <script type="application/ld+json">
        {!! json_encode(array_filter([
            '@context' => 'https://schema.org',
            '@type' => 'Person',
            'name' => $siteName,
            'jobTitle' => $portfolio->get('role'),
            'description' => $portfolio->get('description'),
            'url' => url('/'),
            'sameAs' => array_values(array_filter([
                $portfolio->get('contact.instagram') ? 'https://www.instagram.com/'.ltrim($portfolio->get('contact.instagram'), '@').'/' : null,
            ])) ?: null,
        ]), JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT) !!}
    </script>

    <link rel="icon" href="{{ asset('favicon.ico') }}">
    <link rel="stylesheet" href="{{ asset('css/portfolio.css') }}?v={{ @filemtime(public_path('css/portfolio.css')) }}">
</head>
<body class="page-{{ $page }}">
    <a class="skip-link" href="#content">Skip to content</a>

    <div class="site">
        @include('partials.header')

        <main id="content" class="main">
            @yield('content')
        </main>

        <footer class="site-footer">
            &copy; {{ date('Y') }} {{ $siteName }}. All images copyright of their respective brands and photographers.
        </footer>
    </div>

    <script src="{{ asset('js/portfolio.js') }}?v={{ @filemtime(public_path('js/portfolio.js')) }}" defer></script>
</body>
</html>
