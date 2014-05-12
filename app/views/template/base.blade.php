<!DOCTYPE html>
<html lang="en-gb">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="{{ URL::asset('img/logo.png') }}">

    <title>eTrack {{{ isset($pageTitle) ? '- '.$pageTitle : '' }}}</title>

    <link href="{{ URL::asset('assets/stylesheets/frontend.css') }}" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{ URL::asset('assets/javascript/ie.js') }}"></script>
    <![endif]-->
</head>

<body>
<div class="navbar navbar-default navbar-fixed-top" data-role="navigation">
    <div class="container">
        <div class="navbar-header">
            @if (Auth::check())
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#site-navigation">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            @endif
            <a class="navbar-brand" href="#">
                <img src="{{ URL::asset('assets/images/logo.png') }}"> eTrack
            </a>
        </div>

        <div class="collapse navbar-collapse" id="site-navigation">
            @if (Auth::check())
                @if (Auth::user()->role === "Admin")
                    <ul class="nav navbar-nav">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li><a href="{{ route('faculty.index') }}">Faculties</a></li>
                        {{--
                        <li><a href="{{ URL::to('subjectsectors/') }}">Subject Sectors</a></li>
                        <li><a href="{{ URL::to('courses/') }}">Courses</a></li>
                        <li><a href="{{ URL::to('units/') }}">Units</a></li>
                        <li><a href="{{ URL::to('users/') }}">Users</a></li>
                        --}}
                    </ul>
                @endif

                <ul class="nav navbar-nav navbar-right">
                    {{--<li><a href="{{ route('profile') }}">Your Profile</a></li>--}}
                    <li><a href="{{ URL::to('logout') }}">Logout</a></li>
                </ul>
            @endif
        </div>
    </div>
</div>

<div class="container">
    @yield('main')

    <div id="form-modal" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
            </div>
        </div>
    </div>
</div>

<footer>
    <div class="container">
        <hr>
        <p>&copy; Copyright 2014 City College Plymouth</p>
    </div>
</footer>

<script src="{{ URL::asset('assets/javascript/frontend.js') }}"></script>
@yield('scripts')
</body>
</html>