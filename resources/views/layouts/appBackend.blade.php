@extends('layouts.app')
@push('styles')
<style>
.stee-navegation{
  padding-left: 20px;
}

main{
  padding: 20px;
}
</style>

@endpush

@section('contentSys')
  <header id="stee-header">
    {{-- =========================Top Navbar================================ --}}
    <div class="stee-topnav">
      @include('layouts.partials.backend.top_nav')
    </div>
    {{-- =================================================================== --}}
  </header>
  
  <main id="stee-main"  >
    {{-- ==========================Sidebar================================= --}}
    <div class="stee-sidenav m3">
      @include('layouts.partials.backend.side_nav')
    </div>
    {{-- ================================================================== --}}
    
    {{-- ==========================Content================================= --}}
    <div class="stee-content m9 gray">
      @yield('backContents')
    </div>
    {{-- ================================================================== --}}
  </main>
  
  <footer id="stee-footer">
    <div class="stee-footer">
      @include('layouts.partials.backend.footer')
    </div>
  </footer>
@endsection

@push('scripts')
  <script>
  $(document).ready(function() {
    // ====================Recursos de Materialize==============================
    $(".dropdown-button").dropdown();
    $(".button-collapse").sideNav();
    $('.collapsible').collapsible();
    $('ul.tabs').tabs({
      swipeable : true,
      responsiveThreshold : 1920
    });
    //==========================================================================
  });
  </script>
@endpush
