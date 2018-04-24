<?php
require(dirname(__FILE__).'/../autoload.php');
session_start();
$p = $_POST;
$f = $_FILES;
$db = new Database;
$up = new Upload;
$name = '';
if (!empty($f)) {
  $name = $up->file($f,'upload/','../');
  if ($name != false) {
    $db->query("INSERT INTO posts(photo,caption,user_id) VALUES ('".$name."','".$p['caption']."',".$_SESSION['user_id'].")",false);
    header('location:../index.php');
  }
}else{
  echo "UPLOAD GAMBARNYA JON";
}
 ?>
