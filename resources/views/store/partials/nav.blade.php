
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand main-title" href="{{route('index')}}">CartShop</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
<div class="collapse navbar-collapse justify-content-end" id="navbarColor01">

    <ul class="navbar-nav pull-xs-right">
    <li class="nav-item active">
      <li class="nav-item ">
        <a class="nav-link " href="{{route('index')}}">Catalogo</a>
      </li>
        <a class="nav-link" href="{{route('cart-show')}}"> <span class="fa fa-shopping-cart"></span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">informate</a>
      </li>
      <li class="nav-item t">
        <a class="nav-link" href="#">Contactanos</a>
      </li>
    </ul>
    @guest
        <div class="dropdown active">

            <button class="btn btn-secondary dropdown-toggle fa fa-user " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </button><span class="caret"></span>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                <li><a class="dropdown-item" href="{{ route('login') }}">Iniciar Sesion</a></li>
                @if (Route::has('register'))
                    <li><a class="dropdown-item" href="{{ route('register') }}">Registrarse</a></li>
                @endif
                @else

                    @if(Auth::user()->rol_id == 2 &  3)

                            <a class="btn btn-success" href= "{{ url('user') }}">  <i class="fa fa-users" style="font-size:18px"></i> USUARIOS </a>



                    @endif
                    @if(Auth::user()->rol_id == 2 & 3)

                            <a  class="btn btn-success" href= "{{ url('roles') }}">  <i class="fa fa-user-tag" style="font-size:18px"></i> ROLES </a>

                    @endif

                        @if(Auth::user()->rol_id == 2 & 3)

                            <a  class="btn btn-success" href= "{{ url('categorias') }}">  <i class="fa fa-at" style="font-size:18px"></i> CATEGORIAS </a>

                        @endif


                        <div class="nav-item dropdown">
                        <button id="dropdownMenuButton"  class="btn btn-light dropdown-toggle fa fa-user" style="font-size:18px" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} </button> <span class="caret"></span>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">

                                {{ __('Cerrar Sesíon') }}

                                <i class="fa fa-sign-out-alt" style="font-size:18px"></i>

                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </div>
                @endguest
        
    </div>
</div>

</div>
</nav>

