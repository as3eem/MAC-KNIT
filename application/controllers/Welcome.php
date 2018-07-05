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
        if (isset($_SESSION['logged_in']))
        {
            if ($_SESSION['logged_in'])
                redirect('Dashboard/user');
        }
        $this->load->view('registration');
    }

    public function verify()
    {
        $data['roll'] = $this->input->post('roll', TRUE);
        $data['phone'] = $this->input->post('phone', TRUE);
        $data['email'] = $this->input->post('email', TRUE);
        $this->_checkDuplicacy($data);

        $data['name'] = $this->input->post('name', TRUE);
        $data['isFaculty'] = $this->input->post('isFaculty', TRUE);
        $data['course'] = $this->input->post('course', TRUE);
        $data['branch'] = $this->input->post('branch', TRUE);
        $data['year'] = $this->input->post('year', TRUE);
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

    public function _checkDuplicacy($data){
        $this->load->model('Macuser');
        $query = "select * from user where RollNo = '".$data['roll']."'";
        $query = $this->Macuser->_custom_query($query);
        $q=$query->result();
        $emailCheck = "select * from user where Email = '".$data['email']."'";
        $emailCheck = $this->Macuser->_custom_query($emailCheck);
        $r=$emailCheck->result();
        $phoneCheck = "select * from user where Contact = '".$data['phone']."'";
        $phoneCheck = $this->Macuser->_custom_query($phoneCheck);
        $s=$phoneCheck->result();
        if ($q[0]->id >0){
            die("The Roll Number " . $q[0]->RollNo . " is already registered.");
        }
        if ($r[0]->id >0){
            die("The Email Address " . $r[0]->Email . " is already registered. Try something new.");
        }
        if ($s[0]->id >0){
            die("The Phone Number " . $s[0]->Contact . " is already registered. Try something new.");
        }
    }

    function _get_user($usr, $pwd)
    {
        $this->load->model('Macuser');
        $query = "select * from user where RollNo = '" . $usr . "' and password = '" . $pwd . "'";
        $query = $this->Macuser->_custom_query($query);
        return $query;
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
        $otp = rand(1000, 9999);
        $this->session->set_userdata('otp', $otp);
        $this->load->model('OTP');
        $this->OTP->sendOTP($_SESSION['otp'],$phone);

//      todo: remove this otp from console

        echo "<script>console.log($otp)</script>";

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
