@php
    $menu = collect([['label' => 'Home', 'url' => route('home'), 'key' => 'home']])
        ->merge($portfolio->categories()->map(fn ($category) => [
            'label' => $category['title'],
            'url' => route('category', $category['slug']),
            'key' => $category['slug'],
        ])->values())
        ->merge([
            ['label' => 'Clients', 'url' => route('clients'), 'key' => 'clients'],
            ['label' => 'About', 'url' => route('about'), 'key' => 'about'],
            ['label' => 'Contact', 'url' => route('contact'), 'key' => 'contact'],
        ]);
@endphp
<header class="site-header">
    <div class="site-header__bar">
        <a class="site-title" href="{{ route('home') }}">
            <span class="site-title__name">{{ $portfolio->get('name') }}</span>
            <span class="site-title__role">{{ $portfolio->get('role') }}</span>
        </a>

        <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="site-menu">
            <span class="menu-toggle__label">Menu</span>
        </button>
    </div>

    <nav id="site-menu" class="site-menu" aria-label="Main">
        <ul>
            @foreach ($menu as $item)
                <li>
                    <a href="{{ $item['url'] }}" @class(['active' => $page === $item['key']]) @if ($page === $item['key']) aria-current="page" @endif>{{ $item['label'] }}</a>
                </li>
            @endforeach
        </ul>
    </nav>

    <div class="site-info">
        @if (isset($album))
            <h2>{{ $album['title'] }}</h2>
            <p>{{ $album['description'] }}</p>
            <p><a href="{{ route('clients') }}">&larr; All clients</a></p>
        @elseif ($page === 'home')
            <p>{{ $portfolio->get('tagline') }}</p>
        @elseif ($category = $portfolio->category($page))
            <h2>{{ $category['heading'] }}</h2>
            <p>{{ $category['intro'] }}</p>
            <ul class="site-info__brands">
                @foreach ($portfolio->albums($page) as $brand)
                    <li><a href="{{ route('album', $brand['slug']) }}">{{ $brand['title'] }}</a></li>
                @endforeach
            </ul>
        @endif
    </div>
</header>
