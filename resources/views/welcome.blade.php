<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Oncovip Medicina preventiva Papanicolaou</title>
        <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-style.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-menuMobil.css')}}">
        <link rel="stylesheet" href="{{asset('css/propio.css')}}">
                
    </head>
    <body>
        <span id="boton-arriba" class="boton-arriba icon-up"></span><!--BOTON DE SCROLL UP-->
         <div class="mapsModal bg-darken"><!--contenedor modal para los maps-->
           <div class="row h-100 justify-content-center align-items-center">
                <span class="close icon-close"></span>
                <div class="col-auto" id="mapsContenedor">
                            
                </div>
            </div>
         </div>
             <div class="menuModal container hidden-md-up"><!--contenedor del menu modal para mobiles-->
                 <div class="row">
                    <div class="header-menuMobil col-12 pt-2 pb-2" >
                        <div class="row justify-content-between">
                            <div class="col-auto">
                                <span class="text-white pl-3">MENU DE NAVEGACION</span>  
                            </div>
                            <div class="col-auto">
                                <span id="close-menuMobil" class="close-menuMobil icon-close pr-3"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 pt-3 pb-3 ">
                        <a href="#kitAdn"  class="link-menuMobil text-white"><span class="icon-kit"></span> Kit ADN</a>
                    </div>
                    <div class="col-12 pt-3 pb-3 ">
                        <a href="#footer" class="link-menuMobil text-white"><span class="icon-maps"></span> UBÍCANOS</a>
                    </div>
                    <div class="col-12 pt-3 pb-3 ">
                        <a href="#consultas" class="link-menuMobil text-white"><span class="icon-list"></span> CONSULTA GRATIS</a>
                    </div>
                    <div class="col-12 pt-3 pb-3 ">
                        <a href="#promociones" class="link-menuMobil text-white"><span class="icon-cash"></span> PROMOCIONES</a>
                    </div>
                </div>
             </div>


        <div class="container-fluid"> 
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
                                <div class="col-auto ml-3">
                                    <h3 class="m-0"><span class="text-red text-bold">
                                            NCO</span> <span class="text-blue text-bold">VIP</span> <br>
                                           <small class="text-gray hidden-sm-up"> Medicina Preventiva</small>
                                    </h3>
                                </div>
                                <div class="col-auto mr-3">
                                    <a href="#"><img src="{{asset('img/menu.png')}}" alt="" id="menuMobil"></a><!--boton del menu mobil-->
                                </div>
                           </div>
                        </div>
                        <div class="col-auto hidden-sm-down"><!--VISIBLE PARA LAPTOP-->
                            <div class="row justify-content-start align-items-center  h-100">
                                <div class=" col-12 col-md-auto  pb-5 pt-5 ">
                                    <a href="{{url('/')}}" class="link">INICIO</a>
                                </div>
                                <div class=" col-12 col-md-auto ">
                                    <a href="#kitAdn" class="link">KIT ADN</a>
                                </div>
                                <div class=" col-12 col-md-auto">
                                    <a href="#footer" class="link">UBÍCANOS</a>
                                </div>
                                <div class=" col-12 col-md-auto">
                                    <a href="#consultas" class="link">CONSULTAS GRATIS</a>
                                </div>
                                 <div class="col-12 col-md-auto">
                                    <a href="#promociones" class="link">PROMOCIONES</a>
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
            
           <section class="row mt-fixed mt-sm-5 mt-md-0 anclante">
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
                                <a class="btn btn-success" href="#integral">Leer más</a></button>
                            </div>
                            <div class="tarjeta2 col-12 col-md-3">
                                <h2>Ginecológo </h2>
                                <p>
                                   <mark> Chequeo Premiun</mark> <br>
                                    Este chequeo consiste en la realización del Chequeo Ginecológico Integral
                                </p>
                                <a class="btn btn-success" href="#premium">Leer más</a></button>
                            </div>
                            <div class="tarjeta3 col-12 col-md-3">
                                <h2>Exámenes</h2>
                                <p>
                                   <mark>Varios</mark> <br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt autem voluptatum 
                                </p>
                               <a class="btn btn-success" href="#examenes">Leer más</a>
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
                                <a class="btn btn-success" href="#integral">Leer más</a></button>
                            </div>
                            <div class="tarjeta2 col-12 col-md-3  mb-2">
                                <h2>Ginecológo </h2>
                                <p>
                                   <mark> Chequeo Premiun</mark> <br>
                                    Este chequeo consiste en la realización del Chequeo Ginecológico Integral
                                </p>
                                <a class="btn btn-success" href="#premium">Leer más</a></button>
                            </div>
                            <div class="tarjeta3 col-12 col-md-3 mb-2">
                                <h2>Exámenes</h2>
                                <p>
                                   <mark>Varios</mark> <br>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. Deserunt autem voluptatum 
                                </p>
                               <a class="btn btn-success" href="#examenes">Leer más</a>
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
            <section class="row contenedor-parallax" id="examenes">
                    <div class="pt-5 p-md-5 h-100 w-100 bg-darken col-12 ">
                        <div class="mb-5 text-white row">
                            <div class="col-12">
                               <div class="row">
                                   <div class="col-12 mb-5 text-center">
                                        <h1 class="m-0 display-4 font-parallax"><span class="hidden-md-down">Nuestros </span>Examenes</h1>
                                   </div>
                                   <div class="col-12  text-center">
                                       <span class="icon-world display-1"></span>
                                   </div>
                               </div>
                            </div>
                        </div>
                        <div class="row text-white mb-5">
                            <div class="col-12">
                                <div class="col-12 col-md-6 col-md">
                                    <h3 class="m-0 mb-2"><span class="icon-list"> </span><span class="hidden-md-down">EXAMENES </span><span class="hidden-md-up">EXAMEN</span> DE COBAS</h3>
                                    <p class="lead text-justify">Esta prueba detecta los tipos de virus del papiloma humano de alto riesgo que pueden provocar cáncer de cuello uterino. El proceso de la prueba es el mismo que el de la prueba de Papanicolaou, se toman muestras de células del cuello del útero y se envian a un laboratorio para que sean analizadas.</p>
                                </div>
                            </div>
                        </div>
                        <div class="row text-white">
                            <div class="col-12">
                                <div class="row justify-content-end mb-5">
                                    <div class="col-6 col-md-3 mb-3">
                                        <div class="tarjet">
                                            <h4 class="m-0 ">BIOPSIAS <br>DE CERVIX</h4>
                                        </div>
                                    </div>
                                     <div class="col-6 col-md-3 mb-3 ">
                                        <div class="tarjet">
                                            <h4 class="m-0 ">BIOPSIAS <br>DE MAMAS</h4> 
                                        </div>
                                    </div>
                                     <div class=" col-12 col-md-3 mb-3 ">
                                        <div class="tarjet">
                                            <h4 class="m-0 ">BIOPSIAS <br>DE ENDOMETRIO</h4>
                                        </div>                                           
                                    </div>
                                     <div class="col-12 col-md-3 mb-5 ">
                                        <div class="tarjet">
                                            <h4 class="m-0 ">BIOPSIAS <br>DE MAMOGRAFÍA</h4>
                                        </div>
                                    </div>
                                </div> 
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
            <section class="row " id="promociones">
                    <div class="col-12 p-5 text-white" style="background-color: #2020FA">
                       <h1>Chequeo Ginecologico Integral</h1> 
                       <p>Chequeo ginecológico integral, todo en una sola visita. <br> <a href="#integral">Ver detalles</a> <br> S/. 100.00</p>
                    </div>
                    <div class="col-12 p-5 text-white" style="background-color: #4848FE">
                       <h1>Chequeo Ginecológico Premium</h1> 
                       <p>Chequeo preventivo integral que incluye la detección genética del Virus Papiloma Humano.<br> <a href="#premium">Ver detalles</a> <br> S/. 400.00</p>

                    </div>
                    <div class="col-12 p-5 text-white" style="background-color: #9393FF">
                        <h1>Chequeo de Fertilidad de pareja</h1> 
                       <p>Chequeo de fertilidad de pareja, todo en tres visitas.<br> <a href="#consultas">Ver detalles</a> <br> S/. 400.00</p>
                    </div>
            </section>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <section class="row " id="chequeos">
                <div class="col-12 col-md-6" id="integral">
                    <div class="row">
                        <div class="col-12 p-5 bg-blue">
                            <h1 class="text-white">CHEQUEO INTEGRAL</h1>
                        </div>
                        <div class="col-12 p-5 text-justify">
                            <p class="lead text-gray">Consiste en una serie de exámenes de todos los órganos del aparato genital femenino como son: la vulva, la vagina, el cuello uterino, el útero, trompas, endometrio, ovarios y mamas. <br><br>

                            Este Chequeo Integral Ginecológico se realiza en una sola sesión, en un mismo lugar, en un mínimo de tiempo y por un mismo gineco-obstetra altamente calificado. <br><br>

                            Como a nuestro centro, ONCOVIP le interesa la prevención este chequeo cuesta el valor de una consulta. Además, se hace entrega de un informe escrito inmediato de todos los exámenes realizados y los resultados del Test de Papanicolaou y frotis vaginal, después de 48 horas de realizado este chequeo. <br><br>

                            La utilidad de este examen radica en que detecta todas las patologías existentes y previene las complicaciones y trastornos futuros del área genital femenina. Identifica, además, problemas comunes, como infecciones en el cuello uterino y la vagina, quistes de ovario, fibromas, quistes de las mamas, etc. También enfermedades malignas y premalignas de todos los órganos del aparato femenino que actualmente ningún chequeo detecta en el Perú. Cabe mencionar que, actualmente este chequeo se lleva cabo en países desarrollados como Estados Unidos, Europa y Japón.</p>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-6" id="premium">
                    <div class="row">
                        <div class="col-12 p-5 bg-red">
                            <h1 class="text-white">CHEQUEO PREMIUN</h1>
                        </div>
                        <div class="col-12 p-5 text-justify">
                            <p class="lead text-gray">Este chequeo consiste en la realización del Chequeo Ginecológico Integral, al cual se le suma la detección genética del Virus Papiloma Humano, el cual es causante del cáncer de cuello uterino. <br><br>

                            Existen más de 100 serotipos de Virus Papiloma Humano entre ellos los de alta, mediana y baja agresividad, por lo que detectarlos es de suma importancia para elegir el tratamiento adecuado y brindar un pronóstico acertado. <br><br>

                            Además de esta manera tenemos la oportunidad de aplicarte la vacuna contra el Virus (VPH).</p>
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
             <section class="row pb-5" id="kitAdn">
                 <div class="col-12">
                     <div class="row">
                         <div class="col-12 col-md-auto ml-5 mr-2 hidden-sm-down">
                             <img src="{{asset('img/kitAdn02.jpg')}}" alt="" class="h-100 w-100">
                         </div>
                         <div class="col-12 col-md-8">
                            <div class="row">
                                <div class="col-12 mb-5">
                                     <img src="{{asset('img/kitAdn.jpg')}}" alt="" class="w-100">  
                                </div>
                                <div class="col-12 p-5">
                                    <h1>KIT ADN</h1>
                                    <p class="lead text-justify">

                                        Fácil: una toma de muestra de saliva. <br><br>

                                        Rápida: en pocas semanas se obtienen los resultados. <br><br>

                                        Segura: Pathway analiza la muestra recolectada de saliva en laboratorio certificado CLIA, Clinical Laboratory Improvement Amendments. <br><br>

                                        Confidencial: cada muestra tomada en el kit es procesada bajo un ambiente controlado y seguro para proveer confidencialidad y seguridad al paciente. <br><br>

                                        Asesoría: asesores certificados por la American Board of Genetic Counseling. <br><br>
                                    </p>
                                </div>
                            </div>
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
             <section class="p-5 back-grey row" id="consultas">
                <div class="col-12">
                    <form class="row " action="">
                        <div class="col-12">
                            <h1 class="hidden-md-down text-blue">Consultas Gratis</h1>
                            <h1 class="hidden-md-up text-blue">Consultas</h1>
                            <hr>
                        </div>
                        <div class="col-12 col-md-3 align-self-center">
                           <div class="row ">
                                <div class="col-12">
                                    <label for="">Nombre <br><input type="text" required="" maxlength="10" pattern="[a-z]"><br></label>
                                </div>
                                <div class="col-12">
                                    <label for="">Apellido <br><input type="text" required="" maxlength="10" pattern="[a-z]"><br></label>
                                </div>
                                <div class="col-12">
                                    <label for="">Correo <br><input type="text" required="" maxlength="30" pattern="[@gmail.com]"></label>
                                </div>
                                <div class="col-12">
                                    <label for="">Asunto <br><input type="text" required="" maxlength="30" pattern="[a-z]"></label>
                                </div>
                                <div class="col-5 mb-3 hidden-md-down ">
                                    <button type="submit" class="btn btn-success">Enviar</button>
                                </div>
                                <div class="col-5 mb-5 hidden-md-down">
                                    <button type="button" class="btn btn-danger">Borrar</button>
                                </div>
                            </div>
                        </div>  
                        <div class="col-12 col-md-9 ">
                             <label for="" class="w-100">Mensaje <br><textarea style="width: 100%" name="" id="" rows="10"></textarea><br></label>
                        </div>
                        <div class="col-5  hidden-md-up ">
                             <button type="submit" class="btn btn-success">Enviar</button>
                        </div>
                        <div class="col-5  hidden-md-up">
                             <button type="button" class="btn btn-danger">Borrar</button>
                        </div>
                    </form>
                </div>
            </section>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <!------------------------------------------------------------------------------------------------------------------>
            <footer class="footer bg-blue text-white row" id="footer">
                <div class="col">
                    <div class="row justify-content-between">
                        <div class="col-12">
                            <h1>Ubicanos</h1>
                        </div>
                        <div class="col-12 col-sm-5 col-md-5">
                             <hr style="background-color:#6868F9">
                            <p> 
                                Local San Borja <br>Click para ver ubicacion--> <img id="sanBorja"  class="maps pointer" src="{{asset('img/maps.png')}}" alt=""><br>
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
                                        Local Los Olivos <br>Click para ver ubicacion--> <img id="losOlivos" class="maps pointer" src="{{asset('img/maps.png')}}" alt=""><br>
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
        <!--<script src="{{asset('js/parallax.js')}}"></script>-->
        <script src="{{asset('js/mapsClick.js')}}"></script>
        <script src="{{asset('js/menuMobil.js')}}"></script>

    </body>
</html>
