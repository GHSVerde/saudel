
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
            <!-- =============== choose your own plan title block starts ================== -->
            <section class="choose-plan-block">
                <div class="container">
                    <h5 class="text-center wow fadeInUp text-uppercase">CHOOSE YOUR OWN PLANS</h5>
                </div>
            </section>                
            <!-- =============== choose your own plan title block ends ================== -->     

            <!-- =============== plan steps block starts ================== -->
            <section class="plan-step">
                <div class="steps-wrapper">

                    <!-- == step navigation starts ==-->
                    <?php $select = 'Review'; include 'choose-plain-step-navigation.php';?> 
                    <!-- == step navigation ends ==-->

                 <!-- top text header starts -->
                 <div class="top-top-description">
                    <h3 class="text-uppercase wow fadeInUp text-center text-sp text-lt">VERIFIQUE SEUS DADOS</h3>
                </div>
                <!-- top text header ends -->


                    <!-- == step content starts ==-->
                    <div class="container-fluid">
                        <!-- choose plan about us step starts -->
                        <div class="step1" style="display: none;">
                            <div class="col-xs-12 col-sm-6 wow fadeInUp left-form">
                                <h5 class="text-uppercase">TELL US ABOUT YOU, WE CAN PREPARED YOUR HEALTHY MEALS AS WELL</h5>
                                <form class="about-us-form">
                                    <fieldset>
                                        <div class="row">
                                            <div class="col-xs-12 col-sm-6 pull-left">
                                                <div class="light-font radio-btn radio-btn-men">
                                                    <input type="radio" name="gender" value="men" checked /> <span>Men</span>
                                                </div>
                                            </div>
                                            <div class="col-xs-12 col-sm-6 pull-right">
                                                <div class="light-font radio-btn radio-btn-women">
                                                    <input type="radio" name="gender" value="women" /> <span>Women</span>
                                                </div>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" placeholder="Full Name" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="email" placeholder="E-mail" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" placeholder="Address" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="text" placeholder="ZIP Code" />
                                    </fieldset>
                                    <fieldset>
                                        <input type="submit" value="next" />
                                    </fieldset>
                                </form>
                            </div>

                            <div class="col-xs-12 col-sm-6 wow fadeInUp right-image">
                                <figure><img src="images/about-us-right-image.jpg" alt="About us image" /></figure>
                            </div>
                        </div>
                        <!-- choose plan about us step ends -->



                        <!-- choose plan review step starts -->
                        <div class="step3">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12 col-sm-6 wow fadeInLeft review-left">
                                        <div class="review-info">
                                            <div class="title name">
                                                <span>Seu Nome</span>
                                                <span>Rebecca Lawson</span>
                                            </div>
                                            <div class="title gender">
                                                <span>Gênero</span>
                                                <span>Feminino</span>
                                            </div>
                                            <div class="title email">
                                                <span>Email</span>
                                                <span>Rebeca@gmail.com</span>
                                            </div>
                                            <div class="title address">
                                                <span>Address</span>
                                                <span>Rua Cerro Corá, 580, São Paulo - SP<br />05061-100</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-xs-12 col-sm-6 wow fadeInRight review-right">
                                        <div class="review-info">
                                            <div class="title program">
                                                <span>Seu Objetivo</span>
                                                <span>Perda de peso</span>
                                            </div>
                                            <!-- <div class="title plan">
                                                <span>Plan</span>
                                                <span>3 Weeks</span>
                                                <p>Meals for Breakfast, Lunch, Dinner and Snack with 4 Week Rotation</p>
                                                <p>Calories<br />Female 1150-1350, Male 1300-1600</p>
                                                <p>Protein Customization<br />Limited Protein Customization</p>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center big-buttons-group">
                                    <a class="btn border-btn-x-big hvr-wobble-horizontal">Editar Dados</a>
                                    <a class="btn btn-x-big hvr-wobble-horizontal">Enviar Plano</a>
                                </div>
                            </div>
                        </div>
                        <!-- == step content ends ==-->
                    </div>
                </div>
            </section>
            <!-- =============== plan steps block ends ================== -->
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