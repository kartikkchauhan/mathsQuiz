<!DOCTYPE html>
<html>
<head>
    <title>Report</title>
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/mcq.css">
    <link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>assets/css/navbar.css">
</head>
<body>
    <div class="container">
        <?php
            if ($this->session->flashdata('msg')) 
            {
        ?>
        <p class="alert alert-danger"><?= $this->session->flashdata('msg') ?></p>
        <?php
            }
        ?>
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

    <div class="row" style="padding-top: 30px">
        <h2>Result</h2>
        <br/>
        <div class="panel panel-primary">
             <div class="panel-heading">                  
                  <pre>  
Score                        :  <?= $response->score ?>   


Correct Attempted Question   :  <?= $response->correct_question ?>



Incorrect Attempted Question :  <?= $response->incorrect_question ?>     


Remark                       :  <?= $response->remark ?>      
                  </pre>
             </div><!--.panel-heading-->
        


  
</body>
</html>