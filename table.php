<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            width: 50%;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
    </style>
</head>
<body>
    <?php
    if (isset($_POST["number"])) {
        $number = intval($_POST["number"]);
        
        echo "<h3>Multiplication Table for $number</h3>";
        echo "<table>";
        
        
        echo "<tr><th>*</th>";
        for ($col = 1; $col <= $number; $col++) {
            echo "<th>$col</th>";
        }
        echo "</tr>";
        
        
        for ($row = 1; $row <= $number; $row++) {
            echo "<tr><th>$row</th>";
            for ($col = 1; $col <= $number; $col++) {
                echo "<td>" . ($row * $col) . "</td>";
            }
            echo "</tr>";
        }
        
        echo "</table>";
    } else {
        echo "<p>No number provided. Please go back to <a href='index.html'>the form</a>.</p>";
    }
    ?>
</body>
</html>
