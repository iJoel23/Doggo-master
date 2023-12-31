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
              </ul>
            </div>
    </nav>
</header>
    <section>
            <div class="container my-5">
            <form class="needs-validation" novalidate action="registromascota2.php" method="POST">

                <div class="form-row">
                        <div class="form-group col-md-6">
                          <label for="inputEmail4">Nombre</label>
                          <input type="text" class="form-control" id="inputEmail4" placeholder="Nombre" name="nombre">
                        </div>
                        <div class="form-group col-md-6">
                          <label for="inputPassword4">Raza</label>
                          <select class="form-control" id="inputPassword4" name="raza">
                              <optgroup Label="Caninos">Caninos
                              <option value="0">Golden Retriever</option>
                              <option value="1">Pug</option>
                              <option value="2">Labrador</option>
                            </optgroup>
                          </select>
                        </div>
                      </div>
                      <div class="form-row">
                            <div class="form-group col-md-6">
                              <label for="inputEmail4">Fecha de Nacimiento</label>
                              <input type="date" class="form-control" id="inputEmail4" placeholder="date" name="date">
                            </div>
                            <div class="form-group col-md-6">
                              <label for="inputPassword4">Chip</label>
                              <input type="text" class="form-control" id="inputPassword4" placeholder="15 digits" name="chip" maxlength="15">
                            </div>
                          </div>
                <button class="btn btn-primary" type="submit">Submit form</button>
              </form>
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
                  <li><a href="javascript:void();">Home</a></li>
                  <li><a href="javascript:void();">Contactenos</a></li>
                </ul>
              </div>
              <div class="col-xs-12 col-sm-4 col-md-4">
                <br>
                <h5>Registro</h5>
                <ul class="list-unstyled quick-links">
                  <li><a href="javascript:void();">Inicia Sesion</a></li>
                  <li><a href="javascript:void();">Registrate</a></li>
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
              <div class="col-xs-12 col-sm-12 col-md-12 mt-2 mt-sm-2 text-center">
                
              </div>
              </hr>
            </div>	
          </div>
        </section>
      </footer>
  </body>
  </html>