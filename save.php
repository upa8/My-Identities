<?php 
ob_start();
    require('includes/settings.php');

    
    include('views/_header.php');
    include('classes/login.php');
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

   $Image_Type = 1; //$_POST['img_type'];

file_put_contents('uploads/'.$Username.'.png', $unencodedData);

  $image_location = "uploads/".$Username.'.png';
  $image_name = "something";

                $sql="INSERT INTO " . $table_for_images . " (img_name, img_loc , uid , img_type)
                       VALUES
                       ('" . $image_name . "','" . $image_location . "','" . $User_Id . "','" . $Image_Type . "')";

                if(mysqli_query($con, $sql))    {
                    header('Location: save_image.php?status=1');
                }   else    {
                    header('Location: save_image.php?error=1');
                }




?>
<h2>Save the image and show to user</h2>
<table>
    <tr>
        <td>
            <a href="img.png" target="blank">
            	Click Here to See The Image Saved to Server</a>
        </td>
        <td align="right">
            <a href="index.php">
            	Click Here to Go Back</a>
        </td>
    </tr>
    <tr>
        <td colspan="2">
            <br />
            <br />
			<span>
				Here is Client-sided image:
			</span>
            <br />
<?php
//Show the image
echo '<img src="'.$_POST['img_val'].'" />';
?>
        </td>
    </tr>
</table>
<style type="text/css">
body, a, span {
	font-family: Tahoma; font-size: 10pt; font-weight: bold;
}
</style>