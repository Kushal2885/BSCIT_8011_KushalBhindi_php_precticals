<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 6 | 04/06/2026</title>
</head>
<body>
    <?php
    echo "Using while loop:<br>";
        $start = 15;
        while ($start <= 20) {
        echo $start . "<br>";
    $start++;
}


    echo "<br>Using do...while loop:<br>";
        $start = 15;
    do {
        echo $start . "<br>";
        $start++;
    } while ($start <= 20);
    ?>
</body>
</html>