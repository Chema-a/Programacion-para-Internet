@extends('layouts.windmill')
@section('content')
<title>Nosotros</title>
<!-- Mobile Metas -->
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
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
<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}" />
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Social Media Icons 
<script src="https://kit.fontawesome.com/a076d05399.js"></script>-->
<!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
<link rel="shortcut icon" type="image/x-icon" href="{{asset('images/favicon.ico')}}" />
</head>

<body id="home_page" class="home_page bg-white dark:bg-gray-70">
    <div class="inner">

        <!-- social media -->
        <header>
            
        </header>
        <!-- end social media -->
        <!-- section -->
        <section class="main_full banner_section_top">
            <div class="container-fluid">
                <div class="row ">
                    <div class="full ">
                        <div class="slider_banner ">
                            <img class="img-responsive img-header" src="images/header-img-three.jpg" alt="#" />
                            <svg class="wave" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                                <path fill="#ffffff" fill-opacity="1" d="M0,288L80,282.7C160,277,320,267,480,245.3C640,224,800,192,960,176C1120,160,1280,160,1360,160L1440,160L1440,320L1360,320C1280,320,1120,320,960,320C800,320,640,320,480,320C320,320,160,320,80,320L0,320Z">
                                </path>
                            </svg>
                            <div class="slide_cont">
                                <div class="slider_cont_inner">
                                    <h3>Danza Aptitude</h3>
                                    <div class="full">
                                        <p>Programa especializado en el desarrollo de habilidades
                                            <br>a través de estímulos creativos relacionados con el Arte.
                                        </p>
                                        <a class="purple_bt" href="nosotros">Conoce más</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>
        <!-- end section -->

        <!-- about section -->
        <section class="layout_padding section about_dottat">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text_align_center">
                        <p>El Arte cambia vidas y trabajamos día a día por realizar el sueño de cada uno de nuestros alumnos, quienes encuentran en la DANZA un espacio de desarrollo, pero sobre todo de oportunidad para mostrarnos sus grandes aptitudes. Con
                            reconocimiento internacional, Danza Aptitude es considerado un programa mexicano ejemplar en materia de inclusión artística generando un gran impacto en nuestra sociedad conjugando las Artes Escénicas, un modelo terapéutico
                            y la Neurociencia.</p>
                        <div class="full heading_s1">
                            <h2>¿Quiénes Participan?</h2>
                        </div>
                        <p>Niños a partir de 3 años de edad y jóvenes con Sindrome Down, Autismo, TDAH y Parálisis Cerebral</p>
                        <div class="full heading_s1">
                            <h2>Acerca de</h2>
                        </div>
                        <div class="full">
                            <p>Danza Aptitude es miembro del Consejo Internacional de investigación de la Danza CID UNESCO, nominado en el 2014. A través del CID UNESCO tiene la facultad de expedir el Certificado Internacional de Estudios de Danza de acuerdo
                                al nivel de conocimientos adquiridos en el Programa. CID UNESCO es la organización oficial que cobija a todas las formas de danza en todos los países del mundo reconocido por la UNESCO, los organismos gubernamentales nacionales
                                y locales, así como por las instituciones y organizaciones internacionales. Fundado en 1973 en la sede de la UNESCO en París, sus miembros son las más destacadas federaciones, asociaciones, escuelas, compañías y personas
                                en más de 170 países.
                            </p>
                            <img src="images/cid_unesco.jpg">
                        </div>
                    </div>
                    <div class="delimitador">
                        <div class="video">
                            <iframe src="https://www.youtube.com/embed/tT6Fhe-DaAg" frameborder="0" allow="accelerometer; autoplay; clipboard-write; 
                            encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end about section -->

        <!-- section -->
        <section class="layout_padding section about_dottat">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text_align_center">
                        <div class="full heading_s1" style="padding-top: 100px;">
                            <h2>Nuestros cursos</h2>
                        </div>
                        <div class="full">
                            <p class="large">“Nuestro cuerpo además de caminar y trabajar, es el medio para comunicarnos”</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4 text_align_center">
                        <div class="cours">
                            <img class="img-responsive" src="images/crea.png" alt="#" />
                        </div>
                        <h3>Crea</h3>
                        <p>Desarrollar tu creatividad conlleva múltiples beneficios que impactan directamente en distintos ámbitos de tu vida.</p>
                    </div>

                    <div class="col-md-4 text_align_center">
                        <div class="cours">
                            <img class="img-responsive" src="images/diviertete.png" alt="#" />
                        </div>
                        <h3>Diviertete</h3>
                        <p>Disfruta de una divertida actividad de movimiento donde la magia de la música, elementos y sensibilidad desarrollan áreas importantes de tu desarrollo.</p>
                    </div>

                    <div class="col-md-4 text_align_center">
                        <div class="cours">
                            <img class="img-responsive" src="images/aprende.png" alt="#" />
                        </div>
                        <h3>Aprende</h3>
                        <p>Sabemos que el método ideal es el que combina la diversión con el aprendizaje, y es a través del sentimiento de logro que podemos alcanzar nuestras metas.</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text_align_center">
                            <a class="purple_bt" href="https://docs.google.com/forms/d/e/1FAIpQLScwfn8_fyF5V5VRMzh2DdTW-6BszEU2L5c6NQHQ8HeCdOp6Iw/viewform" target="_blank">Clase de prueba</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end section -->

        <!-- section -->
        <section class="layout_padding section about_dottat">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 text_align_center">
                        <div class="full heading_s1" style="padding-bottom:3em;">
                            <h2>Nuestras historias</h2>
                        </div>
                    </div>

                    <div class="col-md-4 testimonial" style="padding-left:4em;">
                        <div class="full text_align_center">
                            <h3><span class="theme_color_text">“Rosy Astorga”</span>
                                <br><small>Durango, México</small>
                            </h3>
                        </div>
                        <div class="full margin_top_30 text_align_center">
                            <h4><i>"Dedicación, paciencia y don para enseñar a nuestros niños"</i></h4>
                            <p>Haber encontrado Danza Aptitude ha sido el comienzo
                                de una nueva oportunidad de desarrollo para mi hija Danna.</p>
                        </div>
                    </div>

                    <div class="col-md-4 testimonial" style="padding-left:4em;">
                        <div class="full text_align_center">
                            <h3><span class="theme_color_text">“Tábata Medina”</span>
                                <br><small>Ciudad de México, México</small>
                            </h3>
                        </div>
                        <div class="full margin_top_30 text_align_center">
                            <h4><i>"Super recomendables las clases en línea"</i></h4>
                            <p>Excelente espacio dónde nuestros hijos aprenden historia del arte, danza,
                                expresión corporal y socializan con otros chicos, siempre en un ambiente
                                de integración y respeto mutuo.</p>
                        </div>
                    </div>

                    <div class="col-md-4 testimonial" style="padding-left:4em;">
                        <div class="full text_align_center">
                            <h3><span class="theme_color_text">“Elizabeth Pires”</span>
                                <br><small>Buenos Aires, Argentina</small>
                            </h3>
                        </div>
                        <div class="full margin_top_30 text_align_center">
                            <h4><i>"Es un trabajo muy didáctico, se integran, socializan, …"</i></h4>
                            <p>Como Profesora y mamá estoy muy contenta con los avances
                                de mi hija.</p>
                        </div>
                    </div>

                    <div class="col-lg-12 testimonial" style="padding-left:4em;">
                        <div class="full text_align_center">
                            <h3><span class="theme_color_text">“Jessica Hernández”</span>
                                <br><small>Guadalajara, México</small>
                            </h3>
                        </div>
                        <div class="full margin_top_30 text_align_center">
                            <h4><i>"¡De lo mejor!"</i></h4>
                            <p>Me encanta realizar las clase con mi pequeña
                                <br>y ella las disfruta mucho.
                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- end section -->






        <!-- end section -->
        <!-- section -->
        <section class="section mosaic_pattern_bg">
            <div class="container">
                <div class="row">
                    <div class="col-md-12" style="text-align: center;">
                        <div class="full">
                            <h4>No olvides suscribirte a nuestro Newsletter</h4>
                            <p>No te perderás de ningun evento ni cursos que estemos brindando
                            </p>
                            <div style="text-align: center; padding-top: 3px;">
                                <h5>Conoce más en</h5>
                            </div>
                            <div class="donation center">
                                <button> <a target="_blank" href="{{ route('register') }}">
                                        Suscribirse</a></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>



        <!-- FOOTER  -->
        <footer class="footerr text-white py-3">
            <div class="container">
                <nav class="row justify-content-center">
                    <!-- Logo -->
                    <a href="" class="col-12 col-md-4 text-reset text-uppercase d-flex align-items-center justify-content-center mb-3 mb-md-0 footer-link ">
                        <img src="./images/logo-Danza-blanco.png" alt="Logo Danza Aptitude" class="logo-footer"> Danza Aptitude
                    </a>
                    <!-- menu -->
                    <a href="" class="col-5 col-md-4 text-reset text-uppercase d-flex align-items-center footer-link ">
                        Todos los derechos reservados 2020
                    </a>
                    <!-- menu -->
                    <a href="" class="col-5 col-md-3 text-reset text-uppercase d-flex align-items-center footer-link ">
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
        <script src="{{asset('js/ekko-lightbox.js')}} "></script>
        <script src="{{asset('js/custom.js')}} "></script>

    </div>
</body>
<!-- header -->
@endsection