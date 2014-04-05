<?php 

$files=array_diff(scandir("./Model"), array('..', '.','Model.inc.php'));
foreach ($files as $value) 
include($value) ;