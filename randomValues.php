<?php
// Part 1: Coin Toss
$heads = 0;
$tails = 0;

for ($i = 1; $i <= 100; $i++) {
    $result = rand(0, 1);
    if ($result == 0) {
        $heads++;
    } else {
        $tails++;
    }
}

echo "Heads occurred: " . $heads . " times.<br>";
echo "Tails occurred: " . $tails . " times.<br><br>";

// Part 2: Random Ranges
echo "Range 1 to 27: " . rand(1, 27) . "<br>";
echo "Range 1 to 178: " . rand(1, 178) . "<br>";
echo "Range 1 to 600: " . rand(1, 600);
?>
