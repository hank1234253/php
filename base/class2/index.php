<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        *{
            font-family: 'Courier New', Courier, monospace;
        }
    </style>
</head>
<body>
    


<?php
    //if...else
    $score=50;
    if($score>60){
        echo "成績=".$score;
        echo "<br>恭喜及格了~";
    }else{
        echo "成績=".$score;
        echo "<br>請再接再厲~";
    }
    echo "<hr>";
    //switch...case
    $level="C";
    switch ($level) {
        case 'A':
            echo "表現優良，請繼續保持";
            break;
        case 'B':
            echo "值得鼓勵，還有進步空間";
            break;
        case 'C':
            echo "需要更多練習";
            break;
        case 'D':
            echo "需要加強基本功";
            break;
        default:
            echo "是否無心學業?";    
            break;
    }
    echo "<hr>";
    //
    $score=100;
    echo "成績="."$score<br>";
    if($score<60){
        $level='E';
    }else if($score<70){
        $level='D';

    }else if($score<80){
        $level='C';
    }else if($score<90){
        $level='B';
    }else{
        $level='A';
    }
    echo "level=$level<br>";
    switch ($level) {
        case 'A':
            echo "表現優良，請繼續保持";
            break;
        case 'B':
            echo "值得鼓勵，還有進步空間";
            break;
        case 'C':
            echo "需要更多練習";
            break;
        case 'D':
            echo "需要加強基本功";
            break;
        default:
            echo "是否無心學業?";    
            break;
    }
    echo "<hr>";
    //判斷平/閏年
    echo "<ul>";
    echo "<li>公元年分除以4不可整除，為平年。 <br>n%4==0 閏年</li>";
    echo "<li>公元年分除以4可整除但除以100不可整除，為閏年。<br>n%4==0&&n%100!=0閏年</li>";
    echo "<li>公元年分除以100可整除但除以400不可整除，為平年。<br>n%100==0&&n%400!=0平年<br>n%100!=0||n%400==0閏年</li>";
    echo "<li>n%4==0&&n%100!=0||n%400==0閏年</li>";
    echo "<li>n%4!=0||n%100==0&&n%400!=0平年</li>";
    echo "</ul>";
    $year=2000;
    echo "$year 是";
    if($year%4==0){
        if($year%100==0){
            if($year%400==0){
                echo "閏年";
            }else{
                echo "平年";
            }
        }else{
            echo "閏年";
        }
    }else{
        echo "平年";
    }
    /*
    if($year%4==0&&$year%100!=0||$year%400==0){
        echo "閏年";
    }else{
        echo "平年";
    }
    */
    echo "<hr>";
    //for數列
    $n=23;
    for($i=1;$i<=ceil(($n+1)/2);$i++){
        if($i>1) echo ",";
        echo 2*$i-1;
    }
    echo "<br>";
 
    for($i=1;$i<=floor($n/10);$i++){
        if($i>1) echo ",";
        echo $i*10;
    }
    echo "<br>";

    for($i=3;$i<100;$i++){
        $num=true;
        
        for($j=2;$j<$i;$j++){
            if($i%$j==0)
                $num=false;
        }
        if($num){
            if($i>3) 
                echo ",";
            echo $i;
        }
    }
    echo "<hr>";
    //九九乘法表
    //表格
    echo "<table style=\"border:1px solid;border-collapse:collapse\">";

    for($i=1;$i<=9;$i++){
        echo "<tr>";
        for($j=1;$j<=9;$j++){
            $k=$i*$j;
            echo "<td style=\"border:1px solid;width:100px\">";
            echo "$j x $i = $k";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<br>";
    echo "<hr>";
    //交叉乘法
    echo "<table style=\"border:1px solid;text-align:center; border-collapse:collapse\">";
    for($i=0;$i<=9;$i++){
        echo "<tr>";
        for($j=0;$j<=9;$j++){
            if($i==0){
                echo "<td style=\"border:1px solid;background-color:#ccc; width:15px;\">";
                if($j==0)
                    echo "&nbsp";
                else
                    echo "$j";
            }
            else if($j==0){
                echo "<td style=\"border:1px solid;background-color:#ccc;\">";
                echo "$i";
            }else{
            $k=$i*$j;
                echo "<td style=\"border:1px solid\">";
                echo "$k";
                echo "</td>";
            }
        }
        echo "</tr>";
    }
    //特別九九
    echo "</table>";
    echo "<hr>";
    echo "<table style=\"border:1px solid;text-align:center; border-collapse:collapse\">";
    for($i=0;$i<=9;$i++){
        echo "<tr>";
        for($j=0;$j<=9;$j++){
            if($i==0){
                echo "<td style=\"border:1px solid;background-color:#ccc; width:15px;\">";
                if($j==0)
                    echo "&nbsp;";
                else
                    echo "$j";
            }
            else if($j==0){
                echo "<td style=\"border:1px solid;background-color:#ccc;\">";
                echo "$i";
            }else{
                if($i>=$j){
                    $k=$i*$j;
                    echo "<td style=\"border:1px solid\">";
                    echo "$k";
                    echo "</td>";
                }else{
                    echo "<td style=\"border:1px solid\">";
                    echo "&nbsp;";
                    echo "</td>";
                }
            }
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
    //while尋找字元

    $string = "this is test";
    $word="e";
    $found=false;
    $i=0;
    while(!$found&&$i<strlen($string)){
        if($string[$i]==$word){
            $found=true;
            echo "找到了,位置在$i<br>";
        }else $i++;
    }
    if(!$found){
        echo "沒找到<br>";
    }
    
    echo "<hr>";
    //三角
    $n=10;//調整n可以改變大小
    for($i=0;$i<=$n;$i++){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    //倒三角
    $n=10;//調整n可以改變大小
    for($i=$n;$i>=0;$i--){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    //正三角
    $n=10;//調整n可以改變大小
    for($i=1;$i<=$n;$i++){
        for($j=0;$j<$n-$i;$j++)
            echo "&nbsp;";
        for($k=0;$k<$i*2-1;$k++){
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr>";
    //菱形
    $n=5;//調整n可以改變大小
    $n=2*$n+1;
    for($i=1;$i<=($n/2)+1;$i++){
        for($j=0;$j<(($n/2)-$i);$j++)
            echo "&nbsp;";
        for($k=0;$k<$i*2-1;$k++){
            echo "*";
        }
        echo "<br>";
    }
    for($i=1;$i<=($n/2);$i++){
        for($j=0;$j<$i;$j++)
            echo '&nbsp;';
        for($k=1;$k<$n+1-$i*2;$k++){
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr>";
    //矩型1
    $n=15;//調整n可以改變大小
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$n;$j++){
            if($i==1||$i==$n){
                echo "*";
            }else if($j==1||$j==$n){
                    echo "*";
            }else{
                    echo "&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "<hr>";
    //矩形2
    $n=10;//調整n可以改變大小
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$n;$j++){
            if($i==1||$i==$n||$j==1||$j==$n){
                echo "*";
            }
            else if($j==$i||$j==$n+1-$i){
                echo "*";
            }else{
                echo "&nbsp;";
            }  
        }
        echo "<br>";
    }
    echo "<hr>";
    //倒三角
    $n=10;//調整n可以改變大小
    for($i=$n;$i>0;$i--){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    //倒正三角
    $n=10;//調整n可以改變大小
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=$n*2;$j++){
            if($j<$i||$j>($n*2-$i))
                echo "&nbsp;";
            else
                echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    //空菱形
    $n=2;//調整n可以改變大小
    $n=2*$n+1;
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=2*$n-1;$j++){
            if($j==($n+1-$i)||$j==($n-1+$i)){
                echo "*";
            }
            else{
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
    for($i=1;$i<=$n-1;$i++){
        for($j=1;$j<=$n*2-1;$j++){
            if($j==$i+1||$j==($n*2-1-$i))
                echo "*";
            else{
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
    echo "<hr>";
    //對角線菱形
    $n=3;//調整n可以改變大小
    $n=2*$n+1;
    for($i=1;$i<=$n;$i++){
        for($j=1;$j<=2*$n-1;$j++){
            if($j==($n+1-$i)||$j==($n-1+$i)){
                echo "*";
            }
            else if($i==$n||$j==$n){
                echo "*";
            }
            else{
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }
    for($i=1;$i<=$n-1;$i++){
        for($j=1;$j<=$n*2-1;$j++){
            if($j==$i+1||$j==($n*2-1-$i)){
                echo "*";
            }else if($j==$n){
                echo "*";
            }else{
                echo "&nbsp;";
            }
        }
        echo "<br>";
    }

?>

</body>
</html>

