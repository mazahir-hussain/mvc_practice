<?php

include_once('baseModel.php');
//include_once('view.php');

class BaseController
{
  private $model;

  /**
   * construcrs a new BaseModel
   */
  public function __construct()
  {
    $this->model = new BaseModel;
  }

  /**
   * decides which page to visit based on input
   * @return either list of people or specific person based on input
   */
  public function showHome()
  {
    if(!isset($_GET['people']))
    {
        $arr=$this->model->getList();
        include 'view_home.php';
    } else
    {
      $val = $this->model->getPerson($_GET['people']);
      include 'view2.php';
    }
  }
}
