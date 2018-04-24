<?php

class Authentication
{

  function __construct()
  {
    session_start();
    if (!isset($_SESSION['username']) && !isset($_SESSION['user_id'])) {
      if (basename($_SERVER['PHP_SELF']) != 'login.php') {
        header('location:login.php');
      }
    }
  }

  public function check($post)
  {
    $db = new Database;
    if (count($post) > 0) {
      $data = $db->query("SELECT * FROM users WHERE username ='".$post['username']."' AND password = '".$post['password']."'");
      if (count($data) == 1) {
        $_SESSION['username']= $data[0]->username;
        $_SESSION['user_id']= $data[0]->id;
        header('location:index.php');
      }
    }
  }

  public function logout()
  {
    session_destroy();
    header('location:login.php');
  }
}
