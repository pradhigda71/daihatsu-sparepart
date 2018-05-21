<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Lintas Arta | Data Center</title>
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
        <?php
        session_start();
        /* if($_SESSION['test'] == 'yayan'){
          echo "<script>$(window).on('load',function(){$('#myModal').modal('show');});</script>" ;
          } else {
          echo "lalal" ;
          } */
        ?>
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
                src: url('font/DroidSans-Bold.ttf');
            }
            @font-face {
                font-family: robotoMedium;
                src: url('font/Roboto-Medium.ttf');
            }
            @font-face {
                font-family: robotoReg;
                src: url('font/Roboto-Regular.ttf');
            }
            @media(min-width: 1439px){
                .teknologi-grey {
                    width: 100% !important ;
                }
                .caption-description {
                  font-size: 17px !important;
                }
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

            .wrapper-img-desc {
                padding-left: 130px ;
                padding-right: 130px ;
            }

            .wrapper-text {
                margin-top: 20px ;
            }

            .aktif {
                background-color: #e7e2e2 !important;
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
            .teknologi-grey {
                background-color: #e7e2e2;
                width: 100%;
                padding-bottom: 20px ;
            }
            .text-layanan-wrapper-3 {
                color: white;
                background: #00a89e;
                text-align: center;
                font-size: 14px;
                height: 280px;
            }
            .text-layanan-wrapper {
                color: white;
                background: #00a89e;
                text-align: center;
                height: 340px;
                padding-top: 60px ;
                font-size: 20px;
            }
            .text-layanan-wrapper-4 {
                color: white;
                background: #00a89e;
                text-align: center;
                font-size: 20px;
                height: 280px;
            }
            .layanan-1 {
                background-image: url('images/img-layanan-1-a.png');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: 392px;
                font-family:robotoReg;padding-right:35px;background-color:black;width: 30%;margin-left: 210px;
            }
            .layanan-2 {
                background-image: url('images/img-layanan-2-a.png');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: 392px;
                padding-left:35px;background-color:blue;width: 30%;margin-left: 60px;
            }
            .layanan-3 {
                background-image: url('images/img-layanan-3-a.png');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: 321px;
                padding-right:15px;width: 25%;margin-left: 270px;
            }
            .layanan-4 {
                background-image: url('images/img-layanan-4-a.png');
                background-repeat: no-repeat;
                background-position: center;
                background-size: cover;
                height: 321px;
                padding-left:15px;width: 25%;margin-left: 60px;
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
                /*padding-left: 45px;*/
                padding-bottom: 10px;
            }
            .header-nav {
                padding-top: 35px;
                padding-left: 0px ;
            }
            .banner-img {
                background-image: url('images/bg-header.png');
                background-repeat: no-repeat;
                height: 690px;
                background-size: cover;
            }
            .banner-form {
                background-color: #3e8fd1 ;
                height: 690px;
                padding-top: 20px;
            }
            .banner-form p {
                color: white;
                text-align: center;
            }
            .div-desc-header {
                color: white ;
                font-size: 18px;
                margin-top: 225px;
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
                font-size: 16px;
                height: 135px;
            }
            .caption-description-bottom {
                padding-bottom: 20px ;
                font-size: 16px;
            }
            .tabs {
                text-align: center;
                margin-top: 25px;
            }
            .tabs-div {
                height: 80px;
                /*border-radius: 10px;*/
                color: #758b9d;
                cursor: pointer;
                font-weight: bold;
            }
            .img-gembok {
              max-width: 170px;
              margin: 75px auto;
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
            .ramah-lingkungan-text {
                margin-top: 20px;
                font-size: 16px;
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
                .div-keamanan {
                    background: #e7e2e2;
                }
                .tabs {
                    padding: 0 !important;
                }
                .teknologi-grey {
                    width: 100% !important;
                    margin: 0 !important ;
                }
                .div-layanan-image {
                    padding: 0 !important ;
                    margin-left: 0 ;
                    width: 50%  ;
                }
                .layanan-3 {
                    width: 50% ;
                    margin: 0 !important ;
                }
                .layanan-4 {
                    width: 50% ;
                    margin: 0 !important ;
                }
                .text-layanan-wrapper-3{
                    font-size: 12px;
                }
                .paraMenu {
                    padding: 35px 8px !important;
                }
                .header-nav {
                    padding-left: 16% !important;
                }
                .caption-description-bottom {
                    padding: 10px !important;
                    font-size: 16px;
                }
                .caption-description {
                    font-size: 16px;
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
                    padding-top: 45px !important;
                }
                .img-logo-header {
                    padding-left: 0 !important;
                    max-width: 195px;
                }
            }
            @media(max-width :570px) {
                .caption-description {
                    height: 100px;
                    overflow: auto;
                }
            }
            @media(max-width : 430px){

                .wrapper-img-desc {
                    padding-left: 10px ;
                    padding-right: 10px ;
                }

                .text-layanan-wrapper-4 {
                    margin-top: 25px !important;
                }
                .layanan-3 {
                    margin-left: 0  !important;
                    width: 100%  ;
                    margin-top: 150px ;
                    height: 430px ;
                }
                .layanan-4 {
                    margin-left: 0 !important ;
                    width: 100%  ;
                    height: 350px ;
                    margin-top: 50px ;
                }
                .div-layanan-image {
                    padding: 0 !important ;
                    width: 100% ;
                    margin-left: 0 ;
                    margin-bottom: 25px ;
                }
                .text-layanan-wrapper {
                    font-size: 14px ;
                    height: 300px;
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
                    height: 120px;
                }
                .content-middle-tittle {
                    font-size: 24px !important ;
                }
                .content-middle {
                    padding-top: 15px;
                }
                .img-description {
                    max-width: 130px;
                }
                .layanan-tittle {
                    font-size: 24px !important ;
                }
                .img-layanan {
                    float: none;
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
                .btn-float {
                    width: 70px;
                    height : 70px ;
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
                }
                @media(max-width: 320px ){
                    .caption-description {
                        font-size: 12px;
                    }
                    .caption-description-bottom {
                        font-size: 12px;
                    }
                    .div-desc-header {
                        margin-top: 125px;
                    }
                    .img-layanan {
                        float: none !important;
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
                    <li class="nav navbar-nav"><a href="#home" class="paraMenu" data-slide="#home">Lintasarta Data Center</a></li>
                    <li class="nav navbar-nav"><a href="#mengapa" class="paraMenu" data-slide="#mengapa">Mengapa Lintasarta</a></li>
                    <li class="nav navbar-nav"><a href="#teknologi" class="paraMenu" data-slide="#teknologi">Teknologi</a></li>
                    <li class="nav navbar-nav"><a href="#layanan" class="paraMenu" data-slide="#layanan">Paket Layanan</a></li>
                </ul>
            </div>
            <div class="visible-xs col-xs-6 col-sm-6">
                <img style="max-width: 70px;float: right;margin-top: 12px;" id="mobile-menu" class="img-responsive" src="images/menu-1.png">
            </div>
            <div class="menu-mobile col-xs-12">
                <a href="#home" class="paraMenu" onclick="$('.menu-mobile').slideUp();" data-slide="#home">Lintasarta Data Center</a><br><br>
                <a href="#mengapa" class="paraMenu" onclick="$('.menu-mobile').slideUp();" data-slide="#mengapa">Mengapa Lintasarta</a><br><br>
                <a href="#teknologi" class="paraMenu" onclick="$('.menu-mobile').slideUp();" data-slide="#teknologi">Teknologi</a><br><br>
                <a href="#layanan" class="paraMenu" onclick="$('.menu-mobile').slideUp();" data-slide="#layanan">Paket Layanan</a><br><br>
            </div>
        </div>

        <div class="header-banner" id="home">
            <div class="banner-img col-md-9 col-xs-12 col-sm-12">
                <div class="div-desc-header">
                    <h3 style="font-family:robotoReg;">Lintasarta Data Center</h3><br>
                    <p>Berkembangnya aktivitas bisnis suatu perusahaan membutuhkan fasilitas penyimpanan data yang lebih besar serta handal. <br>Layanan Lintasarta Data Center merupakan solusi yang tepat bagi berbagai kebutuhan penyimpanan data yang handal.</p>
                </div>
            </div>

            <div class="banner-form col-md-3 col-xs-12">
                <div class="col-md-12 col-xs-12 col-sm-12">
                    <h3 style="text-align:center;color:white;font-family:robotoMedium;">Sewa rak gratis</h3>
                    <p style="font-family:robotoReg;">Selama persediaan masih ada!</p>
                    <p style="font-size : 35px;font-family:robotoBold;"> <a class="telp" style="color:white;text-decoration:none;" href="tel:0212302347">021 230 2347</a> </p>
                    <p style="font-family:robotoReg;">Lengkapi data dibawah</p>
                    <form class="" method="post" action="action.php">
                        <div class="form-group">
                            <input type="text" name="nama" class="form-control form-header" placeholder="Nama Anda" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="perusahaan" class="form-control form-header" placeholder="Perusahaan" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="jabatan" class="form-control form-header" placeholder="Jabatan" required>
                        </div>
                        <div class="form-group">
                            <input type="text" name="no-hp" class="form-control form-header" placeholder="No. Handphone" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" class="form-control form-header" placeholder="Email" required>
                        </div>
                        <div style="color:white;font-family:robotoReg;" class="form-group">
                            Kebutuhan: <input type="checkbox" name="kebutuhan" value="colocation"> Data Center Colocation<br>
                            <input style="margin-left:75px;" type="checkbox" name="kebutuhan" value="work-area"> Working Area
                        </div>
                        <div style="color:white;font-family:robotoReg;" class="form-group">
                            <input type="checkbox" name="studi" value="studi-kasus" required> saya ingin studi kasus solusi ini
                        </div>
                        <div>
                            <button type="submit" style="border-radius:0px;float:right;" class="btn btn-warning">Submit</button>
                        </div>
                        <div>
                            <p style="cursor:pointer;" data-toggle="modal" data-target="#myModals1" class="txt-under-btn">Atau jadwalkan pertemuan dengan tim kami untuk berdiskusi lebih lanjut</p>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div style="font-family:robotoReg;" class="content-top col-md-12 col-xs-12 col-sm-12">
            <div style="position:absolute;top:-70px;" id="mengapa"></div>
            <div style="text-align:center;padding-top:45px;" class="content-top-title col-md-12 col-xs-12 col-sm-12">
                <p class="content-top-title-1" style="font-size : 45px;">Mengapa Memilih Lintasarta Data Center</p>
                <p class="content-top-title-2" style="font-size : 14px;">Berikut adalah keuntungan-keuntungan yang didapatkan pelanggan apabila menggunakan layanan Lintasarta Data Center :<p>
            </div>
            <div class="content-top-main">
                <div style="padding-top:40px;" class="wrapper-img-desc col-md-12 col-xs-12">
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-1.png">
                            <p class="caption-description">Solusi lengkap termasuk Connectivity, Disaster Recovery dan Colocation yang dapat memudahkan bisnis Anda.</p>
                        </center>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-2.png">
                            <p class="caption-description">Efisiensi biaya dengan membayar sesuai dengan kebutuhan, tanpa kerumitan mengelola perangkat.</p>
                        </center>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-3.png">
                            <p class="caption-description">Kemampuan pasokan daya tinggi, menunjang performansi semua jenis perangkat.</p>
                        </center>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-4.png">
                            <p class="caption-description">Nikmati kelengkapan fasilitas terbaik di Indonesia yang tersertifikasi Tier III dari lembaga internasional.</p>
                        </center>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-5.png">
                            <p class="caption-description">Standar operasional ramah lingkungan yang mengedepankan efisiensi dan nilai efektivitas penggunaan daya (PUE) yang baik.</p>
                        </center>
                    </div>
                    <div class="col-md-4 col-xs-6">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-6.png">
                            <p class="caption-description">Proses operasional berjalan dengan standardisasi tinggi, memastikan data dan cloud Anda dalam keadaan aman.</p>
                        </center>
                    </div>
                </div>
                <div class="col-md-12 col-xs-12">
                    <div class="col-md-12 col-xs-12">
                        <center>
                            <img class="img-description img-responsive" src="images/img-description-7.png">
                            <p class="caption-description-bottom">Service Level Agreement tinggi, 99,982% per bulan.</p>
                        </center>
                    </div>
                </div>
            </div>
        </div>

        <div style="font-family:robotoReg;" class="content-middle col-md-12 col-xs-12 col-sm-12">
            <div style="position:absolute;top:-100px;" id="teknologi"></div>
            <div class="col-md-12 col-xs-12 col-sm-12">
                <div class="content-middle-tittle col-md-12 col-xs-12 col-sm-12">
                    <center><p class="content-middle-tittle" style="font-size: 45px;">Teknologi Lintasarta Data Center</p></center>
                </div>
                <div style="margin:0px auto;max-width:1100px;" class="hidden-xs div-teknologi-wrapper">
                    <div class="tabs col-md-12 col-xs-12 col-sm-12">
                        <div style="background-color:#aad1f2;" onclick="$('.tabs-div').removeClass('aktif');$(this).addClass('aktif');$('#daya-tinggi').show();$('#downtime').hide();$('#ramah-lingkungan').hide();$('#keamanan').hide();" class="tabs-div col-md-3 col-xs-6 col-sm-3 aktif"><br>MENDUKUNG KEBUTUHAN DAYA YANG TINGGI</div>
                        <div style="background-color:#aad1f2;" onclick="$('.tabs-div').removeClass('aktif');$(this).addClass('aktif');$('#ramah-lingkungan').show();$('#downtime').hide();$('#keamanan').hide();$('#daya-tinggi').hide();" class="tabs-div col-md-3 col-xs-6 col-sm-3"><br>INSTRUKTUR RAMAH LINGKUNGAN DAN EFISIEN</div>
                        <div style="background-color:#aad1f2;" onclick="$('.tabs-div').removeClass('aktif');$(this).addClass('aktif');$('#ramah-lingkungan').hide();$('#downtime').show();$('#keamanan').hide();$('#daya-tinggi').hide();" class="tabs-div col-md-3 col-xs-6 col-sm-3"><br>PENGELOLAAN TANPA DOWNTIME</div>
                        <div style="background-color:#aad1f2;" onclick="$('.tabs-div').removeClass('aktif');$(this).addClass('aktif');$('#ramah-lingkungan').hide();$('#downtime').hide();$('#keamanan').show();$('#daya-tinggi').hide();" class="tabs-div col-md-3 col-xs-6 col-sm-3"><br>SISTEM KEAMANAN DAN MANAJEMEN OPERASIONAL</div>
                    </div>
                    <div class="div-keamanan col-md-12 col-xs-12 col-sm-12">
                        <div style="" id="daya-tinggi" class="col-md-12 col-xs-12 teknologi-grey">
                            <div class="col-md-4 col-xs-12">
                                <img src="images/img-daya.png" class="img-gembok img-responsive">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <p class="ramah-lingkungan-text">
                                    Data Center didesain untuk mendukung kebutuhan power yang tinggi untuk setiap rak, up to 13 kW/ rak), yang didukung oleh teknologi berikut:
                                <ol>
                                    <li>DRUPS Engine Generator – Suplai power cadangan yang reliable dan berkualitas tinggi.</li>
                                    <li>Cold Containment System – Pendinginan rak high density dan meningkatkan efisiensi.</li>
                                    <li>Big Power Capacity – Memiliki kapasitas power sampai dengan 3,2 MW IT load.</li>
                                    <li>Building Strength – Kekuatan raised floor mencapai 2000 kg/m2 untuk mengantisipasi beban rak high density yang lebih berat.</li>
                                    <li>Continuous Cooling – Jaminan sistem pendingin tetap bekerja walaupun terjadi perpindahan sumber daya listrik.</li>
                                </ol>
                                </p>
                            </div>
                        </div>
                        <div style="display:none;" id="downtime" class="col-md-12 col-xs-12 teknologi-grey">
                            <div class="col-md-4 col-xs-12">
                                <img src="images/img-downtime.png" class="img-gembok img-responsive">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <p class="ramah-lingkungan-text">
                                    Lakukan perbaikan tanpa menyebabkan downtime
                                </p>
                            </div>
                        </div>
                        <div style="display:none;" id="keamanan" class="col-md-12 col-xs-12 teknologi-grey">
                            <div class="col-md-4 col-xs-12">
                                <img src="images/img-keamanan-1.png" class="img-gembok img-responsive">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <ol style="padding-top: 50px;font-size: 16px;" type="a">
                                    <li>
                                        Keamanan Fisik
                                        <ol type="i">
                                            <li>24 x 7 petugas keamanan di area Data Center</li>
                                            <li>24 x 7 patroli tambahan dari pengelola kawasan</li>
                                            <li>3-layer security access check untuk memasuki lokasi Data Center</li>
                                        </ol>
                                    </li>
                                    <li>
                                        CCTV dan akses kontrol
                                        <ol type="i">
                                            <li>24 x 7 Monitoring CCTV pada seluruh area Data Center dengan playback satu bulan</li>
                                            <li>Akses masuk gedung menggunakan autentikasi 3 level: biometri, card dan pin.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        Data Center Monitoring System (DCIM)
                                        <ol type="i">
                                            <li>24 x 7 dimonitor oleh tim Data Center Operation.</li>
                                            <li>Setiap perangkat kritikal sampai ke rack-level dimonitor oleh DCIM.</li>
                                            <li>Sistem alarm apabila terjadi gangguan sehingga bisa cepat diselesaikan oleh tim Data Center Operation.</li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>
                        </div>
                        <div style="display:none;" id="ramah-lingkungan" class="col-md-12 col-xs-12 teknologi-grey">
                            <div class="col-md-4 col-xs-12">
                                <img src="images/img-ramah.png" class="img-gembok img-responsive">
                            </div>
                            <div class="col-md-6 col-xs-12">
                                <p class="ramah-lingkungan-text">
                                    Data Center dibangun dengan prinsip ramah lingkungan dan efisiensi, didukung oleh teknologi berikut:
                                    <br>Chilled Water System – Penggunaan energi lebih efisien dan ramah lingkungan.
                                    <br>Penggunaan Gas NOVEC 1230 – Gas ramah lingkungan yang tidak membahayakan manusia maupun perangkat.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- teknologi mobile -->
                <div class="visible-xs col-xs-12 col-sm-12">
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
                            <div class="item active">
                                <center>
                                  <img src="images/img-daya.png" alt="Los Angeles" style="width:60%;">
                                </center>
                                <p style="font-size : 12px;" class="ramah-lingkungan-text">
                                    Data Center Technopark didesain untuk mendukung kebutuhan power yang tinggi untuk setiap rak, up to 13 kW/ rak), yang didukung oleh teknologi berikut:
                                <ol>
                                    <li>DRUPS Engine Generator – Suplai power cadangan yang reliable dan berkualitas tinggi.</li>
                                    <li>Cold Containment System – Pendinginan rak high density dan meningkatkan efisiensi.</li>
                                    <li>Big Power Capacity – Memiliki kapasitas power sampai dengan 3,2 MW IT load.</li>
                                    <li>Building Strength – Kekuatan raised floor mencapai 2000 kg/m2 untuk mengantisipasi beban rak high density yang lebih berat.</li>
                                    <li>Continuous Cooling – Jaminan sistem pendingin tetap bekerja walaupun terjadi perpindahan sumber daya listrik.</li>
                                </ol>
                                </p>
                            </div>

                            <div class="item">
                                <center>
                                  <img src="images/img-downtime.png" alt="Chicago" style="width:60%;">
                                </center>
                                <p style="font-size:12px;" class="ramah-lingkungan-text">
                                    Lakukan perbaikan tanpa menyebabkan downtime
                                </p>
                            </div>

                            <div class="item">
                                <Center>
                                  <img src="images/img-keamanan-1.png" alt="Chicago" style="width:60%;">
                                </center>
                                <ol style="padding-top: 50px;font-size: 12px;" type="a">
                                    <li>
                                        Keamanan Fisik
                                        <ol type="i">
                                            <li>24 x 7 petugas keamanan di area Data Center</li>
                                            <li>24 x 7 patroli tambahan dari pengelola kawasan</li>
                                            <li>3-layer security access check untuk memasuki lokasi Data Center</li>
                                        </ol>
                                    </li>
                                    <li>
                                        CCTV dan akses kontrol
                                        <ol type="i">
                                            <li>24 x 7 Monitoring CCTV pada seluruh area Data Center dengan playback satu bulan</li>
                                            <li>Akses masuk gedung menggunakan autentikasi 3 level: biometri, card dan pin.</li>
                                        </ol>
                                    </li>
                                    <li>
                                        Data Center Monitoring System (DCIM)
                                        <ol type="i">
                                            <li>24 x 7 dimonitor oleh tim Data Center Operation.</li>
                                            <li>Setiap perangkat kritikal sampai ke rack-level dimonitor oleh DCIM.</li>
                                            <li>Sistem alarm apabila terjadi gangguan sehingga bisa cepat diselesaikan oleh tim Data Center Operation.</li>
                                        </ol>
                                    </li>
                                </ol>
                            </div>

                            <div class="item">
                                <center>
                                  <img src="images/img-ramah.png" alt="New york" style="width:60%;">
                                </center>
                                <p style="font-size:12px;" class="ramah-lingkungan-text">
                                    Data Center Technopark dibangun dengan prinsip ramah lingkungan dan efisiensi, didukung oleh teknologi berikut:
                                    Chilled Water System – Penggunaan energi lebih efisien dan ramah lingkungan.
                                    Penggunaan Gas NOVEC 1230 – Gas ramah lingkungan yang tidak membahayakan manusia maupun perangkat.
                                </p>
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

                <div class="div-layanan col-md-12 col-xs-12 col-sm-12">
                    <div style="position:absolute;top:-100px;" id="layanan"></div>
                    <div style="max-width:1000px;margin:0px auto;" class="">
                        <div style="text-align:center;padding-bottom:15px;" class="col-md-12 col-xs-12 col-sm-12">
                            <p class="layanan-tittle" style="font-size:40px;">Paket Layanan</p>
                        </div>
                        <!--<img style="float:right;" src="images/img-layanan-1.png" class="img-layanan img-responsive">-->
                        <div class="div-layanan-image col-md-4 col-xs-12 col-sm-4">
                            <div style="color:white;" class="text-layanan-wrapper col-md-12 col-xs-12 col-sm-12">
                                <img src="images/colocation.png">
                                <div class="wrapper-text">
                                    <p><b>COLOCATION</b></p>
                                    <p>Server Anda dikelola pada Data Center Lintasarta oleh tenaga ahli tersertifikasi.</p>
                                </div>
                            </div>
                        </div>
                        <div style="" class="div-layanan-image col-md-4 col-xs-12 col-sm-4">
                              <!--<img src="images/img-layanan-2.png" class="img-layanan img-responsive">-->
                            <div style="color:white;" class="text-layanan-wrapper col-md-12 col-xs-12 col-sm-12">
                                <img src="images/working-area.png">
                                <div class="wrapper-text">
                                    <p><b>WORKING AREA</b></p>
                                    <p>Penyediaan ruang kerja untuk kebutuhan Anda.</p>
                                </div>
                            </div>
                        </div>
                        <div style="" class="div-layanan-image col-md-4 col-xs-12 col-sm-4">
                              <!--<img src="images/img-layanan-2.png" class="img-layanan img-responsive">-->
                            <div style="color:white;" class="text-layanan-wrapper col-md-12 col-xs-12 col-sm-12">
                                <img src="images/additional-services.png">
                                <div class="wrapper-text">
                                    <p><b>ADDITIONAL SERVICE</b></p>
                                    <p>Layanan Smart Hand dan Meet Me Room untuk mempermudah pengelolaan .</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="max-width:570px;margin:0px auto;" class="">
                        <div style="text-align:center;padding-bottom:15px;padding-top:40px;" class="col-md-12 col-xs-12 col-sm-12">
                            <p style="font-size:30px;">Additional Services</p>
                        </div>
                        <div style="" class="col-md-6 col-sm-6">
                                <!--<img style="float:right;" src="images/img-layanan-3.png" class="img-layanan img-responsive">-->
                            <div style="color:white;padding-top:20px;" class="text-layanan-wrapper-3 col-md-12 col-xs-12 col-sm-12">
                                <img src="images/managed-data-center.png">
                                <div class="wrapper-text">
                                  <p><b>MANAGED DATA CENTER</b></p>
                                  <p>Mengelola data center Anda secara end-to-end mulai dari tenaga ahli, pengelolaan fasilitas hingga keamanan.</p>
                                </div>
                            </div>
                        </div>
                        <div style="" class="col-md-6 col-sm-6">
                                <!--<img src="images/img-layanan-4.png" class="img-layanan img-responsive">-->
                            <div style="color:white;font-size:12px;padding-top:20px;" class="text-layanan-wrapper-4 col-md-12 col-xs-12 col-sm-12">
                                <img src="images/data-center-consultancy.png">
                                <div class="wrapper-text">
                                  <p><b>Data Center Consultancy</b></p>
                                  <p>Jasa konsultasi termasuk Resiliency Services, Design & Build dan pembuatan Business Continue Plan.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div style="padding-top:80px;" class="col-md-12 col-xs-12 col-sm-12">
                        <center>
                            <button style="border-radius:0;" class="btn btn-lg btn-sm btn-warning" data-toggle="modal" data-target="#myModalsss">Claim Your Limited Free Rack</button>
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
                                        <p>“Thank you for showing interest on our Data Center. We will shortly contact you regarding your inquiry.To learn more about our Data Center, click <a href="">here.”</a></p>
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
                            <a style="color:white;text-decoration:none;" href="mailto:info@lintasarta.co.id?subject=Inquiry%20Data%20Center&body=Dear%20Lintasarta%0D%0A%0D%0ASaya%20tertarik%20untuk%20mendapatkan%20informasi%20lebih%20lanjut%20terkait%20Layanan%20Data%20Center%20Lintasarta.%20Mohon%20untuk%20dapat%20menghubungi%20saya%20kembali.%0D%0A%0D%0ATerima%20kasih">Email Kami</a>
                        </p>
                    </div>
                </div>
                <div style="padding: 40px 0;" class="wrapper-footer-menu col-md-8 col-xs-12 col-sm-12">
                    <div class="menu-footer col-md-2 col-xs-4"><p>Tentang Lintasarta</p></div>
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

        <!--<div class="">
            <button class="btn-float btn btn-warning" onclick="location.href = 'http://develop-neodigital.com/lintas-arta-data-center/#home'">TRY<br>FREE !</button>
        </div>-->
        <div class="">
            <button style="background-color:#febe41;" class="btn-float btn" onclick="location.href = 'http://develop-neodigital.com/lintas-arta-data-center/#home'">
              <img src="images/forms_icon.png" class="img-responsive">
            </button>
        </div>

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
            "<p>'Thank you for showing interest on our Data Center. We will shortly contact you regarding your inquiry.To learn more about our Data Center, click <a href=''> here.'</a></p>" .
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
        <script>
            $('#tabs')
        </script>

    </body>
</html>
