<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>Narbelys Oropeza- Web page</title>
    <meta name="description" content="I am Narbelys Oropeza Developer & Webdesign">
    <meta name="keywords" content="Developer, Webdesign, Universidad Simón Bolívar, interface, 
                                    Venezuela, work, specialist, job, Photoshop, design, Front-End, 
                                    FrontEnd, HTML5, CSS3, Bootstrap 3, Angularjs, Jquery, Logic, Django,
                                    PHP, Database, MYSQL, PostgreSQL, landing page">
    <meta name="author" content="Narbelys Oropeza">
    <link rel="stylesheet" href="css/bootstrap.css">

    <script async="" src="//www.google-analytics.com/analytics.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js" type="text/javascript" charset="utf-8"></script>
    <link href='http://fonts.googleapis.com/css?family=Droid+Sans' rel='stylesheet' type='text/css'>
    <link href="fonts/font-awesome-4.0.3/css/font-awesome.css" rel="stylesheet">



    <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.4/themes/smoothness/jquery-ui.css">
    <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
    <script src="http://code.jquery.com/ui/1.10.4/jquery-ui.js"></script>


    <script type="text/javascript" src="mixitup-1.5.5/jquery.ui.touch-punch.min.js"></script>
    <script type="text/javascript" src="mixitup-1.5.5/jquery.mixitup.min.js"></script>

    <link rel="stylesheet" type="text/css" href="css/component.css" />
    <script src="js/modernizr.custom.js"></script>
    <script src="js/bootstrap.js"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="shortcut icon" href="img/Narbe.png">
    

    <script>
        $(function() {

          $("#sendmail").click(function(){
            var name= $("#contact-name").val();
            var email= $("#contact-email").val();
            var comment= $("#contact-message").val();
            var msg = "New comment from: "+name+"\n Contact Email: "+email+" The comment is: \n\n"+comment+""; 
            $.post( "./send.php", { to: "narbelys@gmail.com", subject: "New Comment La Venezolana",txt: msg } ).success(function(){
            $("#form").find("input[type=text], input[type=email], textarea").val("");
             $("#success").removeClass("hidden");
            });
          })
            
            
            $('#Deck').mixitup({

                effects: ['fade'],

            });



            $('body').scrollspy({
                target: '#my-nav'
            });



            $('[data-spy="scroll"]').each(function() {
                var $spy = $(this).scrollspy('refresh')
            });


            $('#homeM').click(function() { //Id del elemento cliqueable

                $('.active').removeClass("active")
                $(this).addClass("active");
                $('html, body').animate({
                    scrollTop: $("#home").offset().top
                }, 'slow');
                return false;
            });

            $('#aboutM').click(function() { //Id del elemento cliqueable
                $('.active').removeClass("active")
                $(this).addClass("active");
                $('html, body').animate({
                    scrollTop: $("#about").offset().top
                }, 'slow');
                return false;
            });

            $("#draggable").draggable();

            $('#servicesM').click(function() { //Id del elemento cliqueable
                $('.active').removeClass("active")
                $(this).addClass("active");
                $('html, body').animate({
                    scrollTop: $("#services").offset().top
                }, 'slow');
                return false;
            });


            $('#portfolioM').click(function() { //Id del elemento cliqueable
                $('.active').removeClass("active")
                $(this).addClass("active");
                $('html, body').animate({
                    scrollTop: $("#portfolio").offset().top
                }, 'slow');
                return false;
            });
            $('#skillsM').click(function() { //Id del elemento cliqueable
                $('.active').removeClass("active")
                $(this).addClass("active");
                $('html, body').animate({
                    scrollTop: $("#skills").offset().top
                }, 'slow');
                return false;
            });

            $('#contactM').click(function() { //Id del elemento cliqueable
                $('.active').removeClass("active")
                $(this).addClass("active");
                $('html, body').animate({
                    scrollTop: $("#contact").offset().top
                }, 'slow');
                return false;
            });



            $('.figura').hover(

                function() {
                    $(this).find(".escrito").css("opacity", "1");
                },
                function() {
                    $(this).find(".escrito").css("opacity", "0");
                }
            );


        });
    </script>
    
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-50560944-1', 'byethost15.com');
  ga('send', 'pageview');

</script>
    
    
    

</head>

<body data-spy="scroll" data-target="#my-nav" id="cbp-so-scroller" style="" data-twttr-rendered="true">

<!--------------------------BARRA DE NAVEGACION ------------------------------------------------------------->
    <header>
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation">
            <div class="container">
                <div class="container-fluid">
                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="">
                            <b class="logo" style="color:">Narbelys
                                <p>Front End</p>
                            </b>
                        </a>
                    </div>



                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <nav class="cl-effect-13" id="cl-effect-13">
                            <ul class="nav navbar-nav navbar-right">
                                <li class="active" id="homeM">
                                    <a href="#home">Home</a>
                                </li>
                                <li class="" id="aboutM">
                                    <a href="">About Me</a>
                                </li>
                                <li class="" id="servicesM">
                                    <a href="#services">Skills</a>
                                </li>
                                <li class="" id="portfolioM">
                                    <a href="#portfolio">My Work</a>
                                </li>


                                <li class="" id="contactM">
                                    <a href="#contact">Contact</a>
                                </li>

                            </ul>
                        </nav>

                    </div>
                    <!-- /.navbar-collapse -->
                </div>
                <!-- /.container-fluid -->
            </div>
        </nav>

    </header>




    <div id="home"></div>


    <!-- Jumbotron -->

   <section class=" row jumbotron" style=" ">
        <div class="container" style="">

            <article class="col-xs-12 col-sm-6 col-md-6" style="height:100%">
                <img alt="" class="img-responsive" src="img/Narbe.png">
            </article>
            <article class="col-xs-12 col-sm-6 col-md-6 ">
                <h1 class="text-right">Hello,</h1>
                <h2 class="text-right">I am Narbelys Oropeza</h2>
                <h3 class="text-right">Developer & Webdesign</h3>
                <div class="row  " style="padding-top:50px; padding-bottom:50px">

                    <a href="http://kr.pinterest.com/narbelys/pins/" target="blank">
                        <div class="col-xs-12 col-sm-1 social-icons pull-right" title="Pinterest">
                            <i class="fa fa-pinterest fa-lg"></i>
                        </div>
                    </a>

                    <div class="col-xs-6 col-sm-1 social-icons pull-right" title="Skype: narbelys">
                        <i class="fa fa-skype fa-lg"></i>
                    </div>

                    <a href="http://instagram.com/narbelys" target="blank">
                        <div class="col-xs-6 col-sm-1 social-icons pull-right" title="Instagram">
                            <i class="fa fa-instagram fa-lg"></i>
                        </div>
                    </a>

                    <a href="http://www.linkedin.com/pub/narbelys-oropeza/2a/246/87b" target="blank">
                        <div class="col-xs-6 col-sm-1 social-icons pull-right" title="Linkedin">
                            <i class="fa fa-linkedin fa-lg"></i>
                        </div>
                    </a>

                    <a href="https://plus.google.com/u/0/+narbeoropeza" target="blank">
                        <div class="col-xs-6 col-sm-1 social-icons pull-right" title="Google-plus">
                            <i class="fa fa-google-plus fa-lg"></i>
                        </div>
                    </a>


                    <a href="http://twitter.com/ncor_narbe" target="blank">
                        <div class="col-xs-6 col-sm-1 social-icons pull-right" style="" title="Twitter">
                            <i class="fa fa-twitter fa-lg"></i>
                        </div>
                    </a>



                    <a href="https://www.facebook.com/NcorNarbe" target="blank">
                        <div class="col-xs-6 col-sm-1 social-icons pull-right" title="Facebook">
                            <i class="fa fa-facebook fa-lg"></i>
                        </div>
                    </a>

                </div>

            </article>
            <p style="opacity: 1;">
                <a class="btn btn-outline-white btn-big pull-right" href="#contact">Contact Me</a>
            </p>
        </div>
    </section>

    <!-- End of Jumbotron -->


    
    
    
    
    <!-- About Section -->
    <section id="about" class="cbp-so-section cbp-so-init">
        <div class="container">
            <h1 class="text-center">Who Am I</h1>
            <article class="col-xs-6 col-sm-6 col-md-6 " style="">
                <img class=" img-responsive img-circle contorno" src="img/NarbeCompleta.jpg" alt="" style="">
            </article>

            <article class="col-xs-6 col-sm-6 col-md-6">
                <p class="text-right">B. Sc. in Computer Science from Universidad Simón Bolívar
                    <br>
                    <br>I'm an user interface designer & web developer. I am a front-end specialist but I can work on back-end too.
                    <br>
                    <br>I'm fluent in html, css, jQuery, bootstrap and I'm learning and have had some experience with AngularJs. Also I can use this beautiful weapon called Photoshop.
                    <br>
                    <br>It is not just a job for me, it's a passion.
                </p>
            </article>
        </div>
    </section>
    <!-- End of About Section -->


    <!-- Services Section -->
    <section id="services" class="cbp-so-section cbp-so-init">
        <div class="container">
            <h1>What I do Exactly</h1>
            <div class="row">
                <div class="col-xs-12 col-md-8 col-md-offset-2">
                    <p>
                        I create awesome Websites and Apps, the perfect solution for your project. Built with modern technologies like:
                    </p>


                </div>
                <div class="col-xs-12 col-sm-3 col-md-3 ">
                    <div class="service-column">
                    <figure class="service-icon">
                        <i class="fa fa-magic"></i>
                    </figure>
                    <h4>
                        Design
                    </h4>
                    <hr>
                    <p class="service-description">
                        Photoshop
                        </br>
                        </br>
                        </br>
                        </br>
                        </br>
                    </p>
                    </div>

                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                     <div class="service-column">
                    <figure class="service-icon">
                        <i class="fa fa-desktop"></i>
                    </figure>
                    <h4>
                        Front-End
                    </h4>
                    <hr>
                    <p class="service-description">
                        HTML5</br>
                        CSS3</br>
                        Bootstrap 3</br>
                        Angularjs</br>
                        Jquery
                    </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                     <div class="service-column">
                    <figure class="service-icon">
                        <i class="fa fa-code"></i>
                    </figure>
                    <h4>
                        Logic
                    </h4>
                    <hr>
                    <p class="service-description">
                        Django</br>
                        PHP
                        </br>
                        </br>
                        </br>
                        </br>
                    </p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-3 col-md-3">
                     <div class="service-column">
                    <figure class="service-icon">
                        <i class="fa fa-table"></i>
                    </figure>
                    <h4>
                        Database
                    </h4>
                    <hr>
                    <p class="service-description">
                        MYSQL</br>
                        PostgreSQL
                        </br>
                        </br>
                        </br>
                        </br>
                    </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End of Services Section -->




    <!-- Portfolio Section -->
    <section id="portfolio">
        <div class="container cbp-so-side cbp-so-side-top">
            <h1 class="text-center">My latest work</h1>


            <div class="row-fluid nav-filtro">
                <a class="filter active" data-filter="all" style="margin-left:20%" id="all">All</a>
                <a class="filter " data-filter="web" id=web>Web</a>
                <a class="filter " data-filter="graphics" id=graphics>Graphics</a>
                <a class="filter " data-filter="apps" style="margin-right:20%" id=app>Apps</a>
            </div>



            <div id="grid-gallery" class="grid-gallery" style="margin-top:100px; ">
                <section class="grid-wrap">
                    <ul class="grid just ui-sortable" id="Deck" style="	padding-top:80px">
                        <li class="grid-sizer"></li>
                        <!-- for Masonry column width -->

                        <li class="mix graphics mix_all" data-rank="10" style="  opacity: 1;">

                            <figure class="figura" id="1">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>PCA Farma: logo of an application of "PRX Control solutions"</h6>
                                </div>
                                <img src="img/logo_pcafarma.png" alt="img01" class="box-img"/>
                            </figure>
                        </li>

                        <li class="mix graphics mix_all" data-rank="11">
                            <figure class="figura" id="5">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>PCA Audit: logo of an application of "PRX Control solutions"</h6>
                                </div>
                                <img src="img/logo_audit.png" alt="img05" class="box-img"/>
                            </figure>
                        </li>



                        <li class="mix web mix_all" data-rank="6" style="opacity: 1;">
                            <figure class="figura" id="2">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>PCA Audit: Analyze and control health claims from a clinical and pharmaceutical point of view</h6>
                                </div>
                                <img src="img/audit.png" alt="img02" class="box-img"/>
                            </figure>
                        </li>




                        <li class="mix web mix_all" data-rank="0" style="opacity: 1;">
                            <figure class="figura" id="4">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>PCA Farma: App that allows pharmacies to supervise their patients.</h6>
                                </div>
                                <img src="img/farma.png" alt="img04" class="box-img"/>
                            </figure>
                        </li>

                        <li class="mix graphics mix_all" data-rank="7" style=" opacity: 1;">
                            <figure class="figura" id="3">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>PRX: logo of "PRX Control solutions"</h6>
                                </div>
                                <img src="img/logo_prx.png" alt="img03" class="box-img"/>
                            </figure>
                        </li>

                            <li class="mix web mix_all" data-rank="0" style="opacity: 1;">
                            <figure class="figura" id="4">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>PCA Farma: App that allows pharmacies to supervise their patients.</h6>
                                </div>
                                <img src="img/farma.png" alt="img04" class="box-img"/>
                            </figure>
                        </li>




                        <li class="mix web mix_all" data-rank="0">
                            <figure class="figura" id="6">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>Jota Master Barber: web page of "Jota Master Barber".</h6>
                                </div>
                                <img src="img/jota1.png" alt="img06" class="box-img"/>
                            </figure>
                        </li>


                        <li class="mix graphics mix_all" data-rank="4">

                            <figure class="figura" id="7">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>3D model of piano in cinema 4D.</h6>
                                </div>
                                <img src="img/imagen2.jpg" alt="img01" class="box-img"/>
                            </figure>
                        </li>
                        <li class="mix web mix_all" data-rank="2">
                            <figure class="figura" id="8">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>Altarget: Appointment reminder system - Admin.</h6>
                                </div>
                                <img src="img/admin/imagen1.png" alt="img02" class="box-img"/>
                            </figure>
                        </li>
                        <li class="mix graphics mix_all" data-rank="5">
                            <figure class="figura" id="9">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>3D model paint pot in cinema 4D.</h6>
                                </div>
                                <img src="img/imagen4.jpg" alt="img03" class="box-img"/>
                            </figure>
                        </li>
                        <li class="mix web mix_all" data-rank="3">
                            <figure class="figura" id="10">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>Altarget: Appointment reminder system - Client.</h6>
                                </div>
                                <img src="img/cliente/imagen1.png" alt="img04" class="box-img"/>
                            </figure>
                        </li>
                        <li class="mix apps mix_all" data-rank="5">
                            <figure class="figura" id="11">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>Removes 3 or more: game actionscript</h6>
                                </div>

                                <img src="img/imagen3.png" alt="img05" class="box-img"/>
                            </figure>
                        </li>
                        <li class="mix graphics mix_all" data-rank="0">
                            <figure class="figura" id="12">

                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>3D model city "Las Mercedes" in cinema 4D.</h6>
                                </div>
                                <img src="img/foto1.jpg" alt="img01" class="box-img"/>
                            </figure>
                        </li>
                        <li class="mix web mix_all" data-rank="1">
                            <figure class="figura box-img" id="13">
                                <div style="position:absolute;text-align:center; padding-top:10%;opacity:0" class="escrito">
                                    <i class="fa fa-search"></i>
                                    <h6>Altarget: Appointment reminder system - Lender.</h6>
                                </div>
                                <img src="img/prestador/imagen1.png" alt="img01" class="box-img"/>
                            </figure>
                        </li>
                    </ul>
                </section>
                <!-- // grid-wrap -->


                <!------------------------------------VISOR--------------------------------------->
                <section class="slideshow" style="padding-top:100px">
                    <ul class="visor">
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PCA Farma</h3>
                                    <a href="www.pcafarma.com">www.pcafarma.com</a>
                                </figcaption>
                                <img src="img/logo_pcafarma.png" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PCA Audit</h3>
                                    <a href="www.pcaaudit.com">www.pcaaudit.com</a>
                                </figcaption>
                                <img src="img/logo_audit.png" alt="img01">
                            </figure>
                        </li>
                 <li>
                            <figure>
                                <figcaption>
                                    <h3>PCA Audit</h3>
                                    <a href="www.pcaaudit.com">www.pcaaudit.com</a>
                                </figcaption>
                                <img src="img/audit.png" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PCA Audit</h3>
                                    <a href="www.pcaaudit.com">www.pcaaudit.com</a>
                                </figcaption>
                                <img src="img/audit(1).png" alt="img01">
                            </figure>
                        </li>

                <li>
                            <figure>
                                <figcaption>
                                    <h3>PCA Farma</h3>
                                    <a href="www.pcafarma.com">www.pcafarma.com</a>
                                </figcaption>
                                <img src="img/farma.png" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PCA Farma</h3>
                                    <a href="www.pcafarma.com">www.pcafarma.com</a>
                                </figcaption>
                                <img src="img/farma(1).png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PCA Farma</h3>
                                    <a href="www.pcafarma.com">www.pcafarma.com</a>
                                </figcaption>
                                <img src="img/farma(2).png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PCA Farma</h3>
                                    <a href="www.pcafarma.com">www.pcafarma.com</a>
                                </figcaption>
                                <img src="img/farma(3).png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PCA Farma</h3>
                                    <a href="www.pcafarma.com">www.pcafarma.com</a>
                                </figcaption>
                                <img src="img/farma(4).png" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Jota Master Barber.</h3>
                                    <a href="http://jotamasterbarber.cl/">jotamasterbarber.cl</a>
                                </figcaption>
                                <img src="img/jota1.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Jota Master Barber</h3>
                                    <a href="http://jotamasterbarber.cl/">jotamasterbarber.cl</a>
                                </figcaption>
                                <img src="img/jota2.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Jota Master Barber</h3>
                                    <a href="http://jotamasterbarber.cl/">jotamasterbarber.cl</a>
                                </figcaption>
                                <img src="img/jota3.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PRX Control Solutions</h3>
                                    <a href="prxcontrolsolutions.com">prxcontrolsolutions.com</a>
                                </figcaption>
                                <img src="img/logo_prx.png" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PRX Control Solutions</h3>
                                    <a href="prxcontrolsolutions.com">prxcontrolsolutions.com</a>
                                </figcaption>
                                <img src="img/prx.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PRX Control Solutions</h3>
                                    <a href="prxcontrolsolutions.com">prxcontrolsolutions.com</a>
                                </figcaption>
                                <img src="img/prx2.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PRX Control Solutions</h3>
                                    <a href="prxcontrolsolutions.com">prxcontrolsolutions.com</a>
                                </figcaption>
                                <img src="img/prx3.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>PRX Control Solutions</h3>
                                    <a href="prxcontrolsolutions.com">prxcontrolsolutions.com</a>
                                </figcaption>
                                <img src="img/prx4.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Piano</h3>
                                    <a>Piano in Cinema 4D</a>
                                </figcaption>
                                <img src="img/imagen2.jpg" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Piano</h3>
                                    <a>Piano in Cinema 4D</a>
                                </figcaption>
                                <img src="img/imagen1.jpg" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Piano</h3>
                                    <a>Piano in Cinema 4D</a>
                                </figcaption>
                                <img src="img/imagen3.jpg" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen1.png" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen2.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen3.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen4.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen4.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen5.png" alt="img01">
                            </figure>
                        </li>



                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen6.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen7.png" alt="img01">
                            </figure>
                        </li>



                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen8.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen9.png" alt="img01">
                            </figure>
                        </li>



                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen10.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Admin</a>
                                </figcaption>
                                <img src="img/admin/imagen11.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Model paint pot</h3>
                                    <a>3D model paint pot in cinema 4D.</a>
                                </figcaption>
                                <img src="img/imagen4.jpg" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Client</a>
                                </figcaption>
                                <img src="img/cliente/imagen1.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Client</a>
                                </figcaption>
                                <img src="img/cliente/imagen2.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Client</a>
                                </figcaption>
                                <img src="img/cliente/imagen3.png" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Client</a>
                                </figcaption>
                                <img src="img/cliente/imagen4.png" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Client</a>
                                </figcaption>
                                <img src="img/cliente/imagen5.png" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Client</a>
                                </figcaption>
                                <img src="img/cliente/imagen6.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Removes 3 or more</h3>
                                    <a>Game actionscript</a>
                                </figcaption>
                                <img src="img/imagen2.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Removes 3 or more</h3>
                                    <a>Game actionscript</a>
                                </figcaption>
                                <img src="img/imagen3.png" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Las Mercedes</h3>
                                    <a>3D model city in cinema 4D.</a>
                                </figcaption>
                                <img src="img/imagen7.jpg" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Las Mercedes</h3>
                                    <a>3D model city in cinema 4D.</a>
                                </figcaption>
                                <img src="img/imagen5.jpg" alt="img01">
                            </figure>
                        </li>


                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Las Mercedes</h3>
                                    <a>3D model city in cinema 4D.</a>
                                </figcaption>
                                <img src="img/imagen8.jpg" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Las Mercedes</h3>
                                    <a>3D model city in cinema 4D.</a>
                                </figcaption>
                                <img src="img/imagen9.jpg" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Las Mercedes</h3>
                                    <a>3D model city in cinema 4D.</a>
                                </figcaption>
                                <img src="img/imagen10.jpg" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>Las Mercedes</h3>
                                    <a>3D model city in cinema 4D.</a>
                                </figcaption>
                                <img src="img/imagen11.jpg" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen1.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen2.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen3.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen4.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen5.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen7.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen9.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen10.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen11.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen12.png" alt="img01">
                            </figure>
                        </li>

                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen13.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen14.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen15.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen16.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen17.png" alt="img01">
                            </figure>
                        </li>
                        <li>
                            <figure>
                                <figcaption>
                                    <h3>SynchTerm</h3>
                                    <a>Altarget: Appointment reminder system - Lender.</a>
                                </figcaption>
                                <img src="img/prestador/imagen18.png" alt="img01">
                            </figure>
                        </li>











                    </ul>
                    <nav>
                        <span class="icon nav-prev">
                            <i class="fa fa-chevron-left" style="font-size:48px"></i>
                        </span>
                        <span class="icon nav-next">
                            <i class="fa fa-chevron-right" style="font-size:48px"></i>
                        </span>
                        <span class="icon nav-close">
                            <i class="fa fa-times" style="font-size:48px"></i>
                        </span>
                    </nav>
                </section>


            </div>
            </div>
    </section>
    <!-- End of Portfolio Section -->







    <!-- Contact Section -->
    <section id="contact" class="" style="padding-bottom:350px">
        <div class="container cbp-so-side cbp-so-side-top">
            <h1>Contact me</h1>
            <br>
            <p>Comunicate with me for more information</p>
            <br>
            <div class="row">
                <div class="col-sm-2 col-sm-offset-2">
                    <div class="icon">
                        <i class="fa fa-map-marker fa-2x"></i>
                    </div>
                    <p class="contact-meta">Venezuela</p>
                </div>
                <div class="col-sm-2">
                    <div class="icon">
                        <i class="fa fa-envelope fa-2x"></i>
                    </div>
                    <p class="contact-meta"><a href="mailto:narbelys@gmail.com" >narbelys@gmail.com</a></p>
                </div>
                <div class="col-sm-2">
                    <div class="icon">
                        <i class="fa fa-phone fa-2x"></i>
                    </div>
                    <p class="contact-meta">+58(412) 7367198</p>
                </div>
                
                <div class="col-sm-2">
                    <div class="icon">
                        <i class="fa fa-skype fa-2x"></i>
                    </div>
                    <p class="contact-meta">narbelys</p>
                </div>
            </div>
            
             <!------
            <div class="row">
                <div class="col-md-6 col-md-offset-3">

                    <form id="form" role="form">
                        <div class="form-group">
                            <input type="text" class="form-control input-lg" id="contact-name" placeholder="Name" name="contact-name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control input-lg" id="contact-email" placeholder="Email" name="contact-email">
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="6" id="contact-message"  name="contact-message"></textarea>
                        </div>
                        <div class="form-group">
                             
                             <a class="btn btn-default btn-outline-white btn-big" id="sendmail" >Submit</a>
                        </div>
                    </form>
                </div>
            </div>
            
           <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12 hidden" id="success">
                    Mensaje enviado exitosamente
                </div>
            </div>------->
        </div>
    </section>

 
    <!------FOOTER------->
    <footer>

        <div class="foot-fixed-bottom">
            <p class="pull-right">
                Narbelys Oropeza � 2014 &nbsp;&nbsp;&nbsp;&nbsp;
                <a href="http://twitter.com/ncor_narbe" target="blank">
                    <i class="fa fa-twitter fa-lg"></i>
                </a>
                &nbsp;&nbsp;


                <a href="https://www.facebook.com/NcorNarbe" target="blank">
                    <i class="fa fa-facebook-square"></i>

                </a>
            </p>
        </div>

    </footer>
    <!--------END FOOTER---->




<!---------------SCRIPT ---------->
    <script src="js/imagesloaded.pkgd.min.js"></script>
    <script src="js/classie.js"></script>
    <script src="js/cbpGridGallery.js"></script>
    <!-- End of Footer -->
    <script>
        new CBPGridGallery(document.getElementById('grid-gallery'));
    </script>

</body>

</html>