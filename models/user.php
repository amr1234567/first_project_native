<?php

include_once 'database.php';
class users extends database{

public function add($c,$name,$email,$password,$role){
        $sql="insert into user (name,email,password,role) values('".$name."','".$email."','".$password."','".$role."')";
        
        return  mysqli_query($c,$sql);
    }

public function login($conn,$email,$password){
    $sql = 'select * from  `user` WHERE email="'.$email.'"AND password ="'.$password.'"';
    return mysqli_query ($conn, $sql);
}
}