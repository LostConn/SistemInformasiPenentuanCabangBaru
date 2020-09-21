<?php
error_reporting(0);
ob_start();
session_start();
include('lib/lib_func.php');
include('lib/titik_koma.php');
include_once('lib/konversi_bulan.php');
$link                 = koneksi_db();

$nama_pelanggan   = $_SESSION['nama_pelanggan'];
$belum_login      = $_GET['belum_login'];
$pemesanan_sukses = $_GET['pemesanan_sukses'];
$modal_pemesanan  = $_GET['modal_pemesanan'];
$kode_transaksi_pemesanan   = $_SESSION['s_kode_transaksi_pemesanan'];
?>

<!doctype html>
<!--[if lt IE 7]><html lang="en" class="no-js ie6"><![endif]-->
<!--[if IE 7]><html lang="en" class="no-js ie7"><![endif]-->
<!--[if IE 8]><html lang="en" class="no-js ie8"><![endif]-->
<!--[if gt IE 8]><!-->
<html lang="en" class="no-js">
<!--<![endif]-->

<head>
    <meta charset="UTF-8">
    <title>CV. Adara Fashion Art</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="icon" type="image/png" href="images/logo.png">

    <link rel="stylesheet" href="content/css/bootstrap.min.css">
    <link rel="stylesheet" href="content/css/animate.css">
    <link rel="stylesheet" href="content/css/font-awesome.min.css">
    <link rel="stylesheet" href="content/css/jquery.easy-pie-chart.css">
    <link rel="stylesheet" href="content/css/styles.css" title="mainStyle">

    <!-- REVOLUTION BANNER CSS SETTINGS -->
    <link rel="stylesheet" type="text/css" href="content/rs-plugin/css/settings.css" media="screen" />

    <script src="content/js/modernizr.custom.32033.js"></script>

    <!--[if IE]><script type="text/javascript" src="content/js/excanvas.compiled.js"></script><![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
      <![endif]-->

  </head>

  <body>

    <div class="pre-loader">
        <div class="load-con">
            <img src="images/logo.png" class="animated fadeInDown" width="128" alt="">
            <div class="spinner">
                <div class="bounce1"></div>
                <div class="bounce2"></div>
                <div class="bounce3"></div>
            </div>
        </div>
    </div>
    <div class="go-down">
        <a href="#about">
            <i class="fa fa-angle-down fa-3x"></i>
        </a>
    </div>


    <!-- Notif -->
    <?php
        if ($belum_login<>'') {
    ?>
            <div id="alertModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h2 class="text-center">Mohon Maaf</h2>
                            <p class="text-center">Untuk melakukan pemesanan online, harap login atau daftar terlebih dahulu.</p>
                            <br/>
                            <button class="btn btn-primary btn-lg center-block" type="button" onclick="myFunction()">OK</button>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
        else if ($pemesanan_sukses<>'') {
    ?>
            <div id="alertModal" class="modal show" tabindex="-1" role="dialog" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content">
                        <div class="modal-body">
                            <h2 class="text-center">Terima kasih</h2>
                            <p class="text-center">Pemesanan Anda telah kami terima. Harap tunggu konfirmasi untuk proses selanjutnya.</p>
                            <br/>
                            <button class="btn btn-primary btn-lg center-block" type="button" onclick="myFunction()">OK</button>
                        </div>
                    </div>
                </div>
            </div>
    <?php
        }
    ?>
    



    <!-- Wrap all page content here -->
    <div id="wrap" class="home">

        <header class="masthead">
            <div class="slider-container" id="slider">
                <div class="tp-banner-container">
                    <div class="tp-banner">
                        <ul>
                            <li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="500">
                                <!-- MAIN IMAGE -->
                                <img src="content/img/dummy.png" data-lazyload="content/img/samples/2.png" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->



                                <div class="tp-caption italic large_white_light sft hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="-100" data-speed="700" data-start="1300" data-easing="Power4.easeOut">
                                    CV 
                                    Adara Fashion Art
                                </div>
                                <div class="tp-caption italic large_white_light sfl hidden-xs" data-x="left" data-y="center" data-hoffset="0" data-voffset="-50" data-speed="700" data-start="1500" data-easing="Power4.easeOut">
                                    Berkarakter .
                                </div>
                                <div class="tp-caption italic large_white_light sfb hidden-xs" data-x="left" data-y="center" data-hoffset="300" data-voffset="-50" data-speed="700" data-start="1700" data-easing="Power4.easeOut">
                                    Inovatif .
                                </div>
                                <div class="tp-caption italic large_white_light sfr hidden-xs" data-x="left" data-y="center" data-hoffset="500" data-voffset="-50" data-speed="700" data-start="1900" data-easing="Power4.easeOut">
                                    Inspiratif & Terdepan
                                </div>
                                <div class="tp-caption lfb" data-x="left" data-y="center" data-hoffset="0" data-voffset="100" data-speed="1000" data-start="1900" data-easing="Power4.easeOut">
                                    <a href="#about" class="btn btn-naked">Selengkapnya tentang kami <span class="fa fa-angle-right"></span></a>
                                </div>

                            </li>
                            <li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="500">
                                <!-- MAIN IMAGE -->
                                <img src="content/img/dummy.png" data-lazyload="content/img/samples/1.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->
                            </li>
                            <li data-transition="slotfade-horizontal" data-slotamount="7" data-masterspeed="500">
                                <!-- MAIN IMAGE -->
                                <img src="content/img/dummy.png" data-lazyload="content/img/samples/3.jpg" alt="slidebg1" data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">
                                <!-- LAYERS -->
                            </li>

                        </ul>
                        <div class="tp-bannertimer"></div>
                    </div>
                </div>

            </div>

            <!-- Fixed navbar -->
            <div class="navbar navbar-static-top" id="nav" role="navigation">
                <div class="container">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                            <span class="sr-only">Toggle navigation</span>
                            <i class="fa fa-align-justify"></i>
                        </button>
                        <a class="navbar-brand" href="#">
                            <img src="images/logo.png" width="48" alt="">
                        </a>
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="active"><a href="#slider">Beranda</a></li>
                            <li><a href="#about">Tentang Kami</a></li>
                            <li><a href="#services">Jasa</a></li>
                            <li><a href="#portfolio">Promosi</a></li>
                            <li><a href="#get-in-touch">Kontak</a></li>
                            <?php
                            if(($_SESSION['sudahlogin']==true)&&($_SESSION['pelanggan']!="")){
                                ?>
                                <li class="dropdown">
                                  <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><?php echo $nama_pelanggan ?> <span class="caret"></span></a>
                                  <ul class="dropdown-menu">
                                    <li><a href="content/view/index.php?page=profil">Profil</a></li>
                                    <li><a href="content/view/index.php?page=transaksi-pemesanan">Transaksi Pemesanan</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="content/view/index.php?page=logout">Logout</a></li>
                                </ul>
                            </li>
                            <?php
                        }
                        else{
                            ?>
                            <li><a href="content/view/index.php?page=login">Login / Daftar</a></li>
                            <?php
                        }
                        ?>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!--/.container -->
        </div>
        <!--/.navbar -->

    </header>

    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-push-2 clearfix">
                    <div class="section-heading scrollpoint sp-effect3">
                        <h1>CV Adara Fashion Art<span> </span>
                        </h1>
                        <h4>
                            Didirikan sejak tahun 2014 Adara Fashion Art merupakan perusahaan yang bergerak di bidang digital printing. Adara Fashion Art  melayani print photo, kartu nama, sepanduk, laser, cetak majalah, kartu undangan, uv platbed printing, indoor digital printing, outdor digital printing, cutting sticker. 
                        </h4>
                        <span class="divider"></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-12 scrollpoint sp-effect4">
                            <img src="content/img/samples/kaleng.jpg" class="img-responsive img-center" alt="">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">
                            <div class="media vertical scrollpoint sp-effect5">
                                <a href="#">
                                    <i class="media-object fa fa-university fa-2x"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Kenapa Harus CV Adara Fashion Art</h4>
                                    <p>CV Adara Fashion Art  adalah media printing yang berkarakter, inovatif, inspiratif dan terdepan.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="media vertical scrollpoint sp-effect5">
                                <a href="#">
                                    <i class="media-object fa fa-user fa-2x"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Apa yang kamu lakukan</h4>
                                    <p>CV Adara Fashion Art  melayani print photo, kartu nama, sepanduk, laser, cetak majalah, kartu undangan, uv platbed printing, indoor digital printing, outdor digital printing, cutting sticker</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="media vertical scrollpoint sp-effect5">
                                <a href="#">
                                    <i class="media-object fa fa-umbrella fa-2x"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Sejarah Kami</h4>
                                    <p>CV. Adara Fashion Art dimiliki oleh Bapak Gede Pradnya Wigraha & Ibu Wayan Dilandari Religia. Didirikan sejak tahun 2014 merupakan perusahaan yang bergerak di bidang digital printing. </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <div class="media vertical scrollpoint sp-effect5">
                                <a href="#">
                                    <i class="media-object fa fa-taxi fa-2x"></i>
                                </a>
                                <div class="media-body">
                                    <h4 class="media-heading">Pencapaian</h4>
                                    <p>Berbagai perusahaan cukup ternama di daerah Bandung dan sekitarnya telah menggunakan jasa kami</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <section id="highlights">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                        <!-- Indicators -->
                        <ol class="carousel-indicators vertical">
                            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                        </ol>

                        <!-- Wrapper for slides -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <img src="content/img/samples/600-300/2.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="content/img/samples/600-300/3.jpg" alt="">
                            </div>
                            <div class="item">
                                <img src="content/img/samples/600-300/1.jpg" alt="">
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Portofolio Perusahaan</h4>
                    <p>Berbagai macam acara dan kegiatan telah menggunakan jasa kami</p>
                    <ul>
                        <li>Musyawarah Besar AMIF</li>
                        <li>Multi Accecories</li>
                        <li>Pembuatan Logo</li>
                        <li>Serta jasa print dan desain yang lainnya</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <section id="features">
        <div class="container">
            <div class="row">
                <div class="col-md-12 scrollpoint sp-effect2">
                    <h1>CV Adara Fashion Art<span> </span>
                    </h1>
                    <div class="media media-circle">
                        <a class="pull-left" href="#">
                            <i class="media-object fa fa-angle-right fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <p>Selalu meningkatkan keterampilan dan kemampuan karyawan dengan situasi pekerjaan yang produktif.</p>
                        </div>
                    </div>
                    <div class="media media-circle">
                        <a class="pull-left" href="#">
                            <i class="media-object fa fa-angle-right fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <p>Menciptakan inovasi terhadap produk yang berkualitas dan harga yang kompetitif.</p>
                        </div>
                    </div>
                    <div class="media media-circle">
                        <a class="pull-left" href="#">
                            <i class="media-object fa fa-angle-right fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <p>Meningkatkan kemampuan dengan teknologi yang berkembang di dunia percetakan.</p>
                        </div>
                    </div>
                    <div class="media media-circle">
                        <a class="pull-left" href="#">
                            <i class="media-object fa fa-angle-right fa-2x"></i>
                        </a>
                        <div class="media-body">
                            <p>Membangun usaha yang mampu memberikan pelayanan dan kepuasan pelanggan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="services">
        <div class="container">
            <div class="row">
                <?php
                if ($kode_transaksi_pemesanan<>'') {
                    ?>
                    <div class="col-sm-12">
                        <br><br>
                        <button type="button" data-toggle="modal" data-target="#modalKeranjang" class="btn btn-primary pull-right"><i class="fa fa-shopping-cart"></i> Lihat Keranjang</button>
                    </div>
                    <?php
                }
                ?>
                <div class="col-md-8 col-md-push-2 clearfix">
                    <div class="section-heading scrollpoint sp-effect3">
                        <h1>Jasa Kami</h1>
                        <h4>CV. Adara Fashion Art  adalah media printing yang berkarakter, inovatif, inspiratif dan terdepan.</h4>
                        <span class="divider"></span>
                    </div>
                </div>
                <div class="col-md-12">
                    <div class="row">
                        <?php 
                        $sql="SELECT jasa.`kode_jasa`,
                        jasa.`nama_jasa`,
                        jasa.`harga`,
                        jasa.`status`
                        FROM jasa
                        WHERE jasa.`status` = 'Aktif'";             


                        $res=mysql_query($sql,$link);
                        $banyakrecord=mysql_num_rows($res);
                        if($banyakrecord>0){
                            ?>

                            <?php
                            $i=0;
                            while($data=mysql_fetch_array($res)){
                                $i++;
                                ?>
                                <div class="col-md-4">
                                    <div class="media media-services right scrollpoint sp-effect1">
                                        <a class="pull-right" href="#">
                                            <i class="media-object fa fa-picture-o fa-2x"></i>
                                        </a>
                                        <div class="media-body">
                                            <h4 class="media-heading"><?php echo $data['nama_jasa']; ?></h4>
                                            <p><?php echo titik_koma($data['harga']); ?> IDR</p>
                                            <a href="content/view/index.php?page=cek-pemesanan&&kode_jasa=<?php echo $data['kode_jasa'] ?>" class="btn btn-info">Pesan Sekarang</a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                                <?php
                            }
                            else{
                                ?>
                                <div class="alert alert-warning" role="alert">
                                    <strong>Informasi: </strong> Data tidak ditemukan.
                                </div>
                                <?php
                            }
                            ?>

                        </div>
                    </div>
                </div>
            </div>
        </section>




        <section id="portfolio">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-push-2 clearfix">
                        <div class="section-heading scrollpoint sp-effect3">
                            <h1>Promosi</h1>
                            <h4>Nantikan berbagai promosi yang kami berikan</h4>
                            <span class="divider"></span>
                        </div>
                    </div>
                </div>
                <div class="row">

                   <div id="container">
                    <?php 
                    $sql="SELECT promosi.`kode_promosi`,
                    promosi.`nama_promosi`,
                    promosi.`isi_promosi`,
                    promosi.`gambar`,
                    promosi.`tanggal_mulai`,
                    promosi.`tanggal_selesai`,
                    promosi.`status`
                    FROM promosi";             


                    $res=mysql_query($sql,$link);
                    $banyakrecord=mysql_num_rows($res);
                    if($banyakrecord>0){
                        ?>

                        <?php
                        $i=0;
                        while($data=mysql_fetch_array($res)){
                            $i++;
                            $dataTahunMulai=$data['tanggal_mulai'];
                            list($tahunMulai, $bulanMulai, $tanggalMulai) = explode("-",$dataTahunMulai);
                            $namaBulanMulai=konversi_bulan($bulanMulai);

                            $dataTahunSelesai=$data['tanggal_selesai'];
                            list($tahunSelesai, $bulanSelesai, $tanggalSelesai) = explode("-",$dataTahunSelesai);
                            $namaBulanSelesai=konversi_bulan($bulanSelesai);
                            ?>
                            <div class="item col-md-4 col-sm-6">
                                <div class="details">
                                    <?php 
                                    if($data['gambar']==NULL){
                                        ?>
                                        <center>
                                            <img class="img-responsive" src="images/promotion/no-image.jpg" alt="<?php echo $data['nama_promosi']; ?>" style="height: 200px !important;">
                                        </center>
                                        <?php
                                    }
                                    else{                     
                                        ?>
                                        <center>
                                            <img src="<?php echo str_replace("../../","",$data['gambar'])?>" alt="<?php echo $data['nama_promosi']; ?>" style="height: 200px !important;">
                                        </center>
                                        <?php   
                                    }
                                    ?> 

                                    <div class="info-wrapper">
                                        <span class="heart"><i class="fa fa-star"></i>
                                        </span>
                                        <div class="info">
                                            <div class="name-tag">
                                                <h5><?php echo $data['nama_promosi'];?></h5>
                                                <span class="divider"></span>
                                                <p><?php echo $data['isi_promosi'];?></p>
                                                <p><?php echo $tanggalMulai." ".$namaBulanMulai." ".$tahunMulai." - ".$tanggalSelesai." ".$namaBulanSelesai." ".$tahunSelesai ?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>
                        <?php
                    }
                    else{
                        ?>
                        <div class="col-sm-12">
                            <div class="alert alert-warning" role="alert">
                                <strong>Informasi: </strong> Data tidak ditemukan.
                            </div>
                        </div>
                        <?php
                    }
                    ?>


                </div>
            </div>
        </div>
    </section>
    <section id="get-in-touch">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-push-2 clearfix">
                    <div class="section-heading scrollpoint sp-effect3">
                        <h1>Kontak Kami</h1>
                        <span class="divider"></span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-details">
                        <div class="detail">
                            <h4>CV Adara Fashion Art.</h4>
                            <p>Jalan Jenderal Ahmad Yani No. 682, Kelurahan Cicaheum, Kecamatan Kiaracondong Kota Bandung Jawabarat 40282</p>
                        </div>
                        <div class="detail">
                            <h4>Telp.</h4>
                            <p>(022) 574876</p>
                        </div>
                        <div class="detail">
                            <h4>Email</h4>
                            <p>info@adarafashionart.web.id</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer id="site-footer">
        <div class="container">
            <div class="row">
                <span class="divider grey"></span>
                <h4><?php echo date(Y)?> CV Adara Fashion Art<span class="brandy"> </span></h4>
            </h5>
            <a href="#" class="scroll-top">
                <img src="images/logo.png" alt="" class="top">
            </a>
        </div>
    </div>
</footer>
</div>


<!-- KERANJANG -->
<div class="modal fade" id="modalKeranjang" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <h4 class="modal-title" id="myModalLabel">Keranjang Anda</h4>
          </div>
            <div class="modal-body">
                <?php 
                  $kode_transaksi_pemesanan = $_SESSION['s_kode_transaksi_pemesanan'];

                  $sql="SELECT detail_transaksi_pemesanan.`kode_detail_transaksi_pemesanan`,
                              detail_transaksi_pemesanan.`kode_jasa`,
                              detail_transaksi_pemesanan.`jumlah`,
                              jasa.`nama_jasa`,
                              detail_transaksi_pemesanan.`harga`,
                              detail_transaksi_pemesanan.`file`,
                              detail_transaksi_pemesanan.`keterangan`
                              FROM detail_transaksi_pemesanan,
                              jasa
                              WHERE detail_transaksi_pemesanan.`kode_jasa` = jasa.`kode_jasa`
                              AND detail_transaksi_pemesanan.`kode_transaksi_pemesanan` = '$kode_transaksi_pemesanan'";             


                  $res=mysql_query($sql,$link);
                  $banyakrecord=mysql_num_rows($res);
                  if($banyakrecord>0){
                    ?>
                    <table class="table table-striped table-bordered">
                      <thead>
                        <tr>
                          <th>No.</th>
                          <th>Nama</th>
                          <th>Keterangan</th>
                          <th>Harga</th>
                          <th>Jumlah</th>
                          <th>Sub Total</th>
                          <th><center>Aksi</center></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php
                        $i=0;
                        $total = 0;
                        while($data=mysql_fetch_array($res)){
                          $i++;

                          $subtotal = $data['jumlah']*$data['harga'];
                          ?>
                          <tr>
                            <td><?php echo $i;?>.</td>
                            <td><?php echo $data['nama_jasa'];?></td>
                            <td><?php echo $data['keterangan'];?></td>
                            <td>Rp. <i class="pull-right"><?php echo titik_koma($data['harga']);?>,-</i></td>
                            <td><?php echo titik_koma($data['jumlah']);?></td>
                            <td>Rp. <i class="pull-right"><?php echo titik_koma($subtotal);?>,-</i></td>
                            <td>
                              <center>
                                <a href="<?php echo $data['file']; ?>" onclick="return confirm('Unduh file?')" title="Unduh Dokumen">
                                  <i class="fa fa-download" data-toggle="tooltip" ></i> Unduh
                                </a>&nbsp;
                                <a href="index.php?page=hapus-keranjang&&kode_detail_transaksi_pemesanan=<?php echo $data['kode_detail_transaksi_pemesanan'] ?>&&nama_jasa=<?php echo $data['nama_jasa'] ?>" onclick="return confirm('Batalkan pemesanan?')"> 
                                  <i class="fa fa-times" title="Hapus"></i> Hapus
                                </a>
                              </center>
                            </td>              
                          </tr> 

                          <?php

                          $total = $total+$subtotal;
                        }
                        ?>
                      </tbody>
                      <tfoot>
                        <tr>
                            <th colspan="5">Total</th>
                            <th>Rp. <i class="pull-right"><?php echo titik_koma($total);?>,-</i></th>
                            <th style="background: #f5f5f5;"></th>
                        </tr>
                      </tfoot>
                    </table>
                    <?php
                  }
                  else{
                    ?>
                    <div class="alert alert-warning alert-dismissible fade in" role="alert">
                      <strong>Informasi: </strong>Data tidak ditemukan</a>
                    </div>
                    <?php
                  }
                  ?>
          </div>

          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
            <a href="content/view/index.php?page=cek-out" class="btn btn-primary" onclick="return confirm('Cekout & Akhiri Pemesanan?')">Cekout & Akhiri Pemesanan</a>
          </div>
      </div>
  </div>
</div>


<!--/wrap-->

<script src="content/js/jquery.min.js"></script>
<script src="content/js/bootstrap.min.js"></script>
<script src="content/js/stellar.js"></script>
<script src="content/js/isotope.pkgd.min.js"></script>
<script src="content/js/jquery.easypiechart.min.js"></script>

<!-- jQuery REVOLUTION Slider  -->
<script type="text/javascript" src="content/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
<script type="text/javascript" src="content/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

<script src="content/js/waypoints.min.js"></script>

<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyASm3CwaK9qtcZEWYa-iQwHaGi3gcosAJc&sensor=false"></script>
<script src="content/js/script.js"></script>

<script>
    $(document).ready(function() {
        appMaster.preLoader();
        appMaster.smoothScroll();
        appMaster.animateScript();
        appMaster.navSpy();
        appMaster.revSlider();
        appMaster.stellar();
        appMaster.skillsChart();
        appMaster.maps();
        appMaster.isoTop();
        appMaster.canvasHack();
    });

    function myFunction() {
        $("#alertModal").removeClass('show');
        $("#alertModal").addClass('fade');
    }
</script>

</body>

</html>

<?php
ob_end_flush();
?>