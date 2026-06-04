<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program 7 | 04/06/2026</title>
</head>

<body>
    <main>
        <?php
            echo "<p><b>Using include:</b></p>";
            include 'header.php';
            echo "<p>This line will still execute even if header.php is missing.</p>";

            echo "<hr><p><b>Using require:</b></p>";
            require 'footer.php';
            echo "<p>This line will NOT execute if footer.php is missing.</p>";
        ?>
    </main>

</body>
</html>