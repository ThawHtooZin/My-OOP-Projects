<?php
include '../classes/controller.class.php';
include 'connect.php';
$crud = $_POST['crud'];
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$queries = new queries($username, $password, $email);
if($crud == 'add'){
  $queries->add();
}
