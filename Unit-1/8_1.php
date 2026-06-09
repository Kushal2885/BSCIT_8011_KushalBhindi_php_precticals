<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 8_1 | 09/06/2026</title>
</head>
<body>
    <?php
        error_reporting(0);
        include 'header.php';
    ?>

<form method="get">
    <input type="text" name="name" placeholder="Name" required><br>
    <input type="text" name="number" placeholder="Age" required><br>
    <input type="text" name="num" placeholder="Mo." required><br>
    <input type="email" name="email" placeholder="Email" required><br>
    <input type="text" name="feedback" placeholder="No. of Star" required><br>
    <input type="submit" value="Submit">
</form>

    <?php
        $nm0 = $_GET['name'];
        $nm1 = $_GET['number'];
        $nm2 = $_GET['num'];
        $nm3 = $_GET['email'];
        $nm4 = $_GET['Feedback'];
        echo "The Name is: " . $nm0 . "<br>";
        echo "The Age is: " . $nm1 . "<br>";
        echo "The Mobile Number is: " . $nm2 . "<br>";
        echo "The Email is: " . $nm3 . "<br>";
        echo "The Feedback is: " . $nm4 . "<br>";
        require 'footer.php';
    ?>
</body>
</html>  