<!DOCTYPE html>
<html>
<head>
    <title>Prime Classification</title>

    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #222222;
        }

        .container {
            width: 420px;
            margin: 40px auto;
            background: #CDB885 ;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        h2 {
            text-align: center;
            color: #333;
        }

        .prime {
            color: green;
            font-weight: bold;
        }

        .not-prime {
            color: red;
        }

        .summary {
            margin-top: 20px;
            padding-top: 10px;
            border-top: 1px solid #ccc;
            font-weight: bold;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Prime Classification (1–20)</h2>

    <?php
    $primeCount = 0;
    $nonPrimeCount = 0;

    for ($num = 1; $num <= 20; $num++) {
        $factorCount = 0;

        for ($i = 1; $i <= $num; $i++) {
            if ($num % $i == 0) {
                $factorCount++;
            }
        }

        if ($factorCount == 2) {
            echo "<div class='prime'>$num - Prime</div>";
            $primeCount++;
        } else {
            echo "<div class='not-prime'>$num - Not Prime ($factorCount factors)</div>";
            $nonPrimeCount++;
        }
    }
    ?>

    <div class="summary">
        Total Prime Numbers: <?php echo $primeCount; ?><br>
        Total Non-Prime Numbers: <?php echo $nonPrimeCount; ?>
    </div>
</div>

</body>
</html>
