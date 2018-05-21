<!DOCTYPE html>
<?php
session_start();
?>
<html lang="en">
    <head>
        <title>Lintasarta | Cloud Service</title>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!--<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>-->
        <script src="//code.jquery.com/jquery-1.12.4.js"></script>
        <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script>
            //$(".paraMenu").click(function () {
            //alert("yayan");
            //var target = $(this).attr("data-slide");
            //$('html, body').animate({scrollTop: $(target).offset().top}, 1000);
            //});
            $(window).on('load', function () {
                $('#myModal').modal('show');
            });
        </script>
        <script>
            $(document).ready(function () {
                $("#mobile-menu").click(function () {
                    $('.menu-mobile').slideToggle();
                });
                $(".paraMenu").click(function () {
                    var target = $(this).attr("data-slide");
                    $('html, body').animate({scrollTop: $(target).offset().top}, 1000);
                });
            });
        </script>
        <style>
            @font-face {
                font-family: robotoBold;
                src: url('../lintas-arta-data-center/font/DroidSans-Bold.ttf');
            }
            @font-face {
                font-family: robotoMedium;
                src: url('../lintas-arta-data-center/font/Roboto-Medium.ttf');
            }
            @font-face {
                font-family: robotoReg;
                src: url('../lintas-arta-data-center/font/Roboto-Regular.ttf');
            }

            @media(min-width : 1350px) {
              .txt-under-btn {
                font-size: 12px;
                margin-top: 20px;
                text-align: left !important;
              }
              .header-nav {
                padding-left: 18% !important;
              }
              .img-logo-header {
                padding-left: 40px ;
                max-width: 250px !important ;
              }
              .banner-img {
                height: 605px !important ;
              }
              .banner-form {
                height: 605px !important ;
              }

              .telp {
                font-size: 30px !important ;
              }

            }

            .telp {
              font-size: 20px ;
            }

            .btn-float {
                border-radius: 124px;
                width: 100px;
                height: 100px;
                position: fixed;
                font-size: 18px ;
                bottom : 20px ;
                right: 20px;
            }
            .wrapper-img-desc {
                padding-left: 180px ;
                padding-right: 180px ;
            }
            .telp {
                color: white ;
            }
            .telp .hover {
                color :white;
            }
            .div-layanan-title {
                background-image: url('images/bg-content-middle.png');
                background-repeat: no-repeat;
                background-size: cover;
                color: white;
                height: 170px;
            }
            .menu-mobile {
                text-align: center;
                display: none;
                margin-top: 15px;
                font-size: 18px;
            }
            .header {
                position: fixed;
                z-index: 9999;
                background-color: white;
            }
            .paraMenu {
                font-family: robotoBold;
                padding: 10px 40px !important;
            }

            .header-banner {
                padding-top: 100px;
            }

            .img-responsive {
                width: 100%;
            }
            .img-logo-header {
                max-width: 160px;
                padding-top: 15px;
                padding-bottom: 10px;
            }
            .header-nav {
                padding-top: 35px;
                padding-left: 0px ;
            }
            .banner-img {
                background-image: url('images/bg-header.png');
                background-repeat: no-repeat;
                height: 615px;
                background-size: cover;
            }
            .banner-form {
                background-color: #3e8fd1 ;
                height: 615px;
                padding-top: 20px;
            }
            .banner-form p {
                color: white;
                text-align: center;
            }
            .div-desc-header {
                color: white ;
                font-size: 18px;
                margin-top: 350px;
                margin-left: 15px;
                width: 520px;
                padding: 10px 30px;
                background-color: rgba(47, 111, 180, 0.6);
            }
            .div-desc-header p {
                font-family: robotoReg;
            }
            .form-group input {
                border-radius: 0px !important;
            }
            .img-description {
                max-width: 170px;
            }
            .caption-description {
                padding: 10px 10px;
                text-align: center;
                font-size: 15px;
            }
            .caption-description-bottom {
                padding-bottom: 20px ;
                font-size: 15px;
            }
            .tabs {
                padding: 0px 150px;
                text-align: center;
                margin-top: 25px;
            }
            .tabs-div {
                color: white;
                background-size: cover;
                height: 246px;
            }
            .img-gembok {
                margin-top: 50px;
                max-width: 250px;
                float: right;
            }
            .div-layanan {
                margin-top: 70px;
            }
            .img-layanan {
                max-width: 310px;
            }
            .footer {
                background-image: url('images/bg-footer.png');
                height: 215px;
                margin-top: 40px;
                background-color: #2551b0 ;
                background-repeat: no-repeat;
            }
            .menu-footer {
                text-align: center;
                color: #999a9a;
                font-size: 12px;
            }
            .footer-copyright {
                color: #6189c7;
                padding-top: 10px;
                padding-bottom: 20px;
            }
            .tabs-title {
                margin-top: 102px;
                padding: 0 25px;
            }
            .tabs-content {
                font-size: 10px;
                height: 70px;
                overflow: auto;
            }
            .layanan-tittle {
                padding-top: 20px;
            }
            .layanan-div {
                background-repeat: no-repeat;
                background-size: cover;
                height: 336px;
                max-width: 309px;
                width: 100%;
                border-radius: 15px;
                margin-top: 70px;
                background-color:#3c90d2;
            }
            .div-software {
                padding: 0 150px;
            }
            .wrapper-layanan {
                max-width: 680px;
                width: 100%;
                margin: 0px auto;
            }
            .div-corps {
                background-color: #dfeaef;
                margin-top: 60px;
            }
            .img-corps {
                max-width: 200px;
            }
            .wrapper-text-layanan {
                margin-top: 25px;
                color: white;
                font-size: 15px;
            }
            .wrapper-text-teknologi {
                margin: 25px 0px;
                padding-left: 0px;
                padding-right: 0px;
            }
            .slide-teknologi {
                height: 276px;
                background-position: center;
                background-repeat: no-repeat;
            }
            .slide-layanan {
                height: 318px;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover ;
            }
            .fedex {
                margin-top: 25px;
            }
            .kao {
                margin-top: 20px;
            }
            .adira {
                margin-top: 40px;
            }
            .wrapper-social-media {
                padding: 40px 0;
                text-decoration: none;
            }
            .btn-socmed {
                color: #372c32 !important ;
                margin-left: 45px;
                font-size: 12px;
            }
            @media(max-width: 770px){
                .tabs {
                    padding: 0px ;
                }
                .tabs-tabs {
                    padding-bottom: 30px ;
                }
                .paraMenu {
                    padding: 35px 8px !important;
                }
                .header-nav {
                    padding-left: 13% !important;
                }
                .caption-description-bottom {
                    padding: 10px !important;
                    font-size: 14px;
                }
                .caption-description {
                    font-size: 14px;
                }
                .img-gembok {
                    margin-right: 200px;
                }
                .nomer-hp {
                    font-size: 15px !important;
                    margin-left: 0px !important;
                }
                .informasi-produk {
                    margin-left: 0px !important;
                }
                .wrapper-footer-menu {
                    padding-top: 20px !important;
                }
                .img-logo-header {
                    padding-left: 0 !important;
                    max-width: 195px;
                }
                .wrapper-text-tekno {
                    color: white;
                    padding: 0px 60px;
                    margin-top: 120px;
                    margin-bottom: 30px ;
                }
            }
            @media(max-width : 430px){
                .wrapper-infrastructure {
                    padding: 0px 50px;
                }
                .btn-float {
                    width: 70px;
                    height : 70px ;
                }
                .wrapper-img-desc {
                    padding-left: 10px ;
                    padding-right: 10px ;
                }
                .caption-description {
                    padding: 0 !important ;
                    font-size: 13px;
                }
                .caption-description-bottom {
                    padding: 0 !important ;
                    font-size: 13px;
                }
                .div-desc-header {
                    width: auto ;
                }
                .content-top-title-1 {
                    font-size: 24px !important;
                }
                .tabs {
                    padding: 0 !important;
                }
                .tabs-div {
                }
                .content-middle-tittle {
                    font-size: 24px !important ;
                }
                .content-middle {
                    padding-top: 15px;
                }
                .img-description {
                    max-width: 75px;
                }
                .layanan-tittle {
                    font-size: 24px !important ;
                }
                .img-layanan {
                    float: none;
                }
                .div-layanan-image {
                    padding: 0 !important ;
                }
                .footer {
                    background-color: #2551b0 ;
                    height: 395px !important;
                    background-image: none !important;
                }
                .nomer-hp {
                    font-size: 20px !important ;
                }
                .wrapper-text-footer {
                    padding-top: 5px !important;
                }
                .wrapper-footer-menu {
                    padding-top: 70px !important ;
                }
                .img-logo-header {
                    max-width: 150px;
                    padding-top: 15px;
                    padding-left: 0 !important;
                }
                .img-gembok {
                    margin-right: 20px !important;
                }
                .layanan-content {
                    font-size: 15px !important ;
                }
                .div-software {
                    padding: 0 !important;
                }
                .wrapper-text-layanan-mobile {
                    margin-top: 120px;
                    color: white ;
                }
                .text-layanan-mobile {
                  margin: 0px;
                }
                .layanan-div {
                    height: 317px;
                }
                .cloud-platform-text {
                    margin: 15px 0px !important;
                }

                .adira {
                    margin-top: 25px;
                }
                @media(max-width: 375px){
                    .img-gembok {
                        margin-right: 0px !important;
                    }
                    .caption-description {
                        font-size: 11px;
                    }
                    .caption-description-bottom {
                        font-size: 11px;
                    }
                    .div-desc-header {
                        margin-top: 125px;
                    }
                }
                @media(max-width: 320px ){
                    .caption-description {
                        font-size: 12px;
                    }
                    .caption-description-bottom {
                        font-size: 12px;
                    }

                    .img-layanan {
                        float: none !important;
                    }
                    .wrapper-text-tekno {
                        color: white;
                        padding: 0px 40px;
                        margin-top: 120px;
                        font-size: 11px;
                    }
                }
            }
        </style>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <div class="header col-md-12 col-xs-12 col-sm-12">
            <div class="col-md-2 col-xs-6 col-sm-2">
                <img class="img-logo-header img-respnsive" src="images/LOGO.png">
            </div>
            <div class="hidden-xs col-md-10 col-xs-6 col-sm-10">
                <ul class="header-nav nav navbar-nav navbar-center">
                    <li class="nav navbar-nav"><a href="#home" class="paraMenu" data-slide="#home">Lintasarta Cloud Services</a></li>
                    <li class="nav navbar-nav"><a href="#mengapa" class="paraMenu" data-slide="#mengapa">Mengapa Lintasarta</a></li>
                    <li class="nav navbar-nav"><a href="#teknologi" class="paraMenu" data-slide="#teknologi">Teknologi</a></li>
                    <li class="nav navbar-nav"><a href="#layanan" class="paraMenu" data-slide="#layanan">Paket Layanan</a></li>
                </ul>
            </div>
            <div class="visible-xs col-xs-6 col-sm-6">
                <img style="max-width: 70px;float: right;margin-top: 12px;" id="mobile-menu" class="img-responsive" src="images/menu-1.png">
            </div>
            <div class="menu-mobile col-xs-12">
                <a href="#home" class="paraMenu" onclick="$('.menu-mobile').slideUp();" data-slide="#home">Lintasarta Cloud Services</a><br><br>
                <a href="#mengapa" class="paraMenu" onclick="$('.menu-mobile').slideUp();" data-slide="#mengapa">Mengapa Lintasarta</a><br><br>
                <a href="#teknologi" class="paraMenu" onclick="$('.menu-mobile').slideUp();" data-slide="#teknologi">Teknologi</a><br><br>
                <a href="#layanan" class="paraMenu" onclick="$('.menu-mobile').slideUp();" data-slide="#layanan">Paket Layanan</a><br><br>
            </div>
        </div>

        <div class="header-banner" id="home">
            <div class="banner-img col-md-9 col-xs-12 col-sm-12">
                <div class="div-desc-header">
                    `<h3 style="font-family:robotoReg;">Lintasarta Cloud Services</h3><br>
                    <p>
                        Layanan Lintasarta Cloud Services menawarkan solusi untuk web/application hosting hingga konsolidasi data center Anda secara aman, mudah serta hemat biaya tanpa harus membangun infrastruktur TI sendiri.
                    </p>
                </div>
            </div>
            <div class="banner-form col-md-3 col-xs-12">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <h3 style="text-align:center;color:white;font-family:robotoMedium;">Dapatkan Free Trial</h3>
                    <p style="font-family:robotoReg;">Selama persediaan masih ada!</p>
                    <p style="font-size : 35px;font-family:robotoBold;"><a class="telp" style="color:white;text-decoration:none;" href="tel:0212302347">021 230 2347</a></p>
                    <p style="font-family:robotoReg;">Lengkapi data dibawah</p>
                    <form class="" method="post" action="action.php">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control form-header" placeholder="Nama Anda">
                        </div>
                        <div class="form-group">
                            <input type="text" name="perusahaan" class="form-control form-header" placeholder="Perusahaan">
                        </div>
                        <div class="form-group">
                            <input type="text" name="jabatan" class="form-control form-header" placeholder="Jabatan">
                        </div>
                        <div class="form-group">
                            <input type="text" name="no-hp" class="form-control form-header" placeholder="No Handphone">
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" class="form-control form-header" placeholder="Email">
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="kebutuhan">
                                <option value="">--Kebutuhan--</option>
                                <option value="media_analytics">Media Analytics</option>
                                <option value="managed_mail">Managed Mail</option>
                                <option value="disaster_recovery">Disaster Recovery as a Service</option>
                                <option value="private_cloud">Private Cloud (IaaS)</option>
                                <option value="public_cloud">Public Cloud (IaaS)</option>
                                <option value="cloud_platform">Cloud Platform (PaaS)</option>
                            </select>
                        </div>
                        <!--<div style="color:white;font-family:robotoReg;" class="form-group">
                                Kebutuhan: <input type="checkbox" name="vehicle" value="Bike"> Data Center Colocation<br>
                                <input style="margin-left:75px;" type="checkbox" name="vehicle" value="Car"> Working Area
                        </div>-->
                        <div style="color:white;font-family:robotoReg;" class="form-group">
                            <input type="checkbox" name="studi" value="studi-kasus"> saya ingin studi kasus solusi ini
                        </div>
                        <div>
                            <button type="submit" style="border-radius:0px;float:right;" class="btn btn-warning" data-toggle="modal" data-target="">Submit</button>
                        </div>
                        <br>
                        <div>
                            <p style="cursor:pointer;"
                               data-toggle="modal"
                               data-target="#myModals1"
                               class="txt-under-btn">Atau jadwalkan pertemuan dengan tim kami untuk berdiskusi lebih lanjut</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div style="font-family:robotoReg;" class="content-top col-md-12 col-xs-12 col-sm-12">
            <div style="position:absolute;top:-100px;" id="mengapa"></div>
            <div style="text-align:center;padding-top:45px;" class="content-top-title col-md-12 col-xs-12 col-sm-12">
                <p class="content-top-title-1" style="font-size : 45px;color:#3e8fd1;">Mengapa Memilih Lintasarta Cloud Services</p>
                <p class="content-top-title-2" style="font-size : 14px;">Berikut adalah keuntungan-keuntungan yang didapatkan pelanggan apabila menggunakan layanan Lintasarta Cloud Services :<p>
            </div>
            <div class="content-top-main">
                <div style="padding-top:40px;" class="wrapper-img-desc col-md-12 col-xs-12">
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-1.png">
                            <p class="caption-description">
                                Service Level Agreement yang tinggi, yaitu Availability 99,9%.
                            </p>
                        </center>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/lintas-revisi.png">
                            <p class="caption-description">
                                Konfigurasi peran user yang berlapis hingga SLA jaringan dan server yang terjaga.
                            </p>
                        </center>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-3.png">
                            <p class="caption-description">
                                Teknologi standar industri yang mempercepat waktu akses hingga sub-millisecond.
                            </p>
                        </center>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-4.png">
                            <p class="caption-description">
                                Kontrol yang tersentralisasi 24x7, memudahkan Anda mengatur dan mengelola perangkat.
                            </p>
                        </center>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-5.png">
                            <p class="caption-description">
                                Perangkat dikelola oleh ahli yang tersertifikasi.
                            </p>
                        </center>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-6.png">
                            <p class="caption-description">
                                Terbebas dari pengeluaran yang tidak efektif dengan membayar sesuai kebutuhan.
                            </p>
                        </center>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-12 col-xs-12">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-7.png">
                            <p class="caption-description-bottom">
                                Tidak perlu melakukan investasi besar pada pengadaan perangkat.
                            </p>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <div style="font-family:robotoReg;padding:0;" class="content-middle col-md-12 col-xs-12 col-sm-12">
            <div style="position:absolute;top:-100px;" id="teknologi"></div>
            <div style="padding:0;" class="col-md-12 col-xs-12 col-sm-12">
                <div class="content-middle-tittle col-md-12 col-xs-12 col-sm-12">
                    <center><p class="content-middle-tittle" style="font-size: 45px;">Teknologi Lintasarta Cloud Services</p></center>
                </div>
                <div class="hidden-xs tabs col-md-12 col-xs-12 col-sm-12">
                    <div class="tabs-tabs col-md-3 col-xs-12 col-sm-6">
                        <div style="background-color:#f49317;border-radius: 20px;" class="tabs-div col-md-12 col-xs-12 col-sm-12">
                            <div class="wrapper-text-teknologi col-md-12 col-xs-12 col-sm-12">
                                <img style="width:100%;max-width:122px;margin-bottom:20px;" src="images/cisco.png">
                                <p class="">Tersertifikasi CISCO CMSP</p>
                                <p class="tabs-content">Lintasarta berhasil mendapatkan CISCO Advanced Cloud & Managed Services Certified Partner</p>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-tabs col-md-3 col-xs-12 col-sm-6">
                        <div style="background-color:#8ec73d;border-radius: 20px;" class="tabs-div col-md-12 col-xs-12 col-sm-12">
                            <div class="wrapper-text-teknologi col-md-12 col-xs-12 col-sm-12">
                                <img style="width:100%;max-width:68px;margin-bottom:20px;" src="images/kunci.png">
                                <p class="">Didukung partner teknologi terdepan</p>
                                <p class="tabs-content">Bekerjasama dengan technology partner yang merupakan leader di Gartner Quadrant seperti Cisco, NetApp dan VMWare. Mohon dapat memperhatikan penggunaan kapital dan tanda baca.</p>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-tabs col-md-3 col-xs-12 col-sm-6">
                        <div style="background-color:#9a538e;border-radius: 20px;" class="tabs-div col-md-12 col-xs-12 col-sm-12">
                            <div class ="wrapper-text-teknologi col-md-12 col-xs-12 col-sm-12">
                                <img style="width:100%;max-width:99px;margin-bottom:20px;" src="images/rumah.png">
                                <p class="">Sesuai dengan peraturan pemerintah</p>
                                <p class="tabs-content">Dukungan tenaga ahli dan penggunaan server lokal</p>
                            </div>
                        </div>
                    </div>
                    <div class="tabs-tabs col-md-3 col-xs-12 col-sm-6">
                        <div style="background-color:#235fb2;border-radius: 20px;" class="tabs-div col-md-12 col-xs-12 col-sm-12">
                            <div class="wrapper-text-teknologi col-md-12 col-xs-12 col-sm-12">
                                <img style="width:100%;max-width:123px;margin-bottom:20px;" src="images/server.png">
                                <p class="">Data Center</p>
                                <p class="tabs-content">Dibangun diatas 3 Data Center Lintasarta dengan fasilitas berstandar internasional (Tier III) yang  didukung teknisi operasional tersertifikasi</p>
                            </div>
                        </div>
                    </div>
                    <!--<div style="background-image:url('images/bg-teknologi-2.png');" class="tabs-div col-md-3 col-xs-6 col-sm-6"><br>INSTRUKTUR RAMAH LINGKUNGAN DAN EFISIEN</div>
                    <div style="background-image:url('images/bg-teknologi-3.png');" class="tabs-div col-md-3 col-xs-6 col-sm-6"><br>PENGELOLAAN TANPA DOWNTIME</div>
                    <div style="background-image:url('images/bg-teknologi-4.png');" class="tabs-div col-md-3 col-xs-6 col-sm-6"><br>SISTEM KEAMANAN DAN MANAJEMEN OPERASIONAL</div>-->
                </div>

                <div style="padding:0px 50px;" class="visible-xs col-xs-12 col-sm-12">
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1"></li>
                            <li data-target="#myCarousel" data-slide-to="2"></li>
                            <li data-target="#myCarousel" data-slide-to="3"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div style="background-image:url('images/bg-teknologi-1.png');" class="item slide-teknologi active">
                                <div class="wrapper-text-tekno col-xs-12">
                                    <p>Tersertifikasi CISCO CMSP</p>
                                    <p>Lintasarta berhasil mendapatkan CISCO Advanced Cloud & Managed Services Certified Partner</p>
                                </div>
                            </div>

                            <div style="background-image:url('images/bg-teknologi-2.png');" class="item slide-teknologi">
                                <div class="wrapper-text-tekno col-xs-12">
                                    <p>Didukung partner teknologi terdepan</p>
                                    <p>Bekerjasama dengan Technology Partner yang merupakan Leader di Gartner Quadrant, seperti Cisco, Netapp, dan VMWare.</p>
                                </div>
                            </div>

                            <div style="background-image:url('images/bg-teknologi-3.png');" class="item slide-teknologi">
                                <div class="wrapper-text-tekno col-xs-12">
                                    <p>Sesuai dengan peraturan pemerintah</p>
                                    <p>Dukungan tenaga ahli dan penggunaan server lokal</p>
                                </div>
                            </div>

                            <div style="background-image:url('images/bg-teknologi-4.png');" class="item slide-teknologi">
                                <div class="wrapper-text-tekno col-xs-12">
                                    <p>Data Center</p>
                                    <p>Dibangun diatas 3 Data Center Lintasarta dengan fasilitas berstandar internasional (Tier III) yang  didukung teknisi operasional tersertifikasi</p>
                                </div>
                            </div>
                        </div>

                        <!-- Left and right controls -->
                        <a style="background:none;" class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <span class="glyphicon glyphicon-chevron-left"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a style="background:none;" class="right carousel-control" href="#myCarousel" data-slide="next">
                            <span class="glyphicon glyphicon-chevron-right"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>

                <div style="padding:0;" class="div-layanan col-md-12 col-xs-12 col-sm-12" >
                    <div style="position:absolute;top:-100px;" id="layanan"></div>
                    <div style="padding:0;" class="col-md-12 col-xs-12 col-sm-12">
                        <div class="div-layanan-title" style="text-align:center;padding-bottom:15px;background-color:green;" class="col-md-12 col-xs-12 col-sm-12">
                            <p class="layanan-tittle" style="font-size:40px;">Layanan Lintasarta Cloud Services</p>
                            <p class="layanan-content" style="font-size:22px;">Layanan apa saja yang dapat meningkatkan performansi bisnis Anda ?</p>
                        </div>
                    </div>
                    <div class="div-software col-md-12 col-xs-12 col-sm-12">
                        <div style="text-align:center;padding-bottom:30px;padding-top:40px;" class="col-md-12 col-xs-12 col-sm-12">
                            <p style="font-size:30px;">Cloud Software</p>
                        </div>
                        <div class="hidden-xs col-md-12 col-sm-12">
                            <div class="col-md-4 col-xs-12">
                                <div class="layanan-div col-md-12 col-sm-12">
                                    <img style="margin-top: -70px;max-width:117px;width:100%;" src="images/chart-1.png">
                                    <div class="wrapper-text-layanan col-md-12 col-xs-12 col-sm-12">
                                        <p>Media Analytics</p>
                                        <p style="margin: 45px 0px;">Pemanfaatan data social media untuk menilai efektivitas campaign dan citra perusahaan Anda.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div  class="layanan-div col-md-12 col-sm-12">
                                    <img style="margin-top: -70px;max-width:117px;width:100%;" src="images/mail-1.png">
                                    <div class="wrapper-text-layanan col-md-12 col-xs-12 col-sm-12">
                                        <p>Managed Email</p>
                                        <p style="margin: 45px 0px;">Solusi pengelolaan e-mail yang aman dan efisien, meringankan beban Anda dalam pengelolaan tenaga ahli dan perangkat.</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12">
                                <div class="layanan-div col-md-12 col-sm-12">
                                    <img style="margin-top: -70px;max-width:117px;width:100%;" src="images/recovery-1.png">
                                    <div class="wrapper-text-layanan col-md-12 col-xs-12 col-sm-12">
                                        <p>Disaster Recovery as a Service</p>
                                        <p style="margin: 45px 0px;">Layanan penanggulangan bencana yang cepat dan aman, mencegah kerugian pada waktu-waktu yang tidak terduga.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div style="padding: 0px 50px;" class="visible-xs col-xs-12">
                            <div id="myCarousel1" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    <li data-target="#myCarousel1" data-slide-to="0" class="active"></li>
                                    <li data-target="#myCarousel1" data-slide-to="1"></li>
                                    <li data-target="#myCarousel1" data-slide-to="2"></li>
                                </ol>

                                <!-- Wrapper for slides -->
                                <div class="carousel-inner">
                                    <div style="background-image:url('images/bg-layanan-1.png');" class="item slide-layanan active">
                                        <div class="wrapper-text-layanan-mobile col-md-12 col-xs-12 col-sm-12">
                                            <p>Media Analytics</p>
                                            <p style="margin: 45px 0px;">Pemanfaatan data social media untuk menilai efektivitas campaign dan citra perusahaan Anda.</p>
                                        </div>
                                    </div>

                                    <div style="background-image:url('images/bg-layanan-2.png');" class="item slide-layanan">
                                        <div class="wrapper-text-layanan-mobile col-md-12 col-xs-12 col-sm-12">
                                            <p>Managed Email</p>
                                            <p style="margin: 45px 0px;">Solusi pengelolaan e-mail yang aman dan efisien, meringankan beban Anda dalam pengelolaan tenaga ahli dan perangkat.</p>
                                        </div>
                                    </div>

                                    <div style="background-image:url('images/bg-layanan-3.png');" class="item slide-layanan">
                                        <div class="wrapper-text-layanan-mobile col-md-12 col-xs-12 col-sm-12">
                                            <p>Disaster Recovery as a Service</p>
                                            <p style="margin: 45px 0px;">Layanan penanggulangan bencana yang cepat dan aman, mencegah kerugian pada waktu-waktu yang tidak terduga.</p>
                                        </div>
                                    </div>
                                </div>

                                <!-- Left and right controls -->
                                <a style="background:none;" class="left carousel-control" href="#myCarousel1" data-slide="prev">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                    <span class="sr-only">Previous</span>
                                </a>
                                <a style="background:none;" class="right carousel-control" href="#myCarousel1" data-slide="next">
                                    <span class="glyphicon glyphicon-chevron-right"></span>
                                    <span class="sr-only">Next</span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="div-software col-md-12 col-xs-12 col-sm-12">
                        <div style="text-align:center;padding-bottom:30px;padding-top:40px;" class="col-md-12 col-xs-12 col-sm-12">
                            <p style="font-size:30px;">Cloud Infrastructure</p>
                        </div>
                        <div class="wrapper-layanan">
                            <div class="wrapper-infrastructure col-md-6 col-xs-12">
                                <div class="layanan-div col-md-12 col-sm-12">
                                    <img style="margin-top: -70px;max-width:117px;width:100%;" src="images/hand-1.png">
                                    <div class="wrapper-text-layanan col-md-12 col-xs-12 col-sm-12">
                                        <p>Private Cloud</p>
                                        <p class="text-layanan-mobile">
                                            Jasa penyediaan infrastruktur TI menggunakan perangkat dedicated untuk satu pelanggan yang dapat diakses melalui jaringan internet maupun jaringan private.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="wrapper-infrastructure col-md-6 col-xs-12">
                                <div class="layanan-div col-md-12 col-sm-12">
                                    <img style="margin-top: -70px;max-width:117px;width:100%;" src="images/cloud-1a.png">
                                    <div class="wrapper-text-layanan col-md-12 col-xs-12 col-sm-12">
                                        <p>Public Cloud</p>
                                        <p class="text-layanan-mobile">
                                            Jasa penyediaan infrastruktur TI yang multi-tenant dengan perangkat virtual server yang dapat diakses melalui jaringan internet maupun jaringan private.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="div-software col-md-12 col-xs-12 col-sm-12">
                        <div style="text-align:center;padding-bottom:30px;padding-top:40px;" class="col-md-12 col-xs-12 col-sm-12">
                            <p style="font-size:30px;">Cloud Platform</p>
                        </div>
                        <div style="max-width:800px;" class="wrapper-layanan">
                            <div class="wrapper-infrastructure col-md-12 col-xs-12">
                                <div style="max-width:819px;height:278px;background-position:top-center;" class="layanan-div col-md-12 col-sm-12">
                                    <img style="margin-top: -70px;max-width:117px;width:100%;" src="images/cloud-2a.png">
                                    <div class="wrapper-text-layanan col-md-12 col-xs-12 col-sm-12">
                                        <p>Cloud Platform</p>
                                        <p class="cloud-platform-text text-layanan-mobile">
                                            Platform untuk mengembangkan, menjalankan dan mengelola aplikasi tanpa segala kompleksitas yang dibangun pada infrastruktur Lintasarta di Indonesia.
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="div-corps col-md-12 col-xs-12 col-sm-12">
                        <div style="text-align:center;font-size:20px;" class="corps-title col-md-12 col-xs-12 col-sm-12">
                            <p style="padding-top: 40px;padding-bottom: 15px;" >Perusahaan yang telah menggunakan Lintasarta Cloud Services:</p>
                        </div>
                        <div style="text-align:center;max-width:500px;width:100%;margin:0px auto;" class="">
                            <div style="padding-bottom:40px;" class="col-md-12 col-xs-12">
                                <div class="col-md-3 col-xs-3">
                                    <img src="images/corps-1.png" class="fedex img-corps img-responsive">
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <img src="images/corps-niu-1.png" class="kao img-corps img-responsive">
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <img src="images/corps-niu-2.png" class="artajasa img-corps img-responsive">
                                </div>
                                <div class="col-md-3 col-xs-3">
                                    <img src="images/corps-niu-3.png" class="adira img-corps img-responsive">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-top:80px;" class="col-md-12 col-xs-12">
                        <center>
                            <button style="border-radius:0;" class="btn btn-lg btn-warning" data-toggle="modal" data-target="#myModalsss">Claim Your Free Trial</button>
                            <br><br><a data-toggle="modal" data-target="#myModals1" href="">Or arrange a discussion with our team</a>
                        </center>
                        <!-- Modal -->
                        <div style="z-index:99999;" id="myModalsss" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>“Thank you for showing interest on our Cloud Service. We will shortly contact you regarding your inquiry.To learn more about our Cloud Service, click <a href="">here.”</a></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- Modal -->
                        <div style="z-index:99999;" id="myModals1" class="modal fade" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title"></h4>
                                    </div>
                                    <div class="modal-body">
                                        <p>“Thank you for showing interest on our Cloud Service. We will shortly contact you regarding your inquiry.To learn more about our Cloud Service, click <a href="">here.”</a></p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div style="font-family:robotoReg;" class="footer col-md-12 col-xs-12 col-sm-12">
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="col-md-3 col-xs-0 col-sm-4">
                    &nbsp;
                </div>
                <div style="font-size: 15px;padding-top: 27px;color:white;" class="wrapper-text-footer col-md-9 col-xs-12 col-sm-8">
                    <div style="padding-top: 15px;" class="col-md-4 col-xs-12 col-sm-4">
                        <p>Informasi Selanjutnya</p>
                        <p style="font-size: 30px;font-weight: bold;">Butuh Bantuan?</p>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <p><span style="width: 42px;font-size: 31px;" class="glyphicon glyphicon-earphone"></span>Layanan Pelanggan</p>
                        <p class="nomer-hp" style="font-size: 30px;font-weight: bold;margin-left:40px;">
                            <a class="telp" style="color:white;text-decoration:none;" href="tel:0217503456">021 750 3456</a>
                        </p>
                        <p class="informasi-produk" style="margin-left:40px;">Informasi Produk<p>
                        <p class="nomer-hp" style="font-size: 30px;font-weight: bold;margin-left:40px;">
                            <a class="telp" style="color:white;text-decoration:none;" href="tel:0212302347">021 230 2347</a>
                        </p>
                    </div>
                    <div class="col-md-4 col-xs-12 col-sm-4">
                        <p><span style="width: 42px;font-size: 31px;padding-top: 5px;" class="glyphicon glyphicon-envelope"></span>
                            <a style="color:white;text-decoration:none;" href="mailto:info@lintasarta.co.id?subject=Inquiry%20Cloud%20Service&body=Dear%20Lintasarta%0D%0A%0D%0ASaya%20tertarik%20untuk%20mendapatkan%20informasi%20lebih%20lanjut%20terkait%20Layanan%20Cloud%20Lintasarta.%20Mohon%20untuk%20dapat%20menghubungi%20saya%20kembali.%0D%0A%0D%0ATerima%20kasih">Email Kami</a>
                        </p>
                    </div>
                </div>
                <div style="padding: 40px 0;" class="wrapper-footer-menu col-md-8 col-xs-12 col-sm-12">
                    <div class="menu-footer col-md-2 col-xs-4"><p><a href="http://www.lintasarta.net/Page/Why_Lintas">Tentang Lintasarta</p></div>
                    <!--<div class="menu-footer col-md-2 col-xs-4"><p>Hubungi Kami</p></div>
                    <div class="menu-footer col-md-2 col-xs-4"><p>Product Inquiry</p></div>
                    <div class="menu-footer col-md-1 col-xs-4"><p>CSR</p></div>
                    <div class="menu-footer col-md-1 col-xs-4"><p>Kegiatan</p></div>
                    <div class="menu-footer col-md-1 col-xs-4"><p>Karir</p></div>
                    <div class="menu-footer col-md-1 col-xs-4"><p>Sitemap</p></div>-->
                    <div style="color:#6189c7;" class="footer-copyright col-md-12 col-xs-12">Copyright @2017 PT. Aplikanusa Lintasarta All rights reserved.</div>
                </div>
                <div class="wrapper-social-media col-md-4 col-xs-12 col-sm-12">
                    <a class="btn-socmed" href="http://www.instagram.com/lintasarta_official"><span class="fa fa-instagram fa-2x"></span></a>
                    <a class="btn-socmed" href="https://www.linkedin.com/company/pt-aplikanusa-lintasarta/"><span class="fa fa-linkedin fa-2x"></span></a>
                    <a class="btn-socmed" href="http://www.twitter.com/lintasarta"><span class="fa fa-twitter fa-2x"></span></a>
                    <a class="btn-socmed" href="https://www.facebook.com/aplikanusalintasarta"><span class="fa fa-facebook fa-2x"></span></a>
                </div>
            </div>
        </div>

        <div class="">    
            <button style="background-color:#febe41;" class="btn-float btn" onclick="location.href = 'http://develop-neodigital.com/lintas-arta-cloud/#home'">
              <img src="images/forms_icon.png" class="img-responsive">
            </button>
        </div>

    </body>
    <!-- Modal -->
    <?php
    if ($_SESSION['test'] == 'yayan') {
        echo "<div style='z-index:99999;' id='myModal' class='modal fade' role='dialog'>" .
        "<div class='modal-dialog'>" .
        "<div class='modal-content'>" .
        "<div class='modal-header'> " .
        "<button type='button' class='close' data-dismiss='modal'>&times;</button>" .
        "<h4 class='modal-title'></h4>" .
        "</div>" .
        "<div class='modal-body'>" .
        "<p>'Thank you for showing interest on our Cloud Service. We will shortly contact you regarding your inquiry.To learn more about our Cloud Service, click <a href=''> here.'</a></p>" .
        "</div>" .
        "<div class='modal-footer'>" .
        "<button type='button' class='btn btn-default' data-dismiss='modal'>Close</button>" .
        "</div>" .
        "</div>" .
        "</div>" .
        "</div>";
    }

    session_destroy();
    ?>
</html>
