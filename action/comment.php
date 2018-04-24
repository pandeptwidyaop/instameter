<?php
require(dirname(__FILE__).'/../autoload.php');
session_start();
$p = $_POST;
$db = new Database;
$db->query("INSERT INTO comments(post_id,user_id,comment) VALUES(".$p['post_id'].",".$_SESSION['user_id'].",'".$p['comment']."')");
header('location:../index.php');
 ?>
