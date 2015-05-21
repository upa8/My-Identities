<?php
  ob_start();



	require('includes/settings.php');

    include('classes/Login.php');
    $login = new Login();
    $Username = $_SESSION['user_name'];
    $User_Id = $_SESSION['user_id'];
    $Img_Type = 3 ;


	if ((($_FILES["img_file"]["type"] == "image/gif")
	|| ($_FILES["img_file"]["type"] == "image/jpeg")
	|| ($_FILES["img_file"]["type"] == "image/jpg")
	|| ($_FILES["img_file"]["type"] == "image/pjpeg")
	|| ($_FILES["img_file"]["type"] == "image/x-png")
	|| ($_FILES["img_file"]["type"] == "image/png")))
	{

		if ($_FILES["img_file"]["error"] > 0)	{
    		echo "Return Code: " . $_FILES["img_file"]["error"] . "<br>";
    	}

    	else	{

    		if (file_exists("uploads/" . $_FILES["img_file"]["name"]))	{
            header('Location: mediaLibrary.php?status=3');
      		}

    		else 	{
      			move_uploaded_file($_FILES["img_file"]["tmp_name"],
      			"uploads/" . $_FILES["img_file"]["name"]);



      			$sql="INSERT INTO " . $table_for_images . " (img_name, img_loc,uid,img_type)
					   VALUES
					   ('" . $_POST['img_name'] . "','uploads/" . $_FILES["img_file"]["name"] . "','" . $User_Id . "','" . $Img_Type . "')";

      			if(mysqli_query($con, $sql))	{
      				header('Location: mediaLibrary.php?status=1');
      			}	else 	{
      				header('Location: mediaLibrary.php?status=2');
      			}

      		}

    	}

  	}

  	else 	{
  		header('Location: mediaLibrary.php?status=4');



  	}

?>