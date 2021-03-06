<?php
require_once 'db.php';
$consulta = "SELECT * FROM planes where id_app=2";
$planes =mysqli_query($conectar, $consulta);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Dámda</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicons -->
    <!-- <link href="img/favicon.png" rel="icon">-->
    <!-- <link href="img/apple-touch-icon.png" rel="apple-touch-icon"> -->

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Cinzel&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS File -->
    <link href="node_modules/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Libraries CSS Files -->
    <link href="node_modules/font-awesome//css/font-awesome.min.css" rel="stylesheet">
    <link href="node_modules/animate.css/animate.min.css" rel="stylesheet">

    <!-- Main Stylesheet File -->
    <link href="css/style.css" rel="stylesheet">
    <link href="css/custom.css" rel="stylesheet">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display|Raleway&display=swap" rel="stylesheet">

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet" href="node_modules/owl.carousel/dist/assets/owl.theme.default.min.css">

</head>

<body>

    <!--==========================
  Header
  ============================-->
    <header id="header">
        <div class="container">

            <div id="logo" class="pull-left">
                <!-- <a href="#hero"><img src="img/logo.png" alt="" title="" /></img>
                </a>-->
                <h1><a href="#hero">Dámda</a></h1>
            </div>

            <nav id="nav-menu-container">
                <ul class="nav-menu">
                    <li class="menu-active"><a href="#hero">Inicio</a></li>
                    <li><a href="#about">¿Quienes Somos?</a></li>
                    <li><a href="#promos">Promociones</a></li>
                    <li><a href="#planes">Planes</a></li>
                    <li><a href="#contact">Contacto</a></li>
                    <li><i class="fas fa-user"></i><a href="/login/index.php">Iniciar Sesión</a></li>
                </ul>
            </nav>
            <!-- #nav-menu-container -->
        </div>
    </header>
    <!-- #header -->

    <!--========================== Home Section ============================-->
    <section id="home">
        <div class="container">
            <div class="row">
                <div class="owl-carousel owl-theme col-lg-12">
                    <div class="item">
                        <h1 class="text-center">¡Dámda! <br> Tandandeando tu futuro. </h1>
                    </div>
                    <div class="item">
                        <h1 class="text-center">La atención a nuestros clientes, la pasión con la que los perseguimos en
                            días quincena, la responsabilidad con la que protegemos tu número elegido son nuestros
                            valores fundamentales.</h1>
                    </div>
                    <div class="item">
                        <h1 class="text-center">Dámda tu vida, invierte en tu futuro.</h1>
                    </div>
                </div>
            </div>

        </div>
    </section>
    <!-- #hero -->

    <main id="main">

        <!--========================== Quienes somos Section ============================-->
        <section id="about">
            <div class="container">
                <div class="row about-container">
                    <div class="col-lg-6 content order-lg-1 order-2">
                        <h2 class="title wow fadeInUp">¿Quiénes Somos?</h2>
                        <p class="wow fadeInUp">
                            En Dámda nos comprometemos apasionadamente en ofrecerte los mejores servicios financieros,
                            apoyando y otorgando beneficios a personas como tú.
                        </p>

                        <div class="icon-box wow fadeInUp">
                            <div class="icon"><i class="fas fa-hands-helping"></i></div>
                            <h4 class="title"><a href="">Misión</a></h4>
                            <p class="description">Encaminarnos tu potencial de ahorro humano y de TODOS los integrantes
                                de tù familia: en darle a tus compañeros los recordatorios, memos y amenazas, para que
                                se reconozcan y realicen como seres humanos valiosos, únicos y con
                                facultades extraordinarias; y, en ofrecer soluciones financieras y apoyos que ayuden a
                                mejorar la vida de nuestros clientes.</p>
                        </div>

                        <div class="icon-box wow fadeInUp">
                            <div class="icon"><i class="fas fa-glasses"></i></div>
                            <h4 class="title"><a href="">Visión</a></h4>
                            <p class="description">Ser los mejores a nivel nacional y, eventualmente, poder ofrecer
                                nuestros servicios como el mejor sistema de tandas en el extranjero.</p>
                        </div>

                        <div class="icon-box wow fadeInUp">
                            <div class="icon"><i class="fas fa-heart"></i></div>
                            <h4 class="title"><a href="">Valores:</a></h4>
                            <ul class="description">
                                <li>Responsabilidad</li>
                                <li>Compromiso</li>
                                <li>Respeto</li>
                                <li>Transparencia</li>
                                <li>Honestidad</li>
                            </ul>
                        </div>

                    </div>

                    <div class="col-lg-6 order-lg-2 order-1 wow fadeInRight">
                        <div class="owl-carousel owl-theme col-lg-12">
                            <div class="item">
                                <img src="/img/tanda3.jpeg" alt="">
                            </div>
                            <div class="item">
                                <img src="/img/tanda10.png" alt="">
                            </div>
                            <div class="item">
                                <img src="/img/tanda6.jpeg" alt="">
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- #about -->

        <!--========================== Promos Section ============================-->
        <section id="promos">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">Promociones</h3>
                    <p class="section-description">Ingresa tu código de promoción aquí:</p>
                </div>
                <div class="row">

                    <div class="col-lg-12 col-md-12 text-center">
                        <input type="text">
                        <a class="cta-btn align-middle" id="myBtnenviar">Enviar código</a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModalenviar">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <form id="myLogin">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1>Ingresa tu Usuario</h1>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body" style="padding:40px 50px;">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="usuario"
                                            required="required" placeholder="Usuario">
                                        </div>
                                        <button type="button" id="btnConsultar" class="btn btn-primary btn-block"></button>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span
                                                class="glyphicon glyphicon-remove"></span>Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end of modal -->
                </div>
            </div>
        </section>
        <!-- #promos -->
        <section id="modalContraseña">
            <div class="container wow fadeInUp">
            <div class="row">

        <!-- Modal Contraseña -->
        <div class="modal fade" id="getmyModalPass">
                        <div class="modal-dialog"> 
                            <!-- Modal content-->
                            <form id="myLoginPass">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1>Ingresa tu contraseña</h1>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                        <div class="modal-body" style="padding:40px 50px;">
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="password"
                                            required="required" placeholder="Contraseña">
                                        </div>
                                        <button type="button" id="btnConsultarPass" class="btn btn-primary btn-block"></button>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span
                                                class="glyphicon glyphicon-remove"></span>Cancelar</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div> 
                    <!-- end of modal -->
                    </div>
            </div>
        </section>
        <!--========================== Planes Section ============================-->
        <section id="planes">
            <div class="container wow fadeIn">
                <div class="section-header">
                    <h3 class="section-title">Planes</h3>
                    <p class="section-description">Contamos con los siguientes planes.</p>
                </div>
                <div class="row">
                <?php while ($pla=mysqli_fetch_array($planes)){?>
                    <div class="col-lg-4 col-md-6 wow fadeInUp">
                        <div class="box">
                            <div class="icon"><i class="fa fa-gift" aria-hidden="true"></i></div>
                            <h4 class="title"><?php echo $pla['nombre_plan'] ?></h4>
                            <ul class="description text-left">
                                <li align="justify"><?php echo $pla['desc_plan'] ?></li>
                                
                            </ul>
                            <div class="price" ><h5>$<?php echo$pla['costo_plan'] ?><span>/mo.</span></h5></div>
                        </div>
                    </div>
                <?php } ?>

                    
                </div>
                <div class="row text-center">
                    <div class="cta-btn-container col-md-12 ">
                        <a class="cta-btn align-middle" id="myBtn">Registrarse</a>
                    </div>
                    <!-- Modal -->
                    <div class="modal fade" id="myModal">
                        <div class="modal-dialog">
                            <!-- Modal content-->
                            <form id="myForm">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1>Registrate</h1>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                                    <div class="modal-body" style="padding:40px 50px;">
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="UserName"
                                                placeholder="Nombre(s):">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="UserLastname"
                                                placeholder="Apellido(s):">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="UserPassword"
                                                placeholder="Contraseña:">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="UserEmail"
                                                placeholder="Correo Electrónico:">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="UserPhone"
                                                placeholder="Teléfono:">
                                        </div>
                                        <div class="form-group">
                                            <select id="PlanId" class="custom-select">
                                                <option selected="">Selecciona un Plan</option>
                                                <option value="0">Prueba</option>
                                                <option value="1">Básico</option>
                                                <option value="2">Premium</option>
                                            </select>
                                        </div>
                                        <button type="button" id="btnRegistrar" class="btn btn-success btn-block">Registrate</button>
                                    </div>
                                    <div class="modal-footer">
                                        <button class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span
                                                class="glyphicon glyphicon-remove"></span>
                                            Cancel</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- end of modal -->
                </div>
            </div>
        </section>
        <!-- #planes -->

        <!--========================== Team Section ============================-->
        <section id="team">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">Equipo</h3>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/karen.jpeg" alt=""></div>
                            <h4>Karen Alvarez</h4>
                            <span>Desarrollo Web</span>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/max.jpeg" alt=""></div>
                            <h4>Maximiliano Leyva</h4>
                            <span>Desarrollo Web</span>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/torres.jpeg" alt=""></div>
                            <h4>Luis Torres</h4>
                            <span>Desarrollo Web</span>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/dany.jpeg" alt=""></div>
                            <h4>Daniel Rojas</h4>
                            <span>Desarrollo Software</span>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/vasquez.jpeg" alt=""></div>
                            <h4>Luis Vasquéz</h4>
                            <span>Desarrollo Software</span>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="member">
                            <div class="pic"><img src="img/mario.jpeg" alt=""></div>
                            <h4>Mario Morales</h4>
                            <span>Desarrollo Software</span>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </section>
        <!-- #team -->

        <!--========================= Contact Section ============================-->
        <section id="contact">
            <div class="container wow fadeInUp">
                <div class="section-header">
                    <h3 class="section-title">Contacto</h3>
                </div>
            </div>
            <div class="row mt-5 maps">
                <!-- Uncomment below if you wan to use dynamic maps -->
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3720.8759371020137!2d-86.84963468506518!3d21.157334985928852!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8f4c2b89869a6fc9%3A0x398517ec43739ce7!2sUNID%20Campus%20Canc%C3%BAn!5e0!3m2!1ses!2smx!4v1572747227076!5m2!1ses!2smx"
                    width="50%" height="580" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

                <div class="col-lg-5 col-md-12">

                    <div class="info">
                        <div>
                            <i class="fa fa-map-marker"></i>
                            <p>Avenida Rodrigo Gómez Manzana 9,<br>lote 1-15, 38, 77507 Cancún, Q.R.</p>
                        </div>
                    </div>


                    <div class="form">
                        <div id="sendmessage">Tu mensaje ha sido enviado!</div>
                        <div id="errormessage"></div>
                        <!-- <form action="" method="post" role="form" class="contactForm"> -->
                        <form class="contactForm" id="form" method="post" name="form" action="v3.php">
                            <div class="form-group">
                                <input type="text" name="name" class="form-control" id="name" placeholder="Nombre:"
                                    data-rule="minlen:4" data-msg="Ingresa al menos 4 caracteres" />
                                <div class="validation"></div>
                            </div>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <input type="email" class="form-control" name="email" id="email"
                                        placeholder="Correo:" data-rule="email" data-msg="Ingresa un correo valido" />
                                    <div class="validation"></div>
                                </div>
                                <div class="form-group col-md-6">
                                    <input type="text" class="form-control" name="phone" id="phone"
                                        placeholder="Telefono:" data-rule="minlen:4"
                                        data-msg="Ingresa un teléfono valido" />
                                    <div class="validation"></div>
                                </div>
                            </div>

                            <!-- <div class="form-group">
                                <select type="text" class="form-control" name="where" id="where">
                                    <option value="" selected>¿Dondé nos encontraste?</option>
                                    <option value="facebook">Facebook</option>
                                    <option value="instagram">Instagram</option>
                                    <option value="twitter">Twitter</option>
                                    <option value="otro">Otro</option>
                                </select>
                                <div class="validation"></div>
                            </div> -->
                            <!-- <div class="form-group">
                                <input type="text" class="form-control" name="ciudad" id="ciudad"
                                    placeholder="Ciudad:" />
                                <div class="validation"></div>
                            </div> -->
                            <!-- <div class="form-group">
                                <select type="text" class="form-control" name="estado" id="estado">
                                    <option value="" selected>Estado:</option>
                                    <option value="CDMX">Ciudad de México</option>
                                    <option value="AGS">Aguascalientes</option>
                                    <option value="BCN">Baja California</option>
                                    <option value="BCS">Baja California Sur</option>
                                    <option value="CAM">Campeche</option>
                                    <option value="CHP">Chiapas</option>
                                    <option value="CHI">Chihuahua</option>
                                    <option value="COA">Coahuila</option>
                                    <option value="COL">Colima</option>
                                    <option value="DUR">Durango</option>
                                    <option value="GTO">Guanajuato</option>
                                    <option value="GRO">Guerrero</option>
                                    <option value="HGO">Hidalgo</option>
                                    <option value="JAL">Jalisco</option>
                                    <option value="MEX">M&eacute;xico</option>
                                    <option value="MIC">Michoac&aacute;n</option>
                                    <option value="MOR">Morelos</option>
                                    <option value="NAY">Nayarit</option>
                                    <option value="NLE">Nuevo Le&oacute;n</option>
                                    <option value="OAX">Oaxaca</option>
                                    <option value="PUE">Puebla</option>
                                    <option value="QRO">Quer&eacute;taro</option>
                                    <option value="ROO">Quintana Roo</option>
                                    <option value="SLP">San Luis Potos&iacute;</option>
                                    <option value="SIN">Sinaloa</option>
                                    <option value="SON">Sonora</option>
                                    <option value="TAB">Tabasco</option>
                                    <option value="TAM">Tamaulipas</option>
                                    <option value="TLX">Tlaxcala</option>
                                    <option value="VER">Veracruz</option>
                                    <option value="YUC">Yucat&aacute;n</option>
                                    <option value="ZAC">Zacatecas</option>
                                </select>
                                <div class="validation"></div>
                            </div> -->
                            <div class="form-group">
                                <textarea class="form-control" name="message"  id="message" rows="5" data-rule="required"
                                    placeholder="Comentario:"></textarea>
                                <div class="validation"></div>
                            </div>
                            <div class="text-center"><button type="submit">Enviar</button></div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- #contact -->

    </main>

    <!--========================== Footer ============================-->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; <strong>Dámda</strong>
            </div>
        </div>
    </footer>
    <!-- #footer -->

    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jquery-migrate/dist/jquery-migrate.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
    <script src="node_modules/jquery.easing/jquery.easing.min.js"></script>
    <script src="node_modules/wow.js/dist/wow.min.js"></script>
    <script src="node_modules/waypoints/lib/jquery.waypoints.min.js"></script>
    <script src="node_modules/jquery.counterup/jquery.counterup.min.js"></script>
    <script src="node_modules/superfish/dist/js/hoverIntent.js"></script>
    <script src="node_modules/superfish/dist/js/superfish.min.js"></script>

    <!-- Contact Form JavaScript File -->
    <script src="node_modules/owl.carousel/dist/owl.carousel.min.js"></script>
    <script src="js/main.js"></script>
    <script src="https://use.fontawesome.com/releases/v5.11.2/js/all.js" data-auto-replace-svg="nest"></script>
    <script src="mainRegistro.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

    <script>
        $(document).ready(function () {
            $("#myBtn").click(function () {
                $("#myModal").modal();
            });
            $("#myBtnenviar").click(function () {
                $("#myModalenviar").modal();
                // $("#myModalPass").modal();
            });
        //     $("#getmyModalPass").modal('show');

        });
    </script>

    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                loop: true,
                autoplay: true,
                autoPlaySpeed: 500,
                nav: false,
                responsiveClass: true,
                responsive: {
                    0: {
                        items: 1,
                        nav: false
                    },
                    600: {
                        items: 1,
                        nav: false
                    },
                    1000: {
                        items: 1,
                        nav: false,
                        loop: true
                    }
                }
            })
        });
    </script>

</body>

</html>