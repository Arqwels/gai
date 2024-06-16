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
  <link rel="stylesheet" href="./css/profile.css">
  <title>Профиль</title>
</head>
<body>
<main class="wrapper">
  <div class="container">
    <header>
      <h3>Arqwels</h3>
      <a href="./core/logout.php" class="logout">Выйти</a>
    </header>

    <div class="statement">
      <h3>Ваши заявления</h3>
      <table>
        <thead>
          <tr>
            <th>Гос номер</th>
            <th>Описание</th>
            <th>Статус</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>А123ВС</td>
            <td>Описание заявления 1</td>
            <td>В процессе</td>
          </tr>
          <tr>
            <td>Б456ДЕ</td>
            <td>Описание заявления 2</td>
            <td>Завершено</td>
          </tr>
          <tr>
            <td>В789ЖЗ</td>
            <td>Описание заявления 3</td>
            <td>Отклонено</td>
          </tr>
        </tbody>
      </table>
    </div>

    <a href="./newStatement_page.php" class="newStatement">Новое заявление</a>
  </div>
</main>


</body>
</html>