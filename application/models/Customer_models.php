<?php


class Customer_models extends CI_Model
{
	public function get_customer($id){
		$data['id'] = 3;
		$data['first_name'] = 'Ali';
		$data['last_name'] = 'John';
		$data['address'] = 'Mesir';
		return $data;
	}

}
