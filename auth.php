<?php

$loginCredentials =[
    [
        "username"=>"admin",
        "password"=>"1234",
        "role"=>"admin"
    ],
    [
        "username"=>"user",
        "password"=>"4321",
        "role"=>"admin"
    ]

    ];

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $username=$_POST["username"];
    $password=$_POST["password"];

foreach ($loginCredentials as $loginCredential)
if  ($loginCredential["username"] == $username)
    {
           if($loginCredential["password"] == $password)
           {
                echo "Authenticated";
                header("location:home.php");
                break;
           }
           else{
                echo  "Invalid Password";
                header("location:index.php");
                break;
           }
        }
else
{
    
}
echo  "Invalid username";


}

?>