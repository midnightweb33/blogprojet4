<?php

namespace App;

class Main{
	
	private $title=' Billet Simple pour L\'Alaska';
	private $db_Instance;
	private static $_instance;
	
	public  static function getInstance()
	{
		if(is_null(self::$_instance))
			{
				self::$_instance= new Main();
			}
			return self::$_instance;
	} 
	public function getTable($name)
    {
        $class_name = '\\App\\Model\\' . ucfirst($name) . 'Table';
        return new $class_name($this->getDb());
    }
    public function getDb()
    {
    	$config = Config::getInstance();
    	if(is_null($this->db_Instance))
    	{
    		$this->db_Instance = new Database\MysqlDatabase($config->get('db_name'),$config->get('db_user'),$config->get('db_pass'),$config->get('db_host'));
    	}
    		return $this->db_Instance;
    }
	/*public static function getDb()
	{
		if(self::$database===null)
			{
				self::$database= new Database(self::DB_NAME,self::DB_USER,self::DB_PASS,self::DB_HOST);
			}
		return self::$database;
	}

	public static function getTitle(){
		return self::$title;
	}

	public static function setTitle($title)
	{
		self::$title= $title;
	}*/

}