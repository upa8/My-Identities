<?php

	ob_start();
	require('includes/settings.php');
	
	if(isset($_GET['delete_id']) )	{
		$delete_id = $_GET['delete_id'];

	require_once ('db_connection/db_connect.php');
     $db = new DB_CONNECT();
      $file_name = mysql_query("SELECT img_loc FROM images WHERE id = '$delete_id'");

		$result = mysql_fetch_array($file_name);
       	$result['img_loc'];
       		$dir = dirname(__FILE__) . "/" . $result['img_loc'];
       		 $dir;

     $result = mysql_query("DELETE FROM images WHERE id = '$delete_id'");  
     	if($result != false)	{
			unlink($dir);
			header('Location: mediaLibrary.php');
			exit();
			
		}        




	}


?>