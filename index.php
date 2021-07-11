<?php
include('layout.html');
include('index.html');

if(isset($_POST['email']) && isset($_POST['password'])){
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }
    if(strlen($_POST['password']) < 10){
        die("password length must be 10 characters at least");
    }
    header("Location: http://localhost/untitled/show.php");
}