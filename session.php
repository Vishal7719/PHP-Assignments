<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>

<body>
    <?php
    session_start();
    $_SESSION['name'] = "Vishal Chaudhari";
    $_SESSION['email'] = "vishalchaudhari33@gmail.com";
    if (isset($_SESSION['name'])) {
        echo $_SESSION['name'] . "<br>";
        echo $_SESSION['email'] . "<br>";
    } else {
        echo "session destroyed" . "<br>";
    }
    session_unset();
    session_destroy();
    if (isset($_SESSION['name'])) {
        echo $_SESSION['name'] . "<br>";
        echo $_SESSION['email'] . "<br>";
    } else {
        echo "session destroyed !!!" . "<br>";
    }
    ?>

</body>

</html>