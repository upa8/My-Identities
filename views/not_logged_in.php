<?php include('_header.php'); ?>

    <br>
    <br>
    <br>
    <br>
    <br>

    <br>
    <br>
    

<!-- 
<form method="post" action="index.php" name="loginform">
    <label for="user_name"><?php //echo WORDING_USERNAME; ?></label>
    <input id="user_name" type="text" name="user_name" required />
    
    <label for="user_password"><?php // echo WORDING_PASSWORD; ?></label>
    
    <input id="user_password" type="password" name="user_password" autocomplete="off" required />
    
    <input type="checkbox" id="user_rememberme" name="user_rememberme" value="1" />
    <label for="user_rememberme"><?php // echo WORDING_REMEMBER_ME; ?></label>
    <input type="submit" name="login" value="<?php // echo WORDING_LOGIN; ?>" />
</form>
-->
	<div class="container" >  
		<div class="row">

			<div class="col-sm-4" ></div>
			<div class="col-sm-4" >
					<br>
	<form class="form" method="post" action="index.php" name="loginform">

		<div class="form-group">
			<label for="user_name" ><?php echo WORDING_USERNAME; ?></label>

			
				<input type="text" class="form-control" id="user_name"  name="user_name" placeholder="Username" required>

			

		</div>



		<div class="form-group">
			<label for="user_password" ><?php echo WORDING_PASSWORD; ?></label>
			
				<input  class="form-control" id="user_password" type="password" name="user_password" autocomplete="off"  placeholder="Password" required>
			
		</div>



		<div class="form-group">
			
				<div class="checkbox">
					<label>
						<input type="checkbox" id="user_rememberme" name="user_rememberme" value="1"> Remember me
					</label>
				</div>
				</div>


		<div class="form-group">
			
				<button type="submit" class="btn btn-default" name="login"><?php echo WORDING_LOGIN; ?></button>
			
		</div>
		<div class="form-group">
				<label for="register" ><a href="register.php"><?php echo WORDING_REGISTER_NEW_ACCOUNT; ?></a>
				</label>
				<br>
				
		</div>
		<div class="form-group">
				<label for="forgot_password" ><a href="password_reset.php"><?php echo WORDING_FORGOT_MY_PASSWORD; ?></a>
				</label>

		</div>




	</form>

				</div>
				<div class="col-sm-4" ></div>
			</div>
		</div>
	</div>
	



	<?php include('_footer.php'); ?>
