<!DOCTYPE html>
<html lang="en">
<head>
  <title>HOME</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    
    /* Set height of the grid so .sidenav can be 100% (adjust as needed) */
    .row.content {height: 450px}
    
    /* Set gray background color and 100% height */
    .sidenav {
      padding-top: 20px;
      background-color: #123;
      height: 125%;
    }
    
    
    /* On small screens, set height to 'auto' for sidenav and grid */
    @media screen and (max-width: 767px) {
      .sidenav {
        height: auto;
        padding: 15px;
      }
      .row.content {height:auto;} 
    }
  </style>
</head>
<body>


<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" href="#">Gentlemans School</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="/">Inicio</a></li>
        <li class="active"><a href="home_a">Aluno</a></li>
        <li class="active"><a href="home_p">Professor</a></li>
        <li class="active"><a href="home_s">Secretaria</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class=""></span></a></li>
      </ul>
    </div>
  </div>
</nav>
  
<div class="container-fluid text-center">    
  <div class="row content">
    <div class="col-sm-2 sidenav">
    
    </div>
  
    <div class="col-sm-8 text-left"> 
      <h1>Bem vindo!</h1>
      <p>Bem vindos ao site da Gentlman's school!</p>
      <hr>
      <h3></h3>
      <p>Ambiente virtual onde o aluno acessa todas as informa????es sobre o Curso Gentlman's e seus servi??os.</p>
    </div>
    <div class="col-sm-2 sidenav">
    @if (Route::has('login'))
      @auth
      <p><a href="{{ url('/home') }}">Logout</a></p>
      @else
      <p><a href="{{ route('login') }}">Login</a></p>

    @endif
    @endauth

    
   
      </div>
    </div>
  </div>
</div>



</body>
</html>
