<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">
    <script src="https://kit.fontawesome.com/75f4dada4f.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <!-- <link rel="stylesheet" href="assets/css/style.css"/> -->
    <!-- <script src="assets/js/script.js" type="text/javascript"></script> -->
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

        .form-partner .card {
            background-color: transparent;
            /* border: none; */
            /* box-shadow: 0 5px 10px rgba(0,0,0,.2) !important; */
        }

        .form-partner input.form-control {
            background-color: #005345;
            color: #ffffff;
            border-color: #00917A;
            font-size: 16px;
            border-radius: 6px;
        }

        .form-partner textarea.form-control {
            background-color: #005345;
            color: #ffffff;
            border-color: #00917A;
            font-size: 16px;
            border-radius: 6px;
        }

        .form-partner input.form-check-input {
            background-color: #005345;
            border-color: #00917A;
        }

        .btn-primary {
            background-color: #00917A;
            border: none;
            width: 120px;
            font-size: 16px;
            box-shadow: 0 5px 10px rgba(0,0,0,.2) !important;
        }

        .btn-primary:hover {
            transition: 0.5s;
            background-color: #006655;
        }

        .partnership-page {
            margin-top: 50px;
        }

        .partnership-title {
            margin-top: 50px;
            margin-bottom: 30px;
            font-size: 50px;
            font-style: italic;
            font-weight: bold;
            color: #00917A;
        }
    </style>
</head>
<body>
    <?php $this->load->view('navbar'); ?> 
    <section class="partnership">
      <div class="container">
        <p class="partnership-page text-center">Home > <a style="color:#00917A;">Partnership</a></p> 
        <h1 class="partnership-title text-center">COLABORATION & PARTNERSHIP</h1>
	  </div>
      <div class="form-partner text-start">
        <div class="container">
          <div class="row justify-content-center align-items-center h-100">
            <div class="col-12 col-lg-9 col-xl-7">
              <div class="card shadow-2-strong card-registration" style="border: none;">
                <div class="container">
                  <div class="card-body p-4 p-md-5">
                  <h3 class="text-center" style="font-weight: bold;">Become our Partner</h3>
                  <h5 class="mb-4 pb-2 pb-md-3 mb-md-5 text-center">Fill the form bellow</h5>
                  <form method="post" action="<?php echo base_url('Partner_ctrl/sendMail'); ?>">
                    <div class="row">
                      <div class="col-md-12 mb-4">
                        <div class="form-outline">
                          <label class="form-label">Email</label>
                          <input type="email" class="form-control form-control-lg" name="email"/>
                        </div>
                      </div>
                    </div>
                    <div class="row">
                      <div class="col-md-12 mb-4">
                        <div class="form-outline">
                          <label class="form-label">Subject</label>
                          <input type="text" class="form-control form-control-lg" name="subject"/>
                        </div>
                      </div>
                      <div class="col-md-12 mb-4">
                        <div class="form-outline">
                          <label class="form-label">Message</label></br>
                          <!-- <input type="text" id="message" class="form-control form-control-lg" name="message" style="height: 200px;"/> -->
                          <textarea class="form-control col-md-12 mb-4 pb-2" name="message" style="height: 200px;"></textarea>
                        </div>
                      </div>
                    </div>
                    <div class="mt-4 pt-2 text-center">
                      <input class="btn btn-primary btn-lg" type="submit" name="submit_email" value="Submit"/>
                    </div>
                  </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php $this->load->view('footer'); ?>
  </body>
</html>