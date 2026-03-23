@extends('layouts.app')

@section('content')
    @include('partials.header')

    <main>
        <section id="home">
            @include('partials.slider')
        </section>
        
        <section id="about" class="py-5">
            @include('partials.about')
        </section>

        <section id="causes" class="py-5 bg-light">
            @include('partials.causes')
        </section>

        <section id="references" class="py-5">
            @include('partials.references')
        </section>
    </main>

    @include('partials.footer')
@endsection