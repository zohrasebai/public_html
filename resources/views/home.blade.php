
@extends('layouts.app')

@section('title', 'Qualipro - Home')

@section('content')
	<div class="bg-secondery color-white" id="scroll" style="display: inline;"><i class="fa fa-angle-up"></i></div>

   @include('partials.header')
<div id="home"> @include('partials.slider') </div>
<div id="about"> @include('partials.about') </div>
<div id="services"> @include('partials.services') </div>
<div id="references"> @include('partials.references') </div>
<div id="contact"> @include('partials.contact') </div>
@include('partials.footer')

@endsection
