@extends('layouts.app')

@section('content')
    @php($contact = $portfolio->get('contact', []))

    <div class="text-page">
        <article class="text-content">
            <h1>Contact</h1>
            <p>For bookings, castings and availability for suits, knitwear and e-commerce work:</p>

            <dl class="contact-details">
                @if (! empty($contact['agency']))
                    <dt>Agency</dt>
                    <dd>
                        @if (! empty($contact['agency_url']))
                            <a href="{{ $contact['agency_url'] }}" rel="noopener" target="_blank">{{ $contact['agency'] }}</a>
                        @else
                            {{ $contact['agency'] }}
                        @endif
                    </dd>
                @endif

                @if (! empty($contact['email']))
                    <dt>Email</dt>
                    <dd><a href="mailto:{{ $contact['email'] }}">{{ $contact['email'] }}</a></dd>
                @endif

                @if (! empty($contact['phone']))
                    <dt>Telephone</dt>
                    <dd><a href="tel:{{ preg_replace('/[^0-9+]/', '', $contact['phone']) }}">{{ $contact['phone'] }}</a></dd>
                @endif

                @if (! empty($contact['instagram']))
                    @php($handle = ltrim($contact['instagram'], '@'))
                    <dt>Instagram</dt>
                    <dd><a href="https://www.instagram.com/{{ $handle }}/" rel="noopener" target="_blank">&#64;{{ $handle }}</a></dd>
                @endif
            </dl>

            @if (collect($contact)->filter()->isEmpty())
                <p class="muted">Contact details coming soon.</p>
            @endif
        </article>
    </div>
@endsection
