<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MY_Controller extends CI_Controller {
	public function __construct(){
		parent::__construct();
		$this->smartyci->assign('CSS', 'assets/css/');
        $this->smartyci->assign('IMG', 'assets/images/');
        $this->smartyci->assign('JS', 'assets/js/');
        $this->smartyci->assign('LIB', 'assets/lib/');
	}

	public function clearCache(){
		$this->smartyci->clearAllCache();
		redirect($_SERVER['HTTP_REFERER']);
		exit;
	}
}