<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 */
	public function index()
	{
//        $this->load->view('mac/navbar');

        $this->load->view('adminTemp/userNavbar.php');
        $this->load->view('adminTemp/infoCards.php');

//        $this->load->view('adminTemp/panel.php');
//        $this->load->view('mac/registration');
    }
}
