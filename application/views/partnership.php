<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/telu.ico">
    <script src="https://kit.fontawesome.com/75f4dada4f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="assets/css/style.css"/> -->
    <script src="assets/js/script.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel=“stylesheet” type='text/css'>
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

        .partnership img {
            max-width: 100%;
        }
    </style>
</head>
<body>
    <?php $this->load->view('navbar'); ?> 
    <section class="partnership" style="margin-left: 5%; margin-right: 5%; text-align: center; margin-bottom: 50px;">
      <div class="container">
        <p class="partnership-page" style="margin-top: 50px;">Home > <a style="color:#00917A;">Partnership</a></p> 
        <h1 class="partnership-title" style="margin-top: 50px; margin-bottom: 50px; font-size: 50px; font-style: italic; font-weight: bold; color: #00917A;">COLABORATION & PARTNERSHIP</h1>
        <div class="container">
          <div class="row text-center mb-5" style="display: flex; align-items: center; flex-wrap: wrap; padding: 0 200px 0 200px;">
            <div class="col" style="flex: 1; text-align: left;";>
              <img src="assets/img/partnership/telkomsel.png">
            </div>
            <div class="col" style="flex: 1; text-align: right;">
              <img src="assets/img/partnership/biznet.png">
            </div>
          </div>
          <div class="row text-center" style="display: flex; align-items: center; flex-wrap: wrap; padding: 0 200px 0 200px;">
            <div class="col" style="flex: 1; text-align: center;">
              <img src="assets/img/partnership/moonton.png">
            </div>
            <div class="col" style="flex: 1; text-align: center;">
              <img src="assets/img/partnership/dracoo.png">
            </div>
            <div class="col" style="flex: 1; text-align: center;">
              <img src="assets/img/partnership/jawara.png">
            </div>
          </div>
        </div>
			</div>
    </section>
    <?php $this->load->view('footer'); ?>
  </body>
</html>