<?php

class queries extends dbconnect
{
  public $username;
  public $password;
  public $email;

  function __construct($username, $password, $email)
  {
    $this->username = $username;
    $this->password = $password;
    $this->email = $eamil;
  }

  function add(){
      $stmt = $pdo->prepare("INSERT INTO users(username,password,email) VALUES('$this->username', '$this->password', '$this->email')");
      $stmt->execute();
      header("location:../index.php");
  }
}
