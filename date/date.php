<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }
        table,
        td {
            border: 1px solid;
            border-collapse: collapse;
            text-align: center;
        }
        td{
            width: 30px;
        }
        .table{
            width: 250px;
            height: 200px;
        }

        .weekend {
            background-color: lightcoral;
        }
        .container{
            display: flex;
            flex-wrap: wrap;
        }
    </style>
</head>

<body>
    <div class="container">
    <?php
    for ($i = 1; $i <= 12; $i++) {
        $day = strtotime(date("Y-$i-1"));
        $monthdays = date("t", $day);
        $first = date("N", $day);
        if ($first == 7) {
            $first = 0;
        }
        $week = ($first + $monthdays) / 7;
        $tmp = 1;
        echo "<div class=\"table\">";
        echo "$i 月";
        echo "<table>";
        echo "<tr><td class=\"weekend\">日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td class=\"weekend\">六</td></tr>";
        for ($j = 0; $j < $week; $j++) {
            echo "<tr>";
            for ($k = 0; $k < 7; $k++) {
                if ($j == 0 && $k < $first) {
                    if ($k == 0 || $k == 6) {
                        echo "<td class=\"weekend\"></td>";
                    } else {
                        echo "<td></td>";
                    }
                } else if ($tmp <= $monthdays) {
                    if ($k == 0 || $k == 6) {
                        echo "<td class=\"weekend\">$tmp</td>";
                        $tmp++;
                    } else {
                        echo "<td>$tmp</td>";
                        $tmp++;
                    }
                } else {
                    if ($k == 0 || $k == 6) {
                        echo "<td class=\"weekend\"></td>";
                    } else {
                        echo "<td></td>";
                    }
                }
            }
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    }
    ?>
    </div>

</body>

</html>