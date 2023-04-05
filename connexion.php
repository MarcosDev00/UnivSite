<?php
session_start();
require_once('connect.php');

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];

  if ($username === "Admin" && $password === "Admin123") {
    $_SESSION['username'] = $username;
    header("Location: index.php");
    exit;
  } else {
    $error = "Nom d'utilisateur ou mot de passe incorrect";
  }

}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Page de connexion</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h2 class="text-center mt-5 mb-3">Connexion</h2>
    <div class="row justify-content-center">
      <div class="col-md-6 col-lg-4">
        <form method="POST">
          <div class="form-group">
            <label for="username">Nom d'utilisateur:</label>
            <input type="text" class="form-control" id="username" name="username">
          </div>
          <div class="form-group">
            <label for="password">Mot de passe:</label>
            <input type="password" class="form-control" id="password" name="password">
          </div>
          <button type="submit" name="submit" class="btn btn-primary btn-block">Se connecter</button>
        </form>
        <?php if(isset($error)) { ?>
        <div class="alert alert-danger mt-3" role="alert">
          <?php echo $error; ?>
        </div>
        <?php } ?>
      </div>
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</body>
</html>
