<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/telu.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <script src="assets/js/script.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel=“stylesheet” type='text/css'>
    <title>TelU Esports</title>
</head>
<body>
    <?php $this->load->view('navbar'); ?>
    <section class="divisions-form">
    <?php
    foreach($data_division as $div) {
      echo'
      <p class="divisions-page text-center">Divisions > <a style="color:#00917A;">'.$div['division_name'].'</a></p> 
      ';
    } ?>
    <h1 class="divisions-title text-center">DIVISIONS</h1>
    <div class="form-oprec" style="background: transparent;">
      <div class="container">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border: none;">
              <?php foreach($data_division as $div) {
                echo'
                  <div class="container">
                    <div class="card-body p-4 p-md-5">
                    <h3 class="text-center" style="font-weight: bold;">Open Registration Member for Division</h3>
                    <h5 class="mb-4 pb-2 pb-md-3 mb-md-5 text-center">Become One of Us</h5>
                    <form method = "POST" action="'; echo base_url('/Member_ctrl/inputData') ; echo'" enctype="multipart/form-data"> <!--tambahin di controller-->
                      <input hidden name="division" value="'. $div['division_name'].'">
                      <div class="row">
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="firstName">First Name</label>
                            <input type="text" id="firstName" class="form-control form-control-lg" name="fname"/>
                          </div>
                        </div>
                        <div class="col-md-6 mb-4">
                          <div class="form-outline">
                            <label class="form-label" for="lastName">Last Name</label>
                            <input type="text" id="lastName" class="form-control form-control-lg" name="lname"/>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-md-12 mb-4 pb-2">
                          <div class="form-outline">
                            <label class="form-label" for="inlineFormInputGroupUsername">Username</label>
                            <input type="text" id="username" class="form-control form-control-lg" name="username"/>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4 pb-2">
                          <div class="form-outline">
                            <label class="form-label" for="password">Password</label>
                            <input type="password" id="password" class="form-control form-control-lg" name="password"/>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4 pb-2">
                          <div class="form-outline">
                            <label class="mb-2 pb-1">Division</label>
                            <p class="mb-0" style="font-weight: bold;">'.$div['division_name'].'</p>
                          </div>
                        </div>
                        <div class="col-md-12 mb-4 pb-2">
                          <div class="form-outline">
                            <label class="mb-2 pb-1">Upload KTM</label><br>
                            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="inputFile">
                          </div>
                        </div>
                      </div>

                      <div class="mt-4 pt-2 text-center">
                        <input class="btn btn-primary btn-lg" type="submit" value="Submit" />
                      </div>
                    </form>
                    </div>
                  </div>
                ';
              } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    <footer>
      <div class="footer">
        <div class="footer-logo">
          <img src="assets/img/logo.png">
          <!-- <p>#GAMEON</p> -->
        </div>
        <!-- <br> -->
        <p class="copyright">&copy 2022 TELU ESPORTS</p>
        <!-- <br> -->
      </div>
    </footer>
  </body>
</html>