<?php
if(empty($_POST['firstName'])){
    die("First Name is Required");
}
if(empty($_POST['lastName'])){
    die("Last Name is Required");
}
if(! filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    die("Valid Email is Required");
}

if(strlen($_POST['password'])< 8){
    die("Password must be at least 8 characters");
}
if (! preg_match("/[a-z]/i",$_POST['password'])){
    die('password must contain at least one letter')
}
if (! preg_match("/[0-9]/i",$_POST['password'])){
    die('password must contain at least one number')
}
if($_POST["password"]!== $_POST["password_confirmation"]){
    die("passwords must match");
}

$password_hash= password_hash($_POST["password"],PASSWORD_DEFAULT);
$mysql =require _DIR_."/database.php;
$sql = "insert into user (name,email,password_hash,gender)
        values(?,?,?,?);

    require __DIR__."/database.php';
print_r($_POST);
Var_dump($password_hash)
?>