<?php
class ShoppingCartModel extends CI_Model{
	public $items;
	public function __construct(){
		parent::__construct();
		$this->load->library('session');
	}
	public function init(){
		$result = null;
		if($this->session->has_userdata('shoppingCart')){
			$result = $this->session->userdata('shoppingCart');
		}
		if(isset($result))
		{
			$this->items = $result;
		}
	}
	public function update($productId, $number){
		$check = false;
		foreach($this->items as $item){
			if($item->productId == $productId){
				$item->count += $number;
				$check = true;
				break;
			}
		}
		if(!$check){
			array_push($this->items, array('productId' => $productId, 'count' => $number));
		}
		$this->session->set_userdata('shoppingCart', $this->items);
	}
}