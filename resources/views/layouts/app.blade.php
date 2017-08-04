<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('layouts.partials.general.htmlhead')
<body>
    @yield('contentSys')
    @include('layouts.partials.general.scripts')
</body>
</html>
