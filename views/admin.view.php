<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
  <!--<script src="js/jquery-3.5.1.js"></script>-->
  <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/603f27fb7e.js"></script>
  <link rel="stylesheet" type="text/css" href="css\estilos.css">
  <script type="text/javascript" src="js/index.js"></script>

  <title>Cremería, San Pedro!</title>
</head>

<body>

  <div class="container">

    <nav class="navbar navbar-expand-lg navbar-light bg-light">

      <div class="container-fluid">
        <a class="navbar-brand" href="#">Cremería & Abarrotes San Pedro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link active" aria-current="page" href="#">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="">Productos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="load.php">Carga</a>
            </li>

          </ul>
        </div>
      </div>
    </nav>


    <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="1"></li>
        <li data-bs-target="#carouselExampleDark" data-bs-slide-to="2"></li>
      </ol>
      <div class="carousel-inner">
        <div class="carousel-item active" data-bs-interval="5000">
          <img src="img\img1.jpeg" class="carusel" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Abarrotes</h5>
            <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="img\img2.jpeg" class="carusel" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Lacteos</h5>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
          </div>
        </div>
        <div class="carousel-item" data-bs-interval="5000">
          <img src="img\img3.jpg" class="carusel" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Salchichonería</h5>
            <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
          </div>
        </div>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleDark" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleDark" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>

    <br>


    <div class="row">

      
        <?php foreach ($fotos as $foto) : ?>
        
          <div class="col-6 col-lg-3">
          <img src="img/<?php echo $foto['Ruta'] ?>" alt="">

          <div class="col-lg-12">
          <p><?php echo $foto['nombre']." "."$".$foto['precio']?></p>
          </div>
         


         
          </div>

         
          
          
       

        <?php endforeach; ?>
      






    </div>
    <br>
    <div class="paginacion">

      <?php if ($pagina_actual > 1) : ?>
        <a href="admin.php?p=<?php echo $pagina_actual - 1; ?>"><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
      <?php endif ?>

      <?php if ($total_paginas != $pagina_actual) : ?>
        <a href="admin.php?p=<?php echo $pagina_actual + 1; ?>">Página Siguiente <i class="fa fa-long-arrow-right"></i> </a>
      <?php endif ?>

      <!-- <a href=""><i class="fa fa-long-arrow-left"></i> Página Anterior</a>
      <a href="">Página Siguiente <i class="fa fa-long-arrow-right"></i> </a> -->
    </div>


    <br>

    <div class="row">

    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1881.507448623678!2d-99.27792614127803!3d19.411762300000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85d2014d1b8b43b1%3A0x8559e3e121485027!2sCremer%C3%ADa%20y%20Abarrotes%20San%20Pedro!5e0!3m2!1ses!2smx!4v1613146914600!5m2!1ses!2smx" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    
    </div>

    <br>

    <h5 class="Black-text">¿Quieres hacer tu pedido?</h5>


    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST" class="">

      <div class="col-lg-12">
        <label for="nombre" class="form-label"> Nombre:</label>
        <input id="nombre" type="text" name="nombre" class="form-control">

      </div>
      <br>

      <div class="col-lg-12">
        <label for="email" class="form-label">Email</label>
        <input id="email" name="correo" type="email" class="form-control">

      </div>
      <br>
      <div class="col-lg-12">
        <label for="icon_telephone" class="form-label">Teléfono</label>
        <input id="icon_telephone" type="tel" name="telefono" class="form-control">

      </div>
      <br>

      <div class="col-lg-12">
        <label for="comentario" class="form-label">Pedido</label>
        <input id="comentario" type="text" name="comentario" class="form-control">

      </div>

      <br>

      <div class="col-lg-12">
        <label for="direccion" class="form-label">Dirección</label>
        <input id="direccion" type="text" name="direccion" class="form-control">

      </div>

      <br>

      <button class="btn btn-primary" type="submit" name="action">Enviar

      </button>



    </form>


    <br>

    <br>

    <a class="btn btn-success" href="https://wa.me/525545331584?text=Buen%20día%20Luis%20este%20es%20mi%20pedido:">Contacto - WhatsApp</a>


    <br>


  </div>







  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>