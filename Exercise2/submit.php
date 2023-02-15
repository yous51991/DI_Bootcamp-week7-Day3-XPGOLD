<?php
  session_start();

  if (isset($_POST['name'])) {
        $_SESSION['name'] = $_POST['name'];
        echo 'Welcome, ' . $_SESSION['name'] . '!';
  } else {
        echo 'Sorry, we do not recognize you. Please <a href="login.html">login</a> again.';
  }
?>