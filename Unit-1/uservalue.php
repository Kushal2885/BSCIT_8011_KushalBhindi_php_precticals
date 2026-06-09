<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Value | 09/06/2026</title>
</head>
<body>
    <?php
        error_reporting(0);
        include 'header.php';
    ?>

    <form method="get">
        <input type="text" name="uname">
        <input type="submit" value="Submit">
    </form>

    <?php
        $name = $_GET['uname'];
        echo "Hello, $name!";
        require 'footer.php';
    ?>
</body>
</html>