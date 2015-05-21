<?php 
ob_start();
    require('includes/settings.php');

    
    include('views/_header.php');
    include('classes/Login.php');
    $login = new Login();
    $Username = $_SESSION['user_name'];
    $User_Id = $_SESSION['user_id'];




 ?>

<?php
//Get the base-64 string from data
$filteredData = substr($_POST['img_val'], strpos($_POST['img_val'], ",")+1);

//Decode the string
$unencodedData = base64_decode($filteredData);
//Save the image

   $Image_Type = 2; //$_POST['img_type'];

file_put_contents('uploads/'.$Username.$Image_Type.'.png', $unencodedData);

  $image_location = "uploads/".$Username.$Image_Type.'.png';
  $image_name = "License card";

                $sql="INSERT INTO " . $table_for_images . " (img_name, img_loc , uid , img_type)
                       VALUES
                       ('" . $image_name . "','" . $image_location . "','" . $User_Id . "','" . $Image_Type . "')";

                if(mysqli_query($con, $sql))    {
                    header('Location: mediaLibrary.php?status=1');
                    exit();
                }   else    {
                    header('Location: mediaLibrary.php?status=2');
                    exit();
                }




?>
