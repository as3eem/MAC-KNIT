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
        if($this->_sessionCheck())
        {
            $this->load->model('MAC_Request');
            $this->load->model('Macuser');
            $data['request']=$this->MAC_Request->count_all();
            $data['users']=$this->Macuser->count_all();
            $this->load->view('admin/adminNavbar');
            $this->load->view('admin/panel',$data);
            $this->load->view('admin/footer');
        }
        else $this->load->view('admin/adminLogin');
    }

    public function login(){
        if ($this->input->post('sub') == 'subMIT' && $this->input->post('pwd')=='12345'){
            $sessiondata=array(
                'name'=>'Mr.Admin',
                'branch'=>'Computer Science and Engineering',
                'adminLogin'=>TRUE
            );
            $this->session->set_userdata($sessiondata);
            redirect('Admin');

        }
        else die('Try to login using correct password');
    }

    public function Search(){
        if($this->_sessionCheck()){
            $roll=$this->input->get('roll');
            $data=$this->_fetch_profile($roll);
            $data=$data->result();
            $e['data']=$data[0];
            $this->load->view('admin/adminNavbar');
            $this->load->view('admin/profileAdminView',$data[0]);
            $this->load->view('admin/footer');
        }
        else redirect('Admin');
    }

    public function macRequests(){
        if ($this->_sessionCheck()){

            $this->_delete_older_request();
            $data=$this->_fetch_requests();
            $data=$data->result();
            $student['k']=$data;
            $this->load->view('admin/adminNavbar');
            $this->load->view('admin/MACrequest',$student);
            $this->load->view('admin/footer');
            echo "<script>alert('Requests older than 3 days have been deleted.')</script>";
        }
        else redirect('Admin/');
    }

    public function action_on_request(){
        if ($this->_sessionCheck()) {

            $email=$this->input->post('email');
            $roll=$this->input->post('roll');
            $mac=$this->input->post('mac');
            $img=$this->input->post('post_image');
            $approve=$this->input->post('approve');
            $deny=$this->input->post('deny');
            if (isset($approve)){
                $this->_add_MAC_to_user_db($mac,$roll);
                $this->_delete_mac_request($mac);

//            todo: Send confirmation mail that request is accepted

            }
            elseif (isset($deny)){
//            todo: send a mail of failure in acceptance
                $this->_delete_mac_request($mac);
                $this->_delete_id_card_image($img);
            }
            $this->macRequests();
        }
        else redirect('Admin');
    }


    public function _delete_older_request(){
        $this->load->model('MAC_Request');
        $query = "DELETE FROM macRequest WHERE date < (NOW() - INTERVAL 3 DAY)";
        $query = $this->MAC_Request->_custom_query($query);
        return $query;
    }



    public function _fetch_requests(){

        $this->load->model('MAC_Request');
        $query = "select * from macRequest";
        $query = $this->MAC_Request->_custom_query($query);
        return $query;
    }

    public function _add_MAC_to_user_db($mac,$roll){

        $this->load->model('Macuser');
        $query = "update user set Mac='".$mac."' where RollNo='".$roll."'";
        $query = $this->Macuser->_custom_query($query);
        return $query;
    }

    public function _fetch_profile($roll){

        $this->load->model('Macuser');
        $query = "SELECT * FROM user WHERE RollNo='".$roll."'";
        $query = $this->Macuser->_custom_query($query);
        return $query;
    }

    public function _sessionCheck(){
        if (isset($_SESSION['adminLogin'])){
            if ($_SESSION['adminLogin']){
                return true;
            }
            else redirect(base_url('Admin'));
        }
        else return false;
    }

    public function _delete_mac_request($mac){
        $this->load->model('MAC_Request');
        $query = "DELETE FROM macRequest WHERE Mac='".$mac."'";
        $query = $this->MAC_Request->_custom_query($query);
        return $query;
    }

    public function _delete_id_card_image($img){
        if (!unlink(base_url('Static/IDs/')).$img)
        {
            die("problem in deleting ID image. Please delete ID manually. <br> Location is".base_url().$img);
        }
    }

    public function profile($data){
        echo "amamam";
        $this->load->view('admin/adminNavbar');
        $this->load->view('admin/profileAdminView',$data);
        $this->load->view('admin/footer');

    }


}

