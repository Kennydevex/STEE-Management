<div class="nav-wrapper z-depth-4">
    <nav  class="blue" id="nav_bar">
        <div class="nav-wrapper container">
            <a href="#!" class="brand-logo white-text">{{ config('app.name', 'Laravel') }}</a>
            <a href="#" data-activates="mobile-demo" class="button-collapse blue-text white-text"><i class="fa fa-bars fa-2x"></i></a>
            <ul class="right hide-on-med-and-down white-text">
                <li><a class="white-text waves-effect waves-teal" href="#">EMPRESA</a></li>
                @if (Route::has('login'))
                    @auth
                        
                        
                        {{-- Aqui esta um exemplo de como é que vamos implementar a função dos utilizadores em 
                        Frontend
                        --}}
                        {{-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm --}}
                        @role('Admin') {{-- Laravel-permission blade helper --}}
                        <li><a class="white-text waves-effect waves-teal" href="{{ url('/admin') }}">Teste</a></li>
                        @endrole
                        {{-- mmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmmm --}}
                        
                        
                        
                        
                        <li><a class="white-text waves-effect waves-teal" href="{{ url('/admin') }}">HOME</a></li>
                    @else
                        <li><a class="white-text waves-effect waves-teal" href="{{ route('login') }}">ENTRAR</a></li>
                        <li><a class="white-text waves-effect waves-teal" href="{{ route('register') }}">REGISTAR</a></li>
                    @endauth
                @endif
            </ul>
            <ul class="side-nav teal" id="mobile-demo">
                <li><a class="white-text waves-effect waves-teal" href="#">EMPRESA</a></li>
                @if (Route::has('login'))
                    @auth
                        <li><a class="white-text waves-effect waves-teal" href="{{ url('/admin') }}">HOME</a></li>
                    @else
                        <li><a class="white-text waves-effect waves-teal" href="{{ route('login') }}">ENTRAR</a></li>
                        <li><a class="white-text waves-effect waves-teal" href="{{ route('register') }}">REGISTAR</a></li>
                    @endauth
                @endif
            </ul>
        </div>
    </nav>
</div>
