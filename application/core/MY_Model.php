<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class MY_Model extends CI_Model {
	public static $definition = array();
	public function __construct()
    {
    	echo get_class($this);die;
        parent::__construct();        
        self::getDefinition();
        //echo "<pre>";print_r(static::$defination);die;
    }

    public static function getDefinition()
    {
    	$class = get_called_class();//get_class($class);
    	$reflection = new ReflectionClass($class);
    	if (!$reflection->hasProperty('definition')) {
            return false;
        }

        $definition = $reflection->getStaticPropertyValue('definition');
        //echo "<pre>";print_r($definition);die;
    }
}