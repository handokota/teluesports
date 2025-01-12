<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Custom404 extends CI_Controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        // Set header 404
        $this->output->set_status_header('404');

        // Load custom view untuk halaman 404
        $this->load->view('errors/html/error_custom_404'); // Buat file custom_404.php di folder views/errors
    }
}
