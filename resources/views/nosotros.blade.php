@extends('layouts.windmill')
@section('content')
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Site Metas -->
<link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/png" />
<!-- site icon -->
<link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/png" />
<link rel="shortcut icon" type="image/x-icon" href="{{asset('favicon.ico')}}" />
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
<link href="{{asset('css/lightbox.min.css')}}" rel="stylesheet">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Social Media Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->

<body id="us_page" class="us_page">
    <!-- header -->
    <!-- end header -->
    <!-- social media -->
    <!-- end social media -->
    <section class="layout_padding section about_dottat main_full banner_section_top ">
        <div class="container ">
            <div class="row ">
                <div class="col-lg-12 text_align_center ">
                    <div class="full heading_s1 " style="padding-top: 0px " ;>
                    <img src="{{asset('images/1.jpg')}}" alt="Galeria imagen ">
                    
                        <h2>Nosotros</h2>
                    </div>
                    <div class="full " style="text-align: center; ">
                        <p>Danza Aptitude es una propuesta que se ha enriquecido a través de 25 años, no solo como un programa de Danza sino conformando un modelo terapéutico que favorece el desarrollo de habilidades y la igualdad de oportunidades para personas
                            con discapacidad con los más altos niveles técnicos y de calidad artística, mostrando en una dimensión real el potencial artístico de las personas con discapacidad, así como la necesidad de espacios en el ambiente normalizado
                            de la Danza. Actualmente ofrecemos los servicios en nuestra sede en la Ciudad de Guadalajara y proyectos especiales en Monterrey, N. L. y León, Guanajuato. A través del programa en línea tenemos presencia en distintas ciudades
                            de México, España y Argentina.
                        </p>
                    </div>
                </div>
                <div class="col-6 text_align_center ">
                    <h3>Misión</h3>
                    <p>Danza Aptitude cree en el potencial de las personas con discapacidad, sensibilizando a nuestra sociedad hacia el significado del ARTE como herramienta de desarrollo personal y social mejorando su calidad de vida.</p>
                </div>
                <div class="col-6 text_align_center ">
                    <h3>Visión</h3>
                    <p>Continuar nuestra labor en la transformación de vidas a través del Arte y como un programa referente en materia de inclusión artística.</p>
                </div>
                <div class="text_align_center full ">
                    <a class="purple_bt " href="conocenos">Conoce nuestro equipo</a>
                </div>
            </div>
        </div>
    </section>

    
    <section class="layout_padding section about_dottat">
        <div class=" container galeria ">
        <div class="text-center pt5 " style="padding-top: 20px " ;>
                    <h3> Galería de imágenes</h3>
                    <p></p>
                </div>
            <div class="row ">
                

                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="{{asset('images/11.jpg ')}}" data-lightbox="roadtrip ">
                        <img src="images/11.jpg " alt="Galeria imagen ">
                    </a>
                </div>
                <div class=" ">
                    <a href="images/12.jpg " data-lightbox="roadtrip ">
                        <img src="images/12.jpg " alt="Galeria imagen ">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="images/13.jpg " data-lightbox="roadtrip ">
                        <img src="images/13.jpg " alt="Galeria imagen ">
                    </a>
                </div>
                <div class=" ">
                    <a href="images/14.jpg " data-lightbox="roadtrip ">
                        <img src="images/14.jpg " alt="Galeria imagen ">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="images/slider_img.jpg " data-lightbox="roadtrip ">
                        <img src="images/slider_img.jpg " alt="Galeria imagen ">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="images/header-img-three.jpg " data-lightbox="roadtrip ">
                        <img src="images/header-img-three.jpg " alt="Galeria imagen ">
                    </a>
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
                            href="{{ route('register') }}"> Registrate</a></button>
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
    <script src="{{asset('js/lightbox-plus-jquery.min.js')}} "></script>
    <script src="{{asset('js/lightbox.min.js')}} "></script>
    <script src="{{asset('js/tether.min.js')}} "></script>
    <script src="{{asset('js/bootstrap.min.js')}} "></script>
    <script src="{{asset('js/parallax.js')}} "></script>
    <script src="{{asset('js/animate.js')}} "></script>
    <script src="{{asset('js/ekko-lightbox.js')}} "></script>
    <script src="{{asset('js/custom.js ')}}"></script>
</body>

</html>


@endsection