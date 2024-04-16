<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Untitled' }}</title>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css"/>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.css"/>
    <link href="{{ asset('css/style.css') }}" rel="stylesheet"> <!-- Your custom CSS -->
</head>
<body>

@include('pages.navbar')
    {{$slot}}
@include('pages.footer')

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> <!-- jQuery est requis pour Slick Slider -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script> <!-- Intégration de Slick Slider -->
<script src="{{ asset('javascript/script.js') }}"></script>
</body>
</html>
