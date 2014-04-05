<div style=" padding: 10px; border: 1px solid #daa2; background:#aeea11;">
<h3 style="text-align: left"><i><?=$content["qustion"]->titre ?> ?</i></h3>
	<ul style="text-align: left"><form method="post">
		<input type="hidden" name="idq" value="<?=$content["qustion"]->id ?>"/>
<?php
foreach ($content["reponse"] as $key => $value) {
	?>

		<li><?=$key+1 ?>.<input type="radio" name="rep" value="<?=$value->id ?>"/><?=$value->titre ?></li>
<?php	
}
?>
<input type="submit" value="vote"/>
</form>	</ul></div>