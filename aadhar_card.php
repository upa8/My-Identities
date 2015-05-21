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
	}
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

<br>


<!-- Collect the nav links, forms, and other content for toggling -->
          
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.php">My Identites <img class="img-responsive" src="img/logo.png" alt="Logo" width="80" height="80">  </a>
     </div>
              <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                     
                    <li >
                        <a href="index.php">Home</a>
                    </li>
                    
                    <li >
                        <a href="index.php?logout">Logout</a>
                    </li>
                    
                    
                    <!--
                    <li class="page-scroll">
                        <a href="#contact">Contact</a>
                    </li>
                    -->
                </ul>
            </div>


            
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container-fluid -->
    </nav>
	<div class="container" >  
		<div class="row">

			<div class="col-sm-4" >
			</div>
			<div class="col-sm-4" >

				  <div class="col-lg-12 text-center">
                    <h2>Aadhar Card</h2>
                    <hr class="star-primary">
                </div>
  
				<?php 


		include('includes/settings.php');

		$Check_Aadhar = mysqli_query($con, "SELECT * FROM images WHERE uid = '$User_Id' AND img_type = 1 ;");

			
			if(mysqli_num_rows($Check_Aadhar)>0){
				echo " You Already have your AADHAR CARD in your wallet. ";
				echo "<br>If you want to change it , go and delete it from wallet";

			}else{
					echo'<form  method="POST" enctype="multipart/form-data" action="save_aadhar.php" id="myForm">
									<input type="hidden" name="img_val" id="img_val" value="" />
						</form>

						<form action="aadhar_card.php" method="GET">
							<div class="form-group">
								<label for="url" >Wait few seconds after submiting url to load image </label>
								<input type="text" class="form-control"  id="url" name="url" placeholder="Enter Your Url" required><br>
								<input type="submit" class="btn btn-default" value="Submit Url">
							</div>
						</form>	
						<input type="submit"  value="Save Image " onclick="capture();" />
										   <br>
										   <br>
										   <div id="target">
									<div> 

										    <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="

										';echo $Complete_String ; 
										echo 
										'"  style="width:500px;height:500px"  alt="Website For ScreenShot">';
										echo '
										</div>
										</div>
						';


			}		

?>		 		


			</div>
			<div class="col-sm-4" ></div>
		</div>
	</div>
    

<!-- 

<?php 


		include('includes/settings.php');

		$Check_Aadhar = mysqli_query($con, "SELECT * FROM images WHERE uid = '$User_Id' AND img_type = 1 ;");

			
			if(mysqli_num_rows($Check_Aadhar)>0){
				echo " You Already Have Your AADHAR CARD IMFORMATION IN WALLETE ";
				echo "<br>If you want to change it , go and delete it from wallet";

			}else{
					echo'<form method="POST" enctype="multipart/form-data" action="save_aadhar.php" id="myForm">
									<input type="hidden" name="img_val" id="img_val" value="" />
									</form>

									<form action="aadhar_card.php" method="GET">
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
				
				echo'		
					   </div>
								</div>
							</td>
						</tr>
					</table>
					';


			}		

?>		 		

				 		     <img src="data:image/gif;base64,R0lGODlhAQABAAD/ACwAAAAAAQABAAACADs%3D" data-url="http://www.google.com" alt="Google">
-->
	
<?php 
		include('views/_footer.php');

?>
   
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