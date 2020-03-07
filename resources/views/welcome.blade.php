<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Dev Collective</title>

  <!-- Bootstrap core CSS -->
  <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="{{ asset('vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="{{ asset('css/agency.min.css') }}" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Dev Collective</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#portfolio">Portafolio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#team">Equipo</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead" style="background-image: url({{ asset('img/image.jpg') }})">
    <div class="container">
      <div class="intro-text" style="padding-top: 225px !important;">
        <div class="intro-lead-in" style="font-size: 60px; margin-bottom: 95px !important;">¡Bienvenidos a nuestro colectivo!</div>
        <!--<div style="font-size: 60px;" class="intro-heading text-uppercase"><a href="#team" style="color:#bd5d38 !important;">¡Bienvenidos a nuestro colectivo!</a></div>-->
        <div class="row">
            <div class="col-xl-6 col-lg-6 .col-md-6 col-sm-12">
                <a style="margin-bottom: 10px;" class="p-boton btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#portfolio" style="background-color: #cea71b !important;">Portafolio</a>
            </div>
            <div class="col-xl-6 col-lg-6 .col-md-6 col-sm-12">
                <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#team" style="background-color: #cea71b !important;">Conoce a nuestro equipo</a>
            </div>
        </div>

      </div>
    </div>
  </header>


  <!-- Portfolio Grid -->
  <section style="padding-bottom: 0px;" class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Portafolio</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal1">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/01-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Duendes de la Meganavidad</h4>
            <p class="text-muted">Votaciones, Fidelidad</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal2">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/02-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Promo Valvoline HN</h4>
            <p class="text-muted">Fidelidad</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal3">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/03-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Promo Valvoline CR</h4>
            <p class="text-muted">Fidelidad</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal4">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/04-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Valvoline Conoce</h4>
            <p class="text-muted">Fidelidad</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal5">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/05-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Promociones La Colonia</h4>
            <p class="text-muted">Informativa</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="#portfolioModal6">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
            <img class="img-fluid" src="img/portfolio/06-thumbnail.jpg" alt="">
          </a>
          <div class="portfolio-caption">
            <h4>Yoga Summit Copán</h4>
            <p class="text-muted">Informativa</p>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Team -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Equipo</h2>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-4">
          <div class="team-member">
            <a style="color:#bd5d38 !important;" href="{{ route('gerardo') }}">
                <img class="mx-auto rounded-circle" src="img/team/3.png" alt="">
                <h4>Gerardo Méndez</h4>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <a style="color:#bd5d38 !important;" href="{{ route('camarena') }}">
                <img class="mx-auto rounded-circle" src="img/team/camarena.jpg" alt="">
                <h4>Oscar Camarena</h4>
            </a>
          </div>
        </div>
        <div class="col-sm-4">
          <div class="team-member">
            <a style="color:#bd5d38 !important;" href="{{ route('saul') }}">
                <img class="mx-auto rounded-circle" src="img/team/saul2.jpg" alt="">
                <h4>Saúl Laínez</h4>
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>


  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-12">
          <span class="copyright">Copyright &copy; Dev Collective 2020</span>
        </div>
      </div>
    </div>
  </footer>

  <!-- Portfolio Modals -->

  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Duendes de la Meganavidad</h2>
                <p class="item-intro text-muted"><a href="https://meganavidad.com" class="text-dark">https://meganavidad.com</a></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/01-full.jpg" alt="">
                <p>
                  Sistema de fidelización para recolección de facturas con las que el cliente podía, 
                  de acuerdo a una cantidad específica de compra, canjear un duende. Al coleccionar 6 duendes se hacía
                  acreedor de una orden de compra de manera automática. Cuenta con un administrador para ver estadísticas y generar ganadores.
                </p>
                <ul class="list-inline">
                  <li>Año: 2019</li>
                  <li>Cliente: Megasuper, Costa Rica</li>
                  <li>Categoría: Votaciones, Fidelidad</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Promo Valvoline HN</h2>
                <p class="item-intro text-muted"><a href="https://promovalvoline.hn" class="text-dark">https://promovalvoline.hn</a></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/02-full.jpg" alt="">
                <p>
                  Sistema de fidelización para ingreso de códigos con el objetivo de generar ganadores automáticamente.
                  Los premios se distribuyeron por semana, de modo que, cada semana el premio era diferente. Cuenta con un
                  administrador para ver estadísticas.
                </p>
                <ul class="list-inline">
                <li>Año: 2019</li>
                  <li>Cliente: Valvoline, Honduras</li>
                  <li>Categoría: Fidelidad</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Promo Valvoline CR</h2>
                <p class="item-intro text-muted"><a href="https://promovalvoline.com" class="text-dark">https://promovalvoline.com</a></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/03-full.jpg" alt="">
                <p>
                  Sistema de fidelización para ingreso de códigos con el objetivo de generar 
                  ganadores de varios premios en base a los códigos ingresados.
                  Cuenta con un administrador para ver estadísticas y generador de ganadores.
                </p>
                <ul class="list-inline">
                  <li>Año: 2019</li>
                  <li>Cliente: Valvoline, Costa Rica</li>
                  <li>Categoría: Fidelidad</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 4 -->
  <div class="portfolio-modal modal fade" id="portfolioModal4" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Valvoline Conoce</h2>
                <p class="item-intro text-muted"><a href="https://valvolineconoce.com" class="text-dark">https://valvolineconoce.com</a></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/04-full.jpg" alt="">
                <p>
                  Sistema de fidelidad cuyo objetivo es que el usuario ingrese códigos con la cantidad de productos de la marca que compraron.
                  Los códigos en este caso son predefinidos para cada presentación del producto de la marca.
                  Al ingresar los códigos obtienen "galones" que les permite canjear premios dentro de la plataforma.
                  Adicional, tiene un administrador para ingreso de requisitos de sistema y estadísticas.
                </p>
                <ul class="list-inline">
                  <li>Año: 2019</li>
                  <li>Cliente: Valvoline, Costa Rica</li>
                  <li>Categoría: Fidelidad</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 5 -->
  <div class="portfolio-modal modal fade" id="portfolioModal5" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Promociones La Colonia</h2>
                <p class="item-intro text-muted"><a href="http://acatequeremos.com" class="text-dark">http://acatequeremos.com</a></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/05-full.jpg" alt="">
                <p>
                  Sitio web para mostrar las promociones de un supermercado. 
                  El trabajo de este sitio fue reconstruir y mejorar el código, además de revestirlo con varias promociones.
                </p>
                <ul class="list-inline">
                  <li>Año: 2018-2019</li>
                  <li>Cliente: La Colonia, Honduras</li>
                  <li>Categoría: Informativa</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 6 -->
  <div class="portfolio-modal modal fade" id="portfolioModal6" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
                <!-- Project Details Go Here -->
                <h2 class="text-uppercase">Yoga Summit Copán</h2>
                <p class="item-intro text-muted"><a href="https://yogasummitcopan.com/" class="text-dark">https://yogasummitcopan.com/</a></p>
                <img class="img-fluid d-block mx-auto" src="img/portfolio/06-full.jpg" alt="">
                <p>
                  Sitio web informativo para un evento realizado en las Ruinas de Copán, Honduras. 
                  El trabajo realizado fue construir la estructura y aplicar un diseño en la misma.
                </p>
                <ul class="list-inline">
                  <li>Año: 2019</li>
                  <li>Cliente: Yoga Summit, Honduras</li>
                  <li>Categoría: Informativa</li>
                </ul>
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Cerrar</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
  <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

  <!-- Plugin JavaScript -->
  <script src="{{ asset('vendor/jquery-easing/jquery.easing.min.js') }}"></script>

  <!-- Contact form JavaScript -->
  <script src="{{ asset('js/jqBootstrapValidation.js') }}"></script>
  <script src="{{ asset('js/contact_me.js') }}"></script>

  <!-- Custom scripts for this template -->
  <script src="{{ asset('js/agency.min.js') }}"></script>

</body>

</html>
