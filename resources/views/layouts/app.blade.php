<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title', 'QualiPro+')</title>

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets/images/favicon.ico') }}">

    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/color.css') }}">
    
    <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">
    
    <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.min.css') }}">

    <link href="https://fonts.googleapis.com/css2?family=Nunito+Sans:wght@400;600;700;800;900&display=swap" rel="stylesheet">
    
    <style>
        /* Force le style du menu en Vert Foncé QualiPro */
        .navbar-nav .nav-link {
            color: #004d40 !important;
            font-weight: 800 !important;
            transition: 0.3s;
        }
        .navbar-nav .nav-link:hover {
            color: #00a6ff !important; /* Jaune au survol */
        }
    </style>

    @stack('styles')
</head>

<body>

    @yield('content')

    <script src="{{ asset('assets/js/jquery-v3.4.1.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/wow.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        $(document).ready(function() {
            // S'assure que la vidéo démarre bien
            const video = document.querySelector('video');
            if (video) {
                video.play().catch(error => console.log("Lecture auto bloquée par le navigateur"));
            }

            // Smooth Scroll pour la navigation
            $(".nav-link").on('click', function(event) {
                if (this.hash !== "") {
                    event.preventDefault();
                    var hash = this.hash;
                    $('html, body').animate({
                        scrollTop: $(hash).offset().top - 70 // -70 pour ne pas cacher le haut de section
                    }, 800);
                }
            });
        });
    </script>

    @stack('scripts')
</body>
</html>