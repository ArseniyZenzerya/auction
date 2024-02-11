<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<meta name="csrf-token" content="{{ csrf_token() }}">

@yield('meta')
@yield('meta-directions')

<link rel="stylesheet" href="/css/style.css?v={{filemtime(public_path('css/style.css'))}}">
<link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css"
/>
<script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
