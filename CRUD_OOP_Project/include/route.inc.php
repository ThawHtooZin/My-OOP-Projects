<?php
if(isset($_POST['btn'])){
  include '../classes\controller.class.php';
}else{
  include 'classes\controller.class.php';
}
if(!empty($_POST['username'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
  $email = $_POST['email'];
  $crud = $_POST['crud'];
}else{
  $crud = "";
  $username = "";
  $password = "";
  $email = "";
}
$queries = new queries($username, $password, $email);
if($crud == 'add'){
  $queries->addUsers();
}
if($crud == 'update'){
  $id = $_GET['id'];
  $queries->updateUser($id);
}
if(!empty($_GET['delid'])){
  $id = $_GET['delid'];
  $queries->deleteUser($id);
}
