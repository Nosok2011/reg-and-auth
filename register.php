<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Регистрация</title>
  </head>
  <body>
    <?php
    require('connect.php');
    if(isset($_POST['username']) && isset($_POST['password'])) {
      $username = $_POST['username'];
      $email = $_POST['email'];
      $password = $_POST['password'];
      $ip = $_POST['ip'];
      $query = "INSERT INTO `users` (username, email, password, ip) VALUES ('$username', '$email', '$password', '$ip')";
      $result = mysqli_query($connection, $query);
      if($result) {
        $success = "Регистрация прошла успешно";
      } else {
        $failure = "Что-то пошло не так";
      }
    }
    ?>
    <div class="container">
        <form class="form-signin" method="POST">
            <h2>Регистрация</h2>
            <?php
            if(isset($success)) {
              echo "<div class=\"alert alert-success\" role=\"alert\">" . $success . "</div>";
              $register_success = 'Здравствуйте, ' . $username . '! <br>Вы успешно зарегистрировались на сайте ' . $_SERVER['SERVER_NAME'] . '.<br>Желаю хорошо провести время на моём сайте.<br>С уважением, <br>Создатель сайта ' . $_SERVER['SERVER_NAME'];
              mail($email, 'Регистрация прошла успешно', $register_success);
            }
            if(isset($failure)) {
              echo "<div class=\"alert alert-danger\" role=\"alert\">" . $failure . "</div>";
            }
            ?>
            Имя пользователя: <input type="text" name="username" class="form-control" placeholder="NaGiBaToR_333" required>
            Электронная почта: <input type="email" name="email" class="form-control" placeholder="nagibator333@example.com" required>
            Пароль: <input type="password" name="password" class="form-control" placeholder="333NaGiBaToR333" required>
            <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Зарегистрироваться</button>
            <a href="login.php" class="btn btn-lg btn-primary btn-block">Авторизация</a>
        </form>
    </div>
  </body>
</html>