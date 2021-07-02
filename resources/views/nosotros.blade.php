@extends('layouts.windmill')
@section('content')
<!-- site icon -->
<link rel="icon" href="{{asset('images/fevicon.png')}}" type="image/png" />
<link rel="shortcut icon" type="{{asset('image/x-icon')}}" href="favicon.ico" />
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
<link href="{{asset('css/lightbox.min.css" rel="stylesheet')}}">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<!-- Social Media Icons -->
<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<!--[if lt IE 9]>
   <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
   <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
   <![endif]-->
</head>

<body id="us_page" class="us_page flex h-screen bg-gray-50 dark:bg-gray-900">
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

    <section class="layout_padding section about_dottat main_full banner_section_top flex h-screen bg-gray-50 dark:bg-gray-900">
        <div class="container flex h-screen bg-gray-50 dark:bg-gray-900">
            <div class="row ">
            <img class="img-responsive img-header" src="{{asset('images/header-img-two.png')}}" alt="#" />
                            
                <div class="col-lg-12 text_align_center ">
                    <div class="full heading_s1 " style="padding-top: 200px " ;>
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
                    <h3 class="mb-8 text-gray-600 dark:text-gray-400">Misión</h3>
                    <p>Danza Aptitude cree en el potencial de las personas con discapacidad, sensibilizando a nuestra sociedad hacia el significado del ARTE como herramienta de desarrollo personal y social mejorando su calidad de vida.</p>
                </div>
                <div class="col-6 text_align_center ">
                    <h3 class="mb-8 text-gray-600 dark:text-gray-400">Visión</h3>
                    <p>Continuar nuestra labor en la transformación de vidas a través del Arte y como un programa referente en materia de inclusión artística.</p>
                </div>
                <div class="text_align_center full ">
                    <a class="purple_bt " href="conocenos.html ">Conoce nuestro equipo</a>
                </div>
            </div>
        </div>
    </section>

    

    <section class="layout_padding section about_dottat flex h-screen bg-gray-50 dark:bg-gray-900">
        <div class=" container galeria ">
            <div class="row ">
                <div class="text-center pt5 " style="padding-top: 20px " ;>
                    <h3 class="mb-8 text-gray-600 dark:text-gray-400"> Ejemplo 2</h3>
                    <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Sequi quasi quae at dicta ipsam natus, error doloremque tempore</p>
                </div>

                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="images/header-img-three.jpg " data-lightbox="roadtrip ">
                        <img src="images/header-img-three.jpg " alt="Galeria imagen ">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="images/header-img-three.jpg " data-lightbox="roadtrip ">
                        <img src="images/header-img-three.jpg " alt="Galeria imagen ">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="images/header-img-three.jpg " data-lightbox="roadtrip ">
                        <img src="images/header-img-three.jpg " alt="Galeria imagen ">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="images/header-img-three.jpg " data-lightbox="roadtrip ">
                        <img src="images/header-img-three.jpg " alt="Galeria imagen ">
                    </a>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 ">
                    <a href="images/header-img-three.jpg " data-lightbox="roadtrip ">
                        <img src="images/header-img-three.jpg " alt="Galeria imagen ">
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
    <section class="section mosaic_pattern_bg flex h-screen bg-gray-50 dark:bg-gray-900">
        <div class="container ">
            <div class="row ">
                <div class="col-md-12 " style="text-align: center; ">
                    <div class="full ">
                        <h4>No olvides suscribirte a nuestro Newsletter</h4>
                        <p class="mb-8 text-gray-600 dark:text-gray-400">No te perderás de ningun evento ni cursos que estemos brindando
                        </p>
                        <div style="text-align: center; padding-top: 3px; ">
                            <h5>Conoce más en</h5>
                        </div>
                        <div class="donation center ">
                            <button> <a target="_blank "
                           href="https://danzaptitude.us18.list-manage.com/subscribe?u=07b02be3c2e9327de73021abe&id=289531db2e "> Suscribirse</a></button>
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
    <script src="js/jquery.min.js "></script>
    <script src="js/lightbox-plus-jquery.min.js "></script>
    <script src="js/lightbox.min.js "></script>
    <script src="js/tether.min.js "></script>
    <script src="js/bootstrap.min.js "></script>
    <script src="js/parallax.js "></script>
    <script src="js/animate.js "></script>
    <script src="js/ekko-lightbox.js "></script>
    <script src="js/custom.js "></script>
</body>

</html>


@endsection