<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Work | PHP Loop Logic</title>
    <style>
        body { font-family: 'Segoe UI', sans-serif; background-color: #f9f7f2; color: #333; margin: 0; }
        header { background-color: #2d5a27; color: white; padding: 30px; text-align: center; border-bottom: 3px solid #d4af37; }
        .container { max-width: 850px; margin: 30px auto; background: white; padding: 40px; border-radius: 12px; box-shadow: 0 5px 20px rgba(0,0,0,0.05); }
        h2 { color: #2d5a27; border-left: 5px solid #d4af37; padding-left: 15px; margin-top: 30px; }
        .result-box { background: #fdfdfd; padding: 20px; margin: 15px 0; border: 1px solid #eee; font-family: 'Courier New', monospace; font-size: 1.1rem; color: #444; }
    </style>
</head>
<body>

<header>
    <h1>PHP Loop Problems</h1>
</header>

<div class="container">

    <h2>1) Numbers 1 to 18 (For Loop)</h2>
    <div class="result-box">
        <?php
        for ($i = 1; $i <= 18; $i++) {
            echo $i . " ";
        }
        ?>
    </div>

    <h2>2) Numbers 1 to 27 (While Loop)</h2>
    <div class="result-box">
        <?php
        $j = 1;
        while ($j <= 27) {
            echo $j . " ";
            $j++;
        }
        ?>
    </div>

    <h2>3) Numbers 1 to 15 (Do-While Loop)</h2>
    <div class="result-box">
        <?php
        $k = 1;
        do {
            echo $k . " ";
            $k++;
        } while ($k <= 15);
        ?>
    </div>

    <h2>4) Odd numbers from 2 to 21 (Sum)</h2>
    <div class="result-box">
        <?php
        $sum = 0;
        $odds = [];
        for ($l = 2; $l <= 21; $l++) {
            if ($l % 2 !== 0) {
                $odds[] = $l;
                $sum += $l;
            }
        }
        echo implode(" + ", $odds) . "<br>";
        echo "<strong>Sum: " . $sum . "</strong>";
        ?>
    </div>

    <h2>5) Even numbers from 3 to 17 (Product)</h2>
    <div class="result-box">
        <?php
        $product = 1;
        $evens = [];
        for ($m = 3; $m <= 17; $m++) {
            if ($m % 2 === 0) {
                $evens[] = $m;
                $product *= $m;
            }
        }
        echo implode(" × ", $evens) . "<br>";
        echo "<strong>Product: " . $product . "</strong>";
        ?>
    </div>

</div>

</body>
</html>
