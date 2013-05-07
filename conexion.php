<?php
	//datos servidor collins
	define ('DB_USER', 'jorge');
	define ('DB_PASSWORD', 'collins123');
	define ('DB_HOST', 'collinscom.com');
	define ('DB_NAME', 'hanson');
	
	// //datos servidor pieles hanson
	// define ( "SERVER", 'localhost' );
	// define ( "DB_NAME", '' );
	// define ( "DB_USER", '' );
	// define ( "DB_PWD", '' );	

class Conexion{

	public function conectar(){
		$link = @mysql_connect (DB_HOST, DB_USER, DB_PASSWORD) OR die ('Could not connect to MySQL: ' . mysql_error() );
		@mysql_select_db (DB_NAME) OR die ('Could not select the database: ' . mysql_error() );
		mysql_set_charset('utf8',$link);
		
		return $link;
	}

	
}

?>