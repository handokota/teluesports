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
    <script src="https://kit.fontawesome.com/75f4dada4f.js" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="assets/css/style.css"/> -->
    <script src="assets/js/script.js" type="text/javascript"></script>
    <!-- <link href="https://fonts.googleapis.com/css?family=Poppins" rel=“stylesheet” type='text/css'> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <title>Divisions - TelU Esports</title>
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

        .divisions {
            margin-left: 5%;
            margin-right: 5%;
            text-align: center;
            margin-bottom: 50px;
        }

        .divisions-page {
            margin-top: 50px;
        }

        .divisions-title {
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 50px;
            font-style: italic;
            font-weight: bold;
            color: #00917A;
        }

        .divisions-content {
            font-size: 18px;
            margin-bottom: 0px;
        }

        .divisions .card-title {
            font-weight: bold;
        }

        .divisions .card-body {
            background-color: #00917A;
            border-bottom-left-radius: 20px;
            border-bottom-right-radius: 20px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2);
        }

        .divisions .card {
            margin-top: 30px;
            padding: 20px;
            background: transparent;
        }

        .divisions .card-group{
            display:flex;
            justify-content: center;
        }

        .btn-primary {
            background-color: #00917A;
            border: none;
            width: 120px;
            font-size: 16px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2) !important;
        }

        .btn-primary:hover, .btn-primary:active {
            transition: 0.5s;
            background-color: #006655 !important;
        }
    </style>
</head>
<body>
    <?php $this->load->view('navbar'); ?>
    <section class="divisions">
      <div class="container">
        <p class="divisions-page">Home > <a style="color:#00917A;">Divisions</a></p> 
        <h1 class="divisions-title">DIVISIONS</h1>
        <p class="divisions-content">Tel-U Esports memiliki 3 divisi terbesar saat ini yaitu PUBG Mobile, Valorant, dan Mobile Legends.</p>
        <div class="card-group">
          <?php 
          foreach($division_data as $division) {
            echo'
            <div class="card border-0">
                <div class="division">
                    <img src="'.base_url('assets/uploads/divisions/').$division['division_image'].'" class="card-img-top" alt="..." style="border-top-left-radius: 20px; border-top-right-radius: 20px; box-shadow: 0 5px 10px rgba(0,0,0,.2)">
                    <div class="card-body" style="background-color: #004b3e;color: white;">
                      <h3 class="card-title">'.$division['division_name'].'</h3>
                      <br>
                      <p><b>ACHIEVEMENTS</b></p>
                      <p class="card-text">'.$division['division_achievement'].'</p>
                      <br>
                      <p><b>REQUIREMENTS</b></p>
                      <p class="card-text">'.$division['division_requirement'].'</p>
                      <form action="'; echo base_url('/Divisions_ctrl/open_member/').$division['id'] ; echo'" method ="post" >
                        <button type="submit" class="btn btn-primary">Join</button>
                      </form>
                    </div>
                </div>
            </div>
            ';
          }
            
          ?>
          </div>
      </div>
    </section>
    <!-- <section class="form-oprec">
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border: none;">
              
            </div>
          </div>
        </div>
      </div>
    </section> -->
    
    <?php $this->load->view('footer'); ?>
  </body>
</html>