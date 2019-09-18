<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ isset($metaTitle) ? $metaTitle . ' - ' : null }}{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">

    <!-- Styles -->
    <link href="{{ causewayAsset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('vendor/laraberg/css/laraberg.css')}}">
    <link rel="stylesheet" href="{{asset('css/exdeliver.css')}}">
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    @stack('topscripts')
</head>
<body>
<div id="app">
    <div id="exdeliver-app">
        @include('site::layouts.partials._cookie')
        @include('site::layouts.partials._navigation')

        <main class="py-4">
            @if(!request()->is('/') || !request()->is('/home'))
                @include('site::layouts.partials._breadcrumbs')
            @endif
            <div id="exdeliver-content">
                @yield('content')
            </div>
        </main>

        <section class="footer_area" id="exdeliver-footer">
            @include('site::layouts.partials._footer')
        </section>
    </div>
</div>
<!-- Scripts -->
<script src="/js/lang.js"></script>
<script src="{{ causewayAsset('js/app.js') }}"></script>
<script src="{{ causewayAsset('js/website.js') }}"></script>
<script src="{{ causewayAsset('js/datatables.min.js') }}"></script>
<script src="{{ asset('js/exdeliver.js') }}"></script>
@stack('headerScripts')
@stack('scripts')
</body>
</html>
