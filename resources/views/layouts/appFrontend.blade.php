@extends('layouts.app')
@section('contentSys')
    <header>
        {{-- @include('layouts.partials.frontend.top_header') --}}
        @include('layouts.partials.frontend.navbar')
    </header>

{{-- Esta é a parte principal da aplicação --}}
    <main>
        <div class="">
            {{-- Aqui é a parte em que cham o corpo da aplicação --}}
            @yield('frontContents')
        </div>
    </main>

    <footer>
        @include('layouts.partials.frontend.footer')
    </footer>
@endsection
