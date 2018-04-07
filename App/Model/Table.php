<?php

	namespace App\Model;

	class Table
	{
		protected $table;
		protected $db; //injection de dépendance

		public function __construct(\App\Database\Database $db)
		{
			$this->db=$db;
			if(is_null($this->table)){
				$parts= explode('\\', get_class($this)); //extraire nom de la table
				$class_name=end($parts); // recupere le dernier morceaux 
				$this->table= strtolower(str_replace('Table','',$class_name));// pass en minuscule et retire le Table
			}
		}

		public function all()
		{
			return $this->db->query('SELECT * FROM posts');
		} 
	}