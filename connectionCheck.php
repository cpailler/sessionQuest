<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 16/04/18
 * Time: 17:36
 */
session_start();
if (!isset($_SESSION['username'])||$_SESSION['username']==""){
    header('Location: /login.php');
}