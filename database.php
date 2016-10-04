<?php

/**
 * this class is used to make the database
 */
class DataBase
{
  private static $instance;
  private $connection;


  private function __construct()
  {
    $pdo_options[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION;
    $this->connection = new PDO("mysql:host=localhost;dbname=myDB","root",123);
  }

/**
 * singleton approach for getting instance of database
 * @return [type] signle instance of DB
 */
  public static function getInstance()
  {
    if (!isset(self::$instance))
    {

      self::$instance = new DataBase();
    }
    return self::$instance;
  }

  public function getConnection()
  {
    return $this->connection;
  }

}
