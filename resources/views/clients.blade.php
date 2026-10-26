@extends('layouts.app')

@section('content')
    <h1 class="visually-hidden">Clients</h1>

    @foreach ($portfolio->categories() as $category)
        @php($clientAlbums = $portfolio->albums($category['slug']))
        @continue($clientAlbums->isEmpty())

        <section class="thumbs-section" aria-labelledby="clients-{{ $category['slug'] }}">
            <h2 id="clients-{{ $category['slug'] }}" class="thumbs-section__heading">{{ $category['heading'] }}</h2>

            <ul class="thumbs">
                @foreach ($clientAlbums as $client)
                    @php($cover = $portfolio->cover($client['slug']))
                    <li class="thumbs__item">
                        <a href="{{ route('album', $client['slug']) }}" title="Open {{ $client['title'] }}">
                            <span class="thumbs__image">
                                <img src="{{ $cover['src'] }}" width="{{ $cover['width'] }}" height="{{ $cover['height'] }}" alt="" loading="lazy" decoding="async">
                            </span>
                            <span class="thumbs__title">{{ $client['title'] }}</span>
                        </a>
                    </li>
                @endforeach
            </ul>
        </section>
    @endforeach
@endsection
