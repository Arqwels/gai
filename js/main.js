// Авторизация

$('.login__btn').click(function (event) {
  event.preventDefault();

  $('input').removeClass('error__field');

  let login = $('#login').val(),
      password = $('#password').val();

  $.ajax({
    url: './core/login.php',
    type: 'POST',
    dataType: 'json',
    data: {
      login: login,
      password: password
    },
    success (data) {
      if (data.status) {
        document.location.href = './profile_page.php';
      } else {

        if (data.type === 1) {
          data.fields.forEach((field) => {
            $(`#${field}`).addClass('error__field');
          })
        }

        $('.error__form').removeClass('none').text(data.message);
      }
    }
  })
});



// Регистрация

$('.register__btn').click(function (event) {
  event.preventDefault();

  $('input').removeClass('error__field');

  let login = $('#login').val(),
      password = $('#password').val(),
      fullName = $('#fullName').val(),
      phone = $('#phone').val(),
      email = $('#email').val();

  $.ajax({
    url: './core/register.php',
    type: 'POST',
    dataType: 'json',
    data: {
      login: login,
      password: password,
      fullName: fullName,
      phone: phone,
      email: email
    },
    success (data) {
      if (data.status) {
        document.location.href = './login_page.php';
      } else {

        if (data.type === 1) {
          data.fields.forEach((field) => {
            $(`#${field}`).addClass('error__field');
          })
        }

        $('.error__form').removeClass('none').text(data.message);
      }
    }
  })
});