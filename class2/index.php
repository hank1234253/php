<?php
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
    
    for($i=0;$i<=5;$i++){
        for($j=0;$j<10-2*$i;$j++)
            echo "&nbsp";
        for($k=0;$k<$i*2-1;$k++){
            echo "*";
        }
        echo "<br>";
    }
?>