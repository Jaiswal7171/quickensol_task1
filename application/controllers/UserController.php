<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class UserController extends CI_Controller {

    public function index() {
        $this->load->view('user/index');
    }

    public function contact() {
        $this->load->view('user/contact');
    }

    public function about() {
        $this->load->view('user/about');
    }
}
