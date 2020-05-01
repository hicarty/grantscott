@extends('layouts.template')

@section('content')
    <div class='header'>
        <div class="page_ratio">
            <!-- TITLE -->
            <div id="vb_title">
            </div>

            @include('partials/_nav')

        </div>
    </div>
    <!-- body_text -->
    <div class="main_content">
        <div class="vb_album_container"></div>
    </div>
@endsection