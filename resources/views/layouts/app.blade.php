<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>

    {{-- ======================================================================= --}}
    @include('layouts.partials.general.htmlhead')
    {{-- ======================================================================= --}}
    @stack('styles')
    {{-- ======================================================================= --}}

</head>
<body id="app">

    {{-- ======================================================================= --}}
    {{-- Aqui apresenta-se o corpo principal da aplicação --}}
    @yield('contentSys')
    {{-- ======================================================================= --}}
    @include('layouts.partials.general.scripts')
    @stack('scripts')
    {{-- ======================================================================= --}}
    {{-- Esta vista é o responsavel por apresentar as alertas do sistema --}}
    @include('alertify::alertify')
    {{-- ======================================================================= --}}

</body>
</html>
