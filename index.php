<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <title>Valentín Cipriano, 3A, Turno Tarde</title>
    <!--Iconos-->
    <link rel="apple-touch-icon" sizes="180x180" href="icon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="icon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="icon/favicon-16x16.png">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
</head>
<body>
<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light p-4 ps-5 pe-5">
        <div class="container-fluid">
        <h1>
          <a class="navbar-brand" href="index.php"><img src="img/logo.svg" width="50" alt="Vida Saludable"></a>
        </h1>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
            <i class="bi-list"></i>
          </button>
          <div class="collapse navbar-collapse" id="navbarText">
            <ul class="navbar-nav mx-auto mb-lg-0">
              <li class="nav-item p-2">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link" href="#sectionDos">Que Hacemos</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link" href="#sectionTres">Quienes Somos</a>
              </li>
              <li class="nav-item p-2">
                <a class="nav-link" href="#sectionCuatro">Multimedia</a>
              </li>
            </ul>
            <div class="contacto pt-3 pb-3">
            <a href="#sectionCinco" class="btn p-2 ps-4 pe-4">
                Contacto<i class="bi-envelope-fill ps-3"></i>
            </a>
            </div>
          </div>
        </div>
      </nav>
</header>

<section id="sectionUno" class="sectionUno p-5 px-0 pt-4">
    <div class="container row mx-auto">
        <div class="col-sm-12 col-md-12 col-lg-6 row align-items-center p-5 pt-0 pb-0 tituloYTexto">
            <div>
            <h2 class="pb-3">Pensamos Siempre En Tu Salud</h2>
            <p class="pb-4">En Vida Saludable, te ayudamos a 
            alcanzar ese estilo de vida que buscas.
            A continuación vas a ver como logramos 
            realizar un cambio en tu ser mediante 
            una rutina efectiva.</p>
            </div>
        </div>
        <div class="col-sm-12 col-md-12 col-lg-6 text-center px-5">
          <picture>
            <source media="(min-width:1201px)" srcset="img/deportes-xl.jpg">
            <source media="(min-width:600px)" srcset="img/deportes-lg.jpg">
            <img class="img-fluid" src="img/deportes-sm.jpg" alt="Mujer elongando">
          </picture>          
        </div>
    </div>
</section>


<!--No supe como optimizar el carousel, intente aplicar la etiqueta source con
las imagenes pero aun así no cambiaban de tamaño.-->
<section id="sectionDos" class="sectionDos p-8 ps-0 pe-0 pb-5">
        <h2 class="pb-5 mb-0 text-center">Que Hacemos</h2>
        <div class="container carrousel ps-4 pe-4">
        <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active" data-bs-interval="10000">
                <img src="img/deporte1.png" class="d-block w-100" alt="Mujer a punto de correr">
              </div>
              <div class="carousel-item" data-bs-interval="2000">
                <img src="img/deporte2.jpg" class="d-block w-100" alt="Mujer trotando">
              </div>
              <div class="carousel-item">
                <img src="img/deporte3.jpg" class="d-block w-100" alt="Mujer con auriculares trotando">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
        <div class="pt-5 p-2">
            <div>
                <ul class="row">
                    <li class="col-sm-12 col-md-4 p-3">
                        <h3>Nuestro Trabajo</h3>
                        <p>Somos un equipo que brinda asistencia tanto física como mental para aquellas personas que desean tener un estilo de vida saludable.</p>
                    </li>
                    <li class="col-sm-12 col-md-4 p-3">
                        <h3>¿Qué Ofrecemos?</h3>
                        <p>Ofrecemos planes alimentarios, rutinas de ejercicio hechos de forma especifica para vos, adaptado a tus necesidades.</p>
                    </li>
                    <li class="col-sm-12 col-md-4 p-3">            
                        <h3>¿Cómo?</h3>
                        <p>Al solicitar nuestros servicios Vida Saludable se pondrá inmediatamente en contacto con usted para proseguir.</p>
                    </li>
                </ul>
            </div>
            <div>
                <ul class="row">
                    <li class="col-sm-12 col-md-4 p-3">
                        <h3>Un Equipo Hecho Para Vos</h3>
                        <p>Te escuchamos y nos adaptamos, vamos a brindarte la ayuda que necesitas una vez te hayamos entrevistado.</p>
                    </li>
                    <li class="col-sm-12 col-md-4 p-3">
                        <h3>Por Qué Te Podemos Ayudar</h3>
                        <p>Somos un equipo altamente especializado en lo que hacemos. Estamos capacitados para brindarte la mejor asistencia posible.</p>
                    </li>
                    <li class="col-sm-12 col-md-4 p-3">
                        <h3>Cómo Lo Hacemos</h3>
                        <p>Con una entrevista y tu información proporcionada los integrantes de Vida Saludable deciden el mejor camino a tomar.</p>
                    </li>
                </ul>
            </div>
        </div>
          </div>
</section>

<section id="sectionTres" class="sectionTres p-8 ps-0 pe-0 pb-5">
    <div class="container ps-4 pe-4">
        <h2 class="text-center mb-0">
            Quienes Somos
        </h2>
        <div>
            <ul class="row pt-5">
                <li class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3 pt-0 text-center">
                    <figure class="p-3">
                        <img class="pb-3" src="img/pitta.jpg" alt="Facundo">
                        <figcaption>
                            <h3>Facundo</h3>
                            <p class="ps-3 pe-3">
                              Personal trainer. Te va a ayudar con tus rutinas de actividad física.
                          </p>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3 pt-0 text-center">
                    <figure class="p-3">
                        <img class="pb-3" src="img/liam.jpeg" alt="Liam">
                        <figcaption>
                            <h3>Liam</h3>
                            <p class="ps-3 pe-3">
                              Profesor de educación física. Te mantendrá al tanto de tus actividades.
                            </p>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3 pt-0 text-center">
                    <figure class="p-3">
                        <img class="pb-3" src="img/maxi.jpeg" alt="Máximo">
                        <figcaption>
                            <h3>Máximo</h3>
                            <p class="ps-3 pe-3">
                              Profesor de educación física. Te mantendrá al tanto de tus actividades.
                          </p>
                        </figcaption>
                    </figure>
                </li>
                <li class="col-sm-12 col-md-6 col-lg-6 col-xl-3 p-3 pt-0 text-center">
                    <figure class="p-3">
                        <img class="pb-3" src="img/uyi.jpeg" alt="Lucía">
                        <figcaption>
                            <h3>Lucía</h3>
                            <p class="ps-3 pe-3">
                              Psicóloga y nadadora. Ella te va a escucharte y ayudarte mentalmente.
                          </p>
                        </figcaption>
                    </figure>
                </li>
            </ul>
        </div>
    </div>
</section>

<section id="sectionCuatro" class="sectionCuatro p-8 ps-0 pe-0 pb-5">
    <div class="container">
        <h2 class="text-center mb-0">
            Multimedia
        </h2>
        <div class="p-4 pt-5 row">
            <div class="col-sm-12 col-md-12 col-lg-6">
                <iframe src="https://www.youtube.com/embed/WqBwdfBLSyE" title="YouTube video player" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-6 p-5 row align-items-center textoVideo">
                <p>
                    En este video, nuestra doctora Ubillos nos explica brevemente como empezar a llevar una vida saludable.
                </p>
            </div>
        </div>
    </div>
</section>

<section id="sectionCinco" class="sectionCinco p-8 ps-0 pe-0 pb-5">
    <div class="container">
        <h2 class="text-center">Contacto</h2>
        <p class="text-center mt-4 mb-5 px-3">Te dejamos nuestro formulario de contacto. Tambien te dejamos algunos datos adicionales.</p>

    <ul class="row">
        <li class="col-sm-12 col-md-4 text-center p-4 px-5 pt-0 divPastillas">
            <div class="p-4 pastillas">
            <i class="bi-telephone-outbound py-3"></i>
            <p class="mb-0">11-6666-6666</p>
            </div>
        </li>
        <li class="col-sm-12 col-md-4 text-center p-4 px-5 pt-0 divPastillas">
                <div class="p-4 pastillas">
                <i class="bi-envelope py-3"></i>
                <p class="mb-0">vs@gmail.com</p>
                </div>
        </li>
        <li class="col-sm-12 col-md-4 text-center p-4 px-5 pt-0 divPastillas">
                <div class="p-4 pastillas">
                <i class="bi-geo-alt py-3"></i>
                <p class="mb-0">Bolivia 754</p>
                </div>
        </li>
      </ul>

        <form class="p-5 pt-4" action="enviar_formulario.php" method="post" enctype="multipart/form-data">
        <fieldset class="row p-5">
        <div class="col-sm-12 col-md-6 p-4 py-0 ps-0">
            <div class="llenar">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" placeholder="Nombre *" required>
              </div>
              <div class="llenar">
                <label for="apellido" class="form-label">Apellido</label>
                <input type="text" class="form-control" id="apellido" placeholder="Apellido">
              </div>
              <div class="llenarEsteNo">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" placeholder="Email *" required>
              </div>
        </div>
        <div class="col-sm-12 col-md-6 p-4 py-0 pe-0">
              <div>
                <label for="campo" class="form-label">Mensaje</label>
                <textarea class="form-control" id="campo" placeholder="Tu mensaje... *" rows="8" required></textarea>
              </div>
        </div>

        <div class="text-center mt-5 elSubmit">
            <label for="enviar" class="form-label">Enviar</label>
            <input type="submit" id="enviar" class="btn">
        </div>
        </fieldset>
        </form>
        </div>
</section>

<footer class="bd-footer bg-light">
    <div class="container">
      <div class="row p-5 py-4">
        <div class="col-sm-12 col-md-6 mb-3 p-3">
          <a class="d-inline-flex align-items-center mb-2 link-dark text-decoration-none vidaSaludable" href="index.html">
            <img src="img/logo.png" width="25" alt="Vida Saludable">
            <h4 class="ps-2 pt-3 mb-3">Vida Saludable</h4>
          </a>
          <ul>
            <li class="mb-2">Valentín Cipriano</li>
            <li class="mb-2">Comisión 3A</li>
            <li class="mb-2">Turno Tarde</li>
          </ul>
        </div>
        <div class="col-sm-12 col-md-6 text-end p-3">
          <h4 class="ps-2 pt-3 mb-4">Links</h4>
          <ul>
            <li class="mb-2"><a href="https://facebook.com">Facebook</a></li>
            <li class="mb-2"><a href="https://Instagram.com">Instagram</a></li>
            <li class="mb-2"><a href="https://twitter.com">Twitter</a></li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

<script src="js/bootstrap.js"></script>    
</body>
</html>