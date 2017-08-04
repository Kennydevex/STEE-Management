@extends('layouts.app')
@section('contentSys')
    <header>
        @include('layouts.partials.frontend.navbar')
    </header>

    <div class="">
        @yield('frontContents')
    </div>

    <footer>
        @include('layouts.partials.frontend.footer')
    </footer>
@endsection
