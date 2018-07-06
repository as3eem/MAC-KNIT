<?php
/**
 * Created by PhpStorm.
 * User: as3eem
 * Date: 6/7/18
 * Time: 5:49 PM
 */

if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Email extends CI_Model
{
    public function em(){

        $this->load->library('email');

        $config = array(
            'protocol'  => 'smtp',
            'smtp_host' => 'ssl://smtp.googlemail.com',
            'smtp_port' => 465,
            'smtp_user' => 'as3eem@gmail.com',
            'smtp_pass' => '',
            'mailtype'  => 'html',
            'charset'   => 'utf-8',
        );
        $this->email->initialize($config);
        $this->email->set_mailtype("html");
        $this->email->set_newline("\r\n");
        $this->email->set_mailtype("html");

        $htmlContent = $this->load->view('email','',true);

        $this->email->to('aseem2707@gmail.com');
        $this->email->from('as3eem@gmail.com','MyWebsite');
        $this->email->subject('How to send email via SMTP server in CodeIgniter');
        $this->email->message($htmlContent);

        if($this->email->send()){
            return true;
        }
        else{
            return false;
        }
    }
}