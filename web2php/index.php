<?php
$koneksi          = mysqli_connect("localhost", "user", "password", "grafik");
$bangunrejo       = mysqli_query($koneksi, "SELECT * FROM total WHERE wilayah='bangunrejo'");
$banjarbangi      = mysqli_query($koneksi, "SELECT * FROM total WHERE wilayah='banjarbangi'");
$centel           = mysqli_query($koneksi, "SELECT * FROM total WHERE wilayah='centel'");
$dumplengen       = mysqli_query($koneksi, "SELECT * FROM total WHERE wilayah='dumplengen'");
$kalang           = mysqli_query($koneksi, "SELECT * FROM total WHERE wilayah='kalang'");
$karanggeneng     = mysqli_query($koneksi, "SELECT * FROM total WHERE wilayah='karanggeneng'");
$ngancar          = mysqli_query($koneksi, "SELECT * FROM total WHERE wilayah='ngancar'");
$papungan         = mysqli_query($koneksi, "SELECT * FROM total WHERE wilayah='papungan'");
$pitu             = mysqli_query($koneksi, "SELECT * FROM total WHERE wilayah='pitu'");
$selopuro         = mysqli_query($koneksi, "SELECT * FROM total WHERE wilayah='selopuro'");
?>

<!DOCTYPE html>
<html lang="en">
<!-- Header  -->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PESPA</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="assets2/assets/css/custom-buttons.css">
  <link rel="stylesheet" href="assets2/assets/css/Header-Blue.css">
  <link rel="stylesheet" href="assets2/assets/css/Header-Dark.css">
  <link rel="stylesheet" href="assets2/assets/css/styles.css">
  <link rel="stylesheet" href="assets2/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets2/assets/css/Features-Clean.css">
  <script src="assets/js/Chart.js"></script>

  <link href="assets/css/style.css" rel="stylesheet">
      <style type="text/css">
            .container12 {
                height: 300px;
                width: 50%;
                margin: 30px auto;

            }
    </style>
</head>
<!-- End Header -->

<!-- -- Body -- -->
<body>

  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="/"><img src="assets2/assets/img/logo.png" alt="" class="img-fluid">PESPA</a></h1>
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/hero-img.png" alt="" class="img-fluid"></a> -->
      <!-- NAVBAR -->
      <nav id="navbar" class="navbar" style="height: 30px align-items-center">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Home</a></li>
          <li><a class="nav-link scrollto" href="#about">About</a></li>
          <li><a class="nav-link scrollto" href="#services">Services</a></li>
          <li><a class="nav-link scrollto" href="#Infogizi">Info Gizi</a></li>
          <li><a class="nav-link scrollto" href="#kontak">Contact</a></li>
          <!-- <li><a class="getstarted scrollto" href="#about">Get Started</a></li> -->
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- END NAVBAR -->
    </div>
  </header>


  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex align-items-center ">

    <div class="container" style="z-index: 0;">
      <div class="row">
        <div class="col-lg-6 d-flex flex-column justify-content-center pt-4 pt-lg-0 order-2 order-lg-1" data-aos="fade-up">
          <h1>Better Solutions For Checking Stunting Condition</h1>
          <h2>we work with experts to conduct consultations related to stunting conditions</h2>
          <div class="d-flex justify-content-center justify-content-lg-start">
            <a href="http://37.44.244.74:5000/knn" class="btn-get-started scrollto">Stunting Check</a>
            <a href="https://youtu.be/3u4zlRTrIgs" class="glightbox btn-watch-video"><i class="bi bi-play-circle"></i><span>Puskesmas Pitu</span></a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="zoom-in" data-aos-delay="200">
          <img src="assets2/assets/img/ilustrasi2.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->


                <!-- margin: 30px auto; -->
  <section id="about" >
        <div id="hading" class="j" style="height:780px;" data-aos="fade-up">
            <h1 id="about" style="color: rgb(15,68,149);font-size: 35px;">ABOUT</h1>
            <p id="p1">Aplikasi ini dibuat sebagai Tugas Akhir Mahasiswa Teknik Komputer, aplikasi ini betujuan utntuk mengindikasi kondisi stunting pada balita usia maksimal 60 bulan / 5 tahun. kami juga bekerja sama dengan puskesmas Pitu di Kabupaten Ngawi sebagai penyedia data stunting dan juga tenaga ahli dalam aplikasi ini, Berikut adalah Grafik komulatif Balita stunting di desa Pitu. &nbsp;</p>
            <div id="graph" class="container12">
              <canvas id="linechart" width="100" height="100"></canvas>
            </div>
            <!-- <div id="graph" class="container" > -->
              <!-- <div class="infogram-embed" data-id="42141097-b5a3-4390-9879-d5155fad7afe" data-type="interactive" data-title="Column chart"></div> -->
              <!-- <script>!function(e,i,n,s){var t="InfogramEmbeds",d=e.getElementsByTagName("script")[0];if(window[t]&&window[t].initialized)window[t].process&&window[t].process();else if(!e.getElementById(n)){var o=e.createElement("script");o.async=1,o.id=n,o.src="https://e.infogram.com/js/dist/embed-loader-min.js",d.parentNode.insertBefore(o,d)}}(document,0,"infogram-async");</script> -->
              <!-- <div style="padding:8px 0;font-family:Arial!important;font-size:13px!important;line-height:15px!important;text-align:center;border-top:1px solid #dadada;margin:0 30px"></div> -->
            </div>
        </div>
    </section>
    <section id="pstun" class="cta " >
      <div class="container" data-aos="zoom-in">
        <div class="row">
          <div class="col-lg-12 text-center text-lg-start">
            <h3 style="padding-bottom:20px;">Stunting</h3>
            <p>Stunting merupakan kondisi gagal pertumbuhan pada anak akibat kurangnya asupan gizi dalam jangka waktu panjang sehingga mengakibatkan terganggunya pertumbuhan pada anak</p>
          </div>
        </div>

      </div>
    </section>

 <section id="services" class="services section-bg">
      <div class="container" data-aos="zoom-in">

        <div>
          <h2 style="color:  rgb(15,68,149)">SERVICES</h2>
          <p style="padding-top: 10px">Tujuan Utama pembuatan aplikasi ini adalah untuk memudahkan orang tua dalam melakukan pengecekan kondisi stunting setiap saat. dengan kerja sama yang dilakukan dengan puskesmas Pitu dan berikut merupakan pelayanan yang ada di aplikasi kami.</p>
        </div>

        <div class="row">
          <div class="col-xl-4 col-md-5 d-flex align-items-stretch">
            <div class="icon-box">
              <h4><a href="">Stunting Check</a></h4>
              <p><a href="#hero">Lakukan pengecekan stunting secara langsung di website kami dengan mengeklik link ini.</a></p>
            </div>
          </div>

          <div class="col-xl-4 col-md-5 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box" >
              <h4><a href="">Android app</a></h4>
              <p><a href="#">Pengecekan stunting dan informasi gizi dan anak lebih mudah diakses kapansaja dan dimana saja dengan aplikasi android, klik untuk mendownload.</a></p>
            </div>
          </div>

          <div class="col-xl-4 col-md-5 d-flex align-items-stretch mt-4 mt-xl-0">
            <div class="icon-box" >
              <h4><a href="#kontak">Konsultasi</a></h4>
              <p><a href="#kontak">Konsultasi gizi dan anak dapat dilakukan dengan cara menghubungi nomor yang telah tertera pada halaman contact.</a></p>
            </div>
          </div>

    

        </div>

      </div>
    </section>
    </div>
        </div>
    </section>
    <section id="Infogizi" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="row">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>Info Gizi</h3>
            <p>Untuk artikel mengenai tentang gizi untuk anak dapat mengunjungi website kami dengan mengklik tombol icon disamping</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" href="http://37.44.244.74/">Info Gizi</a>
          </div>
        </div>

      </div>
    </section>
    <section id="kontak">
        <div id="kontak" style="height: 700px;background: #f2f2f2; padding-top: 10px;">
            <h1 id="services" style="color: #0f4495;font-size: 35px;">CONTACT</h1>
            <div class="container">
              <!--Section: Contact v.1-->

<section class="section pb-5">
  <div class="row">
    <!--Grid column-->
    <div class="col-lg-5 mb-4">
      <!--Form with header-->
      <div class="card">
        <div class="card-body">
          <!--Body-->
          <div class="md-form">
            <h3 style="color:#0f4495; text-align: center;">Info Contact</h3>
            <div>
              <article>
                <div style="display: flex;">
                  <img src="assets2/assets/img/user.png" style="max-height: 60px; max-width: 60px">
                  <div id="text">
                    <h1 style="padding-left: 10px; color: rgb(15,68,149); font-size: 25px">UPT puskesmas</h1>
                    <p style="padding-left: 10px">Telp (0351) 747437</p>
                  </div>
                </div>
              </article>
            </div>
             <div>
              <article>
                <div style="display: flex;">
                  <img src="assets2/assets/img/user.png" style="max-height: 60px; max-width: 60px">
                  <div id="text">
                    <h1 style="padding-left: 10px; color: rgb(15,68,149); font-size: 25px">Puskesmas (Gizi)</h1>
                    <p style="padding-left: 10px">+62 858-5634-7237 <br>+6285856347237</br></p>
                  </div>
                </div>
              </article>
            </div>
             <div>
              <article>
                <div style="display: flex;">
                  <img src="assets2/assets/img/hospital.png" style="max-height: 60px; max-width: 60px">
                  <div id="text">
                    <h1 style="padding-left: 10px; color: rgb(15,68,149); font-size: 25px">Puskesmas Pitu</h1>
                    <p style="padding-left: 10px">uptpkmpitu@gmail.com</p>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </div>
      <!--Form with header-->
    </div>
    <!--Grid column-->

    <!--Grid column-->
    <div class="col-lg-7">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 500px; padding-bottom: 50px">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=puskesmas%20pitu&t=&z=15&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://fmovies-online.net"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:600px;}</style><a href="https://www.embedgooglemap.net">google maps on web site</a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:600px;}</style></div></div>
      </div>
  </div>

</section>

<!--Section: Contact v.1-->
            </div>
    </section>
    


  <!-- <footer id="footer" style="height: 100px;background: #37517e;"></footer> -->
<footer id="footer" style="height: 100px;background: #37517e;" >
        <div class="container " >
            <div class="row">
                <div class="col-sm-12">
                    <h6 style="text-align: center; color: #FFFFFF; padding-top: 30px">&copy; 2020. website prediction stunting in children</h6>
                </div>
            </div>
        </div>
    </footer>


  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>
  
  <script src="assets2/assets/js/jquery.min.js"></script>
  <script src="assets2/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/js/main.js"></script>

</body>
<!--  END BODY -->


</html>


<!-- grafik -->
<!-- SCRIPT -->
<script  type="text/javascript">
  var ctx = document.getElementById("linechart").getContext("2d");
  var data = {
            labels: ["Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober"],
            datasets: [
                  {
                    label: "bangunrejo",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#29B0D0",
                    borderColor: "#29B0D0",
                    pointHoverBackgroundColor: "#29B0D0",
                    pointHoverBorderColor: "#29B0D0",
                    data: [<?php while ($p = mysqli_fetch_array($bangunrejo)) { echo '"' . $p['januari'] . '","' . $p['februari'] . '","' . $p['maret'] . '","' . $p['april'] . '","' . $p['mei'] . '","' . $p['juni'] . '","' . $p['juli'] . '","' . $p['agustus'] . '","' . $p['september'] . '","' . $p['oktober'] . '",';}?>]
                  },
                  {
                    label: "banjarbangi",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#2A516E",
                    borderColor: "#2A516E",
                    pointHoverBackgroundColor: "#2A516E",
                    pointHoverBorderColor: "#2A516E",
                    data: [<?php while ($p = mysqli_fetch_array($banjarbangi)) { echo '"' . $p['januari'] . '","' . $p['februari'] . '","' . $p['maret'] . '","' . $p['april'] . '","' . $p['mei'] . '","' . $p['juni'] . '","' . $p['juli'] . '","' . $p['agustus'] . '","' . $p['september'] . '","' . $p['oktober'] . '",';}?>]
                  },
                  {
                    label: "centel",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#F07124",
                    borderColor: "#F07124",
                    pointHoverBackgroundColor: "#F07124",
                    pointHoverBorderColor: "#F07124",
                    data: [<?php while ($p = mysqli_fetch_array($centel)) { echo '"' . $p['januari'] . '","' . $p['februari'] . '","' . $p['maret'] . '","' . $p['april'] . '","' . $p['mei'] . '","' . $p['juni'] . '","' . $p['juli'] . '","' . $p['agustus'] . '","' . $p['september'] . '","' . $p['oktober'] . '",';}?>]
                  },
                  {
                    label: "dumplengen",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#CBE0E3",
                    borderColor: "#CBE0E3",
                    pointHoverBackgroundColor: "#CBE0E3",
                    pointHoverBorderColor: "#CBE0E3",
                    data: [<?php while ($p = mysqli_fetch_array($dumplengen)) { echo '"' . $p['januari'] . '","' . $p['februari'] . '","' . $p['maret'] . '","' . $p['april'] . '","' . $p['mei'] . '","' . $p['juni'] . '","' . $p['juli'] . '","' . $p['agustus'] . '","' . $p['september'] . '","' . $p['oktober'] . '",';}?>]
                  },
                  {
                    label: "kalang",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#979193",
                    borderColor: "#979193",
                    pointHoverBackgroundColor: "#979193",
                    pointHoverBorderColor: "#979193",
                    data: [<?php while ($p = mysqli_fetch_array($kalang)) { echo '"' . $p['januari'] . '","' . $p['februari'] . '","' . $p['maret'] . '","' . $p['april'] . '","' . $p['mei'] . '","' . $p['juni'] . '","' . $p['juli'] . '","' . $p['agustus'] . '","' . $p['september'] . '","' . $p['oktober'] . '",';}?>]
                  },
                  {
                    label: "karanggeneng",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#80b28d",
                    borderColor: "#80b28d",
                    pointHoverBackgroundColor: "#80b28d",
                    pointHoverBorderColor: "#80b28d3",
                    data: [<?php while ($p = mysqli_fetch_array($karanggeneng)) { echo '"' . $p['januari'] . '","' . $p['februari'] . '","' . $p['maret'] . '","' . $p['april'] . '","' . $p['mei'] . '","' . $p['juni'] . '","' . $p['juli'] . '","' . $p['agustus'] . '","' . $p['september'] . '","' . $p['oktober'] . '",';}?>]
                  },
                  {
                    label: "ngancar",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#56e3e8",
                    borderColor: "#56e3e8",
                    pointHoverBackgroundColor: "#56e3e8",
                    pointHoverBorderColor: "#56e3e8",
                    data: [<?php while ($p = mysqli_fetch_array($ngancar)) { echo '"' . $p['januari'] . '","' . $p['februari'] . '","' . $p['maret'] . '","' . $p['april'] . '","' . $p['mei'] . '","' . $p['juni'] . '","' . $p['juli'] . '","' . $p['agustus'] . '","' . $p['september'] . '","' . $p['oktober'] . '",';}?>]
                  },
                  {
                    label: "papungan",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#538422",
                    borderColor: "#538422",
                    pointHoverBackgroundColor: "#538422",
                    pointHoverBorderColor: "#538422",
                    data: [<?php while ($p = mysqli_fetch_array($papungan)) { echo '"' . $p['januari'] . '","' . $p['februari'] . '","' . $p['maret'] . '","' . $p['april'] . '","' . $p['mei'] . '","' . $p['juni'] . '","' . $p['juli'] . '","' . $p['agustus'] . '","' . $p['september'] . '","' . $p['oktober'] . '",';}?>]
                  },
                  {
                    label: "pitu",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#5449bb",
                    borderColor: "#5449bb",
                    pointHoverBackgroundColor: "#5449bb",
                    pointHoverBorderColor: "#5449bb",
                    data: [<?php while ($p = mysqli_fetch_array($pitu)) { echo '"' . $p['januari'] . '","' . $p['februari'] . '","' . $p['maret'] . '","' . $p['april'] . '","' . $p['mei'] . '","' . $p['juni'] . '","' . $p['juli'] . '","' . $p['agustus'] . '","' . $p['september'] . '","' . $p['oktober'] . '",';}?>]
                  },
                  {
                    label: "selopuro",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "#928ebd",
                    borderColor: "#928ebd",
                    pointHoverBackgroundColor: "#928ebd",
                    pointHoverBorderColor: "#928ebd",
                    data: [<?php while ($p = mysqli_fetch_array($selopuro)) { echo '"' . $p['januari'] . '","' . $p['februari'] . '","' . $p['maret'] . '","' . $p['april'] . '","' . $p['mei'] . '","' . $p['juni'] . '","' . $p['juli'] . '","' . $p['agustus'] . '","' . $p['september'] . '","' . $p['oktober'] . '",';}?>]
                  }




                  ]
          };

  var myBarChart = new Chart(ctx, {
            type: 'line',
            data: data,
            options: {
            legend: {
              display: true
            },
            barValueSpacing: 20,
            scales: {
              yAxes: [{
                  ticks: {
                      min: 0,
                  }
              }],
              xAxes: [{
                          gridLines: {
                              color: "rgba(0, 0, 0, 0)",
                          }
                      }]
              }
          }
        });
</script>

<!-- END SCRIPT -->