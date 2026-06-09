<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 8 | 09/06/2026</title>
</head>
<body>
    <?php
        error_reporting(0);
        include 'header.php';
    ?>

    <form method="get">
    <b>Enter array values (comma-separated):</b><br>
    <input type="text" name="numbers" required>
    <input type="submit" value="Submit">
</form>

    <?php
        $nm = $_GET['numbers'];
        echo "The Array is: " . $nm;
        require 'footer.php';
    ?>
</body>
</html>
