@php
    // Muted tones per section so placeholder frames read as suits / knitwear / e-commerce.
    $tones = [
        'suits' => ['#2f3338', '#3b4046', '#d9d6d0'],
        'knitwear' => ['#cbbfae', '#d8cdbe', '#4a4036'],
        'e-commerce' => ['#e6e5e2', '#efeeeb', '#55524d'],
    ];
    [$from, $to, $ink] = $tones[$album['category']] ?? $tones['e-commerce'];
    $label = strtoupper($album['title']);
@endphp
<svg xmlns="http://www.w3.org/2000/svg" width="{{ $width }}" height="{{ $height }}" viewBox="0 0 {{ $width }} {{ $height }}" role="img" aria-label="{{ $album['title'] }} — image {{ $number }} (placeholder)">
    <defs>
        <linearGradient id="g" x1="0" y1="0" x2="0" y2="1">
            <stop offset="0" stop-color="{{ $from }}"/>
            <stop offset="1" stop-color="{{ $to }}"/>
        </linearGradient>
    </defs>
    <rect width="100%" height="100%" fill="url(#g)"/>
    <g fill="none" stroke="{{ $ink }}" stroke-opacity="0.18" stroke-width="3">
        {{-- Simple figure silhouette: head, shoulders and torso --}}
        <circle cx="{{ $width / 2 }}" cy="{{ $height * 0.25 }}" r="{{ $width * 0.09 }}"/>
        <path d="M {{ $width * 0.22 }} {{ $height }} L {{ $width * 0.26 }} {{ $height * 0.45 }} Q {{ $width * 0.3 }} {{ $height * 0.36 }} {{ $width * 0.42 }} {{ $height * 0.355 }} L {{ $width * 0.5 }} {{ $height * 0.42 }} L {{ $width * 0.58 }} {{ $height * 0.355 }} Q {{ $width * 0.7 }} {{ $height * 0.36 }} {{ $width * 0.74 }} {{ $height * 0.45 }} L {{ $width * 0.78 }} {{ $height }}"/>
    </g>
    <g fill="{{ $ink }}" font-family="Helvetica Neue, Helvetica, Arial, sans-serif" font-weight="300">
        <text x="60" y="{{ $height - 96 }}" font-size="34" letter-spacing="6">{{ $label }}</text>
        <text x="60" y="{{ $height - 52 }}" font-size="24" letter-spacing="3" fill-opacity="0.6">{{ str_pad($number, 2, '0', STR_PAD_LEFT) }} — PHOTO TO COME</text>
    </g>
</svg>
