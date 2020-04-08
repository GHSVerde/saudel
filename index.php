<?php 
    require_once('./config.php');
?>
<!DOCTYPE html>
<html lang="<?php echo $config["lang"]?>">
<head>
    <title><?php echo $config["title"]?></title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png?v=1.0.0"/>
    <link rel="shortcut icon" type="image/png" href="favicon.png?v=1.0.0"/>
    <!-- style lists -->
    <link href="css/bootstrap.min.css?v=1.0.0" rel="stylesheet">
    <link href="css/animate.css?v=1.0.0" rel="stylesheet">
    <link href="css/hover.css?v=1.0.0" rel="stylesheet">
    <link href="css/font-awesome.css?v=1.0.0" rel="stylesheet">
    <link href="css/jquery.bxslider.css?v=1.0.0" rel="stylesheet">
    <link href="css/owl.carousel.css?v=1.0.0" rel="stylesheet">
    <link href="css/owl.transitions.css?v=1.0.0" rel="stylesheet">
    <link rel="stylesheet" href="css/feature-carousel.css?v=1.0.0">
    <link href="css/jquery-ui-1.9.2.custom.css?v=1.0.0" rel="stylesheet">
    <link href="css/style.css?v=1.0.9" rel="stylesheet">

    <!-- montserrat font embed -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,700?v=1.0.0' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <style>
        /******* loader image before page load ******/
        .no-js #loader {display: none;}.js #loader { display: block; position: absolute; left: 100px; top: 0;}.se-pre-con {position: fixed;left: 0px;top: 0px;width: 100%;height: 100%;z-index: 9999;background: url(images/Preloader_4.gif) center no-repeat #fff;}
    </style>
</head>
<body class="home-page home-version1-page">
    <!-- loader image before page load starts -->
    <div class="se-pre-con"></div>
    <!-- loader image before page load ends -->
    <!-- main wrapper of the site starts -->
    <div class="wrapper">

        <!-- ============== Header starts ============== -->
        <?php include 'header.php';?>   
        <!-- ============== Header ends ============== -->

        <!-- ============== Banner starts ============== -->
        <section class="banner home-banner home-banner1">
            <div class="bannerwrap">

                <div id="owl-demo">
                    <div class="item">
                        <!-- <div class="row"> -->
                            <img src="images/home-banner-soupe-1.jpg?v=2.0.1" alt="Owl Image">
                            <div class="container">
                                <div class="banner-text text-left">
                                    <h1 class="text-capitalize">Se Mantenha Saudável Por <span>Dentro e Por Fora.</span></h1>
                                    <!-- <p>Entregamos alimentos saudáveis e prontos para comer. Basta escolher o seu próprio menu que você gosta.</p> -->
                                    <a href="/escolha-seu-plano-sobre.php" class="btn">Peça Já</a>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="item">
                        <!-- <div class="row"> -->
                            <img src="images/home-banner-soupe-2.jpg?v=1.0.0" alt="Owl Image">
                            <div class="container">
                                <div class="banner-text text-left">
                                    <h1 class="text-capitalize">Comidas Saudáveis, <span>Para o seu dia a dia.</span></h1>
                                    <!-- <p>Entregamos alimentos saudáveis e prontos para comer. Basta escolher o seu próprio menu que você gosta.</p> -->
                                    <a href="/escolha-seu-plano-sobre.php" class="btn">Peça Já</a>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                    <div class="item">
                        <!-- <div class="row"> -->
                            <img src="images/home-banner3.jpg?v=1.0.0" alt="Owl Image">
                            <div class="container">
                                <div class="banner-text text-center">
                                    <h1 class="text-capitalize">Comida Saudável Vem De <span>Ingredientes Saudáveis</span></h1>
                                    <a href="/#MENU" class="btn">Veja nosso Menu</a>
                                </div>
                            </div>
                        <!-- </div> -->
                    </div>
                </div>
            </div>
        </section>
        <!-- ============== Baner ends ============== -->

        <main>
            <!-- ============== how it works block starts ============== -->
            <section class="block how-it-works-block p-r" >
                <div class="anchor" id="COMO-FUNCIONA" style="top: -75px;"></div>
                <div class="container">
                    <div class="top-text text-center wow fadeInUp">
                        <h4 class="text-uppercase text-lt text-sp" >COMO FUNCIONA</h4>
                    </div>
                    <div class="row">
                        <div class="col-xs-12 col-sm-4 choose wow fadeInLeft">
                            <div class="feature-item-wrap text-center">
                                <figure><img class="img-responsive" src="images/meal.svg?v=1.0.0" alt="Meal icon" /></figure>
                                <h5><a class="text-lt"  href="#COMO-FUNCIONA">Escolha O Seu Objetivo</a></h5>
                                <p>Escolha qual será o seu objetivo e faça o pedido on-line ou por telefone.</p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 deliver wow fadeInUp">
                            <div class="feature-item-wrap text-center">
                                <figure><img class="img-responsive" src="images/delivery.svg?v=1.0.0" alt="Delivery icon" /></figure>
                                <h5><a class="text-lt" href="#COMO-FUNCIONA">Entregamos Suas Refeições</a></h5>
                                <p>Preparamos e entregamos as refeições à sua porta. </p>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-4 eat wow fadeInRight">
                            <div class="feature-item-wrap text-center">
                                <figure><img class="img-responsive" src="images/eat-enjoy.svg?v=1.0.0" alt="Eat and enjoy icon" /></figure>
                                <h5><a class="text-lt" href="#COMO-FUNCIONA">Coma E Aproveite</a></h5>
                                <p>Desfrute de suas refeições saudáveis ​​com sua família, sem precisar de cozinhar.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============== how it works block starts ============== -->

            <!-- ============== featured menu block starts ============== -->
            <section class="block featured-menu-block p-r">
                <div class="anchor" id="MENU" style="top: -100px;"></div>
                <div class="container">
                    <!-- == top text header starts == -->
                    <div class="wow fadeInUp top-text-header text-center">
                        <h4 class="text-uppercase text-lt text-sp">NOSSO MENU EM DESTAQUE</h4>
                    </div>
                    <!-- == top text header ends == -->
                </div>

                <!-- == featured menu slider starts == -->
                <div class="wow fadeInUp featured-menu-slider">
                    <div class="container">
                        <ul class="bxslider1 row">
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/sopa-image-1.jpg?v=1.0.0" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Sopa de vegetais</h6>
                                        <span>Duis autem vel eum iriure</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/sopa-image-2.jpg?v=1.0.0" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Sopa da cultura do leste asiático</h6>
                                        <span>Duis autem vel eum iriure</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/sopa-image-3.jpg?v=1.0.0" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Sopa de quinoa de frango</h6>
                                        <span>Duis autem vel eum iriure</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/sopa-image-4.jpg?v=1.0.0" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Sopa verde</h6>
                                        <span>Duis autem vel eum iriure</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/sopa-image-5.jpg?v=1.0.0" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Sopa de Legumes com Frango - 1</h6>
                                        <span>Duis autem vel eum iriure</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/sopa-image-6.jpg?v=1.0.0" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Sopa de Legumes com Frango - 2</h6>
                                        <span>Duis autem vel eum iriure</span>
                                    </div>
                                </a>
                            </li>
                            <li class="col-xs-12 col-sm-3">
                                <a href="#">
                                    <figure><img src="images/sopa-image-7.jpg?v=1.0.0" alt="Featured image" /></figure>
                                    <div class="menu-info">
                                        <h6 class="text-capitalize text-lt text-sp">Sopa de cebola</h6>
                                        <span>Duis autem vel eum iriure</span>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- == featured menu slider ends == -->
            </section>
            <!-- ============== featured menu block ends ============== -->

            <!-- ============== select program block starts ============== -->
            <section class='block select-program-block' style="display: none">
                <div class='container'>
                    <div class='row'>
                        <div class="col-xs-12 col-sm-6 wow fadeInLeft left-image-block">
                            <figure><img class="img-responsive" src="images/select-program-image.png?v=1.0.0" alt="Select program image" /></figure>
                        </div>
                        <div class="col-xs-12 col-sm-6 wow fadeInRight pull-right right-form-block">
                            <h3 class='text-uppercase text-sp'>SELECIONE UM OBJETIVO PARA AJUSTAR<br />SEU ESTILO DE VIDA</h3>
                            <form>
                                <fieldset>
                                    <div class="select weight-loss text-lt text-sp">
                                        <select>
                                            <option value="">Perda de peso</option>
                                            <option>Treino &amp; Desempenho</option>
                                            <!-- <option>Weight Loss &amp; Fitness</option> -->
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="select healthy-lifestyle">
                                        <select>
                                            <option>Vegetariano</option>
                                            <option>Colesterol baixo</option>
                                            <option>Livre de glúten</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <div class="select specialty-menus">
                                        <select>
                                            <option>Nova mamãe</option>
                                            <option>Primeira idade</option>
                                            <option>Segunda idade</option>
                                            <option>Terceira idade</option>
                                            <option>Quarta idade</option>
                                        </select>
                                    </div>
                                </fieldset>
                                <fieldset>
                                    <input type='submit' class='btn hvr-wobble-horizontal text-lt text-sp' value='Selecionar Todos Objetivos' />
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============== select program block ends ============== -->

            <!-- ============== pricing block starts ============== -->
            <section class="block pricing-block" style="display: none;">
                <div class="container">

                    <!-- top header text starts -->
                    <div class="top-text-header text-center">
                        <h4 class="wow fadeInUp text-center animated text-uppercase text-lt text-sp" style="visibility: visible; animation-name: fadeInUp;">COMPARE PRICING</h4>
                        <div class="text-center  wow flipInX animated" style="visibility: visible; animation-name: flipInX;">
                            <span class="select-program-title">Select Program</span>
                            <select class="select-program text-lt text-sp">
                                <option value="">Accelerated Weight Loss</option>
                                <option value="">Accelerated Weight Gain</option>
                                <option value="">Accelerated Protein Free</option>
                                <option value="">Accelerated Weight Loss</option>
                            </select>
                        </div>
                    </div>
                    <!-- top header text ends -->

                    <!-- == pricing box starts == -->
                    <div class="row">

                        <!-- pricing box single starts -->
                        <div class="col-xs-12 col-sm-4 wow fadeInLeft pricing-box">
                            <div class="text-center price-box-wrap">
                                <h5 class="text-lt">2 WEEK PROGRAM</h5>
                                <div class="price-per-day">
                                    <span class="price">$39</span>
                                    <span class="per-day">/day</span>
                                </div>
                                <p>Meals for Breakfast, Lunch, Dinner and Snack with 4 Week Rotation</p>
                                <p>Calories<br />Female 1150-1350, Male 1300-1600</p>
                                <p>Protein Customization<br />Limited Protein Customization</p>
                                <a href="#" class="btn box-btn order-now-btn test-uppercase text-sp">order now</a>
                            </div>
                        </div>
                        <!-- pricing box single ends -->

                        <!-- pricing box single starts -->
                        <div class="col-xs-12 col-sm-4 pricing-box wow fadeInUp popular">
                            <div class="text-center price-box-wrap">
                                <h5 class="text-lt">3 WEEK PROGRAM</h5>
                                <div class="price-per-day">
                                    <span class="price">$41</span>
                                    <span class="per-day">/day</span>
                                </div>
                                <p>Meals for Breakfast, Lunch, Dinner and Snack with 4 Week Rotation</p>
                                <p>Calories<br />Female 1150-1350, Male 1300-1600</p>
                                <p>Protein Customization<br />Limited Protein Customization</p>
                                <a href="#" class="btn box-btn order-now-btn test-uppercase text-sp">order now</a>
                            </div>
                        </div>
                        <!-- pricing box single ends -->

                        <!-- pricing box single starts -->
                        <div class="col-xs-12 col-sm-4 wow fadeInRight pricing-box">
                            <div class="text-center price-box-wrap">
                                <h5 class="text-lt">4 WEEK PROGRAM</h5>
                                <div class="price-per-day">
                                    <span class="price">$43</span>
                                    <span class="per-day">/day</span>
                                </div>
                                <p>Meals for Breakfast, Lunch, Dinner and Snack with 4 Week Rotation</p>
                                <p>Calories<br />Female 1150-1350, Male 1300-1600</p>
                                <p>Protein Customization<br />Limited Protein Customization</p>
                                <a href="#" class="btn box-btn order-now-btn test-uppercase text-sp">order now</a>
                            </div>
                        </div>
                        <!-- pricing box single ends -->
                    </div>
                    <!-- pricing box ends -->
                </div>
            </section>
            <!-- ============== pricing block ends ============== -->

            <!-- ============== full width video block starts ============== -->
            <section class="full-width-video">
                <div class="video-wrap">
                    <img class="video-bg" alt="Saudel, video de apresentção" src="images/video-bg.jpg?v=1.0.0">
                    <video id="bg-video" preload="auto" muted>
                        <source src="media/video.mp4?v=1.0.0" type="video/mp4" />
                        <source src="media/video.ogv?v=1.0.0" type="video/ogg" />
                        <source src="media/video.webm?v=1.0.0" type="video/webm" />
                        Your browser doesn't support HTML5 video. Here's a <a href="#">link</a> to download the video.
                    </video>

                    <div class="video-text text-center video-controls">
                        <a href="#" class="play-btn" id="play-btn"><img src="images/play-btn.svg?v=1.0.0" alt="Play button" /></a>
                        <h2 class="text-lt text-sp">VEJA COMO PREPARAMOS A SUA REFEIÇÃO</h2>
                    </div>
                </div>
            </section>
            <!-- ============== full width video block ends ============== -->

            <!-- ============== team member block starts ============== -->
            <section class="block team-member-block p-r">
                <div class="anchor" id="SOBRE" style="top: -70px;"></div>
                <div class="container">
                    <!-- == top header text starts == -->
                    <div class="top-text-header wow fadeInUp text-center">
                        <h4 class="text-uppercase text-lt text-sp">A Saudel</h4>
                        <p>Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit.</p>
                    </div>
                    <!-- == top header text ends == -->

                    <!-- == team member wrapper starts == -->
                    <div class="row text-center">
                        <!-- team member single starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 wow fadeInLeft team-member-col">
                            <div class="text-center member-wrap">
                                <div class="member-info">
                                    <figure><a href="#"><img src="images/member1.jpg?v=1.0.0" alt="Member images" /></a></figure>
                                    <h6 class="text-uppercase"><a class="text-lt text-sp" href="#">JULIA SILVA</a></h6>
                                    <span class="designation text-capitalize">Fundadora &amp; Nutricionista</span>
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter hvr-wobble-top"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- team member single ends -->

                        <!-- team member single starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 wow fadeInUp team-member-col">
                            <div class="text-center member-wrap">
                                <div class="member-info">
                                    <figure><a href="#"><img src="images/member2.jpg?v=1.0.0" alt="Member images" /></a></figure>
                                    <h6 class="text-uppercase"><a class="text-lt text-sp" href="#">RAUL PEREIRA</a></h6>
                                    <span class="designation text-capitalize">Fundador &amp; Cozinheiro Chefe</span>
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter hvr-wobble-top"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- team member single ends -->

                        <!-- team member single starts -->
                        <div class="col-xs-12 col-sm-4 col-md-3 wow fadeInRight team-member-col">
                            <div class="text-center member-wrap">
                                <div class="member-info">
                                    <figure><a href="#"><img src="images/member3.jpg?v=1.0.0" alt="Member images" /></a></figure>
                                    <h6 class="text-uppercase"><a class="text-lt text-sp" href="#">THERESA MEYER</a></h6>
                                    <span class="designation text-capitalize text-lt text-sp">Cozinheira</span>
                                </div>
                                <div class="social-links">
                                    <ul>
                                        <li><a href="#"><i class="fa fa-facebook hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-google-plus hvr-wobble-top"></i></a></li>
                                        <li><a href="#"><i class="fa fa-twitter hvr-wobble-top"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- team member single ends -->
                    </div>
                    <!-- == team member wrapper ends == -->
                </div>
            </section>
            <!-- ============== team member block ends ============== -->

            <!-- ============== blog block starts ============== -->
            <section class="blog-block p-r" >
                <div class="anchor" id="NOTICIAS" style="top: -30px;"></div>
                <div class="container">
                    <!-- == top header text starts == -->
                    <div class="top-text-header text-center wow fadeInUp">
                        <h4 class="text-uppercase text-lt text-sp">Notícias</h4>
                    </div>
                    <!-- == top header text ends == -->

                    <!-- == blog row starts == -->
                    <div class="row">
                        <!-- blog single starts -->
                        <div class="col-xs-12 col-sm-4 wow fadeInLeft blog-single">
                            <div class="blog-single-wrap">
                                <figure><a href="#"><img src="images/blog-image1.jpg?v=1.0.0" alt="Blog image" /></a></figure>
                                <div class="blog-description">
                                    <h6 class="text-uppercase"><a href="#" class="text-lt text-sp">5 ALIMENTOS QUE PARECEM SAUDÁVEIS, MAS NÃO SÃO</a></h6>
                                    <span class="posted-date">Postado 27 de maio de 2020</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <!-- <span class="comments-count">10 Comentários</span> -->
                                    <a href="#" class="text-capitalize pull-right read-more-btn text-lt text-sp">leia mais</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog single ends -->

                        <!-- blog single starts -->
                        <div class="col-xs-12 col-sm-4 wow fadeInUp blog-single">
                            <div class="blog-single-wrap">
                                <figure><a href="#"><img src="images/blog-image2.jpg?v=1.0.0" alt="Blog image" /></a></figure>
                                <div class="blog-description">
                                    <h6 class="text-uppercase"><a href="#" class="text-lt text-sp">6 DICAS PARA FAZER PALEO EATING FÁCIL + ACESSÍVEL</a></h6>
                                    <span class="posted-date">Postado 27 de maio de 2020</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <!-- <span class="comments-count">8 Comentários</span> -->
                                    <a href="#" class="text-capitalize pull-right read-more-btn text-lt text-sp">leia mais</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog single ends -->

                        <!-- blog single starts -->
                        <div class="col-xs-12 col-sm-4 wow fadeInRight blog-single">
                            <div class="blog-single-wrap">
                                <figure><a href="#"><img src="images/blog-image3.jpg?v=1.0.0" alt="Blog image" /></a></figure>
                                <div class="blog-description">
                                    <h6 class="text-uppercase"><a href="#" class="text-lt text-sp">5 BOLINHOS SIMPLES E SAUDÁVEIS SEM GLÚTEN</a></h6>
                                    <span class="posted-date">Postado 27 de maio de 2020</span>
                                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
                                    <!-- <span class="comments-count">21 Comentários</span> -->
                                    <a href="#" class="text-capitalize pull-right read-more-btn text-lt text-sp">leia mais</a>
                                </div>
                            </div>
                        </div>
                        <!-- blog single ends -->

                    </div>
                    <!-- == blog row ends == -->
                </div>
            </section>
            <!-- ============== blog block ends ============== -->

            <!-- ============== download app block starts ============== -->
            <section class="download-app-block" style="display: none;">
                <div class="container">
                    <!-- left image starts -->
                    <div class="wow fadeInLeft left-mobile">
                        <figure><img src="images/mobile-phone.png?v=1.0.0" alt="Mobile phone" /></figure>
                    </div>
                    <!-- left image ends -->

                    <!-- right text starts -->
                    <div class="wow fadeInRight download-app-text">
                        <div class="download-app-wrap">
                            <h4><a href="#" class="text-lt text-sp">Download the app</a></h4>
                            <h1 class="text-lt text-sp">Choose. Eat. Enjoy</h1>
                            <p>Nam liber tempor csoluta nobis eleifnd option congue nihil imperdiet doming iquod mazim placerat facer possim assum lorem ipsum dolor possim assum lorem ipsum dolor.</p>
                            <div class="download-from">
                                <a href="#" data-toggle="modal" data-target=".download-popup"><img src="images/app-store.png?v=1.0.0" alt="App store" /></a>
                                <a href="#" data-toggle="modal" data-target=".download-popup"><img src="images/google-play.png?v=1.0.0" alt="Google Play" /></a>
                            </div>
                        </div>
                    </div>
                    <!-- right text ends -->
                </div>
            </section>
            <!-- ============== download app block ends ============== -->

            <!-- ============== testimonials block starts ============== -->
            <section class="testimonials-block p-r">
                <div class="anchor" id="FAQ" style="top: -125px;"></div>
                <div class="container">
                    <div class="text-center wow fadeInRight testimonials">
                        <ul class="bxslider">
                            <li>
                                <h3 class="text-sp">A Saudel é impressionante!! Refeições deliciosas e saudáveis!</h3>
                                <p>Lorem ipsum ab veniam, dolorum maxime error velit sapiente corrupti consectetur? Cupiditate eaque iusto quidem sed?</p>
                                <div class="testimonial-author">
                                    <figure><img src="images/profile-picture.jpg?v=1.0.0" alt="foto de perfil Emanuelle Mazaro" /></figure>
                                    <span class="writer text-sp">Emanuelle Mazaro</span>
                                </div>
                            </li>
                            <li>
                                <h3 class="text-sp">A Saudel é incrível!!</h3>
                                <p>Lorem ipsum dolor sit, amet consectetur Dolorum eaque expedita vel ipsa placeat ipsam cupiditate, obcaecati autem, possimus cum doloremque ex quibusdam sit.</p>
                                <div class="testimonial-author">
                                    <figure><img src="images/profile-picture-2.jpg?v=1.0.0" alt="foto de perfil Fernanda Marques" /></figure>
                                    <span class="writer text-sp">Fernanda Marques</span>
                                </div>
                            </li>
                            <li>
                                <h3 class="text-sp">impressionante! Refeições saudáveis e frescas além de serem deliciosas!</h3>
                                <p>Lorem ipsum ab veniam, dolorum maxime error velit sapiente corrupti consectetur? Cupiditate eaque iusto quidem sed?</p>
                                <div class="testimonial-author">
                                    <figure><img src="images/profile-picture-3.jpg?v=1.0.0" alt="foto de perfil Bruna Silva" /></figure>
                                    <span class="writer text-sp">Bruna Silva</span>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <!-- ============== testimonials block ends ============== -->

            <!-- ============== instagram block starts ============== -->
            <?php include 'instagram.php';?>   
            <!-- ============== instagram block starts ============== -->

            <!-- ============== Subscribe block starts ============== -->
            <section class="block subscribe-block text-center">
                <div class="container">
                    <div class="subscribe-wrap">
                        <div class="top-text wow fadeInUp text-sp text-lt">
                        Oferecemos as últimas ofertas em sua caixa de entrada. Seja o primeiro!
                        </div>
                        <div class="subscribe-form wow fadeInDown">
                            <form>
                                <input type="text" class="text-spx text-lt" placeholder="Digite o seu e-mail ">
                                <button type="button" class="btn text-uppercase wow flipInX" data-toggle="modal" data-target=".newsletter-popup-none">Inscrever-se</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ============== Subscribe block ends ============== -->

            <!-- ============== media partner wrap starts ============== -->
            <div class="media-partner" style="display: none;">
                <div class="container">
                    <div class="col-xs-6 col-sm-3 partner-item wow fadeInUp">
                        <figure><img class="img-responsive" src="images/audiojungle.png?v=1.0.0" alt="Audio jungle" /></figure>
                    </div>
                    <div class="col-xs-6 col-sm-3 partner-item wow fadeInUp">
                        <figure><img class="img-responsive" src="images/graphicriver.png?v=1.0.0" alt="Graphic river" /></figure>
                    </div>
                    <div class="col-xs-6 col-sm-3 partner-item wow fadeInUp">
                        <figure><img class="img-responsive" src="images/themeforest.png?v=1.0.0" alt="Themeforest" /></figure>
                    </div>
                    <div class="col-xs-6 col-sm-3 partner-item wow fadeInUp">
                        <figure><img class="img-responsive" src="images/photodune.png?v=1.0.0" alt="Photodune" /></figure>
                    </div>
                </div>
            </div>
            <!-- ============== media partner wrap ends ============== -->
 
        <!-- Download pop up starts -->
        <div class="download-popup modal fade" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close hvr-wobble-vertical" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                <path d="M29.02,4.98A17,17,0,1,0,4.98,29.02,17,17,0,1,0,29.02,4.98ZM27.654,27.654A15.066,15.066,0,0,1,6.346,6.346,15.066,15.066,0,0,1,27.654,27.654ZM24.491,9.509a0.963,0.963,0,0,0-1.367,0L17,15.633,10.875,9.509a0.966,0.966,0,0,0-1.367,1.367L15.633,17,9.509,23.125a0.97,0.97,0,0,0,.68,1.653,0.943,0.943,0,0,0,.68-0.286l6.124-6.125,6.125,6.125a0.972,0.972,0,0,0,.68.286,0.931,0.931,0,0,0,.68-0.286,0.963,0.963,0,0,0,0-1.367L18.367,17l6.125-6.125A0.963,0.963,0,0,0,24.491,9.509Z" fill="#60ba62"/>
                            </svg>
                        </span>
                    </button>                        
                    <div class="modal-body">
                        <!-- left image starts -->
                        <div class="left-mobile">
                            <figure><img src="images/mobile-phone-big.png?v=1.0.0" alt="Mobile phone" /></figure>
                        </div>
                        <!-- left image ends -->

                        <!-- right text starts -->
                        <div class="download-app-text">
                            <div class="download-app-wrap">
                                <h4><a href="#">Download the app</a></h4>
                                <h1>Choose. Eat. Enjoy</h1>
                                <p>Nam liber tempor csoluta nobis eleifnd option congue nihil imperdiet doming iquod mazim placerat facer possim assum lorem ipsum dolor possim assum lorem ipsum dolor.</p>
                                <div class="contact-block">
                                    <form>
                                        <fieldset>
                                            <input type="tel" placeholder="Your Phone Number" />
                                        </fieldset>
                                        <fieldset>
                                            <input type="submit" value="text me the link" />
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="download-from">
                                    <a href="#"><img src="images/app-store.png?v=1.0.0" alt="App store" /></a>
                                    <a href="#"><img src="images/google-play.png?v=1.0.0" alt="Google Play" /></a>
                                </div>
                            </div>
                        </div>
                        <!-- right text ends -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Download pop up ends -->

        <!-- Newsletter pop up starts -->
        <div class="newsletter-popup modal fade" tabindex="-1" role="dialog" style="display: none;"> 
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <button type="button" class="close hvr-wobble-vertical" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">
                            <svg xmlns="http://www.w3.org/2000/svg" width="34" height="34" viewBox="0 0 34 34">
                                <path d="M29.02,4.98A17,17,0,1,0,4.98,29.02,17,17,0,1,0,29.02,4.98ZM27.654,27.654A15.066,15.066,0,0,1,6.346,6.346,15.066,15.066,0,0,1,27.654,27.654ZM24.491,9.509a0.963,0.963,0,0,0-1.367,0L17,15.633,10.875,9.509a0.966,0.966,0,0,0-1.367,1.367L15.633,17,9.509,23.125a0.97,0.97,0,0,0,.68,1.653,0.943,0.943,0,0,0,.68-0.286l6.124-6.125,6.125,6.125a0.972,0.972,0,0,0,.68.286,0.931,0.931,0,0,0,.68-0.286,0.963,0.963,0,0,0,0-1.367L18.367,17l6.125-6.125A0.963,0.963,0,0,0,24.491,9.509Z" fill="#60ba62"/>
                            </svg>
                        </span>
                    </button>                        
                    <div class="modal-body">
                        <div class="newsletter-inner">
                            <!-- <h1 class="text-uppercase"><strong>BE THE LUCKY WINNER</strong></h1>
                            <h2 class="text-uppercase">AND GET FREE MADANG PREMIUM MEALS</h2> -->
                            <p>Oferecemos as últimas ofertas em sua caixa de entrada. Seja o primeiro!</p>
                            <div class="newsletter-subscribe-form">
                                <form>
                                    <fieldset>
                                        <input type="text" placeholder="Drop your e-mail here" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="submit" value="submit" />
                                    </fieldset>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Newsletter pop up ends -->

        <!-- whatsap close expand point start -->
        <span id="bottom-main"></span>
        <!-- whatsap close expand point end -->
    </main>
        <!-- ============== footer block starts ============== -->
    <?php include 'footer.php';?>    
    <!-- main wrapper of the site ends -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js?v=1.0.0"></script>
    <script src="js/jquery-ui-1.9.2.custom.js?v=1.0.0"></script>
    <script src="js/modernizr.js?v=1.0.0"></script>
    <script src="js/bootstrap.min.js?v=1.0.0"></script>
    <script src="js/wow.min.js?v=1.0.0"></script>
    <script src="js/Headroom.js?v=1.0.0"></script>
    <script src="js/jquery.parallax-1.1.3.js?v=1.0.0"></script>
    <script src="js/jquery.featureCarousel.js?v=1.0.0"></script>
    <script src="js/jquery.bxslider.js?v=1.0.0"></script>
    <script src="js/owl.carousel.js?v=1.0.0"></script>    
    <script src="js/jquery.waypoints.js?v=1.0.0"></script>
    <script src="js/jquery.counterup.js?v=1.0.0"></script>
    <script src="js/main.js?v=1.0.0"></script>
</body>
</html>