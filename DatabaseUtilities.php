<?php
class DatabaseUtilities
{
  public static function getConnection($dbName)
  {
    $host = 'localhost:3306';
    $username = 'root';
    $password = '';
   
    $connection = mysqli_connect($host,$username,$password,$dbName);

    // Check connection
    if (mysqli_connect_errno())
    {
      echo "Failed to connect to database : " . mysqli_connect_error();
    }

    return $connection;
  }
}


?>