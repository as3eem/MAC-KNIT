<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller
{

    function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if ($_SESSION['logged_in'])
        {
            redirect('Dashboard/index');
        }

        $this->load->view('registration');
    }

    public function verify()
    {
//        todo: Check user existence

        $data['name'] = $this->input->post('name', TRUE);
        $data['isFaculty'] = $this->input->post('isFaculty', TRUE);
        $data['roll'] = $this->input->post('roll', TRUE);
        $data['course'] = $this->input->post('course', TRUE);
        $data['branch'] = $this->input->post('branch', TRUE);
        $data['year'] = $this->input->post('year', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $data['phone'] = $this->input->post('phone', TRUE);
        $data['password'] = $this->input->post('password', TRUE);
        $data['submit'] = $this->input->post('submit', TRUE);

        $sessiondata = array(
            'name' => $data['name'],
            'rollNo' => $data['roll'],
            'isFaculty' => $data['isFaculty'],
            'course' => $data['course'],
            'branch' => $data['branch'],
            'year' => $data['year'],
            'email' => $data['email'],
            'contact' => $data['phone'],
            'password' => $data['password'],
            'logged_in' => FALSE
        );
        $this->session->set_userdata($sessiondata);
        $this->_sendOTP($_SESSION['contact']);

    }

    public function otpCheck()
    {
        $recievedOTP = $this->input->post('otp');
        if ($recievedOTP == $_SESSION['otp']) {
            $this->_userRegister();
        } else {
            echo "<script>alert('Incorrect OTP! Please enter correct OTP.');</script>";
            $this->load->view('otpVerify');

        }
    }

    public function _sendOTP($phone)
    {
//	        todo: attach OTP API
        $otp = rand(1000, 9999);
        $this->session->set_userdata('otp', $otp);
        $this->load->view('otpVerify');
    }

    public function _userRegister(){

        $insert['Name']=$_SESSION['name'];
        $insert['RollNo']=$_SESSION['rollNo'];
        $insert['Email']=$_SESSION['email'];
        $insert['Branch']=$_SESSION['branch'];
        $insert['Year']=$_SESSION['year'];
        $insert['Contact']=$_SESSION['contact'];
        $insert['Course']=$_SESSION['course'];
        $insert['isFaculty']=$_SESSION['isFaculty'];
        $insert['password']=$_SESSION['password'];

        $this->_insert($insert);
        $this->session->sess_destroy();
        echo "<script>alert('You are succesfully registered. Now login using roll number and password');</script>";
        $this->index();
    }

    function _insert($insert)
    {
        $this->load->model('Macuser');
        $this->Macuser->_insert($insert);
    }


}
