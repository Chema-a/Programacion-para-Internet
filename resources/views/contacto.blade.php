@extends('layouts.windmill')
@section('content')


<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Site Metas -->

<!-- site icon -->
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

<body id="contact_page" class="contact_page">
    <!-- header -->

   
   <!-- section -->
   <section class=" layout_padding section about_dottat main_full banner_section_top ">
      <div class=" container ">
         <div class=" row ">
            <div class=" col-lg-12 ">
               <div class="full heading_s2 col-lg-12 text_align_center ">
                  <div class=" full heading_s1 " style=" padding-top: 200px " ;>
                     <h2>Nos puedes encontrar en </h2>
                  </div>
                  <h3>Guadalajara</h3>
                  <h6>Plaza Bonita, Av. México #3370, Zona D, Local 6, Monraz, 44670 Guadalajara, Jal.
                  </h6>
                  <div class="map-responsive ">
                     <iframe 
                     src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1866.3830136791755!2d-103.4033782444756!3d20.67909580500042!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8428ae159f0d3059%3A0xf1d26784cb058676!2sDanza%20Aptitude%20Guadalajara!5e0!3m2!1ses-419!2smx!4v1603816862119!5m2!1ses-419!2smx "
                     width="500 " height="450 " frameborder="0 " allowfullscreen
                     aria-hidden="false " tabindex="0 ">
                     </iframe>
                  </div>

               </div>
            </div>
         </div>
         <div class=" text_align_center ">
            <p>Telefono de contacto: <a href="tel:3328087136 "><u>3328087136</u></a></p>
            <p>Correo electronico: <a href="mailto:contacto@danzaptitude.com "><u>contacto@danzaptitude.com</u></a>
            </p>
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
                           href="https://danzaptitude.us18.list-manage.com/subscribe?u=07b02be3c2e9327de73021abe&id=289531db2e ">
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
   <script src="{{asset('js/tether.min.js')}} "></script>
   <script src="{{asset('js/bootstrap.min.js')}} "></script>
   <script src="{{asset('js/parallax.js')}} "></script>
   <script src="{{asset('js/animate.js')}} "></script>
   <script src="{{asset('js/ekko-lightbox.js ')}}"></script>
   <script src="{{asset('js/custom.js')}} "></script>
</body>

</html>
@endsection