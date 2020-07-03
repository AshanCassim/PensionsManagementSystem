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
<body onload="">

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
                                body    body    <li><a href="#">Notification 4</a></li>
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
<style>

</style>
<div class="content">
        <div class="container-fluid">
            <div class="row">
                
            <?php echo form_open('quartermaster/submitcomplete'); ?>
           
            <!-- Title -->
                <div class="col-lg-12 col-md-7">
                    <div class="card">
                        <div class="content">
                            Form B Part II to accompany the Application for Pensions by 
                            an individual bearing the National Identity Card Number 
                            <a href="<?php echo base_url().'/quartermaster/view/'.$nic?>"> <?php echo $nic?> </a>
                        </div>
                    </div>
                </div>
                
                <!-- Left Column -->
                <div class="col-lg-8 col-md-7">
                    <div class="card">
                        <div class="content">
                            <h6>Service Period</h6><br>

                                <span for = "period-pensionable">  Period of service in the permanent and
                                pensioable post:</span><br>
                                <input type="text" id="period-pensionable" name="period-pensionable" placeholder=yy-mm-dd><br>

                                <span for = "period-non">Period of service in the post which
                                is not permanent and pensionable:</span><br>
                                <input type="text" id="period-non" name="period-non" placeholder=yy-mm-dd><br>
                            
                                <span for = "period-training">Training period (Relevant to the post):</span><br>
                                <input type="text" id="period-training" name="period-training" placeholder=yy-mm-dd><br>

                                <span for = "period-other">Other service periods :</span><br>
                                <input type="text" id="period-other" name="period-other" placeholder=yy-mm-dd><br>



                        </div>
                    </div>
          
        

                    <div class="row>">
                        <div class="card">
                            <div class="content">
                                    <h6>Unpaid Leaves of Absence</h6><br>
                                        <span for="nopay-full">  Full period of service on no
                                            pay leave</span><br>
                                        <input type="text"  id="nopay-full" name="nopay-full" placeholder=" yy-mm-dd"><br>

                                        <span for="nopay-setoff">No pay leave after setting off under
                                            the provisions of pension Circular 9/96.</span><br>
                                           <input type="text" id="nopay-setoff" name="nopay-setoff" placeholder=" yy-mm-dd"><br>

                            </div>
                        </div>


                    <div class="row>">
                        <div class="card">
                            <div class="content">
                            
                                <h6>Salary Scale</h6><br>
                                
                                <span for="salary-consol">Annual consolidated salary on the date of retirement:</span><br>
                                <input type="text"  id="salary-consol" name="salary-consol" placeholder="Rs-Cents"> LKR<br>
                                
                                <span for="increment">Ratio of earned increment, if the officer retires on completion of the age of 60 years:</span><br>
                                <input type="text"  id="increment" name="increment" placeholder="Rs-Cents"> LKR<br>
                                
                                <span for="allowances">Pensionable allowances (if any):</span><br>
                                <input type="text"  id="allowances" name="allowances" placeholder="Rs-Cents"> LKR<br>
                                
                                <span for="salary-gross">Gross salary subject to computation of pension:</span><br>
                                <input type="text"  id="gross" name="gross" placeholder="Rs-Cents"> LKR<br>
                                
                                
                            </div>
                        </div>
                    </div>    
                    
                    
                </div>
                
                <!-- Row and Container End here -->
            </div>
            <div class="col-lg-4 col-md-7">
                <div class ="row">
                    <div class="card" >
                        <div class ="content">
                            <h6>Percentage Computation</h6><br>
                        <span>Percentage Entitled:</span><br>
                         <input tyep="text" id="percentage-entitled" name="percentage-entitled" readonly><br>
                            <span>Percentage Short:</span><br>
                            <input tyep="text" id="percentage-short" name="percentage-short" ><br>
                            <span>Percentage on Nopay:</span><br>
                            <!-- <button type=button onclick="calculate()" class="btn-danger btn-fill btn btn-primary btn-xs" style="float:right" name="save">Calculate</button> -->
                            <input tyep="text" id="percentage-nopay" name="percentage-nopay" readonly><br> 

                        </div>  
                    </div>
                </div>
                
                <div class ="row">
                    <div class="card" >
                        <div class ="content">
                            <h6>Final Computation</h6><br>
                            <span>Commuted Gratuity:</span><br>
                            <input tyep="text" id="commuted-gratuity" name="commuted-gratuity" readonly><br>
                            <span>Dues to the Government:</span><br>
                            <input tyep="text" id="due-gvt" name="due-gvt" ><br>
                            <span>Net Gratuity:</span><br>
                            <!-- <button type=button onclick="calculate()" class="btn-danger btn-fill btn btn-primary btn-xs" style="float:right" name="save">Calculate</button> -->
                            <input tyep="text" id="net-gratuity" name="net-gratuity" readonly><br>   
                            
                        </div>
                    </div>
                    
                
                </div>    
                
               
                
                <!-- Side Bar -->
                    <div class ="row">
                            <div class="card alert" style="background-color:lightgrey">
                                <div class ="content">
                                    <h6>Form Actions</h6><br>
                                    <button type="submit" class="btn-danger btn-fill btn btn-primary btn-s"  name="save">Save Draft</button>
                                    <button type="submit" class="btn-primary btn-fill btn btn-primary btn-s" name="complete">Submit Form</button>
                                    <div id='errout'></div>   
                                </div>
                            </div>
                            <input type=hidden name=nic value=<?php echo $nic?>>
                        </form>
                            
                        </div>
                    </div>
        </div>
    </div>

        </div>
</div>












    




</div>



</body>

  <!--   Core JS Files   -->

    <script src="<?php echo base_url()?>public/assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="<?php echo base_url()?>public/assets/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="<?php echo base_url()?>public/assets/js/bootstrap-checkbox-radio.js"></script>

	<!--  Charts Plugin -->
	<script src="<?php echo base_url()?>public/assets/js/chartist.min.js"></script>

    <!--  Notifications Plugin    -->
    <script src="<?php echo base_url()?>public/assets/js/bootstrap-notify.js"></script>



<?php require('chart.php');?>
    <script>

        document.addEventListener("input", function (e) {
            store(e);
        });
        var DATA =<?php echo json_encode(explode(',',$partii_array)); ?>
        // Text Fields as Variables
        var field1 = document.getElementById('period-pensionable');
        var field2 = document.getElementById('period-non');
        var field3 = document.getElementById('period-training');
        var field4 = document.getElementById('period-other');
        var field5 = document.getElementById('nopay-full');
        var field6 = document.getElementById('nopay-setoff');
        var field7 = document.getElementById('salary-consol');
        var field8 = document.getElementById('increment');
        var field9 = document.getElementById('allowences');
        var field10 = document.getElementById('gross');
        var field11 = document.getElementById('percentage-nopay');
        var feild12 = document.getElementById('percentage-entitled');
        var field13 = document.getElementById('percentage-short');
        var feild14 = document.getElementById('commuted-gratuity');
        var field15 = document.getElementById('due-gvt');
        var field16 = document.getElementById('net-gratuity');

        var fieldsarray =[
            document.getElementById('period-pensionable'),
            document.getElementById('period-non'),
            document.getElementById('period-training'),
            document.getElementById('period-other'),
            document.getElementById('nopay-full'),
            document.getElementById('nopay-setoff'),
            document.getElementById('salary-consol'),
            document.getElementById('increment'),
            document.getElementById('allowances'),
            document.getElementById('gross'),
            document.getElementById('percentage-entitled'),
            document.getElementById('percentage-short'),
            document.getElementById('percentage-nopay'),
            document.getElementById('commuted-gratuity'),
            document.getElementById('due-gvt'),
            document.getElementById('net-gratuity')
        ]
        
        
        // var percentchart = document.getElementById('chart'); 
        var fullservice = <?php require('chart.php');echo json_encode($fullservice)?> 
        var  DOR =  <?php echo json_encode($date_of_retirement)?> 
        var DOB = <?php echo json_encode($Date_of_Birth)?>;
     
       
    
       var percentnopay = document.getElementById('percentage-nopay');
        var percentageout = document.getElementById('percentage-entitled');
        var percentageshort = document.getElementById('percentage-short');
        var commutedgratuity = document.getElementById('commuted-gratuity');
        var test = document.getElementById('errout');
        var curr = document.activeElement.id;
        
    
            document.onload = loadval();
        function loadval(){
        
            var i;
            for(i=0;i<16;i++){
                // test.innerHTML = DATA;
                id=fieldsarray[i].id;
                document.getElementById(id).value=DATA[i];
                
            }
            // store(e);
        };
     

        // Calculate Percentages
        function percentage(period,nopay){
           var data=[];
            var reduction_nopay;
            var service = period[0];
            var age =(DOR.split('-')[0]-DOB.split('-')[0]);
            // alert(age);
            // temp
            // var age;
            
            if (age<50){
                entitled = percentageout.value = 'Invalid Age'+age + 'service'+service;
            }
            else{
               
                if (period[0]>=20){
                    if (period[0]>=25){
                        // entitled = percentageout.value =fullservice[period[0]][age];
                        data.push(percentageout.value=fullservice[period[0]][age]);
                        percentageshort.value =0;
                        reduction = 0;
                    }
                    else{
                    
                        percentageshort.value = entitled = ((25 - service)/6).toFixed(2)
                        data.push(percentageout.value =-fullservice[period[0]][age]);

                    }
                }
                else{
                    // pass
                }

            }

            var nopay = percentnopay.value = ((nopay[0]*12 + nopay[1])*0.2).toFixed(2);
            
            return  data;
        }
        function gratuity(gross,percentage){
            // alert(percentage);
            // test.innerHTML = percentage;
            
            var grosssal=(gross*percentage*2*0.01).toFixed(2);
            commutedgratuity.value=grosssal;
            field16.value = parseFloat(grosssal-field15.value).toFixed(2);

        }
        function store(e){
        //Values of each Field
        var periods= [

                // Pensionable Period
                [
                field1.value.split("-")[0],
                field1.value.split("-")[1],
                field1.value.split("-")[2]
                ],
                // Non Pensionable Period
                [
                field2.value.split("-")[0],
                field2.value.split("-")[1],
                field2.value.split("-")[2]
                ],

                // Training Period
                [
                field3.value.split("-")[0],
                field3.value.split("-")[1],
                field3.value.split("-")[2]
                ],
                // Other Period
                [
                field4.value.split("-")[0],
                field4.value.split("-")[1],
                field4.value.split("-")[2]
                ],
                //No Pay Leave
                [
                field5.value.split("-")[0],
                field5.value.split("-")[1],
                field5.value.split("-")[2]
                ], 
                //No Pay Setoff
                [
                field6.value.split("-")[0],
                field6.value.split("-")[1],
                field6.value.split("-")[2]
                ], 
            ];    
       
      
        var years=0;
        var months=0;
        var days=0;

        years = parseInt(periods[0][0]) + parseInt(periods[1][0]) + parseInt(periods[2][0])+ parseInt(periods[3][0]);
        months = parseInt(periods[0][1]) + parseInt(periods[1][1]) + parseInt(periods[2][1])+ parseInt(periods[3][1]);
        days = parseInt(periods[0][2]) + parseInt(periods[1][2]) + parseInt(periods[2][2])+ parseInt(periods[3][2]);
        
        if(days>=31){
            days_new = days%31;
            months += (days-days_new)/31;
            days = days_new;
        }
        if(months>=12){
            months_new = months%12;
            years += (months-months_new)/12;
            months = months_new;
        }
        
        var totalperiod = [years,months,days]

        var years=0;
        var months=0;
        var days=0;

        years = parseInt(periods[4][0]) + parseInt(periods[5][0])
        months = parseInt(periods[4][1]) + parseInt(periods[5][1]) 
        days = parseInt(periods[4][2]) + parseInt(periods[5][2]) 
        
        if(days>=31){
            days_new = days%31;
            months += (days-days_new)/31;
            days = days_new;
        }
        if(months>=12){
            months_new = months%12;
            years += (months-months_new)/12;
            months = months_new;
        }

        var totalnopay =[years,months,days]

        var percentages = percentage(totalperiod,totalnopay);

        gratuity(field10.value,percentages[0]);
        // test.innerHTML=('Period:' + totalperiod +'<br>'+ 'NoPay: '+totalnopay+'<br>'+'Percentages: '+ percentages);

        }
    
    </script>

</html>
