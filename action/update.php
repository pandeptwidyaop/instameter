<?php
require(dirname(__FILE__).'/../autoload.php');
session_start();
$p = $_POST;
$f = $_FILES;
$db = new Database;
$up = new Upload;
$string = "name = '".$p['name']."', email = '".$p['email']."', phone = '".$p['phone']."', address = '".$p['address']."'";
if (!empty($p['password'])) {
  $string .= ", password = '".$p['password']."'";
}
if (!empty($f)) {
  echo "ada file";
  $name = $up->file($f,'upload/','../');
  if ( $name != false) {
    echo "upload berhasil";
    $string .= ", avatar = '".$name."'";
  }
}
$db->query("UPDATE users SET ".$string." WHERE id = '".$_SESSION['user_id']."'",false);
header('location:../index.php');
