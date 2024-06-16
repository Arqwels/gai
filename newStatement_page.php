<!DOCTYPE html>
<html lang="RU">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./css/newStatement.css">
  <title>Новое заявление</title>
</head>
<body>
  <main class="wrapper">

    <div class="container">
      <button class="button" id="backButton">Назад</button>

      <form class="form" action="#">
        <label class="form__label" for="gosnomer">Гос номер:</label>
        <input class="form__input" type="text" id="gosnomer">

        <label class="form__label" for="description">Описание</label>
        <textarea class="form__textarea" id="description"></textarea>

        <button class="form__button">Отправить</button>
      </form>

    </div>

  </main>

  <script>
    document.getElementById('backButton').addEventListener('click', function() {
      window.history.back();
    });
  </script>
</body>
</html>