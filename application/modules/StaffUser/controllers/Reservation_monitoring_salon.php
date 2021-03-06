<?php

  class Reservation_monitoring_salon extends MY_Controller{

    function __construct(){

      parent::__construct();
      $this->load->model('M_sidebars');
      $this->load->model('Account_management_m');
      $this->load->model('Reservation_m');
      $this->load->model('Function_m');
      if(!$this->session->userdata('userid')){
        redurect('Web');
      }
    }


    function index(){
      $usersdetails = $this->Function_m->userdetails($this->session->userdata('staffid'));
      $reservation = $this->Reservation_m->getReservationMonitoring($this->session->userdata('userid'));
      //echo json_encode($reservation);

      $data = array(
        'title'=>'Reservation Monitoring',
        //'sidebar'=>$sidebar,
        'userdetails'=>$usersdetails,
        'reservation'=>$reservation
      );

     $this->load->view('Default/staffheader',$data);
      $this->load->view('Default/staffsidebar',$data);
      $this->load->view('reservation_monitoring_salon',$data);
      $this->load->view('Default/adminfooter');

    }


       function queryByDate(){

        $date = $this->input->post();

        $success = $this->Reservation_m->queryWithDate($date['reservationdate']);

           if($success){
              
              $sidebar = $this->M_sidebars->sidebars($this->session->userdata('usertype'));
              $usersdetails = $this->Account_management_m->account_details($this->session->userdata('userid'));
              $success = $this->Reservation_m->getReservationMonitoring($this->session->userdata('userid'));
              //echo json_encode($success);

              $data = array(
                'title'=>'Reservation Monitoring',
                'sidebar'=>$sidebar,
                'userdetails'=>$usersdetails,
                'reservation'=>$success
              );

              $this->load->view('Default/adminheader',$data);
              $this->load->view('Default/adminsidebar',$data);
              $this->load->view('reservation_monitoring_salon',$data);
              $this->load->view('Default/adminfooter');
          }
          else{
            redirect('StaffUser/Reservation_monitoring_salon');
          }

    }






  }


?>
