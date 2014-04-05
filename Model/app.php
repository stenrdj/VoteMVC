<?php

/**
* 
*/
class site 
{
	public $title;
	public $description;
	public $keyw;
	function settitle($titles)
	{
		$this->title=$titles;
	}
		function setkeywords($keys)
	{
		$this->keyw=$keys;
	}
		function setdescription($Dis)
	{
		$this->description=$Dis;
	}
}