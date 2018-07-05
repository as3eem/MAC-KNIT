<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 3/7/18
 * Time: 4:29 PM
 */


defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller
{
    public function index(){
        $this->session->sess_destroy();
        $this->load->view('admin/adminLogin');
    }

    public function login(){
        if ($this->input->post('sub') == 'subMIT' && $this->input->post('pwd')=='12345'){
            $sessiondata=array(
                'name'=>'Mr.Admin',
                'branch'=>'Computer Science and Engineering',
                'adminLogin'=>TRUE
            );
            $this->session->set_userdata($sessiondata);
            $this->load->view('admin/adminNavbar');
            $this->load->view('admin/panel');
            $this->load->view('admin/footer');

        }
        else die('Try to login using correct password');
    }
    public function macRequests(){
        if ($this->_sessionCheck()){
            $this->load->view('admin/adminNavbar');
            $this->load->view('admin/MACrequest');
            $this->load->view('admin/footer');
        }
    }

    public function _sessionCheck(){
        if (isset($_SESSION['adminLogin'])){
            if ($_SESSION['adminLogin']){
                return true;
            }
            else redirect(base_url('Admin'));
        }
        return false;
    }

}

