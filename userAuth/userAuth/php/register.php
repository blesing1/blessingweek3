<?php
if(isset($_POST['submit'])){
    $username = $_POST['fullname'];
    $email = $_POST['email'];
    $password = $_POST['password'];

registerUser($username, $email, $password);

}

function registerUser($username, $email, $password){
    $filename = '../storage/users.csv';
    $openFile = fopen($filename ,'w');
    fputcsv[$openFile , array  [$username, $email, $password]];
    fclose($openFile);

    // echo "OKAY";
    $openFile = fopen[$filename , 'r'];
    $data = fgetcsv($openFile);
    fclose($openFile);
    if($data){
        echo"<h1>User successfully registered</h1> . "<a href = \"../forms/login.html\">Login Here</a>";
    }else{
        echo 'user not registered';
    }
}



