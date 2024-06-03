@extends('layouts.template')

@section('css_link')
    {{ asset('css/about.css') }}
@endsection

@section('main')
<div class="about">
  <iframe src="{{ asset('about/about.html') }}" frameborder="0" style="width: 100%; height: 100vh;"></iframe>
</div>
@endsection

<script src="assets/js/iframe-resizer.parent.js"></script>
