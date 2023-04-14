<?php
    $score=50;
    if($score>60){
        echo "成績=".$score;
        echo "<br>恭喜及格了~";
    }else{
        echo "成績=".$score;
        echo "<br>請再接再厲~";
    }
    echo "<hr>";
    for($i=0;$i<=5;$i++){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    for($i=5;$i>=0;$i--){
        for($j=0;$j<$i;$j++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";
    
    for($i=1;$i<=5;$i++){
        for($j=0;$j<5-$i;$j++)
            echo "&nbsp";
        for($k=0;$k<$i*2-1;$k++){
            echo "*";
        }
        echo "<br>";
    }
    echo "<hr>";

?>