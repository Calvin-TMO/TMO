<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Calvin TMO</title>

    <!-- Fonts -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel='stylesheet' type='text/css'>

    <!-- Styles -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" rel="stylesheet">
    <link href="{{ URL::asset('css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/semantic-ui/semantic.min.css" />

    <style>
        body {
            font-family: 'Lato';
        }

        .fa-btn {
            margin-right: 6px;
        }
    </style>
</head>
<body id="app-layout">
    <nav class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>

                <!-- Branding Image -->
                <a class="navbar-brand" href="{{ url('/') }}">
                    Calvin TMO
                </a>
            </div>

            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    <li><a href="{{ url('/home') }}">Home</a></li>
                    <li><a href="{{ url('/assignments') }}">Assignments</a></li>
                    <li><a href="{{ url('/reports') }}">Reports</a></li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->
                    @if (Auth::guest())
                        <li><a href="{{ url('/login') }}">Login</a></li>
                        <li><a href="{{ url('/register') }}">Register</a></li>
                    @else
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                @if (Auth::user()->hasRole('admin'))
                                    <li><a href="{{ url('/users') }}"><i class="fa fa-btn"></i>Users</a></li>
                                    <li><a href="{{ url('/courses') }}"><i class="fa fa-btn"></i>Courses</a></li>
                                    <li><a href="{{ url('/evals') }}"><i class="fa fa-btn"></i>Tutor evaluations</a></li>
                                @endif
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
    
    @if (Session::has('success'))
        <div class="alert alert-success">
            {{ Session::get('success') }}
        </div>
    @endif
    @if (Session::has('error'))
        <div class="alert alert-danger">
            {{ Session::get('error') }}
        </div>
    @endif

    <!-- JavaScripts -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.4/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
    <script src="/semantic-ui/semantic.min.js"></script>
    <script src="/js/tablesort.js"></script>
    {{-- <script src="{{ elixir('js/app.js') }}"></script> --}}

    @yield('content')

    <script type="text/javascript">
        var table = $('.sortable.table').tablesort().data('tablesort');
        if ($("th.default-sort.asc")[0]) {
            // Passing in the sort type does not work for some reason, so we just sort twice
            table.sort($("th.default-sort.asc"));
            table.sort($("th.default-sort.asc"));
        } else if ($("th.default-sort.desc")[0]) {
            table.sort($("th.default-sort.desc"));
        }
    </script>
    <?php
        Session::forget('success');
        Session::forget('error');
    ?>
 
    <!--<div class="footer">
        <a href="https://laravel.com/">Powered by Laravel</a>
    </div>-->
</body>
</html>
