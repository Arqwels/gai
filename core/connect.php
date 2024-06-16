<?php

  $conn = mysqli_connect('localhost', 'root', '', 'gai');

  if (!$conn) {
    die('Error connect to DataBase');
  }