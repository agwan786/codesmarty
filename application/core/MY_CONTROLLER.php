<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_CONTROLLER extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->smartyci->assign('CSS', 'assets/css/');
        $this->smartyci->assign('IMG', 'assets/images/');
        $this->smartyci->assign('JS', 'assets/js/');
	}
}