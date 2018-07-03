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
    public function index(){
        if ($_SESSION['logged_in']){
            $this->load->view('adminTemp/userNavbar');
            $this->load->view('adminTemp/panel');
        }
        else{
            redirect('Welcome/index');
        }
    }





}