<?php 
	/**
	* 
	*/
	class DB 
	{
		function __construct($host,$user,$pass,$db)
		{
			$con=mysql_connect($host,$user,$pass);
			$dbs=mysql_select_db($db);
		}
		function customQuery($query){
			$resultat=mysql_query($query);
			return $resultat;
		}
		function closedb(){
			mysql_close();
		}
	}


