<!DOCTYPE html>
<html>
<head>
	<title>Welcome</title>
	<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/mcq.css">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/navbar.css">
</head>
<body>
	<div class="container">
	<nav class="main-navigation">
        <div class="navbar-header animated fadeInUp">
            <a class="navbar-brand" href="#">Maths Quiz</a>
        </div>
        <ul class="nav-list">
            <li class="nav-list-item">
                <?php echo anchor('Home/dashboard', 'Home', 'class="nav-link"') ?>
            </li>
            <li class="nav-list-item">
            	<?php echo anchor('Home/logout', 'Logout', 'class="nav-link"') ?>
            </li>
        </ul>

    </nav>
  	<?php echo form_open('Home/submitQuiz'); ?>
    <?php
    	foreach ($response as $res) 
    	{
  
    ?>
	<div class="row" style="padding-top: 30px">
		<h2>Quesion <?= $res->id ?>:-</h2>
	    <br/>
        <div class="panel panel-primary">
             <div class="panel-heading">                  
                  <pre>
<?= $res->question ?>                      
                  </pre>
             </div><!--.panel-heading-->
        
<div class = "panel-body">
      <h4>Your Answer</h4>
           </div>
<ul class = "list-group">
    <li class = "list-group-item">
          <div class="radio">
            <input type="radio" id="radio" name="ans_<?= $res->id ?>" value="<?= $res->option_a ?>"/>
            <label for="radio">
                <?= $res->option_a ?> 
            </label>
        </div>
    </li>
    <li class = "list-group-item">
          <div class="radio">
            <input type="radio" id="radio" name="ans_<?= $res->id ?>" value="<?= $res->option_b ?>"/>
            <label for="radio">
               <?= $res->option_b ?>
            </label>
        </div>
    </li>
    <li class = "list-group-item">
          <div class="radio">
            <input type="radio" id="radio" name="ans_<?= $res->id ?>" value="<?= $res->option_c ?>"/>
            <label for="radio">
               <?= $res->option_c ?>
            </label>
        </div>
    </li>
    <li class = "list-group-item">
          <div class="radio">
            <input type="radio" id="radio" name="ans_<?= $res->id ?>" value="<?= $res->option_d ?>"/>
            <label for="radio">
                <?= $res->option_d ?>
            </label>
        </div>
    </li>
   </ul>
	</div>
</div>
<?php
	}
?>
<div class="panel-footer row"  style="padding-bottom: 50px">
	<center><button class="btn btn-success">Submit Quiz</button></center>
</div>
</form>
  
</body>
</html>