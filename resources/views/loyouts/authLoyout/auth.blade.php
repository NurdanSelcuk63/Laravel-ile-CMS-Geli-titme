<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Giriş | {{ config('app.name', 'Laravel') }}</title>
    <link href="{{ asset('template/static/css/app.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
</head>

<body>
    <main class="d-flex w-100">
        @yield('auth_content')
    </main>
    <script src="{{ asset('template/static/js/app.js') }}"></script>
    <script src="{{ asset('js/auth-login.js') }}"></script>
</body>

</html>
