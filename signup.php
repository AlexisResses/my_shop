<html>
<?php
if (isset($_POST["submit"])) {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $pwd = $_POST["password"];
    $pwd_conf=$_POST["password_confirmation"];

    $status = TRUE;

    $lenName = strlen($name);
    if ($lenName < 3 || $lenName > 10) {
        echo "Invalid Name" . PHP_EOL;
        $status = FALSE;
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email" . PHP_EOL;
        $status = FALSE;
    }

    $lenPwd = strlen($pwd);
    if ($lenPwd < 3 || $lenPwd > 10) {
        echo "Invalid password" . PHP_EOL;
        $status = FALSE;
    }

    if ($pwd != $pwd_conf) {
      echo "Invalid password confirmation" . PHP_EOL;
      $status = FALSE;
    }

    // if ($status == TRUE) {
    //     $hash = password_hash($pwd, PASSWORD_BCRYPT);
?>

<form class="" method="post">
  <p>Name: <input type="text" name="name"/></p>
  <p>Email: <input type="text" name="email"/></p>
  <p>Password: <input type="password" name="password"/></p>
  <p><input type="submit" name="submit" value="ok"/></p>
</form>
</html>
