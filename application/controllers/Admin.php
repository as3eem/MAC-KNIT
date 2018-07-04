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
        $this->load->view('adminTemp/admin');
    }
    public function login(){
        if ($this->input->post('sub') == 'subMIT'){

        }


    }

}

