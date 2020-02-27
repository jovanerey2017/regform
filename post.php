<?php
include_once('validate.php');

$fname=$_POST['firstname'];
$lname=$_POST['lastname'];
$mname=$_POST['middlename'];
$add_ress=$_POST['address'];
$dob=$_POST['dateofbirth'];
$pob=$_POST['placeofbirth'];
$gen_der=$_POST['gender'];
if($gen_der=="male"){
    echo "male";
}else if($gen_der=="female"){
        echo "female";
    }
$guar_dian=$_POST['guardian'];
$cnumber=$_POST['contactnumber'];
$cstatus=$_POST['civilstatus'];
$ylevel=$_POST['yearlevel'];
$cou_rse=$_POST['course'];
$syear=$_POST['schoolyear'];
$e_mail=$_POST['email'];

include_once('condition.php');

echo "First name: $fname <br>";
echo "Last name: $lname <br>";
echo "Middle name: $mname <br>";
echo "Address: $add_ress <br>";
echo "Date of Birth: ";
if($dob){
    $newFormat = DateTime::createFromFormat('Y-m-d', $dob);
    echo $newFormat->format('m-d-Y');
}

echo "<br>";
echo "Place of Birth: $pob <br>";
echo "Gender: $gen_der <br>";
echo "Name of Guardian: $guar_dian <br>";
echo "Contact Number: $cnumber <br>";
echo "Civil status: $cstatus <br>";
echo "Year level: $ylevel <br>";
echo "Course: $cou_rse <br>";
echo "School year: $syear <br>";
echo "E-mail address: $e_mail <br>";





?>