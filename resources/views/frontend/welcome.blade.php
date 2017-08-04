<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.partials.head')
<body>

    <div class="">
        <header>
            <div class="navbar-fixed">
                <nav  class="red">
                    <div class="nav-wrapper">
                        <a href="#!" class="brand-logo">Logo</a>
                        <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="fa fa-bars fa-2x"></i></a>
                        <ul class="right hide-on-med-and-down">
                            <li><a href="sass.html">Sass</a></li>
                            <li><a href="badges.html">Components</a></li>
                            <li><a href="collapsible.html">Javascript</a></li>
                            <li><a href="mobile.html">Mobile</a></li>
                            @if (Route::has('login'))
                                @auth
                                    <li><a href="{{ url('/home') }}">Home</a></li>
                                @else
                                    <li><a href="{{ route('login') }}">Login</a></li>
                                    <li><a href="{{ route('register') }}">Register</a></li>
                                @endauth
                            @endif

                        </ul>
                        <ul class="side-nav" id="mobile-demo">
                            <li><a href="sass.html">Sass</a></li>
                            <li><a href="badges.html">Components</a></li>
                            <li><a href="collapsible.html">Javascript</
                                @if (Route::has('login'))
                                    @auth
                                        <li><a href="{{ url('/home') }}">Home</a></li>
                                    @else
                                        <li><a href="{{ route('login') }}">Login</a></li>
                                        <li><a href="{{ route('register') }}">Register</a></li>
                                    @endauth
                                @endif
                            </ul>
                        </div>
                    </nav>
                </div>
            </header>
        </div>
        @include('layouts.partials.scripts')
        <script type="text/javascript">
        $('.button-collapse').sideNav({
            menuWidth: 200, // Default is 300
            edge: 'right', // Choose the horizontal origin
            closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true,
        }
    );

    </script>
</body>
</html>
