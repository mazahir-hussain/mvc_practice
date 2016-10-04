<?php

require('database.php');

class BaseModel
{

  public $data;


  public function __construct()
  {
    $this->data = DataBase::getInstance();
  }

  /**
   * generates list of people from DataBase
   * @return array of objects
   */
  public function getList()
  {
    $conn = $this->data->getConnection();
    $query = $conn->prepare("SELECT * FROM People");
    $query->execute();

    $array = array();

    while($result = $query->fetch(PDO::FETCH_ASSOC)) {
      $obj = (object)$result;
      $array[$obj->id] = $obj;
    }
      return $array;
  }


/**
 * get specific person based on id
 * @param  $id id of person
 * @return $returns object of person with input id
 */
  public function getPerson($id)
  {
    $people = $this->getList();
    return $people[$id];
  }
}
