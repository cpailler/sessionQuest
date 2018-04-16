<?php
/**
 * Created by PhpStorm.
 * User: wilder
 * Date: 16/04/18
 * Time: 23:48
 */
session_start();
session_destroy();
header('Location: /login.php');