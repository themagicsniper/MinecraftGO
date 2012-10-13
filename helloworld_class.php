<?php
	class HelloWorld
	{
		public function Say($message)
		{
			echo $message;
		}
	}

	$HelloWorld = new HelloWorld();

	$HelloWorld->Say(Hi!);
?>