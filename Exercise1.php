<?php
  session_start();

  $msg = '';
  if(isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    if($username == 'admin' && $password == 'password') {
        $_SESSION['username'] = $username;
        $msg = 'valid username ';
    } else {
        $msg = 'Invalid username or password';
    }
  }
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Form</title>
    </head>
    <body>
        <form action="" method="post">
            <h2><?php echo $msg; ?></h2>
            <input type="text" name="username" placeholder="username" required />
            <input type="password" name="password" placeholder="password" required />
            <button type="submit" name="login">Login</button>
        </form>
  </body>
</html>


