<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>@yield('title')</title>
    <style>
    
    @yield('style')
    
    </style>
</head>
<body>
    @yield('content')
</body>
</html>