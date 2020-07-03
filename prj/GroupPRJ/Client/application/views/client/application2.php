<!--Generates Form Elements to display Basic Information-->

<div id="basic" class="application">
<h6><b>Basic Information</b></h6>
<?php
$data = array(
    array(
        'name'          => 'nic',
        'id'            => 'NIC',
        'value'         => $nic,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
        ' disabled'     => '1'

    ),
    array(
        'name'          => 'fullname',
        'id'            => 'Full Name',
        'value'         => $fullname,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;'
    ),

    array(
        'name'          => 'surname',
        'id'            => 'Surname',
        'value'         => $surname,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;'
    ),

    array(
        'name'          => 'Date_of_Birth',
        'id'            => 'Date of Birth',
        'value'         => $Date_of_Birth,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
        'type'          => 'date'
    ),
);

foreach  ($data as $i){
    echo '<label>'.$i['id'].'</label>';
    echo form_input($i);
    echo '<br>';
}
?>
<label>Residential Address</label> 
<textarea name="Residential_Address">
    <?php echo $Residential_Address;?>
</textarea><br>
<!--Upto This Point-->

<!--Generates Form Elements to display Marital Status-->
<label>Marital Status</label><br>
<?php
$data = array(
    array(
        'name'          => 'MaritalStat',
        'id'            => 'Single',
        'value'         => '1',
        'maxlength'     => '100',
        'size'          => '50',
        // 'style'         => 'width:50%;',
        'type'          => 'radio',
     
    ),
    array(
        'name'          => 'MaritalStat',
        'id'            => 'Married',
        'value'         => '2',
        'maxlength'     => '100',
        'size'          => '50',
        // 'style'         => 'width:50%;',
        'type'          => 'radio',
     
    ),
    array(
        'name'          => 'MaritalStat',
        'id'            => 'Divorced',
        'value'         => '3',
        'maxlength'     => '100',
        'size'          => '50',
        // 'style'         => 'width:50%;',
        'type'          => 'radio',
     
    ),
);

foreach ($data as $i){
    if ($i['value'] == $MaritalStat){
        $i=array_merge($i,array('checked'=>'true'));
        // print_r($i);
    }
    echo form_input($i);
    echo $i['id'];
    echo '<br>';
}

?>
<!--Upto This Point-->
</div>

<div id="service" class="application">
<h6><b>Service Information</b></h6>
<!--Generates Form Elements to display the Service -->
<label>Service</label><br>
<?php
$data = array(
    array(
        'name'          => 'service',
        'id'            => 'Sri Lanka Army',
        'value'         => '1',
        'maxlength'     => '100',
        'size'          => '50',
        // 'style'         => 'width:50%;',
        'type'          => 'radio',
     
    ),
    array(
        'name'          => 'service',
        'id'            => 'Sri Lanka Navy',
        'value'         => '2',
        'maxlength'     => '100',
        'size'          => '50',
        // 'style'         => 'width:50%;',
        'type'          => 'radio',
     
    ),
    array(
        'name'          => 'service',
        'id'            => 'Sri Lanka Air Force',
        'value'         => '3',
        'maxlength'     => '100',
        'size'          => '50',
        // 'style'         => 'width:50%;',
        'type'          => 'radio',
     
    ),
);

foreach ($data as $i){
    if ($i['value'] == $service){
        $i=array_merge($i,array('checked'=>'true'));
        // print_r($i);
    }
    echo form_input($i);
    echo $i['id'];
    echo '<br>';
}
// <!--Upto This Point-->

$data = array (
    array(
        'name'          => 'ServiceID_number',
        'id'            => 'Service ID',
        'value'         => $ServiceID_number,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
   
    ),
    array(
        'name'          => 'Rank',
        'id'            => 'Rank',
        'value'         => $Rank,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
   
    ),
    array(
        'name'          => 'start_of_service',
        'id'            => 'Commencement of Service',
        'value'         => $start_of_service,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
        'type'          => 'date'
   
    ),
    array(
        'name'          => 'date_of_retirement',
        'id'            => 'Date of Retirement',
        'value'         => $date_of_retirement,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
        'type'          => 'date'
   
    ),
);

foreach  ($data as $i){
    echo '<label>'.$i['id'].'</label>';
    echo form_input($i);
    echo '<br>';
}
?>
<label>Office Address</label> 
<textarea name="Official_Address">
    <?php echo $Official_Address;?>
</textarea><br>
</div>


<div class="application" id="salary">
<hr>
<h6><b>Salary Information</b></h6>

</div> 

