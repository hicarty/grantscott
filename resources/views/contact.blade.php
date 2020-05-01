@extends('layouts.template')

@section('content')

<div class='header'>
        <div class="page_ratio">
            <!-- TITLE -->
            <div id="vb_title">
            </div>

            <!-- LOGO -->
            <div id="vb_logo">
            </div>

            <!-- MENU -->
            @include('partials/_nav')

        </div>
    </div>

  <!-- SIDE -->
<div id="vb_info_container">
  <!-- SIDE_TEXT_TITLE -->
    <h2>&nbsp;</h2>
  <!-- SIDE_TEXT -->
  <div id="vb_info_content">
    
  </div>
</div>


  <!-- BODY_TEXT -->
  <div class="main_content">

    <!-- TEXT CONTENT -->
    <div id="vb_text_content">
          <strong>Telephone:</strong> +44 (0) 7957 295261<br><br><strong>Email:</strong> <a href="mailto:grant@grantscott.com">grant@grantscott.com</a><br>
    </div>

@endsection