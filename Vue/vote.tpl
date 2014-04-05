<div style=" padding: 10px; border: 1px solid #daa2; background:#aeea11;"><?foreach ($content as $contenu) { ?>
<h4 style="text-align: left">Vote : <a href="?page=vote&id=<?=$contenu->id ?>"><?=$contenu->titre ?></a></h4>
<p style="text-align: left;margin: 0px;padding: 0px;">
	<?=$contenu->discription ?>

</p> 
<?
}
?>
</div>