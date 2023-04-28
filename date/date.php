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

        h1 {
            text-align: center;
        }

        .container {
            margin: 0 auto;
            text-align: center;
            display: flex;
            flex-wrap: wrap;
            width: 80%;
            margin-top: 30px;
        }

        .container>div {
            width: calc(100% / 7);
            border: 1px solid blue;
            background-color: skyblue;
            margin-left: -1px;
            margin-top: -1px;
            height: 80px;
        }
        .container>.today{
            background-color: lightgreen;
        }
        .container>.weekend{
            background-color: lightsalmon;
        }
        .month{
            text-align: center;
            display: flex;
            justify-content: center;
            margin:0 auto;
            margin-top: 10px;
        }
        .month>a{
            width: 40px;
            margin: 0 5px;
        }
        .month>span{
            width: 40px;
            margin: 0 5px;
        }
    </style>
</head>

<body>
    <div style="height:93vh">
        <?php
        $year = (isset($_GET["year"])) ? $_GET["year"] : date("Y");
        $month = (isset($_GET["month"])) ? $_GET["month"] : date("n");
        $nextMonth = $month + 1;
        $lastMonth = $month - 1;
        $nextYear = $year;
        $lastYear = $year;
        if ($nextMonth == 13) {
            $nextYear += 1;
            $nextMonth = 1;
        }
        if ($lastMonth == 0) {
            $lastYear -= 1;
            $lastMonth = 12;
        }
        $firstday = strtotime(date("$year-$month-1"));
        $firstday = date("N", $firstday);
        if ($firstday == 7) {
            $firstday = 0;
        }
        $days = date("t");
        $week = ($firstday + $days) / 7;
        $tmp = 1;
        $months = [];
        for ($i = 0; $i < $week; $i++) {
            for ($j = 0; $j < 7; $j++) {
                if ($i == 0 && $j < $firstday || $tmp > $days) {
                    $months[] = '';
                } else {
                    $months[] = date("$year-$month-$tmp");
                    $tmp++;
                }
            }
        }
        ?>

        <h1>萬年曆</h1>
        <div style="text-align: center;">
            <a href="date.php?year=<?= $year - 1 ?>&month=<?= $month ?>"><?= $year - 1 ?>年</a>
            <span><?= $year ?>年</span>
            <a href="date.php?year=<?= $year + 1 ?>&month=<?= $month ?>"><?= $year + 1 ?>年</a>
        </div>
        <div class="month">
            <a href="date.php?year=<?= $lastYear ?>&month=<?= $lastMonth ?>"><?= $lastMonth ?>月</a>
            <span><?= $month ?>月</span>
            <a href="date.php?year=<?= $nextYear ?>&month=<?= $nextMonth ?>"><?= $nextMonth ?>月</a>
        </div>
        <div class="container">
            <div class="weekend">日</div>
            <div>一</div>
            <div>二</div>
            <div>三</div>
            <div>四</div>
            <div>五</div>
            <div class="weekend">六</div>


            <?php

            for ($i = 0; $i < count($months); $i++) {
                if (date("Y-n-d") == $months[$i]) {
                    echo "<div class=\"today\">";
                    echo date("j", strtotime($months[$i]));
                    echo "</div>";
                } else if($i%7==0||$i%7==6){
                    echo "<div class=\"weekend\">";
                    if ($months[$i] != '')
                        echo date("j", strtotime($months[$i]));
                    echo "</div>";
                }else{
                    echo "<div>";
                    if ($months[$i] != '')
                        echo date("j", strtotime($months[$i]));
                    echo "</div>";
                }
            }
            ?>
        </div>
    </div>
    <div>
        <a href="?" style="float:right">回當前月</a>
    </div>
</body>

</html>