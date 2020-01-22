<html>
    <head>
        <title>laravel - @yield('title')</title>
    </head>
    <body>
        @section('sidebar')
           <header>
           <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
            <ul class="navbar-nav">
                <li class="nav-item active">
                <a class="nav-link" href="{{route('login')}}">log out</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="{{route('addInfo')}}">add information</a>
                </li>
                <li class="nav-item active">
                <a class="nav-link" href="{{route('addInfo')}}">view information</a>
                </li>    
            </ul>
            </nav>
           </header>
        @show

        <div class="container">
            @yield('content')
        </div>
    </body>
</html>