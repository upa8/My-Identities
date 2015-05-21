<?php 
    include('_header.php');
 ?>
<br><br><br>
<br><br><br>
<br>
<br>

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


<div class="container">
    
      <div class="row">
        <div class="col-sm-4" ></div>
        <div class="col-sm-4" >


<!-- clean separation of HTML and PHP -->
<h5><?php echo $_SESSION['user_name']; ?> <?php echo WORDING_EDIT_YOUR_CREDENTIALS; ?></h5>

<!-- edit form for username / this form uses HTML5 attributes, like "required" and type="email" -->
<form class="form-group" method="post" action="edit.php" name="user_edit_form_name">
    <label for="user_name"><?php echo WORDING_NEW_USERNAME; ?></label>
    <input class="form-control" id="user_name" type="text" name="user_name" pattern="[a-zA-Z0-9]{2,64}" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_name']; ?>)
    <input class="btn btn-default" type="submit" name="user_edit_submit_name" value="<?php echo WORDING_CHANGE_USERNAME; ?>" />
</form>

<!-- edit form for user email / this form uses HTML5 attributes, like "required" and type="email" -->
<form method="post" action="edit.php" name="user_edit_form_email">
    <label for="user_email"><?php echo WORDING_NEW_EMAIL; ?></label>
    <input class="form-control" id="user_email" type="email" name="user_email" required /> (<?php echo WORDING_CURRENTLY; ?>: <?php echo $_SESSION['user_email']; ?>)
    <input class="btn btn-default" type="submit" name="user_edit_submit_email" value="<?php echo WORDING_CHANGE_EMAIL; ?>" />
</form>

<!-- edit form for user's password / this form uses the HTML5 attribute "required" -->
<form method="post" action="edit.php" name="user_edit_form_password">
    <label for="user_password_old"><?php echo WORDING_OLD_PASSWORD; ?></label>
    <input class="form-control" id="user_password_old" type="password" name="user_password_old" autocomplete="off" />

    <label for="user_password_new"><?php echo WORDING_NEW_PASSWORD; ?></label>
    <input class="form-control" id="user_password_new" type="password" name="user_password_new" autocomplete="off" />

    <label for="user_password_repeat"><?php echo WORDING_NEW_PASSWORD_REPEAT; ?></label>
    <input class="form-control" id="user_password_repeat" type="password" name="user_password_repeat" autocomplete="off" />

    <input class="btn btn-default" type="submit" name="user_edit_submit_password" value="<?php echo WORDING_CHANGE_PASSWORD; ?>" />
</form>

<!-- backlink -->
<a href="index.php"><?php echo WORDING_BACK_TO_LOGIN; ?></a>



        </div>
          <div class="col-sm-4" ></div>
          
      
  </div>
</div>

<?php include('_footer.php'); ?>
