<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge"/>
    <title>Laravel</title>
    <!-- CSS files -->
    <link href="{{ asset('assets/dist/css/tabler.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/tabler-flags.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/tabler-payments.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets//dist/css/tabler-vendors.min.css') }}" rel="stylesheet"/>
    <link href="{{ asset('assets/dist/css/demo.min.css') }}" rel="stylesheet"/>
    <style>
      @import url('https://rsms.me/inter/inter.css');
      :root {
      	--tblr-font-sans-serif: 'Inter Var', -apple-system, BlinkMacSystemFont, San Francisco, Segoe UI, Roboto, Helvetica Neue, sans-serif;
      }
      body {
      	font-feature-settings: "cv03", "cv04", "cv11";
      }
    </style>
    @livewireStyles
  </head>
  <body >
    <script src="{{ asset('assets/dist/js/demo-theme.min.js') }}"></script>
    <div class="page">
      <!-- Sidebar -->
      @include('template.inc.sidebar')
      <div class="page-wrapper">
        <!-- Page header -->
        @include('template.inc.header')
        <!-- Page body -->
        <div class="container-xl">
                    {{ $slot }}
        </div>
       @include('template.inc.body')
        @include('template.inc.footer')
      </div>
    </div>
    @include('template.inc.menu')
    <!-- Libs JS -->

    <script src="{{ asset('assets/dist/js/tabler.min.js') }}" defer></script>
     @livewireScripts
  </body>
</html>
