<?php


class Database
{
  public $connection;

  public function __construct()
  {
    require(dirname(__FILE__).'/../config/database.php');
    $this->connection = mysqli_connect($database['host'],$database['user'],$database['password'],$database['name']);
  }

  public function query($query,$isReturn = true)
  {
    $data = [];
    $query = mysqli_query($this->connection, $query);
    if ($isReturn) {
      while ($row = mysqli_fetch_object($query)) {
        $data[] = $row;
      }
    }
    return $data;
  }

}
