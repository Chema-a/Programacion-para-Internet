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
            <div class=" col-lg-9 site_information "></div>
            <div>
                <div class="flex items-center p-4 bg-white rounded-lg shadow-xs dark:bg-gray-800">
                    <a class="px-3 py-3 font-medium" href="https://www.facebook.com/danzaptitude">
                        Facebook

                        <svg class="w-30 h-8 mr-8" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 291.319 291.319" style="enable-background:new 0 0 291.319 291.319;" xml:space="preserve">
                            <g>
                                <path style="fill:#3B5998;" d="M145.659,0c80.45,0,145.66,65.219,145.66,145.66c0,80.45-65.21,145.659-145.66,145.659
		S0,226.109,0,145.66C0,65.219,65.21,0,145.659,0z" xml:space="preserve"></path>
                                <path style="fill:#FFFFFF;" d="M163.394,100.277h18.772v-27.73h-22.067v0.1c-26.738,0.947-32.218,15.977-32.701,31.763h-0.055 v13.847h-18.207v27.156h18.207v72.793h27.439v-72.793h22.477l4.342-27.156h-26.81v-8.366
		C154.791,104.556,158.341,100.277,163.394,100.277z" xml:space="preserve"></path>
                        </svg>
                    </a>

                    <a class="px-3 py-3 font-medium" href="https://www.youtube.com/user/danzaptitude">
                        Youtube

                        <svg class="w-30 h-8 mr-8" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <circle style="fill:#D22215;" cx="256" cy="256" r="256" />
                            <path style="fill:#A81411;" d="M384.857,170.339c-7.677,2.343-15.682,4.356-23.699,6.361
	c-56.889,12.067-132.741-20.687-165.495,32.754c-27.317,42.494-35.942,95.668-67.017,133.663L294.629,509.1
	c110.47-16.72,197.773-104.036,214.476-214.511L384.857,170.339z" />
                            <path style="fill:#FFFFFF;" d="M341.649,152.333H170.351c-33.608,0-60.852,27.245-60.852,60.852v85.632
	c0,33.608,27.245,60.852,60.852,60.852h171.298c33.608,0,60.852-27.245,60.852-60.852v-85.632
	C402.501,179.578,375.256,152.333,341.649,152.333L341.649,152.333z M300.494,260.167l-80.12,38.212
	c-2.136,1.019-4.603-0.536-4.603-2.901v-78.814c0-2.4,2.532-3.955,4.67-2.87l80.12,40.601
	C302.947,255.602,302.904,259.019,300.494,260.167L300.494,260.167z" />
                            <path style="fill:#D1D1D1;" d="M341.649,152.333h-87.373v78.605l46.287,23.455c2.384,1.208,2.341,4.624-0.069,5.773l-46.218,22.044
	v77.459h87.373c33.608,0,60.852-27.245,60.852-60.852v-85.632C402.501,179.578,375.256,152.333,341.649,152.333z">
                        </svg>
                    </a>

                    <a class="px-3 py-3 font-medium" href="https://www.facebook.com/danzaptitude">
                        Instagram

                        <svg class="w-30 h-8 mr-8" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <circle style="fill:#6C27B3;" cx="256" cy="256" r="256" />
                            <path style="fill:#501A96;" d="M374.71,132.922c-30.587,3.872-62.479,3.737-94.575,0.681
	c-44.822-3.448-110.33-24.135-134.465,17.239c-38.772,66.236-19.649,151.035-10.614,226.078l134.737,134.708
	c130.388-6.923,234.886-111.407,241.831-241.79L374.71,132.922z" />
                            <g>
                                <path style="fill:#FFFFFF;" d="M315.227,109.468H196.772c-48.14,0-87.304,39.164-87.304,87.304v118.455
		c0,48.138,39.164,87.305,87.305,87.305h118.455c48.138,0,87.305-39.165,87.305-87.305V196.772
		C402.532,148.632,363.367,109.468,315.227,109.468L315.227,109.468z M373.05,315.228c0,31.934-25.888,57.822-57.822,57.822H196.773
		c-31.934,0-57.822-25.888-57.822-57.822V196.773c0-31.934,25.888-57.823,57.822-57.823h118.455
		c31.934,0,57.822,25.89,57.822,57.823V315.228z" />
                                <path style="fill:#FFFFFF;" d="M256,180.202c-41.794,0-75.798,34.004-75.798,75.798c0,41.791,34.004,75.795,75.798,75.795
		s75.795-34.001,75.795-75.795S297.794,180.202,256,180.202L256,180.202z M256,302.313c-25.579,0-46.316-20.733-46.316-46.313
		s20.737-46.316,46.316-46.316s46.313,20.735,46.313,46.316C302.313,281.579,281.579,302.313,256,302.313L256,302.313z" />
                            </g>
                            <g>
                                <path style="fill:#D1D1D1;" d="M350.103,180.774c0,10.03-8.132,18.163-18.163,18.163c-10.03,0-18.163-8.133-18.163-18.163
		c0-10.031,8.133-18.163,18.163-18.163C341.973,162.611,350.103,170.741,350.103,180.774L350.103,180.774z" />
                                <path style="fill:#D1D1D1;" d="M315.228,109.468h-59.802v29.482h59.802c31.934,0,57.822,25.89,57.822,57.823v118.455
		c0,31.934-25.888,57.822-57.822,57.822h-59.802v29.482h59.802c48.138,0,87.304-39.165,87.304-87.305V196.772
		C402.532,148.632,363.367,109.468,315.228,109.468z" />
                                <path style="fill:#D1D1D1;" d="M256,180.202c-0.193,0-0.381,0.014-0.574,0.014v29.482c0.191-0.002,0.381-0.014,0.574-0.014
		c25.579,0,46.313,20.735,46.313,46.316c0,25.579-20.733,46.313-46.313,46.313c-0.193,0-0.383-0.012-0.574-0.014v29.482
		c0.193,0.002,0.381,0.014,0.574,0.014c41.794,0,75.795-34.002,75.795-75.795C331.795,214.206,297.794,180.202,256,180.202z">
                        </svg>
                    </a>

                    <a class="px-3 py-3 font-medium" href="https://www.facebook.com/danzaptitude">
                        Whatsapp

                        <svg class="w-30 h-8 mr-8" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <circle style="fill:#75B73B;" cx="256" cy="256" r="256" />
                            <path style="fill:#52891D;" d="M360.241,151.826c-14.843-3.712-36.671-16.532-50.8-21.671
	c-55.165-17.239-129.293-3.448-149.98,60.337c-1.724,1.724-5.172,1.724-6.896,1.724c-41.374,48.269-13.791,106.882-17.239,160.323
	c-1.177,18.839-11.083,35.497-23.831,49.588l107.282,107.17C230.931,511.067,243.355,512,256,512
	c126.436,0,231.452-91.665,252.247-212.161L360.241,151.826z" />
                            <g>
                                <path style="fill:#FFFFFF;" d="M248.837,108.447c-78.029,3.712-139.604,68.696-139.369,146.811
		c0.072,23.792,5.816,46.249,15.95,66.095l-15.557,75.514c-0.841,4.086,2.843,7.663,6.901,6.701l73.995-17.53
		c19.011,9.471,40.364,14.939,62.962,15.284c79.753,1.219,146.251-62.105,148.74-141.829
		C405.121,174.035,334.591,104.362,248.837,108.447L248.837,108.447z M337.13,335.936c-21.669,21.669-50.483,33.604-81.13,33.604
		c-17.944,0-35.126-4.027-51.066-11.966l-10.302-5.134l-45.37,10.747l9.549-46.356l-5.075-9.943
		c-8.276-16.206-12.472-33.728-12.472-52.084c0-30.648,11.935-59.459,33.604-81.13c21.476-21.478,50.759-33.604,81.134-33.604
		c30.644,0,59.458,11.935,81.127,33.604c21.669,21.669,33.604,50.483,33.604,81.127C370.735,285.177,358.607,314.459,337.13,335.936
		L337.13,335.936z" />
                                <path style="fill:#FFFFFF;" d="M327.115,286.582l-28.384-8.149c-3.729-1.069-7.749-0.01-10.468,2.76l-6.942,7.07
		c-2.926,2.984-7.366,3.941-11.24,2.374c-13.427-5.434-41.672-30.548-48.881-43.106c-2.084-3.624-1.739-8.152,0.817-11.462
		l6.058-7.839c2.374-3.07,2.874-7.197,1.305-10.747l-11.941-27.008c-2.86-6.468-11.126-8.352-16.527-3.784
		c-7.921,6.701-17.32,16.88-18.461,28.16c-2.015,19.887,6.515,44.954,38.762,75.055c37.257,34.778,67.094,39.369,86.523,34.664
		c11.019-2.667,19.825-13.365,25.379-22.126C336.906,296.467,333.91,288.535,327.115,286.582L327.115,286.582z" />
                            </g>
                            <g>
                                <path style="fill:#D1D1D1;" d="M356.004,147.708l-22.223,22.778c1.131,1.045,2.257,2.096,3.351,3.191
		c21.67,21.669,33.604,50.483,33.604,81.127c0,30.375-12.128,59.656-33.604,81.134c-21.669,21.669-50.483,33.604-81.13,33.604
		c-17.944,0-35.125-4.027-51.066-11.966l-10.302-5.134l-45.37,10.747l0.938-4.553l-40.174,41.172
		c0.886,2.663,3.705,4.475,6.734,3.758l73.995-17.53c19.011,9.471,40.364,14.939,62.962,15.284
		c79.753,1.219,146.253-62.105,148.74-141.829C403.834,215.357,385.686,175.435,356.004,147.708z" />
                                <path style="fill:#D1D1D1;" d="M327.115,286.582l-28.384-8.149c-3.729-1.069-7.749-0.01-10.468,2.76l-6.942,7.07
		c-2.926,2.984-7.366,3.941-11.24,2.374c-7.756-3.139-20.451-12.845-31.185-22.904l-19.732,20.225
		c0.677,0.648,1.352,1.295,2.05,1.948c37.257,34.778,67.094,39.369,86.523,34.664c11.019-2.667,19.825-13.365,25.379-22.126
		C336.906,296.467,333.91,288.535,327.115,286.582z">
                        </svg>
                    </a>
                </div>

            </div>
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
                                <button> <a target="_blank" href="https://danzaptitude.us18.list-manage.com/subscribe?u=07b02be3c2e9327de73021abe&id=289531db2e">
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