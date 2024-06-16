<?php
  session_start();

  if (!isset($_SESSION['user'])) {
    header('Location: login_page.php');
  }
?>

<!DOCTYPE html>
<html lang="RU">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Профиль</title>
</head>
<body>
  <h2>Ты авторизовался</h2>

  <a href="./core/logout.php">Выход</a>
</body>
</html>