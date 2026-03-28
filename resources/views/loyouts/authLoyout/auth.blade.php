<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Giriş | {{ config('app.name', 'Laravel') }}</title>
    <link href="/template/static/css/app.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
    @unless (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        <link href="/vendor/sweetalert2/sweetalert2.min.css" rel="stylesheet">
    @endunless
</head>

<body>
    <main class="d-flex w-100">
        @yield('auth_content')
    </main>
    @if (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        @vite(['resources/js/pages/plugins.js', 'resources/js/pages/login.js'])
    @else
        <script src="/vendor/sweetalert2/sweetalert2.all.min.js"></script>
        <script src="/vendor/axios/axios.min.js"></script>
    @endif
    <script src="/template/static/js/app.js"></script>
    @unless (file_exists(public_path('build/manifest.json')) || file_exists(public_path('hot')))
        <script src="/js/auth-login.js"></script>
    @endunless
</body>

</html>
