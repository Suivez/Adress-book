<!DOCTYPE html>
<html>

<head>
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <script src="MyFrameworks/jquery-3.5.1.min.js" type="text/javascript"></script>
  <style>
    .login-main {
      display: flex;
      justify-content: center;
      align-items: center;
    }
  </style>
</head>

<body>
  <div class="login-main">
    <div class="login-form" style="right:100px; top:150px">
      <div class="card" style="width:500px">
        <div class="card-header">Panel logowania</div>
        <div class="card-body">
          <form method="POST" action="Login_Behind.php">
            <div class="p-1">
              <div>Login</div>
              <div><input name="usernametbx" required class="form-control"></div>
            </div>
            <div class="p-1">
              <div>Hasło</div>
              <div><input type="password" name="passwordtbx" required class="form-control"></div>
            </div>
            <div class="p-1">
              <div class="d-flex">
                <input type="submit" name="IDSubmit" style="width:250px" value="Zaloguj"
                  class="form-control bg-dark text-white">
                <a href="Guest.php" style="width:250px" class="form-control bg-success text-white text-center">Zaloguj się jako Gość</a>
              </div>
              <div class="text-center text-danger"><label id="wrongpasswordlbl">Błędny login lub hasło</label></div>
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
  <?php
  echo "<script>document.getElementById('wrongpasswordlbl').style.display = 'none';</script>";
  if (isset($_GET["Error"])) {
    echo "<script>document.getElementById('wrongpasswordlbl').style.display = 'block';</script>";
  }
  ?>
</body>

</html>