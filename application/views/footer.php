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
        color: #b5b5b5;
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
            <a href="<?php echo base_url('homepage'); ?>"><img src="<?php echo base_url('assets/img/logo.png'); ?>"></a>
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
            <a href="<?php echo base_url('/'); ?>" class="text-reset">Home</a>
          </p>
          <p>
            <a href="<?php echo base_url('divisions'); ?>" class="text-reset">Divisions</a>
          </p>
          <p>
            <a href="<?php echo base_url('partnership'); ?>" class="text-reset">Partnership</a>
          </p>
          <p>
            <a href="<?php echo base_url('about-us'); ?>" class="text-reset">About Us</a>
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h5 class="text-uppercase fw-bold mb-4" style="color: #00917A;">DIVISIONS</h5>
          <p>
            <a href="<?php echo base_url('divisions'); ?>" class="text-reset">PUBG Mobile</a>
          </p>
          <p>
            <a href="<?php echo base_url('divisions'); ?>" class="text-reset">Valorant</a>
          </p>
          <p>
            <a href="<?php echo base_url('divisions'); ?>" class="text-reset">Mobile Legends</a>
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
          <p><i class="fas fa-home me-3" style="color: #00917A;"></i>Jl. Telekomunikasi Terusan Buah Batu, Bandung - 40257, Indonesia</p>
          <p>
            <i class="fas fa-envelope me-3" style="color: #00917A;"></i>
            teluesports@gmail.com
          </p>
          <p><i class="fas fa-phone me-3" style="color: #00917A;"></i>081314317583</p>
          <!-- <p><i class="fas fa-print me-3"></i> + 01 234 567 89</p> -->
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
    <!-- <br> -->
    <p class="copyright">Made with ❤️ by Handoko Tejo Atmoko</p>
    <!-- <br> -->
    </div>
</footer>