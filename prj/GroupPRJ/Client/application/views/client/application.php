<!--Generates Form Elements to display Basic Information-->

<div id="basic" class="application">
<h6><b>Basic Information</b></h6>
<style>
 .ti-check{
     color:green;
 }
 .ti-close{
     color:red;
 }
 input[type="text"]{
     transition: background-color 0.4s;
 }
 .red{
    background-color: crimson;
    display: inline-block;
    color: black;
    box-sizing: border-box;
    border: none;
    border-radius: 2px;
    transition:border 0.5s ease;
    transition:border-radius 0.5s ease;
    transition:background-color 0.5s ease;
 }
 .green{
    background-color: green;
    display: inline-block;
    color: black;
    box-sizing: border-box;
    border: none;
    border-radius: 2px;
    transition:border 0.5s ease;
    transition:border-radius 0.5s ease;
    transition:background-color 0.5s ease;
 }
</style>
<?php
$data = array(
    array(
        'name'          => 'nic',
        'id'          => 'nic',
        'label'            => 'NIC',
        'value'         => $nic,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
        'disabled'  =>'True'
        

    ),
    array(
        'name'          => 'fullname',
        'id'          => 'fullname',
        'label'            => 'Full Name',
        'value'         => $fullname,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
        
    ),

    array(
        'name'          => 'surname',
        'id'            => 'surname',
        'label'         => 'Surname',
        'value'         => $surname,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
    
    ),

    array(
        'name'          => 'Date_of_Birth',
        'id'          => 'Date_of_Birth',
        'label'            => 'Date of Birth',
        'value'         => $Date_of_Birth,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
        'type'          => 'date',
   
    ),
);

foreach  ($data as $i){
    echo '<label>'.$i['label'].'</label>';
    echo '<br>'.form_input($i);
   
    echo '<br>';
}
?>
<label>Residential Address</label> <br>
<textarea id ="Residential_Address" name="Residential_Address">
    <?php echo $Residential_Address;?>
</textarea>

<!--Upto This Point-->

<!--Generates Form Elements to display Marital Status-->
<label>Marital Status</label><br>
<div id="MaritalStat" style="width:300px;padding:10px">
<?php
$data = array(
    array(
        'name'          => 'MaritalStat',
        'label'            => 'Single',
        'value'         => '1',
        'maxlength'     => '100',
        'size'          => '50',
        // 'style'         => 'width:50%;',
        'type'          => 'radio',
   
        
    ),
    array(
        'name'          => 'MaritalStat',
     
        'label'            => 'Married',
        'value'         => '2',
        'maxlength'     => '100',
        'size'          => '50',
        // 'style'         => 'width:50%;',
        'type'          => 'radio',
  
        
    ),
    array(
        'name'          => 'MaritalStat',
       
        'label'            => 'Divorced',
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
    echo $i['label'];
    echo '<br>';
}
?>
</div >
<!--Upto This Point-->
</div>
<br>
<h6><b>Service Information</b></h6>
<label>Service</label><br>
<div id="service" class="application" style="width:300px;padding:10px">
<!--Generates Form Elements to display the Service -->
<?php
$data = array(
    array(
        'name'          => 'service',
        'id'          => 'service',
        'label'            => 'Sri Lanka Army',
        'value'         => '1',
        'maxlength'     => '100',
        'size'          => '50',
        // 'style'         => 'width:50%;',
        'type'          => 'radio',
     
    ),
    array(
        'name'          => 'service',
        'id'          => 'service',
        'label'            => 'Sri Lanka Navy',
        'value'         => '2',
        'maxlength'     => '100',
        'size'          => '50',
        // 'style'         => 'width:50%;',
        'type'          => 'radio',
     
    ),
    array(
        'name'          => 'service',
        'id'          => 'service',
        'label'            => 'Sri Lanka Air Force',
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
    echo $i['label'];
    echo '<br>';
}
echo '</div>';
echo '<div>';
// <!--Upto This Point-->

$data = array (
    array(
        'name'          => 'ServiceID_number',
        'id'          => 'ServiceID_number',
        'label'            => 'Service ID',
        'value'         => $ServiceID_number,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
    
   
    ),
    array(
        'name'          => 'Rank',
        'id'          => 'Rank',
        'label'            => 'Rank',
        'value'         => $Rank,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
   
   
    ),
    array(
        'name'          => 'start_of_service',
        'id'          => 'start_of_service',
        'label'            => 'Commencement of Service',
        'value'         => $start_of_service,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
        'type'          => 'date'
     
   
    ),
    array(
        'name'          => 'date_of_retirement',
        'id'          => 'date_of_retirement',
        'label'            => 'Date of Retirement',
        'value'         => $date_of_retirement,
        'maxlength'     => '100',
        'size'          => '50',
        'style'         => 'width:50%;',
        'type'          => 'date',
      
   
    ),
);

foreach  ($data as $i){
    echo '<label>'.$i['id'].'</label><br>';
    echo form_input($i);

    echo '<br>';
}
?>
<label>Office Address</label><br>

<textarea id="Official_Address" name="Official_Address">
    <?php echo $Official_Address;?>
</textarea><br>
</div>


<div class="application" id="salary">
<hr>
<h6><b>Salary Information</b></h6>
</div> 

<script>

<?php
$str="" ;
foreach ($revisions as $field){
    $str.= $field['field'].',';
}
$str .= 'null';

echo 'var revised=['.$str.']';
?>

window.onload = function automate(){
     var i;
     console.log(revised);
     if (revised.length > 2){alert('Your Application is incomplete or incorrect. Please Attend to the marked fields and ReSubmit');};
     for (i = 0; i < (revised.length); i++) {
       validate(revised[i].name);
     } 
}



var fields = [];
function validate(id){
    console.log(id);
    // var btn = 'BTN-' + id;
    var btn = document.getElementById("app_tab");
    // var ApproveBTN = document.getElementById('ApproveBTN');
    // var dlg = document.getElementById('dlg') ;
    var field = document.getElementById(id);
    var check = (fields.includes(id));
    // var payload = document.getElementById('payload');

    // dlg.innerHTML = fields;
    
    if(!check){
        fields.push(id); 
        // field.style.color='red';  
        field.classList.add('red');  
        btn.classList.add('red');
        // btn.innerHTML='<i class="ti-check"></i>'

    }
    else{

        // temp
        field.className='';
        field.style.color='';
        field.style.backgroundColor='';  
        fields.splice(fields.indexOf(id),1); 
    
        // btn.innerHTML='<i class="ti-close"></i>'
    }

       // dlg.value=(fields.length+' Revision(s) Required');
       // payload.value = fields;
    // if(fields.length>0){
    //     ApproveBTN.disabled=true;
    // }
    // else{
    //     ApproveBTN.disabled=false;
        
    // }
       
    // temp
}


</script>