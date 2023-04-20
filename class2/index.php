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
    $year=2000;
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
    //三角
    for($i=0;$i<=5;$i++){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    //倒三角
    for($i=5;$i>=0;$i--){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    //正三角
    for($i=1;$i<=5;$i++){
        for($j=0;$j<5-$i;$j++)
            echo "&nbsp&nbsp";
        for($k=0;$k<$i*2-1;$k++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";

    //菱形
    for($i=1;$i<=5;$i++){
        for($j=0;$j<5-$i;$j++)
            echo "&nbsp&nbsp";
        for($k=0;$k<$i*2-1;$k++){
            echo "*";
        }
        echo "<br>";
    }
    for($i=1;$i<=4;$i++){
        for($j=0;$j<$i;$j++)
            echo '&nbsp&nbsp';
        for($k=1;$k<10-$i*2;$k++){
            echo "*";
        }
        echo "<br>";
    }

    echo "<hr>";
    //矩型1
    for($i=1;$i<=7;$i++){
        for($j=1;$j<=7;$j++){
            if($j>1&&$j<7){
                if($i==1||$i==7){
                    echo "*";
                }
                else
                    echo "&nbsp&nbsp";
            }
            else echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    //矩形2
    for($i=1;$i<=7;$i++){
        for($j=1;$j<=7;$j++){
            if($i==1||$i==7||$j==1||$j==7){
                echo "*";
            }
            else{
                if($j==$i||$j==8-$i){
                    echo "*";
                }
                else{
                    echo "&nbsp&nbsp";
                }
            }
        }
        echo "<br>";
    }
?>