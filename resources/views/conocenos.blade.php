@extends('layouts.windmill')
@section('content')



<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Site Metas -->
<link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/png" />
<!-- Bootstrap core CSS -->
<link href="{{asset('css/bootstrap.css')}}" rel="stylesheet">
<!-- FontAwesome Icons core CSS -->
<link href="{{asset('css/font-awesome.min.css')}}" rel="stylesheet">
<!-- Custom animate styles for this template -->
<link href="{{asset('css/animate.css')}}" rel="stylesheet">
<!-- Custom styles for this template -->
<link href="{{asset('css/style.css')}}" rel="stylesheet">
<!-- Responsive styles for this template -->
<link href="{{asset('css/responsive.css')}}" rel="stylesheet">
<!-- Colors for this template -->
<link href="{{asset('css/colors.css')}}" rel="stylesheet">
<!-- light box gallery -->
<link href="{{asset('css/ekko-lightbox.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Social Media Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
<link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />
</head>

<body id="meet_us_page" class="meet_us_page">
    <!-- header -->
    
   <!-- end header -->
   <!-- social media -->
   
   <!-- social media -->
   <section class="layout_padding section about_dottat main_full banner_section_top ">
      <div class="container ">
         <div class="row ">
            <div class="col-lg-12 text_align_center ">
               <div class="full heading_s1 " style="padding-top: 200px; ">
                  <h2>Dirección Artística</h2>
               </div>
               <h3 style="font-size: calc(1em + 1vw); ">Isela Saldaña</h3>
               <em style="font-size: large; color: black; ">Directora y Fundadora Danza Aptitude Arte y Discapacidad
                  A.C.</em>
               <div class="cours "><br>
                  <img class="img-fluid " style="height: 1000 px; width: 400px; " src="{{asset('images/isela.png')}} " alt="Aqui debe ir la imagen " />
               </div><br>
               <div class="full ">
                  <p>Originaria de Guadalajara, inicia su formación en danza clásica en el Ballet de Cámara de Jalisco y
                     el Centro Pro Danza del Ballet Nacional de Cuba en la Ciudad de la Habana. Se integra al Ballet de
                     Monterrey bajo la dirección artística de Ann Marie de Angelo, trabajando con figuras
                     internacionales como Cinthia Gregory, Kevin McKenzie, Melissa Hayden, entre otros. Posteriormente
                     los Directores Fernando Alonso, Angélica Kleen y Koulubeck Ishenaliev. En el año de 1994 toma la
                     dirección artística del Ballet de Monterrey el mundialmente reconocido bailarín Fernando Bujones
                     (QEPD) quien le otorga el ascenso de su categoría a Solista.
                     Alterno a su carrera como bailarina, trabaja en el primer taller de Danza para niños con
                     discapacidad en 1993 y de acuerdo con las necesidades específicas de la población implementa el
                     programa DANZA TERAPIA en Sistemas Gubernamentales en 2005 en DIF ZAPOPAN y 2007 en DIF
                     GUADALAJARA, en el año 2009 se constituye bajo la figura legal de Asociación Civil en el Estado de
                     Jalisco con un alcance durante su trayectoria de 3000 niños y jóvenes atendidos.
                     Durante los últimos 15 años trabaja activamente en el sector del emprendimiento social impartiendo
                     talleres y conferencias en distintas Universidades de nuestro país.
                  </p>
               </div>
               <h3>Premios y reconocimientos</h3>
               <div style="text-align: justify; color:black ">
                  <ol style="padding-bottom: 50px; padding-top: 20px; ">
                     <li>• Reconocimiento por el Sistema de Asistencia Social del Gobierno de Jalisco | 2009 a 2020</li>
                     <li>• Reconocimiento por el Congreso de la República del Perú, en el Marco del I Encuentro
                        Latinoamericano de Arte y Discapacidad LATAM| Diciembre de 2017</li>
                     <li>• Participación en el 50° Congreso Mundial de la Danza en la Ciudad de Atenas, Grecia
                        organizado por CID UNESCO. Conferencia y Presentación Artística en el Teatro de la Danza Dora
                        Stratou en el Acrópolis | Julio de 2017</li>
                     <li>• Proyecto seleccionado por el programa Asociaciones para el Bienestar por la Secretaría de
                        Desarrollo del Gobierno de Jalisco | 2015, 2016, 2017,2018 y 2019</li>
                     <li>• Reconocimiento por el programa de vinculación con la Sociedad Civil, CDHJ Comisión de
                        Derechos Humanos del Estado de Jalisco.</li>
                     <li>• Premio al compromiso social Kodak Cares</li>
                     <li>• Iniciativa seleccionada por convocatoria nacional por el I Encuentro de Arte y
                        Sustentabilidad, HUB CONARTE | 2011</li>
                     <li>• Premio al Mérito Artístico por la Revista “Levántante hoy” auspiciada por la Comisión de
                        Derechos Humanos de Jalisco</li>
                     <li>• Programa Cultural de los Juegos Parapanamericanos Guadalajara 2011</li>
                  </ol>
               </div>
            </div>
            <div class="delimitador ">
               <img class="img-responsive" src="images/medios.png" alt="">
            </div>
         </div>
      </div>
   </section>

   <!-- section -->
   <section class="section mosaic_pattern_bg ">
      <div class="container ">
         <div class="row ">
            <div class="col-md-12 " style="text-align: center; ">
               <div class="full ">
                  <h4>No olvides suscribirte a nuestro Newsletter</h4>
                  <p>No te perderás de ningun evento ni cursos que estemos brindando
                  </p>
                  <div style="text-align: center; padding-top: 3px; ">
                     <h5>Conoce más en</h5>
                  </div>
                  <div class="donation center ">
                     <button> <a target="_blank "
                           href="{{route('register')}} ">
                           Suscribirse</a></button>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </section>
   <!-- end section -->
   <!-- FOOTER  -->
   <footer class="footerr text-white py-3 ">
      <div class="container ">
          <nav class="row justify-content-center ">
              <!-- Logo -->
              <a href=" " class="col-12 col-md-4 text-reset text-uppercase d-flex align-items-center justify-content-center mb-3 mb-md-0 footer-link ">
                  <img src="./images/logo-Danza-blanco.png " alt="Logo Danza Aptitude " class="logo-footer "> Danza Aptitude
              </a>
              <!-- menu -->
              <a href=" " class="col-5 col-md-4 text-reset text-uppercase d-flex align-items-center footer-link ">
                  Todos los derechos reservados 2020
              </a>
              <!-- menu -->
              <a href=" " class="col-5 col-md-3 text-reset text-uppercase d-flex align-items-center footer-link ">
                  Aviso legal
              </a>
          </nav>
      </div>
  </footer>
   <!-- Core JavaScript
         ================================================== -->
   <script src="{{asset('js/jquery.min.js')}} "></script>
   <script src="{{asset('js/tether.min.js ')}}"></script>
   <script src="{{asset('js/bootstrap.min.js')}} "></script>
   <script src="{{asset('js/parallax.js')}} "></script>
   <script src="{{asset('js/animate.js')}} "></script>
   <script src="{{asset('js/ekko-lightbox.js ')}}"></script>
   <script src="{{asset('js/custom.js')}} "></script>
</body>

</html>

@endsection