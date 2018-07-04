<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 3/7/18
 * Time: 9:47 AM
 */

defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function user(){

        if ($_SESSION['logged_in']){
            $this->load->view('adminTemp/userNavbar');
            $this->load->view('adminTemp/panel');
            $this->load->view('adminTemp/footer');

        }
        else{
            redirect(base_url());
        }
    }

    public function MAC(){
        if ($_SESSION['logged_in']) {
            $this->load->view('adminTemp/userNavbar');
            $this->load->view('adminTemp/macRegister');
            $this->load->view('adminTemp/footer');
        }else redirect(base_url());
    }
    public function newMAC(){
        $sub=$this->input->post('done');
        if($sub=="Submit"){
            $mac=$this->input->post('mac');
            $IDpath=$this->input->post('idcard');
            echo $IDpath;

        }
        else redirect(base_url());
    }
}