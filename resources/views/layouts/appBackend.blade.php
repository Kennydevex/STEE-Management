@extends('layouts.app')
@section('contentSys')
  @push('styles')
  <style>
  .stee-navegation{
    padding-left: 20px;
  }


  </style>
@endpush
<header id="stee-header">
  {{-- =========================Top Navbar================================ --}}
  <div class="stee-topnav">
    @include('layouts.partials.backend.top_nav')
  </div>
  {{-- =================================================================== --}}
</header>

<main id="stee-main">
  {{-- ==========================Sidebar================================= --}}
  <div class="stee-sidenav">
    @include('layouts.partials.backend.side_nav')
  </div>
  {{-- ================================================================== --}}

  {{-- ==========================Content================================= --}}
  <div class="stee-content">
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
    //==========================================================================
  });
  </script>
@endpush
