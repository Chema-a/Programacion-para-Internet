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
                                            <br>a trav??s de est??mulos creativos relacionados con el Arte.
                                        </p>
                                        <a class="purple_bt" href="nosotros">Conoce m??s</a>
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
                        <p>El Arte cambia vidas y trabajamos d??a a d??a por realizar el sue??o de cada uno de nuestros alumnos, quienes encuentran en la DANZA un espacio de desarrollo, pero sobre todo de oportunidad para mostrarnos sus grandes aptitudes. Con
                            reconocimiento internacional, Danza Aptitude es considerado un programa mexicano ejemplar en materia de inclusi??n art??stica generando un gran impacto en nuestra sociedad conjugando las Artes Esc??nicas, un modelo terap??utico
                            y la Neurociencia.</p>
                        <div class="full heading_s1">
                            <h2>??Qui??nes Participan?</h2>
                        </div>
                        <p>Ni??os a partir de 3 a??os de edad y j??venes con Sindrome Down, Autismo, TDAH y Par??lisis Cerebral</p>
                        <div class="full heading_s1">
                            <h2>Acerca de</h2>
                        </div>
                        <div class="full">
                            <p>Danza Aptitude es miembro del Consejo Internacional de investigaci??n de la Danza CID UNESCO, nominado en el 2014. A trav??s del CID UNESCO tiene la facultad de expedir el Certificado Internacional de Estudios de Danza de acuerdo
                                al nivel de conocimientos adquiridos en el Programa. CID UNESCO es la organizaci??n oficial que cobija a todas las formas de danza en todos los pa??ses del mundo reconocido por la UNESCO, los organismos gubernamentales nacionales
                                y locales, as?? como por las instituciones y organizaciones internacionales. Fundado en 1973 en la sede de la UNESCO en Par??s, sus miembros son las m??s destacadas federaciones, asociaciones, escuelas, compa????as y personas
                                en m??s de 170 pa??ses.
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
                            <p class="large">???Nuestro cuerpo adem??s de caminar y trabajar, es el medio para comunicarnos???</p>
                        </div>
                    </div>
                </div>
                <div class="row">

                    <div class="col-md-4 text_align_center">
                        <div class="cours">
                            <img class="img-responsive" src="images/crea.png" alt="#" />
                        </div>
                        <h3>Crea</h3>
                        <p>Desarrollar tu creatividad conlleva m??ltiples beneficios que impactan directamente en distintos ??mbitos de tu vida.</p>
                    </div>

                    <div class="col-md-4 text_align_center">
                        <div class="cours">
                            <img class="img-responsive" src="images/diviertete.png" alt="#" />
                        </div>
                        <h3>Diviertete</h3>
                        <p>Disfruta de una divertida actividad de movimiento donde la magia de la m??sica, elementos y sensibilidad desarrollan ??reas importantes de tu desarrollo.</p>
                    </div>

                    <div class="col-md-4 text_align_center">
                        <div class="cours">
                            <img class="img-responsive" src="images/aprende.png" alt="#" />
                        </div>
                        <h3>Aprende</h3>
                        <p>Sabemos que el m??todo ideal es el que combina la diversi??n con el aprendizaje, y es a trav??s del sentimiento de logro que podemos alcanzar nuestras metas.</p>
                    </div>

                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="text_align_center">
                            <a class="purple_bt" href="{{ route('register') }}" target="_blank">Registrate</a>
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
                            <h3><span class="theme_color_text">???Rosy Astorga???</span>
                                <br><small>Durango, M??xico</small>
                            </h3>
                        </div>
                        <div class="full margin_top_30 text_align_center">
                            <h4><i>"Dedicaci??n, paciencia y don para ense??ar a nuestros ni??os"</i></h4>
                            <p>Haber encontrado Danza Aptitude ha sido el comienzo
                                de una nueva oportunidad de desarrollo para mi hija Danna.</p>
                        </div>
                    </div>

                    <div class="col-md-4 testimonial" style="padding-left:4em;">
                        <div class="full text_align_center">
                            <h3><span class="theme_color_text">???T??bata Medina???</span>
                                <br><small>Ciudad de M??xico, M??xico</small>
                            </h3>
                        </div>
                        <div class="full margin_top_30 text_align_center">
                            <h4><i>"Super recomendables las clases en l??nea"</i></h4>
                            <p>Excelente espacio d??nde nuestros hijos aprenden historia del arte, danza,
                                expresi??n corporal y socializan con otros chicos, siempre en un ambiente
                                de integraci??n y respeto mutuo.</p>
                        </div>
                    </div>

                    <div class="col-md-4 testimonial" style="padding-left:4em;">
                        <div class="full text_align_center">
                            <h3><span class="theme_color_text">???Elizabeth Pires???</span>
                                <br><small>Buenos Aires, Argentina</small>
                            </h3>
                        </div>
                        <div class="full margin_top_30 text_align_center">
                            <h4><i>"Es un trabajo muy did??ctico, se integran, socializan, ???"</i></h4>
                            <p>Como Profesora y mam?? estoy muy contenta con los avances
                                de mi hija.</p>
                        </div>
                    </div>

                    <div class="col-lg-12 testimonial" style="padding-left:4em;">
                        <div class="full text_align_center">
                            <h3><span class="theme_color_text">???Jessica Hern??ndez???</span>
                                <br><small>Guadalajara, M??xico</small>
                            </h3>
                        </div>
                        <div class="full margin_top_30 text_align_center">
                            <h4><i>"??De lo mejor!"</i></h4>
                            <p>Me encanta realizar las clase con mi peque??a
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
                            <p>No te perder??s de ningun evento ni cursos que estemos brindando
                            </p>
                            <div style="text-align: center; padding-top: 3px;">
                                <h5>Conoce m??s en</h5>
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