<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 16/04/18
 * Time: 17:16
 */
session_start();
if (!$_POST['loginname']==""){
    $_SESSION['username']=$_POST['loginname'];
    header('Location: /index.php');
}else{
    header('Location: /login.php');
}