@extends('layouts.appFrontend')

@section('title', 'Autenticar')

{{-- Estilo exclusivo da pagina de login --}}
@push('styles')


<style media="screen">
body{
  background-color: #e0e0e0;
}

#k2{
  padding: 25px;
}

.div-footer{

}

</style>
@endpush

{{-- Esta parte contera o formulario de login da aplicacao --}}
@section('frontContents')
  <div class="container">
    <div class="row"></div>
    <div class="row">
      <div class="col s12 m6 offset-m3">
        <h4 class="center blue-text">STEE</h4>
      </div>
    </div>
    <div class="row">
      <div id="k2" class="col s12 m4 offset-m4 z-depth-3 grey lighten-5">
        <h6 class="center blue-text">AUTENTICAR</h6>

          <div class="row">
            <form class="col s12" method="POST" action="{{ route('login') }}">
              {{ csrf_field() }}

              <div class="row"></div>
              <div class="row">
                <div class="input-field col s12">
                  <input id="email" type="email" name="email" class="validate" value="{{ old('email') }}" required>
                  <label for="last_name">Introduza o seu Email</label>
                </div>

                <div class='input-field col s12'>

                  <input class='validate' type='password' name='password' id='password' required/>
                  <label for='password'>Introduza o seu Password</label>
                  @if ($errors->has('password'))
                    <span class="help-block">
                      <strong>{{ $errors->first('password') }}</strong>
                    </span>
                  @endif
                </div>
              </div>

              <div class="row">
                <div class="col s12">
                  <div class="row">
                    <div class="col s6 right">
                      <button class="btn waves-effect waves-light right" type="submit" name="login">Entrar</button>
                    </div>
                    <div class="col s6 left">
                      <input type="checkbox" id="test5" />
                      <label for="test5">Manter</label>
                    </div>
                  </div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>

    </div>
  @endsection

  @push('scripts')

    <script>
    $(document).ready(function() {
      Materialize.updateTextFields();
    });

    </script>


  @endpush
