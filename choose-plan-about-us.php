
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- favicon -->
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <link rel="shortcut icon" type="image/png" href="favicon.png"/>
    <title>Madang</title>

    <!-- style lists -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/hover.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/jquery.bxslider.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.transitions.css" rel="stylesheet">
    <link rel="stylesheet" href="css/feature-carousel.css">
    <link href="css/jquery-ui-1.9.2.custom.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">

    <!-- montserrat font embed -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,700' rel='stylesheet' type='text/css'>

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
<body class="choose-plan-page">

    <!-- loader image before page load starts -->
    <div class="se-pre-con"></div>
    <!-- loader image before page load ends -->

    <!-- main wrapper of the site starts -->
    <div class="wrapper">

        <!-- ============== Header starts ============== -->
        <?php include 'header.php';?>  
        <!-- ============== Header ends ============== -->

        <main>
    

            <!-- =============== plan steps block starts ================== -->
            <section class="plan-step">
                <div class="steps-wrapper" data-wizard-init>

                    <!-- == step navigation starts ==-->
                    
                    <?php $select = 'About You'; include 'choose-plain-step-navigation.php';?> 
                    <!-- == step navigation ends ==-->

                 <!-- top text header starts -->
                <div class="top-top-description">
                    <h3 class="text-uppercase wow fadeInUp text-center text-sp text-lt">DIGITE SEUS DADOS</h3>
                </div>
                <!-- top text header ends -->

                    <!-- == step content starts ==-->
                    <div class="container-fluid">

                        <!-- choose plan about us step starts -->
                        <div class="step1">
                            <div class="col-xs-12 col-sm-6 wow fadeInLeft  left-form">
                                <h5 class="text-uppercase">PREPARAMOS AS SUAS REFEIÇÕES DE FORMA SAUDÁVEL.</h5>
                                <form class="about-us-form" action="/choose-plan-select-program.php">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 pull-left">
                                                <div class="light-font radio-btn radio-btn-men checked">
                                                    <input class="radio-class" type="radio" name="gender" value="Homem" /> <span>Homem</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 pull-right">
                                                <div class="light-font radio-btn radio-btn-women">
                                                    <input class="radio-class" type="radio" name="gender" value="Mulher" /> <span>Mulher</span>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" placeholder="Nome" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="email" placeholder="E-mail" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" placeholder="Endereço" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" placeholder="CEP" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="submit" value="próxima etapa" />
                                    </fieldset>
                                </form>
                            </div>

                            <div class="col-xs-12 col-sm-6 wow fadeInRight right-image">
                                <figure><img src="images/about-us-right-image.jpg" alt="About us image" /></figure>
                            </div>
                        </div>
                        <!-- choose plan about us step ends -->
                    </div>
                    <!-- == step content ends ==-->
                </div>
            </section>
            <!-- =============== plan steps block ends ================== -->
            <!-- whatsap close expand point start -->
            <span id="bottom-main"></span>
            <!-- whatsap close expand point end -->
        </main>


        <!-- ============== footer block starts ============== -->
        <?php include 'footer.php';?>   
        <!-- ============== footer block ends ============== -->


    </div>
    <!-- main wrapper of the site ends -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery-3.1.1.min.js"></script>
    <script src="js/jquery-ui-1.9.2.custom.js"></script>
    <script src="js/modernizr.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/wow.min.js"></script>
    <script src="js/Headroom.js"></script>
    <script src="js/jquery.parallax-1.1.3.js"></script>
    <script src="js/jquery.featureCarousel.js"></script>
    <script src="js/jquery.bxslider.js"></script>
    <script src="js/owl.carousel.js"></script>    
    <script src="js/jquery.waypoints.js"></script>
    <script src="js/jquery.counterup.js"></script>
    <script src="js/main.js"></script>
</body>
</html>