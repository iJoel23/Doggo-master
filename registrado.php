<?php
session_start();

if (!isset($_SESSION['user'])){
  // Terminamos o redirigimos con header location
  header("location:index.html");

}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mi Mascota S.A.</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="css/bootstrap.css">    
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans&display=swap" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<!--color de la empresa freepick: 1CBDE1 -->
</head>
<body>
    <header>
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                    <a class="navbar-brand" href="registrado.php"><img class="logo" src="img/dog-removebg-preview.png" alt="logo perro con gafas"></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                      <ul class="navbar-nav">
                        <li class="nav-item active">
                          <a class="nav-link" href="destroy.php">Salir<span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="">Productos</a>
                        </li>
                        <li class="nav-item">
                          <a class="nav-link" href="">Cita Previa</a>
                        </li>
                        <li class="nav-item">
                                <a class="nav-link" href="registromascota.php">Registro Mascota</a>
                        </li>
                      </ul>
                    </div>
            </nav>
    </header>
    <section>
      <div class="container my-5">
        <div class="row">
          <div class="col-md-6">
              <h2 class="pb-3">A Fresh Approach To Make A Great Item</h2>
              <P>Everything we do is designed, whether we're producing a magazine, a website, or bridge. Design is really the creative invention that designs everything.
      
      A designer knows he has achieve perfection not when there is nothing left to add.</P>
                  <br>
                <img src="img/dog-838281_1920.jpg" alt="perro mirando fijo" class="img-fluid">
      
          </div>
          <div class="col-md-6">
              <div class="row">
                  <div class="col-md-6">
                      <img src="img/iconos/search.png" class="img-fluid">
                      <h2 class="pt-3">Consultas</h2>
                      <p>Gold and silver, like other commodities have an intrinsic value, which is not.</p>
                  </div>
                  <div class="col-md-6">
                      <img src="img/iconos/car-first-aid-kit (1).png" class="img-fluid">
                      <h2 class="pt-3">Emergencia 24h</h2>
                      <p>Gold and silver, like other commodities have an intrinsic value, which is not.</p>
                  </div>
              </div>
              <div class="row">
                  <div class="col-md-6">
                      <img src="img/iconos/hospital.png" class="img-fluid">
                      <h2 class="pt-3">Hospitalizacion</h2>
                      <p>Gold and silver, like other commodities have an intrinsic value, which is not.</p>
                  </div>
                  <div class="col-md-6">
                      <img src="img/iconos/doctor-stethoscope.png" class="img-fluid">
                      <h2 class="pt-3">Operacion</h2>
                      <p>Gold and silver, like other commodities have an intrinsic value, which is not.</p>
                  </div>
              </div>
          </div>
        </div>
      </div>
      </section>
      <section>
          <div class="container">
              <div class="row customer-reviews">
                 <div class="col-md-6 column">
                  <div class="inner-box">
                    <h3><i class="fa fa-user"></i> Aronpro Customer <span class="verified">(Verified Purchase)</span></h3>
                    <p class="date">14 June</p>
                   <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipiscing elit rhoncus feugiat nunc in, tellus magna cras mi donec conubia luctus porttitor dictumst. Non per nulla dapibus scelerisque conubia rutrum ullamcorper hendrerit proin phasellus, potenti mi commodo facilisis urna sem sodales fermentum erat torquent, iaculis volutpat integer faucibus id pretium lacus dictum egestas. Scelerisque urna porta lacus lobortis habitasse primis conubia dignissim et, natoque leo erat rhoncus sollicitudin vivamus risus cubilia mi, auctor eleifend hac felis curae ullamcorper netus tristique.
                  </p>
                  </div>
                </div>
                <div class="col-md-6 column">
                  <div class="inner-box">
                    <h3><i class="fa fa-user"></i> Aronpro Customer <span class="verified">(Verified Purchase)</span></h3>
                    <p class="date">26 April</p>
                   <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipiscing elit rhoncus feugiat nunc in, tellus magna cras mi donec conubia luctus porttitor dictumst. Non per nulla dapibus scelerisque conubia rutrum ullamcorper hendrerit proin phasellus, potenti mi commodo facilisis urna sem sodales fermentum erat torquent, iaculis volutpat integer faucibus id pretium lacus dictum egestas. Scelerisque urna porta lacus lobortis habitasse primis conubia dignissim et, natoque leo erat rhoncus sollicitudin vivamus risus cubilia mi, auctor eleifend hac felis curae ullamcorper netus tristique.
                  </p>
                  </div>
                </div>  
      </section>
<footer>
      <section id="footer" class="bg-light">
        <div class="container">
          <div class="row text-center text-xs-center text-sm-left text-md-left">
            <div class="col-xs-12 col-sm-4 col-md-4">
              <br>
              <h5>About Us</h5>
              <ul class="list-unstyled quick-links">
                <li><a href="registrado.php">Home</a></li>
                <li><a href="javascript:void();">Contactenos</a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <br>
              <h5>Registro</h5>
              <ul class="list-unstyled quick-links">
                <li><a href="login.html">Inicia Sesion</a></li>
                <li><a href="registro.html">Registrate</a></li>
              </ul>
            </div>
            <div class="col-xs-12 col-sm-4 col-md-4">
              <br>
              <h5>Legal</h5>
              <ul class="list-unstyled quick-links">
                <li><a href="javascript:void();"></i>Politica de privacidad</a></li>
                <li><a href="javascript:void();"></i>Politica de cookies</a></li>
              </ul>
            </div>
          </div>
          <div class="row">
            </hr>
          </div>	
        </div>
      </section>
    </footer>
</body>
</html>