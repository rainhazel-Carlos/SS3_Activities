<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>State Income Tax Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #4facfe, #00f2fe);
            height: 100vh;
            margin: 0;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .container {
            background: #ffffff;
            padding: 30px;
            width: 400px;
            border-radius: 12px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            text-align: center;
        }

        h2 {
            margin-bottom: 15px;
            color: #333;
        }

        p {
            color: #555;
            font-size: 14px;
        }

        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin: 12px 0;
            border-radius: 6px;
            border: 1px solid #ccc;
            font-size: 16px;
        }

        input[type="submit"] {
            background-color: #4facfe;
            color: white;
            border: none;
            padding: 12px;
            width: 100%;
            border-radius: 6px;
            font-size: 16px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #00c6ff;
        }

        .result {
            margin-top: 20px;
            text-align: left;
            font-size: 15px;
            color: #333;
        }

        .result strong {
            color: #000;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>State Income Tax Calculator</h2>
    <p>26 working days per month<br>8 hours per day</p>

    <form method="post">
        <label>Hourly Rate ($):</label>
        <input type="number" name="hourlyRate" step="0.01" required>

        <input type="submit" name="calculate" value="Calculate Income">
    </form>

    <?php
    if (isset($_POST['calculate'])) {

        $hourlyRate = $_POST['hourlyRate'];

        // Work assumptions
        $hoursPerDay = 8;
        $workingDays = 26;

        // Gross monthly income
        $netIncome = $hourlyRate * $hoursPerDay * $workingDays;

        // Tax calculation using multi-way if-else
        if ($netIncome <= 15000) {
            $tax = 0;
        }
        else if ($netIncome <= 30000) {
            $tax = ($netIncome - 15000) * 0.05;
        }
        else {
            $tax = (15000 * 0.05) + (($netIncome - 30000) * 0.10);
        }

        $incomeAfterTax = $netIncome - $tax;

        echo "<div class='result'>";
        echo "<p><strong>Monthly Net Income:</strong> $" . number_format($netIncome, 2) . "</p>";
        echo "<p><strong>State Tax:</strong> $" . number_format($tax, 2) . "</p>";
        echo "<p><strong>Income After Tax:</strong> $" . number_format($incomeAfterTax, 2) . "</p>";
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
