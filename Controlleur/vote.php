<?php 

	if(isset($_GET["page"]) and $_GET["page"]="vote" ){
		if($_SERVER['QUERY_STRING']=="page=vote"){

		$query=$db->customQuery("SELECT * FROM vote_groupe;");
		$site->title="Vote title";
		while($data=mysql_fetch_object($query))
		$content[]=$data;
		//print_r($content);
		gettpl("vote",$content,$site);
		}


		if(isset($_GET["id"])){
			$id=$_GET["id"];
		$query=$db->customQuery("SELECT * FROM vote_groupe WHERE id=$id ;");
		$data=mysql_fetch_object($query);
		$site->title="Vote : ".$data->titre;
		$content["qustion"]=$data;
		$query=$db->customQuery("SELECT * FROM vote_choix WHERE idvote=$id ;");
		while($data=mysql_fetch_object($query))
			$content["reponse"][]=$data;
		gettpl("VoteDetaille",$content,$site);
		}


	}else {
		$site->title="Page Principale";
		gettpl("home",null,$site);
}