<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

     <!-- Icons -->
     <link href="{{ asset('css/nucleo-icons.css')}}" rel="stylesheet">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">

    <!-- Theme CSS -->
    <link type="text/css" href="{{ asset('css/argon-design-system.min.css')}}" rel="stylesheet">


    <title>@yield('title')</title>
    <style>
    
    @yield('style')
    
    </style>
</head>
<body>
    @yield('content')
</body>
</html>