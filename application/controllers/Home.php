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
        echo "purple lamboghini";
    }

    public function dashboard()
    {
        $this->_home();
    }

    public function _home()
    {
//      todo: if(isset($_SESSION['user_login']))
        if (true){
            $this->load->view('adminTemp/userNavbar');
        }
    }

}
