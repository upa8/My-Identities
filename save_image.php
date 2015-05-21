<?php 
ob_start();

	include('views/_header.php');

	// include the config
	require_once('config/config.php');

	// include the to-be-used language, english by default. feel free to translate your project and include something else
	require_once('translations/en.php');

	// include the PHPMailer library
	require_once('libraries/PHPMailer.php');

	// load the login class
	require_once('classes/Login.php');

	include('includes/messages.php');

	$login = new Login();
	
	$Username = $_SESSION['user_name'];
	$User_Id = $_SESSION['user_id'];

	if(isset($_GET["url"])){
		$Website_To_Take_Screenshot = $_GET["url"];
		 $Website_To_Take_Screenshot;
		 $Comman_Url = "http://";
		 $Complete_String = $Comman_Url.$Website_To_Take_Screenshot;
		 echo '

					<form method="POST" enctype="multipart/form-data" action="save.php" id="myForm">
					<input type="hidden" name="img_val" id="img_val" value="" />
					</form>

					<form action="save_image.php" method="GET">
					Enter URL <input type="text" name="url"><br>
					<input type="submit">
					</form>		
					<table>
					<tr>
					<td colspan="2">
					<table width="100%">
					<tr>
					<td>

					<input type="submit" value="Save It  " onclick="capture();" />
					<a href="mediaLibrary.php" class="btn"><i class="icon-picture"></i> Media Library</a>

					</td>
					<td align="right">
					</td>
					</tr>
					</table>
					</td>
					</tr>
					<tr>
					<td valign="top" style="padding: 10px;">
					<b>Output</b>
					</td>
					<td>
					<div id="target">
					<div> 



					';

					echo '
				 		       <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="

						';echo $Complete_String ; 
						echo 
						'"  style="width:500px;height:500px"  alt="Website For ScreenShot">';

						echo '
							   </div>
										</div>
									</td>
								</tr>
							</table>
							';




	}



	if(isset($_GET["card_type"])){
		$Card_Type = $_GET["card_type"];

		if($Card_Type=='1'){


			$Check_Aadhar = mysql_query("SELECT * FROM images WHERE uid = '$User_Id' AND img_type = 1; ");
			if(mysql_num_rows($Check_Aadhar)>0){
				echo " You Already Have Your AADHAR CARD IMFORMATION IN WALLETE ";
				echo "<br>If you want to change it , go and delete it from wallet";

			} else{

			}




		}else{
			if($Card_Type=='2'){

				$Licence_Number = mysql_query("SELECT * FROM images WHERE uid = '$User_Id' AND img_type = 2; ");
				if(mysql_num_rows($$Licence_Number)>0){
					echo " You Already Have Your AADHAR CARD IMFORMATION IN WALLETE ";
					echo "<br>If you want to change it , go and delete it from wallet";

				}else{

					echo '

					<form method="POST" enctype="multipart/form-data" action="save_aadhar.php" id="myForm">
					<input type="hidden" name="img_val" id="img_val" value="" />
					</form>

					<form action="save_image.php" method="GET">
					Enter URL <input type="text" name="url"><br>
					<input type="submit">
					</form>		
					<table>
					<tr>
					<td colspan="2">
					<table width="100%">
					<tr>
					<td>

					<input type="submit" value="Save It  " onclick="capture();" />
					<a href="mediaLibrary.php" class="btn"><i class="icon-picture"></i> Media Library</a>

					</td>
					<td align="right">
					</td>
					</tr>
					</table>
					</td>
					</tr>
					<tr>
					<td valign="top" style="padding: 10px;">
					<b>Output</b>
					</td>
					<td>
					<div id="target">
					<div> 



					';

					echo '
				 		       <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="

						';echo $Complete_String ; 
						echo 
						'"  style="width:500px;height:500px"  alt="Website For ScreenShot">';

						echo '
							   </div>
										</div>
									</td>
								</tr>
							</table>
							</body>
</html>
							';












				} 






			}
		}

}




 ?>



				 		<!-- 

				 		     <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="http://www.google.com" alt="Google">
-->
	
   
<script type="text/javascript">
	function capture() {
		$('#target').html2canvas({
			onrendered: function (canvas) {
                //Set hidden field's value to image data (base-64 string)
				$('#img_val').val(canvas.toDataURL("image/png"));
                //Submit the form manually
				document.getElementById("myForm").submit();
			}
		});
	}
</script>
<style type="text/css">
	#target {
		border: 1px solid #CCC;
		padding: 5px;
		margin: 5px;
		height: 500px;
		width: 500px;	
	}
	h2, h3 {
		color: #003d5d;
	}
	p {
		color:#AA00BB;
	}
	#more {
		font-family: Verdana;
		color: purple;
		background-color: #d8da3d;
	}
</style>


		<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
		<script type="text/javascript" src="js/html2canvas.js"></script>
		<script type="text/javascript" src="js/jquery.plugin.html2canvas.js"></script>
		<script src="url2img.js"></script>

						
</body>
</html>