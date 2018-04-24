<?php
require(dirname(__FILE__).'/../autoload.php');
session_start();
$p = $_POST;
$db = new Database;
$db->query("INSERT INTO users(name,email,phone,address,username,password,avatar) VALUES('".$p['name']."','".$p['email']."','".$p['phone']."','".$p['address']."','".$p['username']."','".$p['password']."','img/user.png')",false);
header('location:../login.php?success=true');
