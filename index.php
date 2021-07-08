<?php
include('index.html');

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['url']) && isset($_FILES['formFile'])){
    if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
        die("Invalid email format");
    }
    if(strlen($_POST['password']) < 10){
        die("password length must be 10 characters at least");
    }
    if (!filter_var($_POST['url'], FILTER_VALIDATE_URL)) {
        die($_POST['url']." is not a valid URL");
    }
    if ($_FILES['formFile']['type']=="application/pdf" || $_FILES['formFile']['type']=="image/gif" || $_FILES['formFile']['type']=="image/jpeg") {

        if (move_uploaded_file($_FILES['formFile']['tmp_name'], "C:\\xampp\\htdocs\\untitled\\cv\\".$_FILES['formFile']['name'])) {

            echo " The file " . basename($_FILES['formFile']['name']) . "  is uploaded <br>";

        }
    }
    echo "Success";
}else{
    echo "please fill all inputs";
}
