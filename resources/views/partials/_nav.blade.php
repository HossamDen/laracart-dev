
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Logo</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="{{ setActivePage('home') }}"><a href="{{ route('home') }}">Home</a></li>
        <li class="{{ setActivePage('about-us') }}"><a href="{{ route('about-us') }}">About</a></li>
        <li><a href="#">Artisans</a></li>
        <li><a href="https://github.com/HossamDen/laracart-dev">Planets</a></li>
        <li class="{{ setActivePage('about-us') }}"><a href="{{ route('contact-us') }}">Contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Registre</a></li>
      </ul>
    </div>
  </div>
</nav>