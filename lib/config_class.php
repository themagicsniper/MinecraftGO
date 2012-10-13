<?php
	class Config
	{
		public $site_name = 'MinecraftGO';	//SITE NAME
		public $site_url = 'localhost';		//SITE URL
		public $site_version = '3c5c568';	//USUALLY GIT COMMIT #

		private $db_host = 'localhost';		//DB HOST
		private $db_user = 'root';			//DB USER
		private $db_pass = 'pass';			//DB PASS
		private $db_name = 'mcGO';			//DB NAME

		public function __construct()
		{
			//CODE HERE
		}
	}

	$Config = new Config();
?>