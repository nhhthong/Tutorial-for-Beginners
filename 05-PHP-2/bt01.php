<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <style>
        td{
            text-align: center;
            padding: 10px;
        }
    </style>
</head>
<body>
    <table border="1" width="80%" style="border-collapse: collapse; margin: auto">
        <?php
        for($i = 1; $i <= 10; $i++)
        {
            echo "<tr>";
            for ($j = 1; $j <= 10; $j++)
            {
                $c = ($i * $j);
                echo "<td>$j x $i = $c</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
