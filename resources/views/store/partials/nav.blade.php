<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <a class="navbar-brand main-title" href="{{route('home')}}">CarShop</a>
   <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  
<div class="collapse navbar-collapse justify-content-end" id="navbarColor01">

    <ul class="navbar-nav pull-xs-right">
    <li class="nav-item active">
      <li class="nav-item ">
        <a class="nav-link " href="#">My Laravel Store</a>
      </li>
        <a class="nav-link" href="{{route('cart-show')}}"> <span class="fa fa-shopping-cart"></span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href="#">Conocenos</a>
      </li>
      <li class="nav-item t">
        <a class="nav-link" href="#">Contactanos</a>
      </li>
<div class="dropdown active">
    <button class="btn btn-secondary dropdown-toggle fa fa-user " type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
    </button><span class="caret"></span>
    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
        <li><a class="dropdown-item" href="#">Iniciar Sesion</a></li>
        <li><a class="dropdown-item" href="#">Registrarse</a></li>
        
    </div>
</div>

</div>
</nav>

