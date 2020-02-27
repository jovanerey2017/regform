<?php
include_once('condition.php');

$error=null;
//1. ---------------------------------------------------------------->
if(empty($fname) || empty($lname) || empty($mname)|| empty($add_ress) 
    || empty($cnumber) || empty($dob) || empty($pob) || empty($gen_der)
    || empty($guar_dian)|| empty($cstatus) || empty($ylevel)
    || empty($cou_rse)|| empty($syear) || empty($e_mail)) 
{
    $error=true;
    echo "Please fill up everything. <br>";
}
//1.---------------------------------------------------------------->
if(isEmpty($fname) || isEmpty($lname) || isEmpty($mname)|| isEmpty($add_ress) 
    || isEmpty($cnumber) || isEmpty($dob) || isEmpty($pob) || isEmpty($gen_der)
    || isEmpty($guar_dian)|| isEmpty($cstatus) || isEmpty($ylevel)
    || isEmpty($cou_rse)|| isEmpty($syear) || isEmpty($e_mail)) 
{
    $error=true;
    echo " Null input is not valid. <br>";
}
//2.---------------------------------------------------------------->
if(Newdateformat($dob)){
}

//3.---------------------------------------------------------------->
if (isNumbers($cnumber)){
    $error=true;
    echo "Contact must be number. <br>";
}
//4.---------------------------------------------------------------->
if (Checkcontact($cnumber)){
    $error=true;
    echo "Invalid input of contact follow example format <br>";
}

//5.---------------------------------------------------------------->
if (correctLenght($fname)){
    $error=true;
    echo "First name is too short. <br>";
}
if (correctLenght($lname)){
    $error=true;
    echo "Last name is too short. <br>";
}
//6.---------------------------------------------------------------->

if (startWithSpecialChar($fname)){
    $error=true;
    echo "First name should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($lname)){
    $error=true;
    echo "Last name should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($mname)){
    $error=true;
    echo "Middle name should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($add_ress)){
    $error=true;
    echo "Address should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($pob)){
    $error=true;
    echo "Place of birth should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($guar_dian)){
    $error=true;
    echo "Guardian name should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($cstatus)){
    $error=true;
    echo "Civil status should not start with special character (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($syear)){
    $error=true;
    echo "School Year should not start with special character, it is year. (ex. !,#,*..) <br>";
}
if (startWithSpecialChar($e_mail)){
    $error=true;
    echo "E-mail should not start with special character. (ex. !,#,*..) <br>";
}


//7.---------------------------------------------------------------->
if (startWithNumber($fname) || startWithNumber($lname) || startWithNumber($mname)
|| startWithNumber($pob) || startWithNumber($gen_der)
|| startWithNumber($guar_dian)|| startWithNumber($cstatus)
|| startWithNumber($cou_rse) || startWithNumber($e_mail)){
    $error=true;
    echo "Inputs must not start with number. <br>";
}
//8.---------------------------------------------------------------->
if (containHtmlTags($fname) || containHtmlTags($lname) || containHtmlTags($mname)|| containHtmlTags($add_ress) 
|| containHtmlTags($cnumber) || containHtmlTags($pob) || containHtmlTags($guar_dian)|| containHtmlTags($cstatus) 
|| containHtmlTags($ylevel)|| containHtmlTags($e_mail)){
    $error=true;
    echo "HTML Tags are not allowed. <br>";
}


//9.---------------------------------------------------------------->
if (checkEmail($e_mail)){
    $error=true;
    echo "Invalid email format. <br>";
}


if($error){
    echo "Registration Field <br><br>";
}
else
{
    echo "Succesfully Rigestered <br><br>";
}

?>