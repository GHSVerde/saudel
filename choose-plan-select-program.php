
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
                <div class="steps-wrapper">

                    <!-- == step navigation starts ==-->
                    <?php $select = 'Select Program'; include 'choose-plain-step-navigation.php';?> 
                    <!-- == step navigation ends ==-->

                    <!-- == step content starts ==-->
                    <div class="container-fluid">

                        <!-- choose plan select program step starts -->
                        <div class="step2">
                            <div class="container">
                                <!-- top text header starts -->
                                <div class="top-top-description">
                                    <h3 class="text-uppercase wow fadeInUp text-center text-sp text-lt">SELECIONAR OBJETIVO</h3>
                                </div>
                                <!-- top text header ends -->

                                <!-- Select program buttons block starts -->
                                <div class="row select-program-btns">
                                    <div class="col-xs-12 col-sm-4 wow fadeInLeft select-program-btn">
                                        <a href="#">
                                            <img class="img-responsive" src="images/weight-loss.svg" alt="Weight loss icon" /> <span>Perda de peso</span>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 wow fadeInUp select-program-btn">
                                        <a href="#">
                                            <img class="img-responsive" src="images/low-colestrol-icon.svg" alt="Low Colesterol Icon"> <span>Colesterol baixo</span>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 wow fadeInRight select-program-btn">
                                        <a href="#">
                                            <img class="img-responsive" src="images/fitness-icon.svg" alt="Fitness &amp; Performance Icon"> <span>Treino &amp; Desempenho</span>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 wow fadeInLeft select-program-btn">
                                        <a href="#">
                                            <img class="img-responsive" src="images/vegeterian-icon.svg" alt="Vegeterian Icon"> <span>Vegetariano</span>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 wow fadeInUp select-program-btn">
                                        <a href="#">
                                            <img class="img-responsive" src="images/gulten-free-icon.svg" alt="Gluten Free Icon"> <span>Livre de glúten</span>
                                        </a>
                                    </div>
                                    <div class="col-xs-12 col-sm-4 wow fadeInRight select-program-btn">
                                        <a href="#">
                                            <img class="img-responsive" src="images/new-mom-icon.svg" alt="New Mom Icon"> <span>Nova mamãe</span>
                                        </a>
                                    </div>
                                </div>

                                <div class="text-center big-buttons-group">
                                    <a class="btn border-btn-x-big hvr-wobble-horizontal" href="/choose-plan-about-us.php">Etapa Anterior</a>
                                    <a class="btn btn-x-big hvr-wobble-horizontal" href="/choose-plan-review.php">Proxima Etapa</a>
                                </div>
                                <!-- Select program buttons block ends -->
                            </div>


                        </div>
                        <!-- choose plan select program step ends -->
                    </div>
                    <!-- == step content ends ==-->
                </div>
            </section>
            <br>
            <!-- =============== plan steps block ends ================== -->
                    <!-- ============== footer block starts ============== -->
         
        <!-- ============== footer block ends ============== -->
        </main>

        <?php include 'footer.php';?> 



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