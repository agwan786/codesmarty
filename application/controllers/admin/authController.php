<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AuthController extends MY_CONTROLLER {
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
        if(!$this->smartyci->useCached( 'login.tpl', 'login' )){
        	$this->smartyci->assign('name', 'Developers');
        	$this->smartyci->assign('time', date('d M Y H:i:s'));
        }

        $this->smartyci->display( 'login.tpl' );
	}
}
