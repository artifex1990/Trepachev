<?php
	namespace Core\Storage;
    use DataBase;
	
	class Model
	{
		public function __construct()
		{
			$database  = new DataBase;
		}
	}