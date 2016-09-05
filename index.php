<?php
require('lib/core/init.php');
$conn = connect_db();
?>
<!DOCTYPE HTML>
<html>
<head>
    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="32x32" href="/fav/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/fav/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/fav/favicon-16x16.png">

    <title>Komtluisterttoe | Komt, luistert toe</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta name="keywords" content=""/>
    <script type="application/x-javascript"> addEventListener("load", function () {
        setTimeout(hideURLbar, 0);
    }, false);
    function hideURLbar() {
        window.scrollTo(0, 1);
    } </script>
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel='stylesheet' type='text/css'/>
    <!-- Custom CSS -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <!-- Custom CSS 2 -->
    <link href="css/home.css" rel='stylesheet' type='text/css'/>
    <!-- Graph CSS -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <!-- jQuery -->
    <!-- lined-icons -->
    <link rel="stylesheet" href="css/icon-font.min.css" type='text/css'/>
    <!-- Google webfonts -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
    <!-- //lined-icons -->
    <!-- Meters graphs -->
    <script src="js/jquery-1.10.2.min.js"></script>
    <script src="js/mediaelement-and-player.min.js"></script>
    <link rel="stylesheet" href="css/mediaelementplayer.css" />
    <!-- Basic jquery/functions -->
    <script src="js/functions.js"></script>
    <script src="js/music.js"></script>

</head>

<body class="sticky-header left-side-collapsed" onload="initMap()">
<section>
            <div class="left-side sticky-left-side">
            <div class="left-side-inner">
                 <!--<div class="serch-part">
                        <div id="sb-search" class="sb-search">
                            <form action="#" method="post">

                                <input class="sb-search-input" placeholder="Search" type="search" name="search"
                                       id="search">
                                <input class="sb-search-submit" type="submit" value="">
                                <span class="sb-icon-search"> </span>
                            </form>
                        </div>
                    </div>
                    <script src="js/classie.js"></script>
                    <script src="js/uisearch.js"></script>
                    <script>
                        new UISearch(document.getElementById('sb-search'));
                    </script>-->
                <!--sidebar nav start-->
                <ul class="nav nav-pills nav-stacked custom-nav">
                    <li class="active"><a class="menu_item" menu-target="index">Home</a></li>                
                    <li><a class="menu_item" menu-target="main">Overzicht</a></li>
                    <li><a class="menu_item" menu-target="fragments">Fragmenten</a></li>                
                    <li><a class="menu_item" menu-target="artists">Oudvaders</a></li>
                </ul>
                <!--sidebar nav end-->
            </div>
        </div>


    <!-- main content start-->
    <div class="main-content">
        <!-- header-starts -->
        <div class="identity">
            <div class="container">
                <div class="col-md-12">
                    <img src="/images/logo.png">
                        <a href="#menu-modal" class="toggle-btn  menu-collapsed" data-toggle="modal">
                            <div id="nav-icon4">
                                <span></span>
                                <span></span>
                                <span></span>
                            </div>
                        </a>

                        <script type="text/javascript">
                            $(document).ready(function(){
                                $('#nav-icon1,#nav-icon2,#nav-icon3,#nav-icon4').click(function(){
                                    $(this).toggleClass('open');
                                });
                            });
                        </script>
                </div>
                <!--<div class="col-md-3 login-pop">
                    <div id="loginpop"><a href="#" id="loginButton"><span>Inloggen&nbsp;&nbsp;<i class="arrow glyphicon glyphicon-chevron-right"></i></span></a>
                        <div id="loginBox">
                            <form action="#" method="post" id="loginForm">
                                <fieldset id="body">
                                    <fieldset>
                                        <label for="email">E-mailadres</label>
                                        <input type="text" name="email" id="email">
                                    </fieldset>
                                    <fieldset>
                                        <label for="password">Wachtwoord</label>
                                        <input type="password" name="password" id="password">
                                    </fieldset>
                                    <input type="submit" id="login" value="Inloggen">
                                    <label for="checkbox"><input type="checkbox" id="checkbox"> <i>Remember me</i></label>
                                </fieldset>
                                <span><a href="#">Wachtwoord vergeten?</a></span>
                            </form>
                        </div>
                    </div>
                </div>-->
            </div>
        </div>
        <div class="header-section">
            <div class="container">
                <!--notification menu start -->
                        <div class="col-md-9 player">
                            <div class="audio-player">
                                <audio id="audio-player"  controls="controls">
                                    <source src="media/Blue Browne.ogg" type="audio/ogg"></source>
                                    <source src="media/Blue Browne.mp3" type="audio/mpeg"></source>
                                    <source src="media/Georgia.ogg" type="audio/ogg"></source>
                                    <source src="media/Georgia.mp3" type="audio/mpeg"></source>
                                </audio>
                            </div>
                          
                            <script type="text/javascript">
                                $(function(){
                                    $('#audio-player').mediaelementplayer({
                                        alwaysShowControls: true,
                                        features: ['playpause','progress','current','duration','volume'],
                                        audioVolume: 'horizontal',
                                        iPadUseNativeControls: true,
                                        iPhoneUseNativeControls: true,
                                        AndroidUseNativeControls: true
                                    });
                                });
                            </script>
                            
                            <link rel="stylesheet" type="text/css" media="all" href="css/audio.css">
                            <script type="text/javascript" src="js/mediaelement-and-player.min.js"></script>
                        </div>
                        <div class="col-md-3">
                            <p class="nowplaying">
                            Nu aan het afspelen:
                            <br>
                            <span>Fragmenttitel - Oudvader</span> 
                            </p>
                        </div>
                        <div class="clearfix"></div>
                    <!--  -->
                <div class="clearfix"></div>
            </div>
        </div>
        <!--notification menu end -->
        <!-- //header-ends -->

        <!-- //header-ends -->
        <div id="page-wrapper"></div>
        <div class="clearfix"></div>
        <!--body wrapper end-->

    </div>
    <!--body wrapper end-->
    <section class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-3">
                    <h3>Navigatie</h3>
                    <ul class="list1">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">All Songs</a></li>
                        <li><a href="#">Albums</a></li>
                        <li><a href="#">New Collections</a></li>
                        <li><a href="#">Blog</a></li>
                        <li><a href="#">Contact</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <h3>Contact</h3>
                    <p class="footer_desc">Diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat
                        enim ad minim veniam,.</p>
                    <p class="f_text">Phone: &nbsp;&nbsp;&nbsp;00-250-2131</p>
                    <p class="email">Email : &nbsp;&nbsp;&nbsp;<span><a href="mailto:mail@example.com">info@komtluisterttoe.nl</a></span></p>
                </div>
                <div class="col-md-6">
                    <form name="sentMessage" id="contact-form" novalidate>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="help-block text-danger"></p>
                                    <input type="text" placeholder="Naam" id="name" required data-validation-required-message="Vul een naam in.">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <p class="help-block text-danger"></p>
                                    <input type="email" placeholder="E-mailadres" id="email" required data-validation-required-message="Vul een e-mailadres in.">
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <p class="help-block text-danger"></p>
                                    <textarea placeholder="Bericht" id="message" required data-validation-required-message="Vul een bericht in."></textarea>
                                </div>
                            </div>
                            <div class="col-md-3 text-left center">
                                <button type="submit" id="btn-submit" class="submit">Versturen</button>
                            </div>
                            <div id="success" class="col-md-8 help-block"></div>
                    </form>
                </div>
            </div>   
        </div>
    </section>
    <!--footer section start-->
    <footer>
		<p>Copyright &copy; 2016 <b style="font-family: 'montserrat';">Komtluisterttoe</b> | Ontwerp &amp; realisatie door <a
                href="https://www.robinvanbeek.nl/" style="font-family: 'montserrat';" target="_blank">Rob!n van Beek</a></p>
    </footer>
    <!--footer section end-->

    <!-- main content end-->
</section>

<script src="js/jquery.nicescroll.js"></script>
<script src="js/scripts.js"></script>
<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>