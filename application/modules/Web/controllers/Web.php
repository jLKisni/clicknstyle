<?php

class Web extends MY_Controller{

    function __construct(){
      parent::__construct();
      // if($this->session->userdata('userid')){
      //       redirect('Functions/Functions');
      // }
    }

    function index(){

      $data = array(
        'title'=>'Main page',
        'homepageheader'=>'homepage header-collapse'

      );
      $this->load->view('Default/header',$data);
      $this->load->view('index');
      $this->load->view('Default/footer');
    }

    function about(){
      $data = array(
        'title'=>'About Us'

      );
      $this->load->view('Default/header',$data);
      $this->load->view('about');
      $this->load->view('Default/footer');
    }

    function services(){
      $data = array(
        'title'=>'Our Services'

      );
      $this->load->view('Default/header',$data);
      $this->load->view('services');
      $this->load->view('Default/footer');
    }

    function gallery(){
      $data = array(
        'title'=>'Our Galleries'

      );
      $this->load->view('Default/header',$data);
      $this->load->view('gallery');
      $this->load->view('Default/footer');

    }

    function contact(){
      $data = array(
        'title'=>'Contact'

      );
      $this->load->view('Default/header',$data);
      $this->load->view('contact');
      $this->load->view('Default/footer');
    }

    function register(){
      $data = array(
        'title'=>'Registration Form',
        'notsuccess'=>''
      );
      $notsuccess = "";
      $this->load->view('Default/header',$data);
      $this->load->view('register',$data);
      $this->load->view('Default/footer');
    }

    function login(){
      $this->load->view('login');
    }
}
