<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
  <script src="https://use.fontawesome.com/603f27fb7e.js"></script>
  <link rel="stylesheet" type="text/css" href="css/estilos.css">
  <link rel="stylesheet" type="text/css" href="fontello-a540fdbf/css/fontello.css">

  <title>Clean-Up, Servicio de Limpieza!</title>
  <!-- Google tag (gtag.js)
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-34QR9FLW8N">
  </script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {


    


    
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-34QR9FLW8N');  -->
  </script>
</head>

<body>

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
          <span class="fw-semibold">Servicio Comercial &amp; Residencial</span>
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
              <a class="nav-link" href="#Alfombras">Alfombras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Salas">Salas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Autos">Vestiduras de Autos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#Colchones">Colchones</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="privacy-policy.php">Aviso de Privacidad</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>




    <div class="row justify-content-md-center box">
      <div class="col-sm-12 col-md-10 card ">
        <h2 class="card-body center">Aviso de Privacidad </h5>
          <p class="card-text">Clean-Up.mx, con domicilio en Querétaro, México, es responsable del tratamiento de los datos personales que usted nos proporcione, los cuales serán protegidos conforme a lo dispuesto por la Ley Federal de Protección de Datos Personales en Posesión de los Particulares.
            <br>
            1. Finalidad del tratamiento de datos
            Los datos personales que recabamos a través de nuestros formularios de contacto, WhatsApp u otros medios digitales serán utilizados para las siguientes finalidades:

            Atender solicitudes de información sobre nuestros servicios

            Cotizaciones y seguimiento a clientes potenciales

            Agendar citas o servicios a domicilio

            Envío de promociones, ofertas y novedades (opcional)
            <br>
            2. Datos recabados
            Los datos que podríamos solicitar incluyen:

            Nombre completo

            Número de teléfono

            Correo electrónico

            Dirección (en caso de agendar servicio a domicilio)
            <br>
            3. Limitación de uso y divulgación de datos
            Tus datos personales no serán compartidos con terceros, salvo que sea necesario para cumplir con obligaciones legales o contractuales. Implementamos medidas de seguridad administrativas, técnicas y físicas para proteger tu información.
            <br>
            4. Derechos ARCO
            Tú, como titular de los datos, puedes ejercer en cualquier momento tus derechos de Acceso, Rectificación, Cancelación u Oposición (ARCO) mediante una solicitud al correo: contacto@clean-up.mx
            <br>
            5. Cambios al aviso de privacidad
            Este aviso puede ser actualizado en cualquier momento. Te recomendamos revisarlo periódicamente en nuestro sitio web: www.clean-up.mx
      </div>
    </div>


    <a class="btn-wsp" target="_blank" href="https://wa.me/524611130928?text=Buen%20día...">
      <i class="icon-whatsapp"></i>
    </a>



    <div class="row justify-content-md-center box">
      <div class="col-sm-12 col-md-10 card">


        <h5 class="Black-text">¿Tienes alguna Duda?...</h5>
        <br>

        <br>


        <h5 class="Black-text">Contáctanos por Email:</h5>
        <br>

        <form id="formularioContacto" class="needs-validation" novalidate>
          <div class="mb-3">
            <label for="nombre" class="form-label"><i class="bi bi-person-fill me-1"></i>Nombre</label>
            <input type="text" class="form-control" id="nombre" name="nombre" required>
            <div class="invalid-feedback">
              Por favor ingresa tu nombre.
            </div>
          </div>
          <div class="mb-3">
            <label for="correo" class="form-label"><i class="bi bi-envelope-fill me-1"></i>Correo electrónico</label>
            <input type="email" class="form-control" id="correo" name="correo" required>
            <div class="invalid-feedback">
              Ingresa un correo electrónico válido.
            </div>
          </div>
          <div class="mb-3">
            <label for="telefono" class="form-label"><i class="bi bi-telephone-fill me-1"></i>Teléfono</label>
            <input type="tel" class="form-control" id="telefono" name="telefono" pattern="[0-9]{10}" required>
            <div class="invalid-feedback">
              Ingresa un número de teléfono válido de 10 dígitos.
            </div>
          </div>
          <div class="mb-3">
            <label for="comentario" class="form-label"><i class="bi bi-chat-dots-fill me-1"></i>Comentario</label>
            <textarea class="form-control" id="comentario" name="comentario" rows="3" required></textarea>
            <div class="invalid-feedback">
              Por favor agrega un comentario.
            </div>
          </div>
          <div class="mb-3">
            <label for="direccion" class="form-label"><i class="bi bi-geo-alt-fill me-1"></i>Dirección</label>
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
            <h5>Servicios</h5>
            <ul class="nav flex-column">
              <li class="nav-item mb-2">
                <a href="#Alfombras" class="nav-link p-0 text-body-secondary">Alfombras</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#Salas" class="nav-link p-0 text-body-secondary">Salas</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#Autos" class="nav-link p-0 text-body-secondary">Vestiduras de Autos</a>
              </li>
              <li class="nav-item mb-2">
                <a href="#Colchones" class="nav-link p-0 text-body-secondary">Colchones</a>
              </li>
            </ul>
          </div>

          <!-- Sección de Redes Sociales -->
          <div class="col mb-3">
            <h5>Síguenos</h5>
            <ul class="list-unstyled d-flex">
              <li class="ms-0">
                <a class="text-body-secondary me-3" href="#" aria-label="Facebook">
                  <i class="bi bi-facebook"></i>
                </a>
              </li>
              <li>
                <a class="text-body-secondary me-3" href="#" aria-label="Twitter">
                  <i class="bi bi-twitter"></i>
                </a>
              </li>
              <li>
                <a class="text-body-secondary me-3" href="#" aria-label="Instagram">
                  <i class="bi bi-instagram"></i>
                </a>
              </li>

            </ul>
          </div>
        </div>
      </footer>

    </div>




  </div>



  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <script type="text/javascript" src="js/index.js"></script>

</body>

</html>