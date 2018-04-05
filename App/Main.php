<?php

namespace App;

class Main{
	const DB_NAME='blog';
	const DB_USER='root';
	const DB_PASS='';
	const DB_HOST='localhost';

	private static $title=' Billet Simple pour L\'Alaska';
	private static $database;
	

	public static function getDb()
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
	}

}