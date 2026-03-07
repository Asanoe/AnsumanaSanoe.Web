<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>PHP Loop Assignment</title>
<link rel="stylesheet" href="styles.css">
</head>

<body>

<header>
<h1>PHP Loop Assignment</h1>
</header>

<div class="container">

<h2>1. For Loop (Numbers 1–18)</h2>
<?php
for ($i = 1; $i <= 18; $i++) {
    echo $i . " ";
}
?>

<h2>2. While Loop (Numbers 1–27)</h2>
<?php
$x = 1;
while ($x <= 27) {
    echo $x . " ";
    $x++;
}
?>

<h2>3. Do-While Loop (Numbers 1–15)</h2>
<?php
$y = 1;
do {
    echo $y . " ";
    $y++;
} while ($y <= 15);
?>

<h2>4. Sum of Odd Numbers from 2 to 21</h2>
<?php
$sum = 0;

for ($i = 2; $i <= 21; $i++) {
    if ($i % 2 != 0) {
        $sum += $i;
    }
}

echo "Sum = " . $sum;
?>

<h2>5. Product of Even Numbers from 3 to 17</h2>
<?php
$product = 1;

for ($i = 3; $i <= 17; $i++) {
    if ($i % 2 == 0) {
        $product *= $i;
    }
}

echo "Product = " . $product;
?>

</div>

</body>
</html>
