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
    <script src="assets/js/script.js" type="text/javascript"></script>
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel=“stylesheet” type='text/css'> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>TelU Esports</title>
    <style>
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

        .about-us {
            margin-left: 5%;
            margin-right: 5%;
            text-align: center;
            margin-bottom: 50px;
        }

        .aboutus-page {
            margin-top: 50px;
        }

        .aboutus-title {
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 50px;
            font-style: italic;
            font-weight: bold;
            color: #00917A;
        }

        .aboutus-content {
            margin-bottom: 0px;
            font-size: 18px;
        }

        .about-us .card {
            background-color: #004b3e;
            border: none;
            margin-top: 30px;
            min-height: 300px;
            border-radius: 20px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2) !important;
        }

        .about-us .card-title {
            font-weight: bold;
        }

        .about-us .card-text {
            font-size: 14px;
        }

        .profile {
            background-color: #004b3e;
            border-radius: 20px;
            margin-top: 50px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2) !important;
        }

        .profile img {
            width: 50px;
        }

        .profile-title {
            font-weight: bold;
            font-size: 24px;
        }

        .profile p {
            font-size: 24px;
        }

        /* .profile-content {
            font-size: 24px;
        } */

        .video-profile iframe {
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2) !important;
        }

        .video-profile-title {
            font-weight: bold;
            color: #00917A;
            font-style: italic;
            font-size: 50px;
            margin-top: 50px;
        }

    </style>
</head>
<body>
    <?php $this->load->view('navbar'); ?>
    <section class="about-us">
      <div class="container">
        <p class="aboutus-page">Home > <a style="color:#00917A;">About us</a></p> 
        <h1 class="aboutus-title">ABOUT US</h1>
        <p class="aboutus-content">Tel-U Esports adalah sebuah UKM yang mewadahi komunitas-komunitas video games yang ada di Telkom University. Tel-U Esports didirikan pada 19 September 2018 di Telkom University dengan 3 divisi terbesar saat ini yaitu: PUBG Mobile, Valorant, dan Mobile Lengends.</p>
        <div class="container mt-3">
          <div class="row justify-content-center">
              <div class="col-4 p-1">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">VISI</h4>
                    <br>
                    <p class="card-text text-center">
                      1. Menjadikan UKM TEL-U ESPORTS sebagai UKM yang berprestasi dan sportif di tingkat nasional maupun internasional.</br>
                      2. Menciptakan atlit esports yang berkualitas dari Universitas Telkom dalam tingkat Nasional maupun Internasional.</br>
                      3. Berkontribusi dalam pengembangan esports di tingkat Universitas Telkom dan Nasional.</br>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-4 p-1 ">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">MISI</h4>
                    <br>
                    <p class="card-text text-center">
                      1. Menyalurkan aspirasi dan bakat maupun minat anggota untuk mengembangkan UKM Olahraga didalam civitas kampus maupun luar kampus.</br>
                      2. Mengadakan Bootcamp dan panduan lanjut untuk mempersiapkan atlit esport agar siap bertanding dan berkompetisi berskala nasional dan internasional.</br>
                      3. Mengedukasikan esports kepada masyarakat umum.</br>
                      4. Mengenalkan anggota ke dalam ekosistem kompetisi esports di luar kampus.</br>
                    </p>
                  </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div class="profile">
        <div class="container text-center p-3">
          <div class="row">
            <div class="col"><br><img src="assets/img/user.png" style="float:center;">
              <br><br><h4 class="profile-title">1000+</h4>
              <p>Member</p>
              <!-- <p class="profile-content">Member</p> -->
            </div>
            <div class="col"><br><img src="assets/img/location.png" style="float:center;">
              <br><br><h4 class="profile-title"><?php echo count($division_data); ?></h4>
              <p>Division</p>
            </div>
            <div class="col"><br><img src="assets/img/achievement.png" style="float:center;">
              <br><br><h4 class="profile-title">100+</h4>
              <p>Achievement</p>
            </div>
          </div>
        </div>
      </div>
      <div class="video-profile">
        <div class="container text-center p-5" >
          <div class="row align-items-center">
              <div class="col">
                  <h1 class="video-profile-title">VIDEO PROFILE TEL-U ESPORTS</h1>
                  <br>
                  <iframe width="560" height="315" src="https://www.youtube.com/embed/9RdNOO_Y_t8" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe> 
              </div>
          </div>
        </div>
      </div>
    </section>
    <?php $this->load->view('footer'); ?>
  </body>
</html>