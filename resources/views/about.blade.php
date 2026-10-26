@extends('layouts.app')

@section('content')
    @php($measurements = collect($portfolio->get('measurements', []))->filter())

    <div class="text-page">
        <article class="text-content">
            <h1>{{ $portfolio->get('name') }}</h1>
            @foreach ($portfolio->get('bio', [$portfolio->get('description')]) as $paragraph)
                <p>{{ $paragraph }}</p>
            @endforeach

            @foreach ($portfolio->categories() as $category)
                @php($clientAlbums = $portfolio->albums($category['slug']))
                @continue($clientAlbums->isEmpty())

                <h2>{{ $category['heading'] }}</h2>
                <p>
                    @foreach ($clientAlbums as $client)
                        <a href="{{ route('album', $client['slug']) }}">{{ $client['title'] }}</a>@if (! $loop->last), @endif
                    @endforeach
                </p>
            @endforeach

            <p><a href="{{ route('contact') }}">Bookings &amp; enquiries &rarr;</a></p>
        </article>

        @if ($measurements->isNotEmpty())
            <aside class="text-aside" aria-labelledby="measurements-heading">
                <h2 id="measurements-heading">Measurements</h2>
                <dl class="measurements">
                    @foreach ($measurements as $label => $value)
                        <dt>{{ $label }}</dt>
                        <dd>{{ $value }}</dd>
                    @endforeach
                </dl>
            </aside>
        @endif
    </div>
@endsection
