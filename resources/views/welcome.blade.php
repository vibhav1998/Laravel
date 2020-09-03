<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Project</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

    <link href="{{ asset('css/app.css') }}" rel="stylesheet">


    <!-- Styles -->
    <style>
    html,
    body: {
        margin: 0;
        box-sizing: border-box;
        padding: 0;
    }
    
  
.centered div{
    margin-top: 7rem;
    text-align:center;
}
.centered div h1{
    font-weight: bold;
}
.centered div p{
    font-size: 1.2rem;
    margin: 0px 3rem;
}
    </style>
</head>

<body>
    <nav class="navbar fixed navbar-expand-lg navbar-dark bg-default">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03"
            aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">Project</a>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
            <ul class="font-weight-bold navbar-nav mr-auto mt-2 mt-lg-0">
                @if (Route::has('login'))
                @auth
                <li class="nav-item active">
                    <a class="nav-link" href="{{ url('/home') }}">Home <span class="sr-only">(current)</span></a>
                </li>
                @else
                <li class="nav-item">
                    <a class="nav-link " href="{{ route('login') }}">Login</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">Register</a>
                </li>
                @endif
                @endauth
            </ul>
            @endif
        </div>
    </nav>
    <div>
    <div class="centered">
    <div>
    <h1>Welcome To This Project</h1>
    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Cupiditate doloremque non rerum! Autem modi error labore placeat id consectetur ipsum natus dolore quisquam! Cumque quisquam, deleniti sapiente recusandae non illo eveniet, esse fuga, distinctio nam facere placeat blanditiis! Tempora ipsum ut voluptatem veritatis praesentium ex, commodi sapiente voluptatum aliquam hic.</p>
    <button type="button" class="mt-2 btn btn-danger">About</button>
    </div>
    </div>
    </div>
</body>

</html>
