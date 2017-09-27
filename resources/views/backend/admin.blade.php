@extends('layouts.appBackend')

@section('title', 'Admin')
@push('styles')
<style>
.stee-head-features{
  margin: 8px;
}
.stee-head-features-item{
  margin: 4px;
  padding: 20px;
}
</style>
@endpush

@section('backContents')
  {{-- ================================Content=========================== --}}
  {{-- <div class="row stee-head-features center">
  
  <div class="col m4 red stee-head-features-item">
  <div class="row">
  <div class="col m2">
  <i class="fa fa-users" aria-hidden="true"></i>
</div>

<div class="colm10">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
</div>
</div>
</div>

<div class="col m4 blue stee-head-features-item">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
</div>

<div class="col m4 green stee-head-features-item">
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt </p>
</div>

</div> --}}
{{-- ================================================================== --}}
@yield('components')
@endsection

@push('scripts')
  
@endpush
