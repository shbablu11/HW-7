<?php
session_start();


//input collect

//print_r($_REQUEST['name']);


//input collect
$name=$_REQUEST['name'];
$address=$_REQUEST['address'];
$phone=$_REQUEST['phone'];
$email=$_REQUEST['email'];
$review=$_REQUEST['review'];

$errors=[];

//all requirments

if(empty($name)){
    //echo "Plz write your Name";
    $errors['name_error']= 'Plz write your Name';
}elseif(strlen($name) <=2){
    //echo "type name minimum 3 char";
    $errors['name_error']= 'type name minimum 3 char';
}elseif(strlen($name) >=20){
    //echo "type name maximum 19 char";
    $errors['name_error']= 'type name maximum 19 char';
}



if(empty($address)){
    //echo "give your adddress";
    $errors['address_error']= 'give your adddress';
}elseif(strlen($address) >=50){
    //echo "address too long";
    $errors['address_error']= 'address too long';
}



if(empty($phone)){
    //echo "we need to call you, give number";
    $errors['phone_error']= 'need to call, give number';
}elseif(strlen($phone) !=11){
    //echo "invalid number,number must be 11 digit";
    $errors['phone_error']= 'invalid number,number must be 11 digit';
}


if(empty($email)){
    //echo "enter email id";
    $errors['email_error']= 'enter email id';
}



if(empty($review)){
    //echo "share your experiences";
    $errors['review_error']= 'share your experiences';
}

//print_r($errors);

if(count($errors)>0){
    //reload page for wrong input
    $_SESSION['form_error']=$errors;
    $_SESSION['old']= $_REQUEST;
    header("location: ../jobapplicationform.php");
}else{
    //go to next page
    echo "Thank You";
}


