<?php
include('index.html');

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['url'])){
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }
    if(strlen($_POST['password']) < 10){
        die("password length must be 10 characters at least");
    }
    if (!filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
        die($_POST['url']." is not a valid URL");
    }
    echo "Success";
}else{
    echo "please fill all inputs";
}
