@extends('layouts.app')

@section('content')
    @if ($title)
        <h1 class="visually-hidden">{{ $title }}</h1>
    @else
        <h1 class="visually-hidden">{{ $portfolio->get('name') }} — {{ $portfolio->get('role') }}</h1>
    @endif

    <div class="h-gallery" tabindex="0" aria-label="{{ $title ?? 'Portfolio' }} gallery — scroll or use the arrow keys">
        @foreach ($images as $image)
            <figure @class(['h-gallery__item', 'h-gallery__item--placeholder' => $image['placeholder']])>
                <a class="h-gallery__frame" href="{{ route('album', $image['album']) }}" @if (isset($album)) tabindex="-1" @endif>
                    <img
                        src="{{ $image['src'] }}"
                        width="{{ $image['width'] }}"
                        height="{{ $image['height'] }}"
                        alt="{{ $portfolio->get('name') }} for {{ $image['title'] }}{{ $image['description'] ? ' — '.$image['description'] : '' }}"
                        @if (! $loop->first) loading="lazy" @endif
                        decoding="async"
                    >
                </a>
                @if ($showCaptions)
                    <figcaption>
                        <span class="h-gallery__title">{{ $image['title'] }}</span>
                        @if ($image['description'])
                            <span class="h-gallery__description">{{ $image['description'] }}</span>
                        @endif
                    </figcaption>
                @endif
            </figure>
        @endforeach
    </div>
@endsection
