<?php
// echo 'Pensions Profile';
if (!isset($nic)){
    redirect('client/login');
}
// echo $nic;

?>

<style>
    label{
        color:grey;
        font-size: 12px;
    }
    textarea{
        display: block;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 4px;
    width: 220px;
    height: 80px;
    border: none;
    border-bottom: 1px solid #AAA;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    font-size: 15px;
    transition: 0.2s ease;
    }

    input[type="text"],
    input[type="date"],
    input[type="password"] {
    display: block;
    box-sizing: border-box;
    margin-bottom: 20px;
    padding: 4px;
    width: 220px;
    height: 32px;
    border: none;
    border-bottom: 1px solid #AAA;
    font-family: 'Roboto', sans-serif;
    font-weight: 400;
    font-size: 15px;
    transition: 0.2s ease;
    }

    input[type="text"]:focus,
    input[type="password"]:focus {
    border-bottom: 2px solid #16a085;
    color: #16a085;
    transition: 0.2s ease;
    }

    input[type="submit"] {
    margin-top: 28px;
    width: 120px;
    height: 32px;
    background: #16a085;
    border: none;
    border-radius: 2px;
    color: #FFF;
    font-family: 'Roboto', sans-serif;
    font-weight: 500;
    text-transform: uppercase;
    transition: 0.1s ease;
    cursor: pointer;
    }

    input[type="submit"]:hover,
    input[type="submit"]:focus {
    opacity: 0.8;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    transition: 0.1s ease;
    }

    input[type="submit"]:active {
    opacity: 1;
    box-shadow: 0 1px 2px rgba(0, 0, 0, 0.4);
    transition: 0.1s ease;
    }    
    body {
    margin: 0;
    padding: 0;
    background: #DDD;
    font-size: 16px;
    color: #222;
    }

    #lannisters-panel, #application-panel {
    position: relative;
    margin: 1% auto;
    width: 750px;
    /* height: 400px; */
    background: #FFF;
    padding:10px;
    border-radius: 2px;
    padding-left:25px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.4);
    }
    .navmenu, .navmenu a{
        /* background-color:#1769aa; */
        color:black;
    }
    .right {
  position: absolute;
  top: 0;
  right: 0;
  box-sizing: border-box;
  padding: 40px;
  width: 300px;
  height: 400px;
  background: url('https://goo.gl/YbktSj');
  background-size: cover;
  background-position: center;
  border-radius: 0 2px 2px 0;
}
</style>

<!-- ">Logout</a> -->
<body onload="autoload(this))">
<div class="mdl-tabs mdl-js-tabs mdl-js-ripple-effect">
  <div class="mdl-tabs__tab-bar navmenu" >
      <a href="#lannisters-panel" class="mdl-tabs__tab">General</a>
      <a href="#application-panel" class="mdl-tabs__tab is-active">Application</a>
      <a href="<?php echo base_url()?>client/logout" class="mdl-tabs__tab">Logout</a>
  </div>

<div class="mdl-tabs__panel" id="lannisters-panel">
    <h4>My Pension Account</h4>
    <ul>
    <li>Application Status:</li>
    <li>Pensions Personal File Status:</li>
    <li>Pensions and Gratuities Particulars
        <ul>
            <li>Estimated Calculated Amount (Pension)</li>
            <li>Estimated Calculated Amount (Gratuities)</li>
            <li>Next Payment Due Date</li>
        </ul>

    </li>
    <li>Payment Details
        <ul>
            <li>Bank Account:</li> <?php echo $Bank;?>
            <li>Bank and Branch:</li> <?php echo $Bank_branch;?>
            <li><a href="#">Request Account Change</a></li>
        </ul>

    </li>
    </ul>
</div>

<div class="mdl-tabs__panel is-active" id="application-panel">
    
    <h4> Application </h4>
    <?php echo validation_errors(); ?>
    <?php echo form_open('application/submit','',array('nic'=>$nic)); ?>

        <?php include('application.php');?>
    <div class="right">
        
    </div>

    <button type="submit">Save</Button>
    </form>
   

</div>



<div class="Actions">
</div
</script>