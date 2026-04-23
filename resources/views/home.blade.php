@extends('layouts.app')

@section('title', 'Qualipro - Home')

@section('content')

    {{-- ESPACE POUR HEADER FIXE --}}
    <div style="height: 260px; width: 100%; pointer-events: none;"></div>
    <div class="bg-secondery color-white" id="scroll" style="display: inline;"><i class="fa fa-angle-up"></i></div>

    @include('partials.header', ['global_settings' => $global_settings, 'global_achievements' => $global_achievements])
    
    {{-- ON INCLUT LE NOUVEAU CODE SLIDER AVEC LA SECTION HERO (Vidéo divisée) --}}
    @include('partials.slider') {{-- ICI, ce fichier doit être le code juste au-dessus (avec la vidéo à droite et les boutons)} --}}

    @include('partials.about')
    @include('partials.core', ['coreSettings' => $coreSettings, 'coreItems' => $coreItems])
    @include('partials.team')
    @include('partials.causes', ['services' => $services])
    @include('partials.partners')
    @include('partials.footer')

@endsection