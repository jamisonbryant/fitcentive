<?php

class DATABASE_CONFIG {
    /*
     * Local database
     */
//	public $default = array(
//		'datasource' => 'Database/Mysql',
//		'persistent' => false,
//		'host' => 'localhost',
//		'login' => 'root',
//		'password' => 'password',
//		'database' => 'fitcentive',
//	);

    /*
     * Azure database
     */
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'us-cdbr-azure-east-b.cloudapp.net',
		'login' => 'bebd87b2c7de5d',
		'password' => 'b0e85848',
		'database' => 'acsm_5c4a1563d77b8e2',
	);
}
