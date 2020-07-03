<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url()?>public/assets/img/apple-icon.png">
	<link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url()?>public/assets/img/favicon.png">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Military Pensions Management System</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />


    <!-- Bootstrap core CSS     -->
    <link href="<?php echo base_url()?>public/assets/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Animation library for notifications   -->
    <link href="<?php echo base_url()?>public/assets/css/animate.min.css" rel="stylesheet"/>

    <!--  Paper Dashboard core CSS    -->
    <link href="<?php echo base_url()?>public/assets/css/paper-dashboard.css" rel="stylesheet"/>


    <!--  Fonts and icons     -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
    <link href="<?php echo base_url()?>public/assets/css/themify-icons.css" rel="stylesheet">

</head>
<body onload ="automate(this)"> 

<div class="wrapper">
    <div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
		Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
		Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
	-->

    	<div class="sidebar-wrapper">
            <div class="logo">
                <a href="" class="simple-text">
                
                    <img style="width:  "src="<?php echo base_url()?>public/images/penlogo.png">
               
                </a>
            </div>

            <ul class="nav">
                <li >
                        <a href="<?php echo base_url()?>dashboard">
                        <i class="ti-panel"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li >
                    <a href="<?php echo base_url()?>quartermaster/new">
                        <i class="ti-user"></i>
                        <p>New Applicants</p>
                    </a>
                </li>
                <li class="active">
                <a href="<?php echo base_url()?>quartermaster/pending">
                        <i class="ti-view-list-alt"></i>
                        <p>Pending Approval</p>
                    </a>
                </li>
                <li class="">
                <a href="<?php echo base_url()?>quartermaster/approved">
                        <i class="ti-pencil-alt"></i>
                        <p>Pending Completion</p>
                    </a>
                </li>
                <li>
                <a href="<?php echo base_url()?>quartermaster/personalfile">
                        <i class="ti-files"></i>
                        <p>Personal Files</p>
                    </a>
                </li>
                <li>
                <a href="<?php echo base_url()?>quartermaster/admin">
                        <i class="ti-settings"></i>
                        <p>System Administration</p>
                    </a>
                </li>
            
            </ul>
    	</div>
    </div>

<div class="main-panel">

    <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar bar1"></span>
                        <span class="icon-bar bar2"></span>
                        <span class="icon-bar bar3"></span>
                    </button>
                    
                    <a class="navbar-brand" href="#">Pending Approval</a>
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                <i class="ti-panel"></i>
								<p>Stats</p>
                            </a>
                        </li>
                        <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="ti-bell"></i>
                                    <p class="notification">5</p>
									<p>Notifications</p>
									<b class="caret"></b>
                              </a>
                              <ul class="dropdown-menu">
                            
                                <li><a href="#">Notification 1</a></li>
                                <li><a href="#">Notification 2</a></li>
                                <li><a href="#">Notification 3</a></li>
                                <li><a href="#">Notification 4</a></li>
                                <li><a href="#">Another notification</a></li>
                              </ul>
                        </li>
						<li>
                            <a href="#">
								<i class="ti-settings"></i>
								<p>Settings</p>
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

<div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-8 col-md-7">
                <div class="card">
                        <div class="header">
                            
                        </div>
                
                        <div class="content">
                            <?php include('application.php')?>
                            
                        </div>
                </div>
                </div>
                <div class="col-lg-4 col-md-7">
                    <div class="card">
                    <div class="header">
                        Summary        
                    </div>
                    <div class="content"> 
                    <style>
                        .dlg{
                            border:none;   
                            display:inline;
                        }
                    </style>
                    <?php echo validation_errors(); ?>
                    <?php echo form_open('quartermaster/submit'); ?>
                    
                        <label>Revisions</label>
                        <input id="dlg" class="dlg" readonly value="0 Revision(s) Required">
                        <label>Custom Message</label>
                        <textarea  class="form-control" style="border-style:solid;"  rows="5" id="msg" name="msgbody"></textarea>
                        <div class="header">  
                        <input type=hidden name=payload id=payload>
                        <input type=hidden name=nic  value="<?php echo $nic?>">
                        <button name ="approve" id="ApproveBTN" type="submit" class="btn-primary btn-fill btn btn-primary btn-s ">Approve</button>
                        <button name ="revise" id="revise" type="submit" class="btn-danger btn-fill btn btn-primary btn-s ">Request Revision</button>
                    </form>

                    </div>
                    </div>
                    </div>        
                </div>

            </div>
        </div>
</div>












    




</div>



</body>

  <!--   Core JS Files   -->

    <script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="assets/js/bootstrap-notify.js"></script>

    <!--  Google Maps Plugin    -->
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>




</html>
