
<!DOCTYPE html>
<html lang="en">
<!-- Header  -->
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>PESPA</title>
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Jost:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  <link href="../static/assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="../static/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="../static/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="../static/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="../static/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="../static/assets/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="../static/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../static/assets2/assets/css/custom-buttons.css">
  <link rel="stylesheet" href="../static/assets2/assets/css/Header-Blue.css">
  <link rel="stylesheet" href="../static/assets2/assets/css/Header-Dark.css">
  <link rel="stylesheet" href="../static/assets2/assets/css/styles.css">
  <link rel="stylesheet" href="../static/assets2/assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="../static/assets2/assets/css/Features-Clean.css">
  <script src="../static/assets/js/Chart.js"></script>
  <link href="../static/assets/css/style.css" rel="stylesheet">
      
</head>
<!-- End Header -->

<!-- -- Body -- -->
<body>

  <header id="header" class="fixed-top" style="background: #37517e;">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="/knn" style="font-size: 20px;">Back</a></h1>
      <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/hero-img.png" alt="" class="img-fluid"></a> -->
    </div>
  </header>


  <!-- ======= Hero Section ======= -->
  <section id="prediksi" class="d-flex align-items-center "style="height: 1400px; padding-top: 100px;">
    <div class="container pt-5" style="z-index: 99;" >
      <div class="form-group">
        </div>
        {% if prediction_text == 'Stunting' %}
		  <div class="alert alert-danger" >
		  	<h1 class="alert alert-danger">{{ prediction_text }}</h1>
         <hr class="my-1">
            <p> Anjuran:</p>
			      <p>-  Bila anaknya masih dibawah 6 bulan, ASI EKSKLUSIF harus diberikan secara optimal</p>
            <p>-  Menginjak Usia  6 bulan, ASI dilanjutkan dan perlu diberikan Makanan Pendamping ASI (MP-ASI) yang berkualitas</p>
            <p>&nbsp; MP-ASI yang dianjurkan berasal dari produk makanan lokal dengan memenuhi syarat bervariasi "4 BINTANG':</p>
            <p>&nbsp;&nbsp;                                         1. Makanan Pokok (Bubur, Nasi, Roti, Mie, Tepung, Ketela pohon dsb )</p>
            <p>&nbsp;&nbsp;                                         2. Kacang-kacangan  (tahu, tempe, kacang merah, kacang tolo, sari kedelai, dsb)</p>
            <p>&nbsp;&nbsp;                                         3. Lauk-pauk hewani (sumber Fe  diantaranya hati, telur, ikan, ayam, dsb)</p>
            <p>&nbsp;&nbsp;                                         4. Sayur-sayuran dan buah-buahan berwarna</p>
            <p>&nbsp; Jumlah dan tekstur makanan harap disesuaikan dengan umur anak (lihat acuan PMBA sesuai umur)</p>
            <p></p>
            <p>-  Memperbanyak konsumsi sumber protein dan mineral (terutama Zink). Zink banyak terdapat pada lauk hewani </p>
            <p></p>
            <p>-  Memperbanyak latihan fisik</p>
            <p>&nbsp; ( Stimulasi anak untuk bermain sedini mungkin, permainan yang baik untuk anak-anak di atas 1 tahun adalah lompat-lompat )</p>
            <p></p>
            <p>-  Memastikan tentang kesehatan anak, apakah sering sakit atau tidak.</p>
            <p>&nbsp; Jika sering sakit, segera diperiksakan ke fasilitas kesehatan. </p>
            <p></p>
            <p>- Memprioritaskan memberikan makanan-makanan  yang telah difortifikasi dengan sumber Fe dan Zinc, spt susu, yogurt, kecap dsb</p>
            <p>&nbsp; Bila memungkinkan ada program maka berikan suplementasi zat gizi mikro seperti Taburia</p>
            <p></p>
            <p>- Membiasakan hidup bersih dan sehat (cuci tangan dengan benar terutama di 4 titik kritis cuci tangan)</p>
            <p></p>
      </div>
		{% else %}
		  <div class="alert alert-success" style="margin-top: -600px;">
			  <h1 class="alert alert-success">{{ prediction_text }}</h1>
			  <hr class="my-1">
			  <p>&nbsp; Tetaplah Selalu Menjaga Kesehatan anak Anda. </p>
		  </div>
		{% endif %} 
      

    </div>
    

  </section><!-- End Hero -->


 

<!--Section: Contact v.1-->
            </div>
    </section>
    


  <!-- <footer id="footer" style="height: 100px;background: #37517e;"></footer> -->
<footer id="footer" style="height: 100px; background: #37517e;" >
        <div class="container" >
            <div class="row">
                <div class="col-sm-12">
                    <h6 style="text-align: center; color: #FFFFFF; padding-top: 30px">&copy; 2020. website prediction stunting in children</h6>
                </div>
            </div>
        </div>
    </footer>


  <script src="../static/assets/vendor/aos/aos.js"></script>
  <script src="../static/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="../static/assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="../static/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="../static/assets/vendor/php-email-form/validate.js"></script>
  <script src="../static/assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="../static/assets/vendor/waypoints/noframework.waypoints.js"></script>
  <script src="../static/assets2/assets/js/jquery.min.js"></script>
  <script src="../static/assets2/assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="../static/assets/js/main.js"></script>

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