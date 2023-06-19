<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Login</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/dist/css/tabler.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-flags.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-payments.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/tabler-vendors.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/dist/css/demo.min.css') }}" rel="stylesheet" />
    <style>
        @import url('https://rsms.me/inter/inter.css');

        :root {
            --tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
        }

        body {
            font-feature-settings: "cv03", "cv04", "cv11";
        }
    </style>
</head>

<body class=" d-flex flex-column bg-white">
    <script src="{{ asset('assets/dist/js/demo-theme.min.js') }}"></script>
    <div class="row g-0 flex-fill">
        <div class="col-12 col-lg-6 col-xl-4 border-top-wide border-primary d-flex flex-column justify-content-center">
            <div class="container container-tight my-5 px-lg-5">
                <div class="text-center mb-4">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img
                            src="{{ asset('assets/static/arsip2.png') }}" height="50" alt=""></a>
                </div>
                <h2 class="h3 text-center mb-3">
                    Login to your account
                </h2>
                <form action="{{ route('postlogin') }}" method="post" autocomplete="off">
                    {{ csrf_field() }}
                    <div class="mb-3">
                        <label class="form-label">Email address</label>
                        <input type="email" class="form-control" name="email" placeholder="your@email.com"
                            autocomplete="off">
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="mb-2">
                        <label class="form-label">Password</label>
                        <div class="input-group input-group-flat">
                            <input type="password" class="form-control" name="password" id="myInput"
                                placeholder="Your password" autocomplete="off">
                            @if (session()->has('message'))
                                <div class="alert alert-success">
                                    {{ session('message') }}
                                </div>
                            @endif
                            <span class="input-group-text">
                                <a href="#" class="link-secondary" title="Show password" data-bs-toggle="tooltip"
                                    onclick="myFunction()">
                                    {{--  {{--  <!-- Download SVG icon from http://tabler-icons.io/i/eye -->  --}}
                                    <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                                        viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                                        stroke-linecap="round" stroke-linejoin="round">
                                        <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                        <path d="M10 12a2 2 0 1 0 4 0a2 2 0 0 0 -4 0" />
                                        <path
                                            d="M21 12c-2.4 4 -5.4 6 -9 6c-3.6 0 -6.6 -2 -9 -6c2.4 -4 5.4 -6 9 -6c3.6 0 6.6 2 9 6" />
                                    </svg>
                                </a>
                            </span>
                        </div>
                    </div>
                    <div class="mb-2">
                    </div>
                    <div class="form-footer">
                        <button type="submit" class="btn btn-primary w-100">Log in</button>
                        @if (session()->has('message'))
                            <div class="alert alert-success">
                                {{ session('message') }}
                            </div>
                        @endif
                    </div>
                </form>
            </div>
        </div>
        <div class="col-12 col-lg-6 col-xl-8 d-none d-lg-block">
            <!-- Photo -->
            <div class="bg-cover h-100 min-vh-100" style="background-image: url(./assets/static/photos/arsip.jpg)">
            </div>
        </div>
    </div>
    <!-- Libs JS -->
    <!-- Tabler Core -->
    <script src="{{ asset('assets/js/script.js') }}"></script>
    <script src="{{ asset('assets/dist/js/tabler.min.js') }}" defer></script>
    <script src="{{ asset('assets/dist/js/demo.min.js') }}" defer></script>
</body>

</html>
