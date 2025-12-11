<!DOCTYPE html>
<html>
<head>
    <title>Public Library Expansion Project</title>
    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;
            background: #f09e40ff;
            padding: 20px;
        }

        h2, h3 {
            text-align: center;
        }

        table {
            width: 80%;
            margin: auto;
            border-collapse: collapse;
            background: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }

        th {
            background: #3568d4;
            color: white;
            padding: 12px;
            font-size: 16px;
        }

        td {
            padding: 10px;
            border-bottom: 1px solid #ccc;
            text-align: center;
        }

        tfoot td {
            font-weight: bold;
            background: #e6ecff;
        }

        .footer {
             margin-top: 20px;
            font-size: 15px;
            text-align: right;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }
    </style>
</head>
<body>

<h2>Public Library Expansion Project</h2>
<h3>Cost Estimates</h3>

<?php

$items = [
    ["Lumber", 150000],
    ["Concrete", 78000],
    ["Drywall", 69000],
    ["Paint", 12000],
    ["Miscellaneous", 20000],
];

// Totals
$totalCost = 0;
$total10 = 0;
$total15 = 0;
$total20 = 0;

echo "<table>";
echo "<tr>
        <th>Expenditures</th>
        <th>Estimated Cost</th>
        <th>10% Increase</th>
        <th>15% Increase</th>
        <th>20% Increase</th>
      </tr>";

foreach ($items as $row) {

    $name = $row[0];
    $cost = $row[1];

    // Increase computations
    $inc10 = $cost * 1.10;
    $inc15 = $cost * 1.15;
    $inc20 = $cost * 1.20;

    // Totals
    $totalCost += $cost;
    $total10 += $inc10;
    $total15 += $inc15;
    $total20 += $inc20;

    echo "<tr>";
    echo "<td>$name</td>";
    echo "<td>$ " . number_format($cost, 2) . "</td>";
    echo "<td>$ " . number_format($inc10, 2) . "</td>";
    echo "<td>$ " . number_format($inc15, 2) . "</td>";
    echo "<td>$ " . number_format($inc20, 2) . "</td>";
    echo "</tr>";
}

echo "<tfoot>
        <tr>
            <td>Total Expenditures:</td>
            <td>$ " . number_format($totalCost, 2) . "</td>
            <td>$ " . number_format($total10, 2) . "</td>
            <td>$ " . number_format($total15, 2) . "</td>
            <td>$ " . number_format($total20, 2) . "</td>
        </tr>
      </tfoot>";

echo "</table>";
?>

<div class="footer">
    Created by: <strong>Rain Hazel A. Carlos</strong>
</div>

</body>
</html>
