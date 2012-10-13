<?php
	class Config
	{
		public $site_name = 'MinecraftGO';
		public $site_url = 'localhost';
		public $site_version = '0.1';

		private $db_host = 'localhost';
		private $db_user = 'root';
		private $db_pass = 'pass';
		private $db_name = 'mcGO';

		public function __construct()
		{
			//CODE HERE
		}
	}

	$Config = new Config();
?>