<?php 
include("./db.php");
include("./Model/Model.inc.php");
$db=new DB(DB_HOST,DB_USER,DB_PASS,DB_BASE);
$site=new site();
function gettpl($path,$content,$site){

	include("./Vue/header.tpl") ;
	include("./Vue/".$path.".tpl");
	include("./Vue/footer.tpl");
}
$Cofiles=array_diff(scandir("./Controlleur"), array('..', '.','Controlleur.inc.php'));
foreach ($Cofiles as $value)
include($value);



