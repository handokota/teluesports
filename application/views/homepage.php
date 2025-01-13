<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="<?php echo base_url('assets/img/favicon.ico'); ?>">
    <script src="https://kit.fontawesome.com/75f4dada4f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="assets/css/style.css"/> -->
    <script src="https://unpkg.com/scrollreveal"></script>
    <!-- <script src="assets/js/script.js" type="text/javascript"></script> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel=“stylesheet” type='text/css'> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>TelU Esports</title>
    <style>
        .table-calendar table tbody tr td a{
            color:#00917A !important;
            /* font-weight:bold !important; */
            cursor: text !important;
        }
        
        .table-calendar table tbody tr td{
            padding:16px !important;
        }

        .table-calendar {
            box-shadow: 0 5px 10px rgba(0,0,0,.2) !important;
        }

        * {
            margin: 0px;
            padding: 0px;
            box-sizing: border-box;
            /* font-family: Poppins !important; */
            font-weight: normal;
            font-size: 16px;
        }

        body {
            font-family: Poppins !important;
            /* background-color: #000000; */
            background: linear-gradient(180.96deg, #000000 0.82%, #00917A 129.1%);
            color: #ffffff;
        }

        a {
            text-decoration: none;
            color: #ffffff;
        }

        li {
            list-style: none;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-between;
            /* padding: 20px 50px; */
            color: #ffffff;
            font-family: Poppins !important;
            margin-top: 20px;
            margin-left: 5%;
            margin-right: 5%;
        }

        .nav-links a {
            text-decoration: none;
        }

        .nav-links a:active {
            color: #00917A;
        }

        .navbar-brand {
            position: relative;
            width: 50px;
        }

        .menu {
            display: flex;
            gap: 1em;
            font-size: 16px;
        }

        .nav-links a:hover {
            color: #00917A;
            transition: 0.5s;
        }

        .active {
            color: #00917A;
        }

        .menu li {
            padding: 10px;
            text-align: center;
            width: 120px;
            /* background-color: #00917A;
            border-radius: 5px; */
        }

        .menu button {
            text-align: center;
            /* padding: 14px; */
            cursor: pointer;
            border: none;
            padding: 10px;
        }

        .contact {
            color: #ffffff;
            background-color: #00917A;
            border-radius: 5px;
            width: 120px;
            font-size: 16px;
            font-family: Poppins;
            cursor: pointer;
        }

        .contact img {
            width: 50%;
        }

        .btn-close:hover {
            background-color: #ff0000;
        }

        .news {
            margin-left: 5%;
            margin-right: 5%;
        }

        .telu-esports {
            margin-top: 50px;
            color: #00917A;
        }

        .news-title {
            color: #ffffff;
            font-size: 50px;
            font-weight: bold;
            margin-bottom: 0px;
        }

        .news-content {
            margin-top: 0px;
            margin-bottom: 30px;
            color: #ffffff;
            font-size: 18px;
        }

        .news .btn {
            text-align: center;
            padding: 14px;
            cursor: pointer;
            border: none;
            /* height: 50px; */
        }

        .oprec {
            color: #ffffff;
            background-color: #00917A;
            border-radius: 30px;
            width: 180px;
            font-size: 16px;
            /* margin-left: 5px; */
        }

        .news .oprec:hover, .news .oprec:active {
          background-color: #006655 !important;
        }

        .home-divisions {
            margin-left: 5%;
            margin-right: 5%;
        }

        .home-divisions-title {
            text-align: center;
            margin-top: 100px;
            margin-bottom: 30px;
            font-size: 50px;
            font-style: italic;
            font-weight: bold;
            color: #00917A;
        }

        .home-divisions img {
            width: 300px;
            border-radius: 20px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2) !important;
        }

        .home-divisions .row {
          display: flex;
          align-items: center;
          flex-wrap: wrap;
            justify-content: center;
            /* gap: 3em; */
            color: #ffffff;
            font-weight: bold;
            font-size: 22px;
        }

        .home-divisions .row .col p {
            margin-top: 20px;
            font-weight: bold;
            font-size: 30px;
        }

        .home-divisions .col {
          /* padding: 10px; */
          /* flex: 1; */
          text-align: center;
        }

        .event {
            margin-left: 5%;
            margin-right: 5%;
        }

        .event-title {
            text-align: center;
            margin-top: 100px;
            margin-bottom: 30px;
            font-size: 50px;
            font-style: italic;
            font-weight: bold;
            color: #00917A;
        }

        .tec img {
            width: 100%;
            border-radius: 20px;
            margin-bottom: 20px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2) !important;
        }

        .tec-title {
            /* color: #00917A; */
            text-align: center;
            /* padding-top: 100px; */
            /* padding-bottom: 50px; */
            font-weight: bold;
            font-size: 30px;
        }

        .tec-content {
            color: #ffffff;
            text-align: center;
            margin-bottom: 50px;
            font-size: 18px;
        }
    </style>
</head>
<body>
    <?php $this->load->view('navbar'); ?>
    <?php if (isset($error_message)): ?>
<div class="alert alert-danger text-center" style="border-radius: 0" role="alert">
    <?= $error_message; ?>
</div>
<?php endif; ?>

    <section class="news">
      <!-- <div class="container"> -->
        <h4 class="telu-esports">TEL-U ESPORTS</h4>
        <p class="news-title">BE ONE OF US!!! OPEN STAFF RECRUITMENTS</p>
        <p class="news-content">Are you the next Tel-U Esports staff? Ada kabar baik nih untuk kalian karena Tel-U Esports membuka proses rekruitasi lagi loh! Kali ini bukan lagi rekruitasi anggota melainkan bagian kepengurusan tahun selanjutnya. Kalian yang merasa punya dedikasi tinggi dan ingin memajukan nama Esports Telkom University bisa banget join nih.</p>
        <a href="https://linktr.ee/teluesports" target="_blank" class="btn oprec">Registration here</a>
      <!-- </div> -->
    </section>
    <section class="home-divisions">
      <!-- <div class="container"> -->
        <h1 class="home-divisions-title">DIVISIONS</h1>
        <div class="row">
          <div class="pubg col">
            <img src="<?php echo base_url('assets/img/pubg.png'); ?>">
            <p>PUBG MOBILE</p>
          </div>
          <div class="valorant col">
            <img src="<?php echo base_url('assets/img/valorant.png'); ?>">
            <p>VALORANT</p>
          </div>
          <div class="ml col">
            <img src="<?php echo base_url('assets/img/ml.png'); ?>">
            <p>MOBILE LEGENDS</p>
          </div>
        </div>
      <!-- </div> -->
    </section>
    <section class="event">
      <!-- <div class="container"> -->
        <h1 class="event-title">EVENT NOW ON TEL-U ESPORTS</h1>
        <div class="row">
          <div class="col-lg-3 col-md-6 col-sm-4">
            <div class="table-calendar bg-dark p-3" style="border-radius: 20px;">
              <?php 
                  $prefs = array(
                    'start_day' => 'monday',
                    'month_type' => 'long',
                    'day_type' => 'short'
                );

                $data = [];
                //Get day in this month
                foreach ($event as $ev) {
                    $day = $ev['day'];
                    $data += [ "$day" => " " ];
                }
                
                $this->load->library('calendar', $prefs);
                
                echo $this->calendar->generate(date("Y"), date("m"),$data);
              ?>
            </div>
          </div>
          <div class="col-lg-9 col-md-6 col-sm-8"><div class="tec">
          <div class="row">
            <div class="col">
              <img src="<?php echo base_url('assets/img/tec.png'); ?>">
            </div>
          </div>
        </div>
        <h4 class="tec-title">TEL-U ESPORTS CHAMPIONSHIP 2023</h4>
        <p class="tec-content">Kami TEL-U ESPORTS mengadakan kompetisi tingkat nasional untuk semua universitas di Indonesia yang puncaknya akan berada pada bulan Agustus. Segera hubungi komunitas esports kampus kalian untuk mendaftarkan diri agar dapat ikut serta dalan kompetisi TELKOM UNIVERSITY ESPORTS CHAMPIONSHIP.</p></div>
        </div>
        
      <!-- </div> -->
    </section>
    <?php $this->load->view('footer'); ?>
    <!-- <footer> -->
      <!-- <div class="footer"> -->
        <!-- <div class="footer-logo"> -->
          <!-- <img src="assets/img/logo.png"> -->
          <!-- <p>#GAMEON</p> -->
        <!-- </div> -->
        <!-- <br> -->
        <!-- <p class="copyright">&copy 2022 TELU ESPORTS</p> -->
        <!-- <br> -->
      <!-- </div> -->
    <!-- </footer> -->
    <script>
      ScrollReveal().reveal('.pubg', { delay: 500, duration: 2000 });
      ScrollReveal().reveal('.valorant', { delay: 1000, duration: 2000 });
      ScrollReveal().reveal('.ml', { delay: 1500, duration: 2000 });
    </script>
  </body>
</html>