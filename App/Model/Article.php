<?php 

	namespace App\Model;

	use App\Main;
	class Article
	{
		public static function getLast()
		{
			return Main::getDb()->query('SELECT 
												posts.id,
												posts.title,
												posts.content,
												categories.title as categorie 
												FROM posts 
												LEFT JOIN categories
												ON category_id= categories.id',
												__CLASS__);
		}
		public static function lastByCategory($category_id)
		{
			return Main::getDb()->prepare('SELECT 
												posts.id,
												posts.title,
												posts.content,
												categories.title as categorie 
												FROM posts 
												LEFT JOIN categories
												ON category_id= categories.id
												WHERE category_id=?',
												[$category_id],
												__CLASS__,
												false);	
		}
		public static function find($id){
		return Main::getDb()->prepare('SELECT * FROM posts WHERE id= ?',[$_GET['id']],'App\Model\Article',true);
	}
	}