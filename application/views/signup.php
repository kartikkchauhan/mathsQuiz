<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Create Account</title>
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/loginSignup.css">
</head>
<body>
	<div class="wrapper fadeInDown">
	  <div id="formContent">
	    <!-- Tabs Titles -->

	    <!-- Icon -->
	    <div class="fadeIn first">
	      <img src="<?php echo base_url(); ?>assets/img/user.png" id="icon" alt="User Icon"  style="height: 80px;width: 80px" />
	    </div>
	    <?php
	    	if ($this->session->flashdata('msg')) 
	    	{
	    ?>
	    <p class="alert alert-danger"><?= $this->session->flashdata('msg') ?></p>
	    <?php
	    	}
	    ?>
	    <!-- Login Form -->
	    <?php echo form_open('Welcome/checkSignupCredentials'); ?>
	    	<input type="text" id="login" class="fadeIn second" name="fullName" placeholder="Enter Full Name" required>
	      	<input type="email" id="login" class="fadeIn second" name="email" placeholder="Enter Email" required>
	      	<input type="password" id="password" class="fadeIn third" name="password" placeholder="Enter Password" required>
	     	 <input type="submit" class="fadeIn fourth" value="Create Account">
	    </form>

	    <!-- Remind Passowrd -->
	    <div id="formFooter">
	    	<?php echo anchor('Welcome/login', 'Already have account? Login here.', 'class="underlineHover"') ?>
	    </div>

	  </div>
	</div>

</body>
</html>