<?php
  class Upload
  {
    function __construct()
    {

    }

    public function file($file,$path,$jumpdir = '')
    {
      $name = date('Ymdhms');
      $target_dir = $path;
      // $target_file = $target_dir . basename($file["avatar"]["name"]);

      $path = $_FILES['avatar']['name'];
      $ext = pathinfo($path, PATHINFO_EXTENSION);
      $target_file = $target_dir.$name.'.'.$ext;
      $uploadOk = 1;
      if (file_exists($target_file)) {
          echo "Sorry, file already exists.";
          $uploadOk = 0;
      }
      if (move_uploaded_file($file["avatar"]["tmp_name"], $jumpdir.$target_file)) {
        return $target_file;
      } else {
        return false;
      }
    }
  }


 ?>
