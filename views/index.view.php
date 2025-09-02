<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push({
        'gtm.start': new Date().getTime(),
        event: 'gtm.js'
      });
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PWT2JT42');
  </script>
  <!-- End Google Tag Manager -->

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  <!-- Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Merriweather:ital,opsz,wght@0,18..144,300..900;1,18..144,300..900&family=Saira:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

  <script src="https://use.fontawesome.com/603f27fb7e.js"></script>

  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="fontello-a540fdbf/css/fontello.css">

  <title>Clean-Up, Servicio de Limpieza!</title>

</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-PWT2JT42"
      height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <div class="container">

    <nav class="navbar navbar-expand-lg bg-light navbar-light mb-4">
      <div class="container-fluid">
        <!-- LOGO + Título -->
        <a class="navbar-brand d-flex align-items-center" href="#">
          <img
            src="img/Logo_Clean.webp"
            alt="Logo"
            width="40"
            height="55"
            class="d-inline-block align-text-top me-2 logo">
          <span class="merriweather-bold">Servicio Comercial &amp; Residencial</span>
        </a>

        <!-- Botón toggler para mobile -->
        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavDropdown"
          aria-controls="navbarNavDropdown"
          aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links de navegación -->
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link merriweather-regular" href="#Alfombras">Alfombras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link merriweather-regular" href="#Salas">Salas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link merriweather-regular" href="#Autos">Vestiduras de Autos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link merriweather-regular" href="#Colchones">Colchones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link merriweather-regular" href="#Contacto">Contacto</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="privacy-policy.php">Aviso de Privacidad</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="row justify-content-md-center box">
      <div class="col-sm-12 col-md-8">

        <div id="carouselExampleDark" class="carousel carousel-dark slide">
          <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="3" aria-label="Slide 4"></button>
          </div>
          <div class="carousel-inner">
            <div class="carousel-item active" data-bs-interval="10000">

              <picture>
                <source media="(min-width: 769px)" srcset="img/Salas/SalaPc.svg">
                <img src="img\Salas\SalaM.svg" class="d-block w-100" alt=" ...">
              </picture>

              <div class="carousel-caption d-none d-md-block">
                <h5 class="merriweather-bold">Limpieza de Salas</h5>
              </div>
            </div>
            <div class="carousel-item" data-bs-interval="2000">
              <picture>
                <source media="(min-width: 769px)" srcset="img/Alfombra/AlfombraPc.svg">
                <img src="img\Alfombra\AlfombraG.svg" class="d-block w-100" alt=" ...">
              </picture>

              <div class="carousel-caption d-none d-md-block">
                <h5 class="merriweather-bold">Limpieza de Alfombras</h5>
                
              </div>
            </div>
            <div class="carousel-item">
              <picture>
                <source media="(min-width: 769px)" srcset="img/Vestiduras/AutoPc.svg">
                <img src="img\Vestiduras\Auto_Carousel.svg" class="d-block w-100" alt="...">
              </picture>

              <div class="carousel-caption d-none d-md-block">
                <h5 class="merriweather-bold">Limpieza de Vestiduras</h5>
                
              </div>
            </div>

            <div class="carousel-item">
              <picture>
                <source media="(min-width: 769px)" srcset="img/Colchones/ColchonPc.svg">
                <img src="img\Colchones\Colchon.svg" class="d-block w-100" alt="...">
              </picture>

              <div class="carousel-caption d-none d-md-block">
                <h5 class="merriweather-bold">Limpieza de Colchones</h5>
                
              </div>
            </div>
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleDark" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>

    </div>

    <div class="row  justify-content-md-center box">

      <div class="col-sm-6 col-md-5 card text-center">
        <h2 class="merriweather-bold">Misión</h2>
        <p class="merriweather-regular">
          Clean Up tiene el firme propósito de lograr la satisfacción de sus clientes, proporcionándoles servicios especializados de limpieza, con altos niveles de calidad.
        </p>
      </div>

      <div class="col-sm-6 col-md-5 card text-center">
        <h2 class="merriweather-bold">Valores</h5>

          <p class="merriweather-regular">Puntualidad: Estamos convencidos que el tiempo es un recurso invaluable, por esta razón nuestro objetivo será llegar siempre a tiempo a nuestra cita.</p>
          <p class="merriweather-regular">Responsabilidad: Comprometidos en conservar en buen estado sus pertenencias.</p>


      </div>

    </div>

    <div class="row justify-content-md-center box">
      <div class="col-sm-12 col-md-10 card ">
        <h2 class="merriweather-bold center">Ubicaciones: </h5>
          <p class="merriweather-regular">León, Irapuato, Querétaro & CDMX</p>
      </div>
    </div>

    <div class="row justify-content-md-center box">

      <div class="col-sm-12 col-md-10 ">



        <iframe class="mapa" src="https://www.google.com/maps/d/embed?mid=15z1_1HBzmhQETtI4RfborIVkM1dq8lc&ehbc=2E312F&noprof=1" width="640" height="480"></iframe>

      </div>

    </div>

    <div class="row justify-content-md-center box">
      <div class="col-sm-12 col-md-10 card">
        <h2 class="merriweather-bold">Servicios:</h5>
      </div>
    </div>

    <div class="row justify-content-md-center box">

      <div class="col-sm-12 col-md-5 card">

        <div class="row">
          <h5 class="merriweather-bold center" id="Salas">Limpieza de Salas & Sillas</h5>
          <p class="merriweather-regular">✨ ¡No cambies tu sala, TRANSFÓRMALA! ✨
            ¿Esa mancha de café te persigue? ¿El pelo de tu mascota ya es parte de la decoración? 🤔
            Tu sala es el corazón de tu hogar, pero el uso diario, el polvo y los accidentes la desgastan. Con nuestro servicio profesional de limpieza de salas, eliminamos a fondo:

            ✅ Ácaros, polvo y alérgenos que afectan tu salud.
            ✅ Malos olores, dejando un aroma a limpio y fresco.
            ✅ Suciedad acumulada que opaca los colores.
            Utilizamos un sistema de inyección-succión que limpia las fibras desde adentro hacia afuera, sin dañar la tela.
            ¡Dale una segunda vida a tus muebles! 👇 

        </div>

      </div>

      <div class="col-sm-12 col-md-5">

        <div id="carouselSalas" class="carousel slide">

          <div class="carousel-inner">

            <div class="carousel-item active">

              <img src="img\Salas\SalaGiu.svg" class="foto" alt="..." width="400" height="">
            </div>

            <div class="carousel-item">
              <img src="img\Salas\Silla.svg" class="foto" alt="..." width="400" height="">
            </div>
            <!--     <div class="carousel-item">
                  <img src="img\Salas\Sala3.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img\Salas\Sala4.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img\Salas\Sala5.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img\Salas\Sala6.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img\Salas\Sala7.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img\Salas\Sala8.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img\Salas\Sala9.JPG" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                  <img src="img\Salas\Sala10.JPG" class="d-block w-100" alt="...">
                </div>-->
          </div>
          <button class="carousel-control-prev" type="button" data-bs-target="#carouselSalas" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselSalas" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </div>

    <div class="row justify-content-md-center box">

      <div class="col-sm-12 col-md-5 card">

        <div class="row">
          <h5 class="merriweather-bold center" id="Alfombras">Limpieza de Alfombras</h5>
          <p class="merriweather-regular">Pensando en cambiar esa alfombra? 🤔 ¡Espera! Dale una segunda oportunidad.

            Nuestro sistema de limpieza profunda por inyección-succión no solo elimina las manchas, sino que también extrae el polvo, los ácaros y los alérgenos que se esconden en las fibras. 🦠

            ¡El resultado es una alfombra que no solo se ve, sino que se SIENTE y HUELE a limpio!

            ✅ Colores más vivos y renovados.
            ✅ Adiós a los malos olores (mascotas, humedad, etc.).
            ✅ Un ambiente más saludable para tu familia.
            ✅ Usamos productos biodegradables, seguros para niños y mascotas.

            ✨ ¡No la des por perdida! Dale una segunda vida.

            Pide tu cotización sin compromiso. Es rápido y fácil.
            📲 Envíanos un WhatsApp</p>

        </div>
      </div>

      <div class="col-sm-12 col-md-5 text-center">
        <img src="img\Alfombra\HeadAutos_Colchon.svg" class="foto" alt="..." width="400" height="350">
      </div>


    </div>

    <div class="row justify-content-md-center box">

      <div class="col-sm-12 col-md-5 card">
        <div class="row">
          <h5 class="merriweather-bold center" id="Autos">Limpieza de Vestiduras de Autos</h5>
          <p class="merriweather-regular">Esas manchas en tus asientos NO son permanentes. 🫣 ✨ Te lo demostramos.
            Limpieza Profunda por Inyección-Succión. 💧⚙️
            No es una limpieza superficial. Nuestro sistema profesional:
            * Inyecta ➡️ una solución limpiadora que disuelve la suciedad desde la raíz.
            * Extrae ⬅️ potentemente toda la suciedad, manchas, líquidos y bacterias.
            El resultado no es solo un asiento limpio, es un asiento sanitizado y restaurado. ✅
            No te resignes a viajar en un interior que se ve y se siente sucio. 👎
            📩 ¡Envíanos una foto de tus vestiduras por DM 📲 y recibe una cotización al instante! Agenda hoy. 🗓️</p>

        </div>
      </div>

      <div class="col-sm-12 col-md-5">

        <div id="carouselVestiduras" class="carousel carousel-dark slide" data-bs-ride="carousel">

          <div class="carousel-inner">
            <div class="carousel-item active">
              <img src="img\Vestiduras\V_Carousel1.svg" class="foto" alt="..." width="400" height="350">
            </div>
            <div class="carousel-item">
              <img src="img\Vestiduras\V_Carousel2.svg" class="foto" alt="..." width="400" height="350">
            </div>
            <div class="carousel-item">
              <img src="img\Vestiduras\V_Carousel3.svg" class="foto" alt="..." width="400" height="350">
            </div>


          </div>

          <button class="carousel-control-prev" type="button" data-bs-target="#carouselVestiduras" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#carouselVestiduras" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>

      </div>



    </div>

    <div class="row justify-content-md-center box">

      <div class="col-sm-12 col-md-5 card">
        <div class="row">
          <h5 class="merriweather-bold center" id="Colchones">Limpieza de Colchones</h5>
          <p class="merriweather-regular">¿Duermes realmente solo? 🤔 Tu colchón acumula millones de ácaros, células muertas y sudor que pueden afectar tu salud y la de tu familia. 🤧

            ¡Pero no te preocupes! Con nuestro sistema de limpieza profunda por inyección-succión, eliminamos toda la suciedad y dejamos tu colchón desinfectado, fresco y listo para un verdadero descanso. ✨</p>

        </div>
      </div>

      <div class="col-sm-12 col-md-5  text-center">


        <img src="img\Colchones\Colchon.svg" class="foto" alt="..." width="400" height="350">


      </div>

    </div>

    <div class="row justify-content-md-center box">

      <div class="col-sm-12 col-md-10 card">
        <div class="merriweather-bold">
          <h5 class="merriweather-bold">Aceptamos tarjetas de Crédito & Debito</h5>
          <p class="card-text"></p>
        </div>
        <img src="img\Tarjetas.webp" class="" height="150" alt="...">

      </div>

    </div>

    <a class="btn-wsp" target="_blank" href="https://wa.me/524611130928?text=Buen%20día...">
      <i class="icon-whatsapp"></i>
    </a>


    <div class="row justify-content-md-center box">
      <div class="col-sm-12 col-md-10 card">


        <h5 class="merriweather-bold" id="Contacto">¿Tienes alguna Duda?...</h5>
        <br>

        <br>


        <h5 class="merriweather-regular">Contáctanos por Email:</h5>
        <br>

        <form id="formularioContacto" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="nombre" class="form-label merriweather-regular"><i class="bi bi-person-fill me-1"></i>Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <div class="invalid-feedback">
              Por favor ingresa tu nombre.
            </div>
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label merriweather-regular"><i class="bi bi-envelope-fill me-1"></i>Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
            <div class="invalid-feedback">
              Ingresa un correo electrónico válido.
            </div>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label merriweather-regular"><i class="bi bi-telephone-fill me-1"></i>Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" pattern="[0-9]{10}" required>
            <div class="invalid-feedback">
              Ingresa un número de teléfono válido de 10 dígitos.
            </div>
          </div>
          <div class="mb-3">
            <label for="comentario" class="form-label merriweather-regular"><i class="bi bi-chat-dots-fill me-1"></i>Comentario</label>
            <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
            <div class="invalid-feedback">
              Por favor agrega un comentario.
            </div>
          </div>
          <div class="mb-3">
            <label for="direccion" class="form-label merriweather-regular"><i class="bi bi-geo-alt-fill me-1"></i>Dirección</label>
            <input type="text" class="form-control" id="direccion" name="direccion" required>
            <div class="invalid-feedback">
              Por favor ingresa tu dirección.
            </div>
          </div>
          <div class="g-recaptcha mb-3" data-sitekey="6Ld_QsMqAAAAAJvREOuFK8KMJMqzK2wCwMEeUZhS"></div>
          <button type="submit" class="btn btn-primary"><i class="bi bi-send-fill me-1"></i>Enviar</button>
        </form>
        <br>

      </div>

    </div>


    <div class="row box">
      <footer class="container py-5 my-5 border-top">
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-4">
          <!-- Logo y derechos reservados -->
          <div class="col mb-3">
            <a
              href="/"
              class="d-flex align-items-center mb-3 text-decoration-none link-body-emphasis">
              <img
                src="img/Logo_Clean.webp"
                alt="Logo"
                height="55"
                class="d-inline-block align-text-top logo">
            </a>
            <p class="text-body-secondary mb-0">© 2023</p>
          </div>

          <!-- Espacio vacío o sección adicional -->
          <div class="col mb-3">
            <!-- Puedes agregar aquí alguna información adicional si lo deseas. -->
          </div>

          <!-- Sección de Servicios -->
          <div class="col mb-3">
            <h5 class="merriweather-bold">Servicios</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#Alfombras" class="nav-link merriweather-regular">Alfombras</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#Salas" class="nav-link merriweather-regular">Salas</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#Autos" class="nav-link merriweather-regular">Vestiduras de Autos</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#Colchones" class="nav-link merriweather-regular">Colchones</a>
              </li>
            </ul>
          </div>

          <!-- Sección de Redes Sociales -->
          <div class="col mb-3">
            <h5 class="merriweather-bold">Síguenos</h5>
            <ul class="list-unstyled d-flex">
              <li class="ms-0">
                <a class="text-body-secondary me-3" href="https://www.facebook.com/profile.php?id=61577084604187" aria-label="Facebook">
                  <i class="bi bi-facebook"></i>
                </a>
              </li>
              <li>
                <a class="text-body-secondary me-3" href="#" aria-label="Twitter">
                  <i class="bi bi-twitter"></i>
                </a>
              </li>
              <li>
                <a class="text-body-secondary me-3" href="https://www.instagram.com/clean_up_mx" aria-label="Instagram">
                  <i class="bi bi-instagram"></i>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </footer>

    </div>

  </div>


  <div class="iconos-sociales-flotantes">
    <a href="https://www.instagram.com/clean_up_mx/" target="_blank" class="icono-instagram">
      <i class="fa-brands fa-instagram"></i>
    </a>
    <a href="https://www.facebook.com/profile.php?id=61577084604187" target="_blank" class="icono-facebook">
      <i class="fa-brands fa-facebook-f"></i>
    </a>
  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script type="text/javascript" src="js/index.js"></script>

</body>

</html>