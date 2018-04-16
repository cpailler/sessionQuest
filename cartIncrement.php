<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 16/04/18
 * Time: 21:57
 */
session_start();
if ($_GET['add_to_cart']==46){
    $_SESSION['items']['item46']['num']+=1;
}
if ($_GET['add_to_cart']==36){
    $_SESSION['items']['item36']['num']+=1;
}
if ($_GET['add_to_cart']==58){
    $_SESSION['items']['item58']['num']+=1;
}
if ($_GET['add_to_cart']==32){
    $_SESSION['items']['item32']['num']+=1;
}
 header('Location: /index.php');