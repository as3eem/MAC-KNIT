<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 2/7/18
 * Time: 9:19 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller
{


    public function index()
    {
        if ($_SESSION['logged_in']){
            $this->_home();
        }
        else{
            $this->load->view('registration');
        }

    }

    public function login()
    {
        print_r($_SESSION);die;

        if ($_SESSION['logged_in']){
            $this->_home();
        }
        else {
            $roll = $this->input->post('roll');
            $pwd = $this->input->post('pwd');
            $this->_checkLogin($roll, $pwd);
        }
    }

    public function _checkLogin($roll,$pwd){
        $user=$this->_get_user($roll,$pwd);
        $user=$user->result();
        if ($user[0]->id > 0){
            $sessiondata = array(
                //get user id here
                'id'=>$user[0]->id,
                'name' => $user[0]->Name,
                'rollno' => $user[0]->RollNo,
                'email' => $user[0]->Email,
                'brnch' => $user[0]->Branch,
                'year' => $user[0]->Year,
                'contact' => $user[0]->Contact,
                'course' => $user[0]->Course,
                'post_image' => $user[0]->post_image,
                'isfaculty' => $user[0]->isFaculty,
                'logged_in' => TRUE
            );
            $this->session->set_userdata($sessiondata);
            $this->_home();
        }
        else{
            echo "<script> alert('Incorrect login details! Try Again')</script>";
            redirect('Home/index');
        }
    }

    public function _home()
    {
            $this->load->view('adminTemp/userNavbar');
            $this->load->view('adminTemp/panel');
    }
    function _get_user($usr, $pwd)
    {
        $this->load->model('Macuser');
        $query = "select * from user where RollNo = '" . $usr . "' and password = '" . $pwd . "'";
        $query = $this->Macuser->_custom_query($query);
        return $query;
    }

}
