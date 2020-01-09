<?php

class Spsdev_Mediamatic_Plugin {

	
	public function __construct()
	{	
		$this->init_files();
	}


	private function init_files() 
	{
		include_once ( SPSDEV_MEDIAMATIC_PATH . 'inc/walkers.php');
		include_once ( SPSDEV_MEDIAMATIC_PATH . 'inc/topbar.php');
		include_once ( SPSDEV_MEDIAMATIC_PATH . 'inc/interface.php');
	}

}

new Spsdev_Mediamatic_Plugin();