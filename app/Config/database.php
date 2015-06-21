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
//		'password' => '',
//		'database' => 'fitcentive',
//	);

    /*
     * Azure database
     */
	public $default = array(
		'datasource' => 'Database/Mysql',
		'persistent' => false,
		'host' => 'us-cdbr-azure-east-b.cloudapp.net',
		'login' => 'bf30e4255e3dd1',
		'password' => '75174d88',
		'database' => 'fitcentive',
	);
}
