<?php
class department {
  public $id;
  public $name;
  public $adress;
  public $phone;
  public $email;
  public $website;
  public $head_of_department;

  function __construct($_id, $_name) {
    $this->id = $_id;
    $this->name = $_name;
  }

  function getContactData($_adress, $_phone, $_email, $_website) {
    $this->adress = $_adress;
    $this->phone = $_phone;
    $this->email = $_email;
    $this->website = $_website;
  }
}
?>