<!DOCTYPE html>
<html lang="en">

<head>
    <title>Arsip Dokumen</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/owl-carousel/css/owl.theme.default.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/mdi/css/materialdesignicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/vendors/aos/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/style.min.css') }}">
</head>

<body id="body" data-spy="scroll" data-target=".navbar" data-offset="100">
    <header id="header-section">
        <nav class="navbar navbar-expand-lg pl-3 pl-sm-0" id="navbar">
            <div class="container">
                <div class="navbar-brand-wrapper d-flex w-100">
                    <img src="{{ asset('assets/static/arsip2.png') }}" height="40" alt="">
                    <button class="navbar-toggler ml-auto" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                        <span class="mdi mdi-menu navbar-toggler-icon"></span>
                    </button>
                </div>
                <div class="collapse navbar-collapse navbar-menu-wrapper" id="navbarSupportedContent">
                </div>
            </div>
        </nav>
    </header>
    <div class="banner">
        <div class="container">
            <h1 class="font-weight-semibold">Arsip Dokumen dengan mudah <br>hanya dari rumah Anda.</h1>
            <h6 class="font-weight-normal text-muted pb-3 mt-4">Hanya dari rumah anda dengan kemudahan internet, tidak
                butuh kertas lagi.</h6>
            <div>
                <a href="{{ route('dashboard') }}" class="btn btn-primary mr-1 mb-5">
                    Get Started
                </a>
            </div>
            <img src="{{ asset('assets/images/Group171.svg') }}" alt="" class="img-fluid">
        </div>
    </div>
    <script src="{{ asset('assets/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/bootstrap/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/owl-carousel/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/vendors/aos/js/aos.js') }}"></script>
    <script src="{{ asset('assets/js/landingpage.js') }}"></script>
</body>

</html>
