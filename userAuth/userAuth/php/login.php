<?php
session_start();  
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $password = $_POST['password'];

loginUser($email, $password);

}

function loginUser($email, $password){
    $filename = '../storage/users.csv';
    $openFile = fopen($filename, 'r');
    $data = fgetcsv($openFile);

    fclose($openFile);
    $user_name = $data[0];
    $user_email = $data[1];
    $user_password = $data[2];
    

    if($email === $user_email && $password === $user_password){
        $_SESSION['username'] = $user_name;
        header('location: ../dashboard.php');
        exit;

    }else{
        header('location:../forms/login.html');
        exit;
        
    }
}

echo "HANDLE THIS PAGE";

