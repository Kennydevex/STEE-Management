@extends('layouts.appFrontend')

@push('styles')
    <link rel="stylesheet" href="{{ mix('/css/frontend/frontend.css') }}">
@endpush

@section('frontContents')
    <section>
        <div class="row">
            <div class="col s12">
                @include('layouts.partials.frontend.slider')
            </div>
        </div>
        <div class="row">
            <div class="col s12">
                {{-- @include('layouts.partials.frontend.parallax') --}}
            </div>
        </div>
    </section>
    <div class="">
        <h1>Hello</h1>
    </div>
@endsection

@push('scripts')

    <script>
    $(document).ready(function() {
        $(".dropdown-button").dropdown();
        $('.button-collapse').sideNav({
            menuWidth: 200, // Default is 300
            edge: 'left', // Choose the horizontal origin
            closeOnClick: false, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: true,
        });
        $('.slider').slider();
        $('.parallax').parallax();

    });




    </script>

@endpush
