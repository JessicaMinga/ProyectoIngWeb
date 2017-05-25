<?php include("../../resources/seguridad_u.php"); ?>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>


<nav class="navbar navbar-inverse navbar-fixed-top">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="home.php">Turismo Ecuador</a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    

      <ul class="nav navbar-nav navbar-right">
       <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"> <?php echo $_SESSION['usuarioactualu']; ?> <span class="caret"></span></a>
          <ul class="dropdown-menu" role="menu">

            <li><a href="../../resources/salir.php">salir</a></li>

           
          </ul>
        </li>
      </ul>
    </div>
  </div>
</nav>