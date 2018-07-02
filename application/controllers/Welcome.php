<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $this->load->view('registration');
    }
    public function verify()
    {
        $data['name']=$this->input->post('name',TRUE);
        $data['isFaculty']=$this->input->post('isFaculty',TRUE);
        $data['roll']=$this->input->post('roll',TRUE);
        $data['course']=$this->input->post('course',TRUE);
        $data['branch']=$this->input->post('branch',TRUE);
        $data['year']=$this->input->post('year',TRUE);
        $data['email']=$this->input->post('email',TRUE);
        $data['phone']=$this->input->post('phone',TRUE);
        $data['password']=$this->input->post('password',TRUE);
        $data['submit']=$this->input->post('submit',TRUE);

        $sessiondata = array(
            'name'=>$data['name'],
            'roll' => $data['roll'],
            'course' => $data['course'],
            'branch' => $data['branch'],
            'year' => $data['year'],
            'email' => $data['email'],
            'phone' => $data['phone'],
            'password' => $data['password'],
            'logged_in' => FALSE
        );
        $this->session->set_userdata($sessiondata);

        $otp=rand(1000,9999);
        $this->_sendOTP($otp,$_SESSION['mobile']);

        $this->load->view('otpVerify');
    }

    public function otpCheck(){
//	        todo: check otp after fetching from database
    }
    public function _sendOTP(){
//	        todo: attach OTP API
    }

}
