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

        if ($this->_sessionCheck()){
            $this->load->view('userTemp/userNavbar');
            $this->load->view('userTemp/panel');
            $this->load->view('userTemp/footer');

        }
        else{
            redirect(base_url());
        }
    }

    public function MAC(){
        if ($this->_sessionCheck()) {
            $this->load->view('userTemp/userNavbar');
            $this->load->view('userTemp/macRegister');
            $this->load->view('userTemp/footer');
        }else redirect(base_url());
    }

    public function newMAC(){

        if ($this->_sessionCheck()) {

            $roll=$_SESSION['rollno'];

            $available=$this->_get_user($roll);
            $available=$available->result();
            if ($available[0]->Mac){
                die("Your MAC is already registered with MAC Address: ".$available[0]->Mac."<br> Try filing a request for change of MAC Address.");
            }

            $request=$this->_get_user_request_table($roll);
            $request=$request->result();
            if ($request[0]->Mac){
                die("Your request is already pending for MAC Address: ".$request[0]->Mac."<br> Try filing a request for change of MAC Address.");
            }

            $mac = $this->input->post('mac');
            $sub = $this->input->post('done');

            if ($sub == "Submit") {
                $config['upload_path'] = './Static/IDs/';
                $config['allowed_types'] = 'gif|jpg|png';
                $config['max_size'] = '204800';
                $config['max_width'] = '10240';
                $config['max_height'] = '7680';

                $this->load->library('upload', $config);
                $this->upload->initialize($config);
                $_FILES['user_file']['name'] = $_SESSION['rollno'].".png";
                if ($this->upload->do_upload('user_file')) {
                    $data = array('upload_data' => $this->upload->data('user_file'));
                    $post_image = $_FILES['user_file']['name'];
                    $studentBio=$this->_fetch_data_for_mac_request($post_image,$mac);
                    $this->_insert($studentBio);
                } else {
                    $error = array('error' => $this->upload->display_errors());
                    echo '<pre>';
                    print_r($error);
                    die();
                }
            }
        }redirect(base_url());
    }

    public function _fetch_data_for_mac_request($post_image,$mac){
        $data['post_image']=$post_image;
        $data['Name']=$_SESSION['name'];
        $data['RollNo']=$_SESSION['rollno'];
        $data['Course']=$_SESSION['course'];
        $data['Branch']=$_SESSION['brnch'];
        $data['Year']=$_SESSION['year'];
        $data['Mac']=$mac;
        $data['Email']=$_SESSION['email'];
        $data['Contact']=$_SESSION['contact'];
        $data['isFaculty']=$_SESSION['isfaculty'];

        return $data;
    }

    public function _sessionCheck(){
        if (isset($_SESSION['logged_in'])){
            if ($_SESSION['logged_in']){
                return true;
            }
            else redirect(base_url());
        }
        return false;
    }

    function _insert($data)
    {
        $this->load->model('MAC_Request');
        $this->MAC_Request->_insert($data);
    }


    function _get_user($roll)
    {
        $this->load->model('Macuser');
        $query = "select * from user where RollNo = '" . $roll . "'";
        $query = $this->Macuser->_custom_query($query);
        return $query;
    }
    function _get_user_request_table($roll)
    {
        $this->load->model('MAC_Request');
        $query = "select * from user where RollNo = '" . $roll . "'";
        $query = $this->MAC_Request->_custom_query($query);
        return $query;
    }

}