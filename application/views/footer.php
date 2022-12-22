<style>
    footer {
        background-color: #000000;
        color: #ffffff;
        font-family: Poppins !important;
        padding-top: 20px;
        padding-bottom: 20px;
        padding-left: 5%;
        padding-right: 5%;
    }

    .footer-logo {
    font-size: 18px;
    color: #00917A;
    font-weight: bold;
    }

    .footer-logo img {
        /* margin-top: 50px; */
        width: 72px;
    }

    .footer-content {
        color: #ffffff;
        font-size: 16px;
        /* margin-top: 50px; */
    }

    .copyright {
        text-align: center;
        color: #808080;
        font-size: 16px;
    }
</style>
<footer>
<div class="text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4 ">
          <!-- Content -->
          <div class="footer-logo">
            <img src="assets/img/logo.png">
            <h5 class="fw-bold mt-3">#GAMEON</h5>
          </div>
          <!-- <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>TELU ESPORTS
          </h6> -->
          <p>TelU Esports adalah sebuah UKM resmi dari Telkom University</p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4" style="color: #00917A;">MENU</h5>
          <p>
            <a href="<?php echo base_url('/Homepage_ctrl'); ?>" class="text-reset">Home</a>
          </p>
          <p>
            <a href="<?php echo base_url('/Divisions_ctrl'); ?>" class="text-reset">Divisions</a>
          </p>
          <p>
            <a href="<?php echo base_url('/Partnership_ctrl'); ?>" class="text-reset">Partnership</a>
          </p>
          <p>
            <a href="<?php echo base_url('/Aboutus_ctrl'); ?>" class="text-reset">About us</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4" style="color: #00917A;">DIVISIONS</h5>
          <p>
            <a href="<?php echo base_url('/Divisions_ctrl'); ?>" class="text-reset">PUBG Mobile</a>
          </p>
          <p>
            <a href="<?php echo base_url('/Divisions_ctrl'); ?>" class="text-reset">Valorant</a>
          </p>
          <p>
            <a href="<?php echo base_url('/Divisions_ctrl'); ?>" class="text-reset">Mobile Legends</a>
          </p>
          <!-- <p>
            <a href="#!" class="text-reset">Help</a>
          </p> -->
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4" style="color: #00917A;">CONTACT</h5>
          <p><i class="fas fa-home me-3"></i>Jl. Telekomunikasi, Dayeuhkolot, Bandung 40257</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            teluesports@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i>081314317583</p>
          <!-- <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p> -->
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- <br> -->
    <p class="copyright">&copy 2022 TELU ESPORTS</p>
    <!-- <br> -->
    </div>
</footer>