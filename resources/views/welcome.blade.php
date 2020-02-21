<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oncovip Medicina preventiva Papanicolaou</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/fuente-estilos.css')}}">
        <style>
           body{


           }

           .bg-darken{
                
                background-color:rgba(115,113,113,0.5);
                    

           }
            
            .contenedor-parallax{

                background-image: url('img/fondoParallax.jpg');
                background-attachment: fixed;
                background-size: auto 120vh;
                background-position: center 0;
                
            }
                    
            .font-parallax{


            }
            
            .back-lightGrey{

                background-color: #E6E4E4;
            }

            .back-grey{

                background-color: #F9F9F9;
            }
            
           .bg-blue{

                background-color: #404699;
           }

           .bg-white{

                background-color: rgba(255,255,255,0.9);
           }

           .text-blue{

                color: #373C85;
                font-size: 40px


            }
            
            .h-100{
                
                height: 100%;
            }
            .vh-100{
                
                height: 100vh;

            }
             .text-red{

                color: red;
                font-size: 40px
            }

            .text-bold{

                font-weight: bold;
            }

            .text-gray{

                color: gray
            }

            .titulo-mobil{
                
                font-family: 
            }
            .container-link{

                height: 100%;
                display: flex;
                align-items: center;
                transition: 0.5s all ease;
            }
            
            .container-link:hover{

                transition: 0.5s all ease;
                background-color: #041B92;
                color: white;
            }
        

            .link{

                color:gray;
                text-decoration: none;

            }
                
            .anclante{
                
                position: relative;

            }

            .flotante{
                
                position: absolute;
                bottom:15%;
            }

            .tarjeta1{

                
                padding: 30px;

                background-color: rgba(83,224,129,0.8);
                color:white;
            }

            .tarjeta2{

                
                padding: 30px;

                background-color: rgba(72,195,112,0.8);
                color:white;
            }

            .tarjeta3{

                
                padding: 30px;

                background-color: rgba(60,161,93,0.8);
                color:white;
            }

            .fixed{

                position: fixed;
                z-index: 1;
            }
           
            .mt-fixed{

                margin-top: 106px 
            }

            .boton-arriba{
                
                
                display: none;
                bottom:20px;
                right:20px;
                background-color: black;
                padding: 20px;
                color: white;
                cursor: pointer;
                position: fixed;
                z-index: 1000;
            }
            
            .footer{

                padding: 30px;
            }
        </style>
    </head>
    <body>
        <span class="boton-arriba icon-up"></span>
        <div class="container-fluid"> el huevo
            <header class="row">
                <div class="col">
                    <div class="back-lightGrey row justify-content-between p-4 hidden-sm-down">
                        <div class="col-12 col-md-auto">
                            <div class="row justify-content-start">
                                <div class="col-auto pr-2">
                                    <img src="{{asset('img/location.png')}}" alt="">
                                </div>
                                <div class="col-auto align-self-center">
                                   <span class="lead"> Sucursal Av. Carlos Izaguirre 552 - 554 (Segundo Piso) local los olivos</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-auto">
                          <div class="row justify-content-end">
                              <div class="col-auto"> <img src="{{asset('img/phone.png')}}" alt=""> </div>
                              <div class="col-auto align-self-center pr-2"><span class="lead">Central los olivos</span></div>
                              <div class="col-auto align-self-center"><span class="lead">(511)535-4029</span> </div>
                          </div>
                        </div>
                    </div>
                    <div class="back-grey row justify-content-between p-4 hidden-sm-down">
                        <div class="col-12 col-md-auto">
                            <div class="row justify-content-start">
                                <div class="col-auto pr-2">
                                    <img src="{{asset('img/location.png')}}" alt="">
                                </div>
                                <div class="col-auto align-self-center">
                                   <span class="lead"> Calle Bernini 352, 1er. piso, Torre de Consultorios - San Borja</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-auto">
                          <div class="row justify-content-end">
                              <div class="col-auto"> <img src="{{asset('img/phone.png')}}" alt=""> </div>
                              <div class="col-auto align-self-center pr-2"><span class="lead">Central San Borja</span></div>
                              <div class="col-auto align-self-center"><span class="lead">(511)224-6638</span> </div>
                          </div>
                        </div>
                    </div>
                    
                    <div class="row justify-content-around pr-md-3">
                        <div class="col-sm-12 col-md-auto hidden-sm-down"><!--VISIBLE PARA LAPTOP-->
                           <div class="row justify-content-between align-items-center">
                                <div class="col-auto col-md-12 col-md-auto pb-5 pt-5">
                                    <img class="" src="{{asset('img/logo.jpg')}}" alt="">
                                </div>
                                <div class="col-auto col-md-auto   pb-5 pt-5 hidden-md-up">
                                    <a href="#"><img src="{{asset('img/menu.png')}}" alt=""></a>
                                </div>
                           </div>
                        </div>
                        <div class="col-12 hidden-md-up fixed bg-white"><!--VISIBLE PARA MOBIL-->
                            <div class="row pt-3 pb-3  justify-content-between align-items-center">
                                <div class="col-auto ml-2">
                                    <h3 class="m-0"><span class="text-red text-bold">
                                            NCO</span> <span class="text-blue text-bold">VIP</span> <br>
                                           <small class="text-gray"> Medicina Preventiva</small>
                                    </h3>
                                </div>
                                <div class="col-auto mr-2">
                                    <a href="#"><img src="{{asset('img/menu.png')}}" alt=""></a>
                                </div>
                           </div>
                        </div>
                        <div class="col-auto hidden-sm-down"><!--VISIBLE PARA LAPTOP-->
                            <div class="row justify-content-start align-items-center  h-100">
                                <div class=" col-12 col-md-auto  pb-5 pt-5 ">
                                    <a href="{{url('/')}}" class="link">INICIO</a>
                                </div>
                                <div class=" col-12 col-md-auto ">
                                    <a href="{{url('/kit')}}" class="link">KIT ADN</a>
                                </div>
                                <div class=" col-12 col-md-auto">
                                    <a href="{{url('/contacto')}}" class="link">CONTACTO</a>
                                </div>
                                <div class=" col-12 col-md-auto">
                                    <a href="{{url('/consultas')}}" class="link">CONSULTAS GRATIS</a>
                                </div>
                                 <div class="col-12 col-md-auto">
                                    <a href="{{url('/promociones')}}" class="link">PROMOCIONES</a>
                                </div>
                                 @if (Route::has('login'))

                                    @if (Auth::check())

                                    @else
                                        <div class="col-12 col-md-auto">
                                            <a href="{{ url('/login') }}" class="link"><img src="{{asset('img/account.png')}}" alt=""> LOGIN</a>
                                        </div>
                                     @endif
                                 @endif
                            </div>
                        </div>
                    </div>
                </div>
            </header>    
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            
           <section class="row mt-fixed mt-md-0 anclante">
               <div class=" col-12 p-0 mb-0">
                    <div id="carouselExampleSlidesOnly" class="anclante carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="{{asset('img/banner06.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{asset('img/banner07.jpg')}}" alt="Second slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{asset('img/banner08.jpg')}}" alt="Third slide">
                            </div>
                          </div>
                    </div>
                </div>
                <div class="col-12 hidden-md-up"><!------------------TELEFONO------------------------------------->
                        <div class="row justify-content-around">
                            <div class="tarjeta1 col-12 col-md-3">
                                <h2>Ginecológo</h2>
                                <p>
                                    <mark>Chequeo Integral</mark> <br>
                                    Consiste en una serie de exámenes de todos los órganos del aparato genital femenino
                                </p>
                                <a class="btn btn-success" href="{{url('/integral')}}">Leer más</a></button>
                            </div>
                            <div class="tarjeta2 col-12 col-md-3">
                                <h2>Ginecológo </h2>
                                <p>
                                   <mark> Chequeo Premiun</mark> <br>
                                    Este chequeo consiste en la realización del Chequeo Ginecológico Integral
                                </p>
                                <a class="btn btn-success" href="{{url('/premiun')}}">Leer más</a></button>
                            </div>
                            <div class="tarjeta3 col-12 col-md-3">
                                <h2>Exámenes</h2>
                                <p>
                                   <mark>Varios</mark> <br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt autem voluptatum 
                                </p>
                               <a class="btn btn-success" href="{{url('/examenes')}}">Leer más</a>
                            </div>
                        </div>
                </div>
                <div class="flotante col-12 hidden-sm-down"><!------------------laptop y pc----------------------------------->
                        <div class="row justify-content-around">
                            <div class="tarjeta1 col-12 col-md-3">
                                <h2>Ginecológo</h2>
                                <p>
                                    <mark>Chequeo Integral</mark> <br>
                                    Consiste en una serie de exámenes de todos los órganos del aparato genital femenino
                                </p>
                                <a class="btn btn-success" href="{{url('/integral')}}">Leer más</a></button>
                            </div>
                            <div class="tarjeta2 col-12 col-md-3  mb-2">
                                <h2>Ginecológo </h2>
                                <p>
                                   <mark> Chequeo Premiun</mark> <br>
                                    Este chequeo consiste en la realización del Chequeo Ginecológico Integral
                                </p>
                                <a class="btn btn-success" href="{{url('/premiun')}}">Leer más</a></button>
                            </div>
                            <div class="tarjeta3 col-12 col-md-3 mb-2">
                                <h2>Exámenes</h2>
                                <p>
                                   <mark>Varios</mark> <br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt autem voluptatum 
                                </p>
                               <a class="btn btn-success" href="{{url('/examenes')}}">Leer más</a>
                            </div>
                        </div>
                </div>
           </section>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>      
            <section class="bg-blue text-white row justify-content-star">
                    <div class="col-12 col-md-auto p-5">
                        <p class="display-4 hidden-sm-down">
                            Conoce acerca de nosotros
                        </p>
                        <h3 class=" hidden-md-up text-center">
                           ¿Quienes somos?
                        </p>
                    </div>
            </section>
            <section class="row">
                    <div class="col-12 col-md-6" style="background:url({{url('img/nosotros01.jpg')}});">
                         <div id="carouselExampleSlidesOnly" class="anclante carousel slide" data-ride="carousel">
                          <div class="carousel-inner">
                            <div class="carousel-item active">
                              <img class="d-block w-100" src="{{asset('img/nosotros01.jpg')}}" alt="First slide">
                            </div>
                            <div class="carousel-item">
                              <img class="d-block w-100" src="{{asset('img/nosotros03.jpg')}}" alt="Third slide">
                            </div>
                          </div>
                    </div>
                            
                    </div>
                     <div class="col-12 col-md-6 p-5">
                        <p class="lead">
                            Somos un Centro de Medicina Preventiva, representantes en el Perú de Pathway Genomics, especializado en la investigación seria, exhaustiva y minuciosa de la patología humana, que pone a su disposición una variedad de servicios exclusivos, para un diagnóstico preciso con equipos de última generación, incluyendo la detección genética de diversos tipos de cáncer y enfermedades crónicas.
                        </p>
                    </div>                
            </section>

            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>  
            <section class="row mb-5">
                <div class="col-12 text-right mb-5 p-5" style="background-color: red">
                    <h2 class="text-white hidden-sm-down display-4">Nuestros Especialistas</h2>
                    <h2 class="text-white hidden-md-up">Especialistas</h2>
                </div>
                 <div class="col-12">
                    <div class="row">
                        <div class="col-12 mb-5 col-sm col-md text-center">
                            <img src="{{asset('img/heart.png')}}" alt=""><br> Dr. Carlos Matta <br> <mark>Gineco-Obstetricia</mark>
                        </div>
                        <div class="col-12 mb-5   col-sm col-md text-center">
                            <img src="{{asset('img/heart.png')}}" alt=""><br> Dr. Juan C. Delgado <br> <mark>Gineco-Obstetricia</mark>
                        </div>
                        <div class="col-12 mb-5   col-sm col-md text-center">
                            <img src="{{asset('img/heart.png')}}" alt=""><br> Dr. Julio Rios Urrutia <br> <mark>Gineco-Obstetricia</mark>
                        </div>
                    </div>
                </div>
            </section>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------> 
            <section class="row contenedor-parallax">
                    <div class="vh-100 col-12 text-center">
                        <div class="h-100 bg-darken  text-white row align-items-center">
                            <div class="col-12 ">
                                <h1 class="m-0 display-4 font-parallax">Examenes individuales</h1>
                            </div>
                            <div class="col-12 col-md">
                                <h3 class="m-0">COBAS</h3>
                            </div>
                             <div class="col-12 col-md">
                                <h3 class="m-0">BIOPSIA DE CERVIX</h3>
                            </div>
                             <div class="col-12 col-md">
                                <h3 class="m-0">BIOPSIA DE MAMAS</h3>
                            </div>
                             <div class="col-12 col-md">
                                <h3 class="m-0">BIOPSIA DE ENDOMETRIO</h3>
                            </div>
                            <div class="col-12 col-md">
                                <h3 class="m-0">MAMOGRAFÍAS</h3>
                            </div>
                        </div>
                    </div>
            </section>
             <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <footer class="footer bg-blue text-white row">
                <div class="col">
                    <div class="row justify-content-between">
                        <div class="col-12">
                            <h1>Ubicanos</h1>
                        </div>
                        <div class="col-12 col-sm-5 col-md-5">
                             <hr style="background-color:#6868F9">
                            <p> 
                                Local San Borja <br>
                                Calle Bernini 352, 1er piso, Torre de Consultorios - San Borja <br>
                                A la espalda de la Clínica San Borja (Av. Guardia Civil) <br>
                                Altura cdra. 17 de la Av. Javier Prado Este <br>
                                Atención: Lunes a Sábado de 9am a 1pm / 4pm a 8pm <br>
                                <small>administracion@oncovip.com</small>
                             </p>
                           
                        </div>
                        <div class="col-12 col-sm-5  col-md-5">
                            <div class="row">
                                <div class="col-12">
                                    <hr style="background-color:#6868F9">
                                    <p>   
                                        Local Los Olivos <br>
                                        Av. Carlos Izaguirre 552 - 554 (Segundo Piso) <br>
                                        Teléfono: (511) 5354029 <br>
                                        Atención: Lunes a Sábado de 9am a 1pm / 4pm a 8pm <br>

                                    </p>
                                </div>
                                <div class="col-12 mb-5">
                                    <a href="#"><img src="{{asset('img/network01.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/network02.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/network03.png')}}" alt=""></a>
                                    <a href="#"><img src="{{asset('img/network04.png')}}" alt=""></a>
                                </div>
                            </div>
                        </div>
                        <div class="w-100"></div>
                        <div class="col-12 text-center">
                            <p class="m-0">
                                Desarrollado Por AALP &copy; 2020 Todos los Derechos Reservados AALP
                            </p>
                        </div>
                    </div>
                </div>
            </footer> 
        </div>
         <script src="{{asset('js/jquery-3.2.1.min.js')}}"></script>
        <script src="{{asset('js/bootstrap.min.js')}}"></script>
        <script src="{{asset('js/scrollUp.js')}}"></script>
        <script src="{{asset('js/parallax.js')}}"></script>
    </body>
</html>
