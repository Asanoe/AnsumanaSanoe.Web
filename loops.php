<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Course Work | Loop Logic</title>
    <style>
        /*Deep Green & Cream */
        body { 
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; 
            background-color: #f9f7f2; 
            color: #333; 
            margin: 0; 
        }
        header { 
            background-color: #2d5a27; 
            color: white; 
            padding: 30px; 
            text-align: center; 
            border-bottom: 3px solid #d4af37;
        }
        nav a { color: white; text-decoration: none; margin: 0 15px; font-weight: bold; }
        nav a:hover { color: #d4af37; }
        
        .container { 
            max-width: 850px; 
            margin: 30px auto; 
            background: white; 
            padding: 40px; 
            border-radius: 12px; 
            box-shadow: 0 5px 20px rgba(0,0,0,0.05); 
        }
        h2 { color: #2d5a27; border-left: 5px solid #d4af37; padding-left: 15px; margin-top: 30px; }
        
        .result-box { 
            background: #fdfdfd; 
            padding: 20px; 
            margin: 15px 0; 
            border: 1px solid #eee;
            font-family: 'Courier New', Courier, monospace;
            font-size: 1.1rem;
            word-wrap: break-word;
            color: #444;
        }
        footer { text-align: center; padding: 20px; color: #777; font-size: 0.9rem; }
    </style>
</head>
<body>

<header>
    <nav>
        <a href="index.html">Home</a>
        <a href="PHPLoops.html">Course Work</a>
    </nav>
    <h1>BIS 31/23: Programming Logic</h1>
</header>

<div class="container">
    <p><em>The following results are generated dynamically using loop structures.</em></p>

    <h2>1) Numbers 1 to 18 (For Loop)</h2>
    <div class="result-box" id="loop1"></div>

    <h2>2) Numbers 1 to 27 (While Loop)</h2>
    <div class="result-box" id="loop2"></div>

    <h2>3) Numbers 1 to 15 (Do-While Loop)</h2>
    <div class="result-box" id="loop3"></div>

    <h2>4) Sum of Odd Numbers (2 to 21)</h2>
    <div class="result-box" id="loop4"></div>

    <h2>5) Product of Even Numbers (3 to 17)</h2>
    <div class="result-box" id="loop5"></div>
</div>

<footer>
    &copy; 2026 Islamic Men's Apparel & Accessories
</footer>

<script>
    // 1) For Loop: 1 to 18
    let res1 = "";
    for (let i = 1; i <= 18; i++) {
        res1 += i + " ";
    }
    document.getElementById('loop1').innerHTML = res1;

    // 2) While Loop: 1 to 27
    let res2 = "";
    let j = 1;
    while (j <= 27) {
        res2 += j + " ";
        j++;
    }
    document.getElementById('loop2').innerHTML = res2;

    // 3) Do-While Loop: 1 to 15
    let res3 = "";
    let k = 1;
    do {
        res3 += k + " ";
        k++;
    } while (k <= 15);
    document.getElementById('loop3').innerHTML = res3;

    // 4) Sum of Odd Numbers (2 to 21)
    let sumOdd = 0;
    for (let l = 2; l <= 21; l++) {
        if (l % 2 !== 0) {
            sumOdd += l;
        }
    }
    document.getElementById('loop4').innerHTML = "The total sum is: <strong>" + sumOdd + "</strong>";

    // 5) Product of Even Numbers (3 to 17)
    let productEven = 1;
    for (let m = 3; m <= 17; m++) {
        if (m % 2 === 0) {
            productEven *= m;
        }
    }
    document.getElementById('loop5').innerHTML = "The total product is: <strong>" + productEven + "</strong>";
</script>

</body>
</html>
