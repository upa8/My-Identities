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


	$login = new Login();
	
	$Username = $_SESSION['user_name'];
	$User_Id = $_SESSION['user_id'];
?>


<br>
<br>

<br>


<br>
<br>
<br>
<br>
<br>
<br>

		<div class="container">
			<?php 
				if(isset($_GET['status'])){
					$Acknowlegment = $_GET['status'];
					if($Acknowlegment == 1){
						echo '<p>Image Uploaded Succefully , if not wait for few seconds</p>';
					}
					if($Acknowlegment == 3){
						echo '<p>Image Uploaded Already Exist</p>';
					}
					if($Acknowlegment == 4){
						echo '<p>Invalid Image</p>';
					}

					if($Acknowlegment == 2){
						echo '<p>This Image can not be added into database </p>';
					}

				}
			?>
			<table class="table table-hover span8 add-top-margin">

				<thead>
					<th class=>Id</th>
					<th id="imageColumn">Image</th>
					<th>Name</th>
					<th>Action</th>
				</thead>

				<?php

				include('includes/settings.php');

				$result = mysqli_query($con, "SELECT * FROM images WHERE uid = '$User_Id' ORDER BY id DESC");
				$Count = 1;
				while($row = mysqli_fetch_array($result))	{

					$delete_id = $row['id'];
					/*
					echo '<tr id="' . $row['id'] . '" class="fade in">

							<td>' . $row['id'] . '</td>
							<td>
								<a href="' . $row['img_loc'] . '">
									<img class="thumbnail span2" src="' . $row['img_loc'] . '"</div>
								</a>
							</td>
							<td>' . $row['img_name'] . '</td>
							<td>';
                             echo " <input  type=\"button\" onclick = \"document.location = 'delete.php?delete_id=$delete_id' ;\" value = \" Delete \"> "; 
                          
						//	<button class="del-btn btn btn-danger" rel="' . $row['id'] . '">Delete</button>
							
						echo '	</td>

						</tr>';
						*/
							echo '<tr id="' . $Count . '" class="fade in">

							<td>' . $Count . '</td>
							<td>
								<a href="' . $row['img_loc'] . '">
									<img style="width:200px;height:200px" class="thumbnail span2" src="' . $row['img_loc'] . '"</div>
								</a>
							</td>
							<td>' . $row['img_name'] . '</td>
							<td>';
                             echo " <input  type=\"button\" onclick = \"document.location = 'delete.php?delete_id=$delete_id' ;\" value = \" Delete \"> "; 
                          
						//	<button class="del-btn btn btn-danger" rel="' . $row['id'] . '">Delete</button>
							
						echo '	</td>

						</tr>';
						$Count++;
				}
				?>

			</table>

		</div>

		<div id="backtotop">
			<i class="icon-arrow-up icon-white"></i>
		</div>
<?php 
		include('views/_footer.php');

?>

	</body>

	</html>