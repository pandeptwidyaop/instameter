<?php
require(dirname(__FILE__).'/../autoload.php');
session_start();
$g = $_GET;
$db = new Database;
$db->query("INSERT INTO likes(post_id,user_id) VALUES(".$g['post_id'].",".$_SESSION['user_id'].")",false);
header('location:../index.php');
 ?>
