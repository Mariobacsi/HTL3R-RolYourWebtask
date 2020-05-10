<?php
use \Doctrine\DBAL\DriverManager;

function dbConnect($host, $user, $password, $database)
{
  $connParam = array(
    'dbname' => $database,
    'user' => $user,
    'password' => $password,
    'host' => $host,
    'driver' => 'pdo_mysql'
  );

  $conn = DriverManager::getConnection($connParam) or die('Connection failed: %s\n1' . $conn->error);
  return $conn;
}

function dbClose($conn){
  $conn->close();
}
