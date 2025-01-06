<!DOCTYPE html>
<html lang="ru">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Авторизация</title>
  </head>
  <body>
    <div class="container">
        <form action="index.php" class="form-signin" method="POST">
            <h2>Авторизация</h2>
            Имя пользователя: <input type="text" name="username" class="form-control" placeholder="NaGiBaToR_333" required>
            Пароль: <input type="password" name="password" class="form-control" placeholder="333NaGiBaToR333" required>
            <input type="hidden" name="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>">
            <button class="btn btn-lg btn-primary btn-block" type="submit">Авторизоваться</button>
            <a href="register.php" class="btn btn-lg btn-primary btn-block">Регистрация</a>
        </form>
    </div>
  </body>
</html>
