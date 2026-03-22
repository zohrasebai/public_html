
@extends('layouts.app')

@section('title', 'Qualipro - Home')

@section('content')
    @include('partials.header')
    @include('partials.slider')    {{-- La vidéo --}}
    @include('partials.about')     {{-- Qui sommes-nous --}}
    @include('partials.services')  {{-- Nos services --}}
    @include('partials.references') {{-- NOUVEAU : Créez ce fichier pour vos logos clients --}}
    @include('partials.contact')   {{-- Contact --}}
    @include('partials.footer')
@endsection
