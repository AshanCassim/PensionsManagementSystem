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
<body>

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
                <li class="">
                <a href="<?php echo base_url()?>quartermaster/pending">
                        <i class="ti-view-list-alt"></i>
                        <p>Pending Approval</p>
                    </a>
                </li>
                <li class="active">
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
                    <a class="navbar-brand" href="">Pending Completion</a>
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
                <div class="col-lg-12 col-md-7">
                <div class="card">
                        <div class="header">
                                <h4 class="title">Apllications Pending Completion</h4>
                        </div>
                
                        <div class="content">
                    <div>
                        <input type="text" id="filter" onkeyup="myFunction()" placeholder="Filter" title="Type in a name">
                    </div>
            
                    <table id="pending" class="table table-striped">
                                    <thead>
                                    	<th>NIC</th>
                                    	<th>Actions</th>
                                    </thead>       
                                    <tbody>
                           <?php
                                            foreach ($pendinglist as $row){
                                                echo '<tr >';
                                                echo '<td>';
                                                echo $row['nic'];
                                                echo '</td>';
                                                echo '<td>';
                                                echo '<span> <i class="ti-pencil-alt"></i><a href="'.base_url().'quartermaster/complete/'.$row['nic'].'"></span>    Complete</a> ' ;
                                                if($row['status']==30){
                                                    echo '<br><div style="width:200px;"class="alert alert-danger" ><i class="ti-infinite"></i> Draft</div>';
                                                };
                                                // echo '<span> <i class="ti-check"></i><a href="'.base_url().'quartermaster/approve/'.$row['nic'].'"></span>    Approve</a>' ;
                                                // echo '<span> <i class="ti-close"></i></span><a href="'.base_url().'quartermaster/reject/'.$row['nic'].'">    Reject</a>' ;
                                                echo '</td>';
                                                echo '</tr>';
                                                }
                                                ?>

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

     <script type="text/javascript">
     var show = document.getElementById('otpin');
     document.onload(generateotp());
     function generateotp() { 

            // Declare a digits variable  
            // which stores all digits 
            var digits = '0123456789'; 
            let OTP = ''; 
            for (let i = 0; i < 5; i++ ) { 
                OTP += digits[Math.floor(Math.random() * 10)]; 
            } 
            show.value= OTP;
            // alert(show);
        } 
        
       
     </script>

<script>
        function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("filter");
        filter = input.value.toUpperCase();
        table = document.getElementById("pending");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
            txtValue = td.textContent || td.innerText;
            if (txtValue.toUpperCase().indexOf(filter) > -1) {
                tr[i].style.display = '';
            } else {
                tr[i].style.display = "none";
            }
            }       
        }
        }
</script>

</html>
