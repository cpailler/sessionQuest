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
    $_SESSION['items']['item46']['num']=0;
    $_SESSION['items']['item46']['img']="assets/img/product-46.jpg";
    $_SESSION['items']['item36']['num']=0;
    $_SESSION['items']['item36']['img']="assets/img/product-36.jpg";
    $_SESSION['items']['item58']['num']=0;
    $_SESSION['items']['item58']['img']="assets/img/product-58.jpg";
    $_SESSION['items']['item32']['num']=0;
    $_SESSION['items']['item32']['img']="assets/img/product-32.jpg";

        header('Location: /index.php');
}else{
    header('Location: /login.php');
}