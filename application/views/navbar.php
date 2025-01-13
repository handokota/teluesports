<style>
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

    .contact img {
            width: 50%;
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
        color: #ffffff;
    }

    .menu a {
        text-align: center;
        /* padding: 14px; */
        cursor: pointer;
        border: none;
        padding: 10px;
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

    .btn-primary:hover, .btn-primary:active {
        transition: 0.5s;
        background-color: #006655 !important;
    }

    .btn-close:active {
        background-color: #8b0000 !important;
    }

    .login .form-group input.form-control {
        background-color: #1A1D20;
        color: #ffffff;
        border-color: #00917A;
        font-size: 16px;
        border-radius: 6px;
    }

</style>
<nav class="navbar">
  <a href="<?php echo base_url('/'); ?>"><img class="navbar-brand" src="<?php echo base_url('assets/img/logo.png'); ?>" alt="logo"></a>
  <ul class="nav-links">
    <div class="menu">
      <li><a href="<?php echo base_url('/'); ?>" class="<?php if($this->session->userdata('active_nav')=='homepage'){echo'active';}?>">Home</a></li>
      <li><a href="<?php echo base_url('divisions'); ?>" class="<?php if($this->session->userdata('active_nav')=='division'){echo'active';}?>">Divisions</a></li>
      <!-- <li><a href="<?php echo base_url('admin-member'); ?>" class="<?php if($this->session->userdata('active_nav')=='member'){echo'active';}?>">Member</a></li> -->
      <li><a href="<?php echo base_url('partnership'); ?>" class="<?php if($this->session->userdata('active_nav')=='partnership'){echo'active';}?>">Partnership</a></li>
      <?php 		
        if($this->session->has_userdata("username")) {
          echo '<li><a href="'; echo base_url('event'); echo'" class="'; if($this->session->userdata('active_nav')=='event'){echo'active';}echo'">Events</a></li>';
        }
      ?>
      <?php 		
        if($this->session->has_userdata("username")) {
          echo '<li><a href="'; echo base_url('admin-member'); echo'" class="'; if($this->session->userdata('active_nav')=='admin_member'){echo'active';}echo'">Member</a></li>';
        }
      ?>
      <li><a href="<?php echo base_url('about-us'); ?>" class="<?php if($this->session->userdata('active_nav')=='aboutus'){echo'active';}?>">About Us</a></li>
      <div class="contact text-center">
        <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">Contact Us</button>
            <!-- Modal -->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content bg-dark rounded">
                  <div class="modal-header" style="border-color: #00917A;">
                    <h5 class="modal-title">Contact Us</h5>
                    <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                  </div>
                  <div class="modal-body">
                    <div class="container">
                      <div class="table-responsive">
                        <table class="table table-dark">
                            <tbody>
                                <tr>
                                  <td class="text-center" style="border: none;">
                                    <a href="mailto:teluesports@gmail.com" target="_blank">
                                      <img src="<?php echo base_url('assets/img/email.png'); ?>">
                                    </a>
                                  </td>
                                  <td class="text-center" style="border: none;">
                                    <a href="https://www.instagram.com/teluesports/" target="_blank">
                                      <img src="<?php echo base_url('assets/img/instagram.png'); ?>">
                                    </a>
                                  </td>
                                  <td class="text-center" style="border: none;">
                                    <a href="https://www.youtube.com/@TELUESPORTS" target="_blank">
                                      <img src="<?php echo base_url('assets/img/youtube.png'); ?>">
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="border: none;">Email</td>
                                    <td class="text-center" style="border: none;">Instagram</td>
                                    <td class="text-center" style="border: none;">YouTube</td>
                                </tr>
                                <tr>
                                  <td style="border: none;"></td>
                                </tr>
                                <tr>
                                  <td class="text-center" style="border: none;">
                                    <a href="https://page.line.me/?accountId=qiw5424h" target="_blank">
                                      <img src="<?php echo base_url('assets/img/line.png'); ?>">
                                    </a>
                                  </td>
                                  <td class="text-center" style="border: none;">
                                    <a href="https://www.linkedin.com/company/telkom-university-esports" target="_blank">
                                      <img src="<?php echo base_url('assets/img/linkedin.png'); ?>">
                                    </a>
                                  </td>
                                  <td class="text-center" style="border: none;">
                                    <a href="https://www.tiktok.com/@teluesports" target="_blank">
                                      <img src="<?php echo base_url('assets/img/tiktok.png'); ?>">
                                    </a>
                                  </td>
                                </tr>
                                <tr>
                                    <td class="text-center" style="border: none;">OA Line</td>
                                    <td class="text-center" style="border: none;">LinkedIn</td>
                                    <td class="text-center" style="border: none;">Facebook</td>
                                </tr>
                            </tbody>
                        </table>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
      </div>
      <!-- <div class="login">
    <?php if (!$this->session->has_userdata("username")): ?> -->
        <!-- Tombol Login -->
        <!-- <button href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal" style="background-color: #00917A; width: 120px;">Login</button> -->
        
        <!-- Modal Login -->
        <!-- <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="loginModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content bg-dark rounded">
                    <div class="modal-header" style="border: none;">
                        <h5 class="modal-title">Login</h5>
                        <button type="button" class="btn btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="container">
                            <div class="table-responsive">
                                <form method="POST" action="<?= base_url('homepage/login') ?>">
                                    <div class="form-group">
                                        <label for="username">Username</label>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="Enter your username" required>
                                    </div>
                                    <br>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Enter your password" required>
                                    </div>
                                    <br>
                                    <div class="text-center mb-3">
                                        <p class="text-light">Don't have an account? 
                                            <a href="<?= base_url('homepage/signup') ?>" style="color: #00bfff;">Create account</a>
                                        </p>
                                    </div>
                                    <div class="login text-center">
                                        <button type="submit" class="btn btn-primary">Login</button>
                                    </div>  
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
    <!-- <?php else: ?> -->
        <!-- Tombol Logout -->
        <!-- <form action="<?= base_url('homepage/signout') ?>" method="post">
            <button type="submit" class="btn btn-primary" style="background-color: #00917A; width: 120px;">Logout</button>
        </form>
    <?php endif; ?> -->


    <div class="login">
    <?php 
    if (!$this->session->has_userdata("username")) {
        // Tombol Login dengan active state
        echo '<a href="' . base_url('login') . '" class="btn btn-primary ' . ($this->session->userdata('active_nav') == 'login' ? 'active' : '') . '" style="background-color: #00917A; width: 120px;">Login</a>';
    } else {
        // Tombol Logout
        echo '
        <form action="' . base_url('logout') . '" method="post">
            <button type="submit" class="btn btn-primary" style="background-color: #00917A; width: 120px;">Logout</button>
        </form>';
    }
    ?>
</div>



    </div>

  </ul>
</nav>

    