<?php
class Customer extends CI_Controller{
//    public function __construct(){
//        Parent::_construct();
//    }
    public function Login(){
        $temp['title']="Đăng nhập";
        $temp['content_view']='Front/Customer/Login';
        $temp['data'] = null;
        $this->load->view("Front/Shared/_Layout",$temp);
    }
}