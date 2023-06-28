<?php
if(isset($_POST['btn'])){
  include '../include\connect.php';
}else{
  include 'include\connect.php';
}

class queries extends dbconnect
{
  public $username;
  public $password;
  public $email;

  function __construct($username, $password, $email)
  {
    $this->username = $username;
    $this->password = $password;
    $this->email = $email;
  }

  function addUsers(){
    $sql = "INSERT INTO users(username,password,email) VALUES('$this->username', '$this->password', '$this->email')";
    $stmt = $this->connect()->query($sql);
    header("location:../index.php");
  }
  function showupdatedata($id){
    $sql1 = "SELECT * FROM users WHERE id = ?";
    $stmt = $this->connect()->prepare($sql1);
    $stmt->execute([$id]);
    $data = $stmt->fetchall();
    return $data;
  }
  function updateUser($id){
    $sql = "UPDATE users SET username='$this->username', password='$this->password', email='$this->email' WHERE id = $id";
    $stmt = $this->connect()->query($sql);
    header("location:../index.php");
  }
  function deleteUser($id){
    $sql = "DELETE FROM users WHERE id = $id";
    $stmt = $this->connect()->query($sql);
    header("location:../index.php");
  }
  function getUsers(){
    $sql = "SELECT * FROM users";
    $stmt = $this->connect()->query($sql);
    while($row = $stmt->fetch()){
      echo "<tr>";
      echo '<td>' . $row['id'] . '</td>';
      echo '<td>' . $row['username'] . '</td>';
      echo '<td>' . $row['password'] . '</td>';
      echo '<td>' . $row['email'] . '</td>';
      echo '<td><form method="post" action="include/route.inc.php?id='. $row['id'] .'"><a href="update.php?id='. $row['id'] .'" class="btn btn-warning">Update</a></form><form method="post" action="include/route.inc.php?delid='. $row['id'] .'"><button type="submit" class="btn btn-danger" name="btn">delete</button></a></form></td>';
      echo "</tr>";
    }

  }
}
