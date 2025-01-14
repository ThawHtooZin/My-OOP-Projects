<?php
  include 'include/route.inc.php';
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <div class="card">
        <div class="card-header">
          <div class="row">
            <div class="col-11">
              <h1>User Edition Page</h1>
            </div>
            <div class="col-1">
              <a href="index.php" class="btn btn-danger btn-lg">Back</a>
            </div>
          </div>
        </div>
        <div class="card-body">
          <?php
          $id = $_GET['id'];
          $datas = $queries->showupdatedata($id);
          foreach ($datas as $data) {
            $username = $data['username'];
            $password = $data['password'];
            $email = $data['email'];
          }
          ?>
          <form action="include/route.inc.php?id=<?php echo $_GET['id']; ?>" method="post">
            <label>Username</label>
            <input type="text" name="username" class="form-control" placeholder="Username" value="<?php echo $username; ?>">
            <p class="text-danger"></p>
            <label>Passowrd</label>
            <input type="password" name="password" class="form-control" placeholder="Password" value="<?php echo $password; ?>">
            <p class="text-danger"></p>
            <label>Email</label>
            <input type="email" name="email" class="form-control" placeholder="Email" value="<?php echo $email; ?>">
            <input type="hidden" name="crud" value="update">
            <p class="text-danger"></p>
            <br>
            <button type="submit" class="btn btn-success" name="btn">Update</button>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
