<?php
  session_start();

  if (isset($_SESSION['user'])) {
    header('Location: profile_page.php');
  }
?>

<!DOCTYPE html>
<html lang="RU">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/register.css">
  <title>Регистрация</title>
</head>
<body>

  <main class="wrapper">

    <div class="container">
      <h1>Регистрация</h1>
      <form class="register">

        <label for="login">Логин</label>
        <input type="text" id="login" placeholder="Введите свой логин" required>

        <label for="password">Пароль</label>
        <input type="password" id="password" placeholder="Введите свой пароль" required>

        <label for="fullName">ФИО</label>
        <input type="text" id="fullName" placeholder="Введите своё ФИО" required>

        <label for="phone">Телефон</label>
        <input type="tel" id="phone" placeholder="Введите свой телефон +7" required>

        <label for="email">Электронная почта</label>
        <input type="email" id="email" placeholder="Введите свою почту" required>

        <p class="error__form none"></p>

        <button type="submit" class="register__btn">Зарегистрироваться</button>
      </form>

      <p class="login">Уже зарегистрирован? <a href="login_page.php">Авторизируйся!</a></p>
    </div>

  </main>
  
  <script src="./js/jquery-3.7.1.min.js"></script>
  <script src="./js/main.js"></script>
</body>
</html>