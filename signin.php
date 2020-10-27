<?php
if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $pwd = $_POST["password"];

    $status = TRUE;

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Invalid email" . PHP_EOL;
        $status = FALSE;
    }
    // if ($status == TRUE) {
    //     $hash = password_hash($pwd, PASSWORD_BCRYPT);

?>

<html>

  <form class=""method="post">
    <p>Email: <input type="text" name="email"/></p>
    <p>Password: <input type="password" name="password"/></p>
    <p>submit: <input type="submit" name="submit"/></p>
  </form>
</html>
