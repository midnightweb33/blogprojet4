<?php 
namespace App\Model;

use App\Main;

class Categorie{
	public static function all()
	{
		{
			return Main::getDb()->query('SELECT * FROM categories',__CLASS__);
		}
	}
	public static function find($id){
		return Main::getDb()->prepare('SELECT * FROM categories WHERE id=?',[$id], __CLASS__ , true);
	}
}