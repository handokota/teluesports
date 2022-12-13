<style>
    .active {
        color: #00917A;
    }
</style>
<nav class="navbar">
        <a href="homepage.html"><img class="navbar-brand" src="assets/img/logo.png" alt="logo"></a>
        <ul class="nav-links">
          <div class="menu">
            <li><a href="<?php echo base_url('/Homepage_ctrl'); ?>" class="<?php if($this->session->userdata('active_nav')=='homepage'){echo'active';}?>">Home</a></li>
            <li><a href="<?php echo base_url('/Divisions_ctrl'); ?>" class="<?php if($this->session->userdata('active_nav')=='division'){echo'active';}?>">Divisions</a></li>
            <li><a href="<?php echo base_url('/Partnership_ctrl'); ?>" class="<?php if($this->session->userdata('active_nav')=='partnership'){echo'active';}?>">Partnership</a></li>
            <li><a href="<?php echo base_url('/Aboutus_ctrl'); ?>" class="<?php if($this->session->userdata('active_nav')=='aboutus'){echo'active';}?>">About us</a></li>
            <div class="contact text-center">
              <button href="#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#exampleModal" style="background-color: transparent;">Contact us</button>
                  <!-- Modal -->
                  <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                      <div class="modal-content bg-dark rounded">
                        <div class="modal-header" style="border: none;">
                          <h5 class="modal-title">Contact us</h5>
                          <button type="button" class="btn btn-close btn-outline-success" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <div class="table-responsive">
                              <table class="table table-dark">
                                  <tbody>
                                      <tr>
                                        <td class="text-center" style="border: none;">
                                          <a href="mailto:teluesports@gmail.com">
                                            <img src="assets/img/email.png">
                                          </a>
                                        </td>
                                        <td class="text-center" style="border: none;">
                                          <a href="https://www.instagram.com/teluesports/">
                                            <img src="assets/img/instagram.png">
                                          </a>
                                        </td>
                                        <td class="text-center" style="border: none;">
                                          <a href="https://www.youtube.com/@TELUESPORTS">
                                            <img src="assets/img/youtube.png">
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
                                          <a href="https://page.line.me/?accountId=qiw5424h">
                                            <img src="assets/img/line.png">
                                          </a>
                                        </td>
                                        <td class="text-center" style="border: none;">
                                          <a href="https://www.linkedin.com/company/telkom-university-esports">
                                            <img src="assets/img/linkind.png">
                                          </a>
                                        </td>
                                        <td class="text-center" style="border: none;">
                                          <a href="https://www.tiktok.com/@teluesports">
                                            <img src="assets/img/tiktok.png">
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
          </div>
        </ul>
      </nav>

    