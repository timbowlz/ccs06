<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        // URL: http://localhost/calculator.php?a=100&b=50
        // 1. Get inputs from URL or default to 12 and 5
        $a = isset($_GET["a"]) ? (float) $_GET["a"] : 12;
        $b = isset($_GET["b"]) ? (float) $_GET["b"] : 5;

        echo "a = $a, b = $b <br> ";
        echo "Sum: " . ($a + $b) . "<br>";
        echo "Diff: " . ($a - $b) . "<br>";
        echo "Prod: " . ($a * $b) . "<br>";

        // Check for division by zero
        echo "Quot: " . ($b != 0 ? $a / $b : "Infinity") . "<br>";

        //Comparison Logical
        echo "a > b: " . (($a > $b) ? "true" : "false") . "<br>";
        echo "Both even? " . ((($a % 2 == 0) && ($b % 2 == 0)) ? "true" : "false") . "<br>";
    ?>
</body>

</html>