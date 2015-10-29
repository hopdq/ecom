<?php
require_once 'application/models/UI/ShoppingCartModel.php';
class Order extends  CI_Controller{
    public function __construct(){
        parent::__construct();
        $this->load->helper('session');
    }
    public function addToCart(){
        $productId = $this->input->get('productId');
        $number = $this->input->get('number');
        $cart = new ShoppingCartModel();
        $cart->init();
        $cart->update($productId, $number);
    }
}