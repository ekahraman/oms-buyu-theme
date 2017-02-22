<?php
require_once 'Mobile_Detect.php';
$detect = new Mobile_Detect;
$mobile = false;
    if ($detect->isMobile()) {
        $mobile = true;
    }

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
        <title>Büyücüler Falan</title>
        <!-- Bootstrap -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">
        <!-- Customized Bs -->
        <link rel="stylesheet" href="http://localhost/oms-buyu/css/bootstrap-modify.css">
        <!-- Moon Icon -->
        <link href="http://localhost/oms-buyu/materials/Site-Font-Icon/style.css" rel="stylesheet">
        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
        <script src="https://use.fontawesome.com/cea95c826d.js"></script>
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="dist/js/bootstrap.min.js"></script>
    </head>
    <body>
        <?php if ($mobile) { ?>
        <!-- ============================================== MENU ================================================ -->
        <nav class="navbar navbar-buyu" role="navigation">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="white-color-link above-menu-heading-header margin-left10" href="#">Süleyman Hoca</a>
                    <span id="show-search" class="icon-uniE6F7 sidebar-moon-icon-size middle-content-padding white-color-link margin-left30"></span>
                    <div id="search-input" style="display: none">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Site içi arama...">
                            <span class="input-group-btn white-bg">
                                <button class="btn btn-theme btn-lg" type="button">
                                    <i class="glyphicon glyphicon-search"></i>
                                </button>
                            </span>
                        </div>
                    </div>
                </div>
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="#">ANASAYFA</a></li>
                        <li><a class="white-color-link" href="#about">AŞK BÜYÜLERİ</a></li>
                        <li><a class="white-color-link" href="#contact">AŞK BÜYÜSÜ</a></li>
                        <li><a class="white-color-link" href="#contact">BAĞLANMA BÜYÜLERİ</a></li>
                        <li><a class="white-color-link" href="#contact">BAĞLANMA BÜYÜSÜ</a></li>
                        <li><a class="white-color-link" href="#contact">BÜYÜ</a></li>
                        <li><a class="white-color-link" href="#contact">HOCA HAKKINDA</a></li>
                        <li><a class="white-color-link" href="#contact">HOCA İLETİŞİM</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- =========================================== ABOVE MENU ================================================ -->
        <div class="container-fluid above-menu-wrapper">
            <div class="container">
                <div class="col-md-6 align-according-to-image">
                    <span class="icon-uniE6CD big-font dark-white-font"></span>
                    <div class="dark-white-font font-13px aling-to-logo-first-div">HER DERDE DEVA HEMEN ARAYIN!</div>
                    <div class="bold white-color-link aling-to-logo-second-div">0541 767 38 37</div>
                </div>
                <hr class="hr-seperator-mobile"/>
                <div class="col-md-6 align-according-to-image">
                        <i class="fa fa-whatsapp fa-4x dark-white-font" aria-hidden="true"></i>
                        <div class="dark-white-font font-13px aling-to-logo-first-div">WHATSAPP İLE ANINDA BİZE ULAŞIN!</div>
                        <div class="bold white-color-link top-align-table aling-to-logo-second-div">0541 767 38 37</div>
                </div>
            </div>
        </div>
        <!-- ====================================== CAROUSEL ========================================== -->
        <div class="carousel fade-carousel slide" data-ride="carousel" data-interval="4000" id="bs-carousel">
            <!-- Overlay -->
            <div class="overlay"></div>

            <!-- Indicators -->
            <ol class="carousel-indicators">
                <li data-target="#bs-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#bs-carousel" data-slide-to="1"></li>
                <li data-target="#bs-carousel" data-slide-to="2"></li>
                <li data-target="#bs-carousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <div class="item slides active">
                    <div class="slide-1"></div>
                    <div class="hero">
                        <hgroup>
                            <div class="container">
                                <div class="col-md-12 hvr-grow-shadow">
                                    <div class="containerBox">
                                        <div class="text-box">
                                            <div class="description-text">
                                                <div class="caption-heading">
                                                    AŞK BÜYÜSÜ
                                                </div>
                                                <hr class="hr-seperator"/>
                                                <div class="small-font">Sevdiğiniz kişi 72 saatte size bağlanacak.</div>
                                                <div class="read-more-on-hover">
                                                    <a href="#" class="btn btn-block btn-theme">DETAYLARI GÖRÜNTÜLE</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="img-responsive no-max-width" src="http://localhost/oms-buyu/images/2.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </hgroup>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-2"></div>
                    <div class="hero">
                        <hgroup>
                            <div class="container">
                                <div class="col-md-12 hvr-grow-shadow">
                                    <div class="containerBox">
                                        <div class="text-box">
                                            <div class="description-text">
                                                <div class="caption-heading">
                                                    PAPAZ BÜYÜSÜ İLE AŞIK ETME
                                                </div>
                                                <hr class="hr-seperator"/>
                                                <div class="small-font">Sevdiğiniz kişi kısa sürede size aşık olacak.</div>
                                                <div class="read-more-on-hover">
                                                    <a href="#" class="btn btn-block btn-theme">DETAYLARI GÖRÜNTÜLE</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="img-responsive no-max-width" src="http://localhost/oms-buyu/images/2.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </hgroup>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-3"></div>
                    <div class="hero">
                        <hgroup>
                            <div class="container">
                                <div class="col-md-12 hvr-grow-shadow">
                                    <div class="containerBox">
                                        <div class="text-box">
                                            <div class="description-text">
                                                <div class="caption-heading">
                                                    BAĞLAMA BÜYÜSÜ
                                                </div>
                                                <hr class="hr-seperator"/>
                                                <div class="small-font">Bağlama büyüsü ile %100 garantili başarılı sonuç.</div>
                                                <div class="read-more-on-hover">
                                                    <a href="#" class="btn btn-block btn-theme">DETAYLARI GÖRÜNTÜLE</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="img-responsive no-max-width" src="http://localhost/oms-buyu/images/2.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </hgroup>
                    </div>
                </div>
                <div class="item slides">
                    <div class="slide-4"></div>
                    <div class="hero">
                        <hgroup>
                            <div class="container">
                                <div class="col-md-12 hvr-grow-shadow">
                                    <div class="containerBox">
                                        <div class="text-box">
                                            <div class="description-text">
                                                <div class="caption-heading">
                                                    EVLİLİK BÜYÜSÜ
                                                </div>
                                                <hr class="hr-seperator"/>
                                                <div class="small-font">Evlilik için bağlamada istediğiniz kişiyle evleneceksiniz.</div>
                                                <div class="read-more-on-hover">
                                                    <a href="#" class="btn btn-block btn-theme">DETAYLARI GÖRÜNTÜLE</a>
                                                </div>
                                            </div>
                                        </div>
                                        <img class="img-responsive no-max-width" src="http://localhost/oms-buyu/images/2.jpg"/>
                                    </div>
                                </div>
                            </div>
                        </hgroup>
                    </div>
                </div>
            </div>
        </div>
        <?php } else { ?>
            <!-- ==================================== TOP BAR ================================= -->
            <div class="container-fluid top-wrapper">
                <div class="container">
                    <div class="col-md-8">
                        <span class="white-color-link small-font-size">Resmi Medyum Süleyman Hoca Derdinize Derman. Hiç çekinmeden tüm sorunlarınızı bize danışın</span>
                    </div>
                    <div class="col-md-4">
                        <div class="pull-right">
                            <span class="top-social-icons">
                                <span class="icon-uniE949 align-icons moon-icon-font-size white-color-link"></span>
                                <span class="icon-uniE948 moon-icon-font-size white-color-link"></span>
                            </span>
                            <span class="border-vertical"></span>
                            <a class="disabled-language white-color-link"> EN </a>
                            <a class="active-language white-color-link"> TR </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ==================================== ABOVE MENU ================================= -->
            <div class="container-fluid above-menu-wrapper">
                <div class="container">
                    <div class="col-md-5">
                        <div class="white-color-link above-menu-heading-header">Süleyman Hoca</div>
                        <small class="white-color-link">Tüm sorunlarınız için etkili çözümler burada!</small>
                    </div>
                    <div class="col-md-3 align-according-to-image header-content-seperator">
                        <span class="icon-uniE6CD big-font dark-white-font"></span>
                        <div class="dark-white-font font-13px aling-to-logo-first-div">HER DERDE DEVA HEMEN ARAYIN!</div>
                        <div class="bold white-color-link aling-to-logo-second-div">0541 767 38 37</div>
                    </div>
                    <div class="col-md-4 align-according-to-image">
                        <div class="pull-right">
                            <i class="fa fa-whatsapp fa-4x dark-white-font" aria-hidden="true"></i>
                            <div class="dark-white-font font-13px aling-to-logo-first-div">WHATSAPP İLE ANINDA BİZE ULAŞIN!</div>
                            <div class="bold white-color-link top-align-table aling-to-logo-second-div">0541 767 38 37</div>
                        </div>
                    </div>
                </div>
            </div>
            <nav class="navbar navbar-buyu">
           <div class="container-fluid">
               <div class="navbar-header">
                   <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                   <span class="sr-only">Toggle navigation</span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   <span class="icon-bar"></span>
                   </button>
               </div>
               <div id="navbar" class="navbar-collapse collapse">
                   <ul class="nav navbar-nav">
                       <li class="active"><a class="active-link" href="#">ANASAYFA</a></li>
                       <li><a class="white-color-link" href="#about">AŞK BÜYÜLERİ</a></li>
                       <li><a class="white-color-link" href="#contact">AŞK BÜYÜSÜ</a></li>
                       <li><a class="white-color-link" href="#contact">BAĞLANMA BÜYÜLERİ</a></li>
                       <li><a class="white-color-link" href="#contact">BAĞLANMA BÜYÜSÜ</a></li>
                       <li><a class="white-color-link" href="#contact">BÜYÜ</a></li>
                       <li><a class="white-color-link" href="#contact">HOCA HAKKINDA</a></li>
                       <li><a class="white-color-link" href="#contact">HOCA İLETİŞİM</a></li>
                   </ul>
               </div>
               <!--/.nav-collapse -->
           </div>
       </nav>
            <div class="container">
                <div class="row theme-background-color">
                    <div class="col-md-3 hvr-grow-shadow">
                        <div class="containerBox">
                            <div class="text-box">
                                <div class="description-text">
                                    <div class="caption-heading">
                                        AŞK BÜYÜSÜ
                                    </div>
                                    <hr class="hr-seperator"/>
                                    <div class="small-font">Sevdiğiniz kişi 72 saatte size bağlanacak.</div>
                                    <div class="read-more-on-hover">
                                        <a href="#" class="btn btn-block btn-theme">DETAYLARI GÖRÜNTÜLE</a>
                                    </div>
                                </div>
                            </div>
                            <img class="img-responsive display-block" src="http://localhost/oms-buyu/images/2.jpg"/>
                        </div>
                    </div>
                    <div class="col-md-3 hvr-grow-shadow">
                        <div class="containerBox">
                            <div class="text-box">
                                <div class="description-text">
                                    <div class="caption-heading">
                                        PAPAZ BÜYÜSÜ İLE AŞIK ETME
                                    </div>
                                    <hr class="hr-seperator"/>
                                    <div class="small-font">Sevdiğiniz kişi kısa sürede size aşık olacak.</div>
                                    <div class="read-more-on-hover">
                                        <a href="#" class="btn btn-block btn-theme">DETAYLARI GÖRÜNTÜLE</a>
                                    </div>
                                </div>
                            </div>
                            <img class="img-responsive display-block" src="http://localhost/oms-buyu/images/2.jpg"/>
                        </div>
                    </div>
                    <div class="col-md-3 hvr-grow-shadow">
                        <div class="containerBox">
                            <div class="text-box">
                                <div class="description-text">
                                    <div class="caption-heading">
                                        BAĞLAMA BÜYÜSÜ
                                    </div>
                                    <hr class="hr-seperator"/>
                                    <div class="small-font">Bağlama büyüsü ile %100 garantili başarılı sonuç.</div>
                                    <div class="read-more-on-hover">
                                        <a href="#" class="btn btn-block btn-theme">DETAYLARI GÖRÜNTÜLE</a>
                                    </div>
                                </div>
                            </div>
                            <img class="img-responsive display-block" src="http://localhost/oms-buyu/images/2.jpg"/>
                        </div>
                    </div>
                    <div class="col-md-3 hvr-grow-shadow">
                        <div class="containerBox">
                            <div class="text-box">
                                <div class="description-text">
                                    <div class="caption-heading">
                                        EVLİLİK BÜYÜSÜ
                                    </div>
                                    <hr class="hr-seperator"/>
                                    <div class="small-font">Evlilik için bağlamada istediğiniz kişiyle evleneceksiniz.</div>
                                    <div class="read-more-on-hover">
                                        <a href="#" class="btn btn-block btn-theme">DETAYLARI GÖRÜNTÜLE</a>
                                    </div>
                                </div>
                            </div>
                            <img class="img-responsive display-block" src="http://localhost/oms-buyu/images/2.jpg"/>
                        </div>
                    </div>
                </div>
            </div>
        <?php }
