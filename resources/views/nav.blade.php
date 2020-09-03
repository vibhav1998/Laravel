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