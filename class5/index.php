<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,tr,td{
            border-collapse: collapse;
            border: 1px solid;
            text-align: center;
            width: 200px;
        }
    </style>
</head>
<body>
    <?php
    date_default_timezone_set("Asia/Taipei");
    echo date("Y-m-d H:i:s");
    echo "<br>";
    $today=strtotime("now");
    echo $today;
    echo "<br>";
    echo date("Y-m-d H:i:s",$today);
    $tomorrow=strtotime("+1 day",$today);
    echo "<br>";
    echo date("Y-m-d H:i:s",$tomorrow);
    echo "<hr>";
    $day1="2023-04-24";
    $day2="2023-05-03";
    $day=(strtotime($day2)-strtotime($day1))/(60*60*24);
    echo $day;
    $birthday="2023-04-25";
    $day=(strtotime($birthday)-strtotime(date("Y-m-d")))/(60*60*24);
    echo "<br>".$day;
    echo "<hr>";
    echo date("Y/m/d");
    echo "<br>".date("n/j l");
    echo "<br>".date("Y/n/j G:i:s");
    echo "<br>".date("Y/n/j H:").(int)date("i").":".(int)date("s");
    echo "<br>今天是".date("西元Y年n月j日").(date("N")>=6?"假日":"工作日");
    echo "<hr>";
    $week=1-date("N");
    for($i=0;$i<5;$i++){
        echo date("Y-m-d l",strtotime("+$i week",strtotime("$week day")))."<br>";
    }
    echo "<hr>";
    
    $f= date("w",strtotime(date("Y-n-1"))); //這個月第一天星期幾
    $t= date("t");  //這個月有幾天
    $w=$f+$t;   
    $w=ceil($w/7);  //這個月會有幾周
    $tmp=1; //日期暫存
    echo "<table>";
    echo "<tr><td>日</td><td>一</td><td>二</td><td>三</td><td>四</td><td>五</td><td>六</td></tr>";
    for($i=0;$i<$w;$i++){
        echo "<tr>";
        for($j=0;$j<7;$j++){
            if($i==0&&$j<$f){
                echo "<td></td>";//到這個月第一天之前填空
            }
            else if($tmp<=$t){//判斷到這個月最後一天了嗎
                echo "<td>$tmp</td>";//之後開始印日期
                $tmp++;//日期+1
            }else{
                echo "<td></td>";//這個月最後一天後填空
            }
        }
        echo "</tr>";
    }


    echo "</table>";
    ?>
</body>
</html>