<?php 

	namespace App;

// class singletton 
	class Config
	{
		private $settings=[];
		private static $_instance;

// créer une instance 1 fois puis retourne par la suite cette meme instance 
		public static function getInstance(){
			if(is_null(self::$_instance)){
				self::$_instance = new Config();
			}
			return self::$_instance;
		}

		public function __construct(){
			$this->settings = require dirname(__DIR__).'/config/configuration.php';
		}
		public function get($key)
		{
			if(!isset($this->settings[$key]))
			{
				return null;
			}
			return $this->settings['$key'];
		}
	}