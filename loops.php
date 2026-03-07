<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP Loops Assignment</title>
</head>
<body>

    <nav>
        <a href="index.php" style="padding: 10px; background-color: #f0f0f0; border: 1px solid #ccc; text-decoration: none;">Back to Course Work</a>
    </nav>

    <hr>

    <h3>1) For Loop (1 to 18)</h3>
    <?php
    for ($i = 1; $i <= 18; $i++) {
        echo $i . " ";
    }
    ?>

    <h3>2) While Loop (1 to 27)</h3>
    <?php
    $j = 1;
    while ($j <= 27) {
        echo $j . " ";
        $j++;
    }
    ?>

    <h3>3) Do-While Loop (1 to 15)</h3>
    <?php
    $k = 1;
    do {
        echo $k . " ";
        $k++;
    } while ($k <= 15);
    ?>

    <h3>4) Sum of Odd Numbers (2 to 21)</h3>
    <?php
    $sum = 0;
    for ($l = 2; $l <= 21; $l++) {
        if ($l % 2 != 0) {
            $sum += $l;
        }
    }
    echo "The sum is: " . $sum;
    ?>

    <h3>5) Product of Even Numbers (3 to 17)</h3>
    <?php
    $product = 1;
    for ($m = 3; $m <= 17; $m++) {
        if ($m % 2 == 0) {
            $product *= $m;
        }
    }
    echo "The product is: " . $product;
    ?>

</body>
</html>
