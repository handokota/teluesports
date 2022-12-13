<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="assets/img/telu.ico">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/75f4dada4f.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/css/style.css"/>
    <script src="assets/js/script.js" type="text/javascript"></script>
    <link href="https://fonts.googleapis.com/css?family=Poppins" rel=“stylesheet” type='text/css'>
    <title>TelU Esports</title>
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
                    <img src="'.base_url('assets/uploads/').$division['division_image'].'" class="card-img-top" alt="...">
                    <div class="card-body" style="background-color: #004b3e;color: white;">
                      <h3 class="card-title">'.$division['division_name'].'</h3>
                      <br>
                      <p><b>ACHIEVEMENTS</b></p>
                      <p class="card-text">'.$division['division_achievement'].'</p>
                      <br>
                      <p><b>REQUIREMENTS</b></p>
                      <p class="card-text">'.$division['division_requirement'].'</p>
                      <form action="'; echo base_url('/Divisions_ctrl/open_member/').$division['id'] ; echo'" method ="post" >
                      <button type="submit" class="btn btn-primary" >Join</button>
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
    <section class="form-oprec">
      <div class="container py-5 h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-12 col-lg-9 col-xl-7">
            <div class="card shadow-2-strong card-registration" style="border: none;">
              
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