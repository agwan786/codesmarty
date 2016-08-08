<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class ProductCore extends MY_Model {
	public static $definition = array(
		'table' => 'product',
		'primary' => 'id_product',
		'fields' => array(
			'name' => array('require'=>false, 'type'=>'string'),
			),
		);
    public function __construct(){
    	parent::__construct();
    }
} 