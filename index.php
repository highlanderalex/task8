<?php
	require_once "lib/func.php";
	
	if ( isset($_GET['run']) )
	{
		$search = trim(htmlspecialchars($_GET['search']));
		if ( !empty($search) )
		{
			$obj = new GoogleSearch($search);
			$rezult = $obj->getSearch();
		}
	}
	require_once "templates/index.php";
?>
