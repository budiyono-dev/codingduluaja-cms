<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Codingduluaja CMS</title>
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<body class="font-sans antialiased dark:bg-black dark:text-white/50">
    @yield('main')
</body>
</html>
