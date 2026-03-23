@extends('layouts.app')

@section('content')
    @include('partials.header')
    
    <main>
        @include('partials.slider') {{-- C'est ici que se trouve votre vidéo --}}
        
        <div id="about" class="pt-20"> @include('partials.about') </div>
        <div id="causes" class="pt-20"> @include('partials.causes') </div>
        <div id="references" class="pt-20"> @include('partials.references') </div>
        <div id="contact" class="pt-20 pb-20"> @include('partials.contact') </div>
    </main>

    @include('partials.footer')
@endsection