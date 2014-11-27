<?php
session_start();
$index = $_SESSION['edit_index'];
if(strtolower($_SERVER['REQUEST_METHOD'])== 'post') {
    $full_name = "";
    $fathers_name = "";
    if (array_key_exists('full_name', $_POST) && !empty($_POST['full_name'])) {
        $full_name = $_POST['full_name'];
    }
    if (array_key_exists('fathers_name', $_POST)) {
        $fathers_name = $_POST['fathers_name'];
    }

    if (!array_key_exists('newproduct', $_SESSION)) {
        $_SESSION['newproduct'] = array();
    }

    $_SESSION['newproduct'][0]['full_name']= $full_name;
    $_SESSION['newproduct'][0]['fathers_name']= $fathers_name;
    $_SESSION['names'][$index]= array_replace($_SESSION['oldproduct'][0],$_SESSION['newproduct'][0]);
    print_r($_SESSION['names']);
}

header('location:http://localhost/laravel/session/list.php');
?>







