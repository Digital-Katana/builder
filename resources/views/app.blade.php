<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="theme-color" content="#feed01"/>
    <title>Consto | Industrial Construction Company</title>
    <meta name="author" content="Themezinho">
    <meta name="description" content="For all kind of construction company website">
    <meta name="keywords" content="consto, business, construction, company, industrial, building, projects, corporate, apartments, flat, condo, brick, website, design, animation, transition, themezinho">

    <!-- SOCIAL MEDIA META -->
    <meta property="og:description" content="Consto | Industrial Construction Company">
    <meta property="og:image" content="http://www.themezinho.net/consto/preview.png">
    <meta property="og:site_name" content="consto">
    <meta property="og:title" content="consto">
    <meta property="og:type" content="website">
    <meta property="og:url" content="http://www.themezinho.net/consto">

    <!-- TWITTER META -->
    <meta name="twitter:card" content="summary">
    <meta name="twitter:site" content="@consto">
    <meta name="twitter:creator" content="@consto">
    <meta name="twitter:title" content="consto">
    <meta name="twitter:description" content="Consto | Industrial Construction Company">
    <meta name="twitter:image" content="http://www.themezinho.net/consto/preview.png">

    <!-- FAVICON FILES -->
    <link href="/ico/apple-touch-icon-144-precomposed.png" rel="apple-touch-icon" sizes="144x144">
    <link href="/ico/apple-touch-icon-114-precomposed.png" rel="apple-touch-icon" sizes="114x114">
    <link href="/ico/apple-touch-icon-72-precomposed.png" rel="apple-touch-icon" sizes="72x72">
    <link href="/ico/apple-touch-icon-57-precomposed.png" rel="apple-touch-icon">
    <link href="/ico/favicon.png" rel="shortcut icon">

    <!-- CSS FILES -->
    <link rel="stylesheet" href="/css/lineicons.css">
    <link rel="stylesheet" href="/css/odometer.min.css">
    <link rel="stylesheet" href="/css/fancybox.min.css">
    <link rel="stylesheet" href="/css/swiper.min.css">
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/style.css">

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0" />
    <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
    <script src="{{ mix('/js/app.js') }}" defer></script>
    @inertiaHead
    {{--For Admin--}}
    @if( str_contains(url()->current(), '/admin') )
        <link rel="stylesheet" href="/css/admin.css">
    @endif
</head>
<body>

    @inertia

    <!-- JS FILES -->
    <script src="/js/jquery.min.js"></script>
    <script src="/js/bootstrap.min.js"></script>
    <script src="/js/swiper.min.js"></script>
    <script src="/js/fancybox.min.js"></script>
    <script src="/js/odometer.min.js"></script>
    <script src="/js/isotope.min.js"></script>

</body>


</html>
