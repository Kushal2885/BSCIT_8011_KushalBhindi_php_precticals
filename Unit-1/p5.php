<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 5 | 04/06/2026</title>
</head>
<body>
    <?php
    echo "Using for loop:<br>";
        for ($i = 5; $i <= 10; $i++) 
    echo $i . "<br>";

    echo "Using foreach loop:<br>";    
    $numbers = range(5, 10); 
        foreach ($numbers as $num) {
    echo $num . "<br>";
}
?>
</body>
</html>