<?php
$firstName=$_REQUEST['firstName'];
$lastName=$_REQUEST['lastName'];
$email=$_REQUEST['email'];
$password=$_REQUEST['password']
$gender=$_REQUEST['gender']

if(isset($_POST['btntest'])){
    $host="localhost";
    $user="root";
    $password="";
    $db="login_db"
    $conn =mysqli_connect($host,$user,$password,$db);
    $insert into user values ('$firstName','$lastName','$email','$password','$gender')
    
    mysqli_query($conn,$insert);
    if($conn){
        echo{'<h1 style='color:green'>your registration is Done<h1>'}
    }
    else{
        echo('<h1 style='color:red'>your registration is Faild<h1>')
    }







}

