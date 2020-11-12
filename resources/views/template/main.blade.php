<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Portal Percepatan Digitalisasi Daerah</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- <link rel="manifest" href="site.webmanifest"> -->
    <link rel="shortcut icon" type="image/x-icon" href="{{ URL::asset('img/favicon3.ico') }}">

    <!-- CSS here -->
    <link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slicknav.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/animate.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/fontawesome-all.min.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/themify-icons.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/slick.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <x-embed-styles />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="{{ URL::asset('datatables/dataTables.bootstrap4.min.css') }}">
</head>

<body>
    
    @yield('menu')

    @yield('content')

    @include('template.footer')

</body>

</html>