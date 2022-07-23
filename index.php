<title>Ваш IP</title>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
<?php
session_start();
require('connect.php');
if(isset($_POST['username']) and isset($_POST['password'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $query = "SELECT * FROM `users` WHERE username='$username' AND password='$password'";
  $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
  $count = mysqli_num_rows($result);
  if($count == 1) {
    $_SESSION['username'] = $username;
  } else {
    unset($_SESSION['username']);
    $failure = "Что-то пошло не так";
    echo "<center><div style=\"max-width:700px;padding:15px;\"><div class=\"alert alert-danger\" role=\"alert\">" . $failure . "</div></div></center>";
  }
}
if(isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    echo "Здравствуйте, " . $username . "! <a href=\"logout.php\" class=\"btn btn-primary\">Выйти</a>";
} else {
  unset($username);
}
echo "<br>Ваш IP-адрес: ";
if(isset($username)) {
  echo $_SERVER['REMOTE_ADDR'];
} else {
  echo "<b>Вы не авторизованы!</b>";
  echo "<div style=\"position:absolute;top:5px;right:5px;\"><a class=\"btn btn-lg btn-primary\" href=\"login.php\">Авторизация</a></div>";
  echo "<div style=\"position:absolute;top:5px;right:163px;\"><a class=\"btn btn-lg btn-primary\" href=\"register.php\">Регистрация</a></div>";
}
?>