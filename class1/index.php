<?php
    function swap(&$a,&$b){
        $tmp=$a;
        $a=$b;
        $b=$tmp;    
    }
    define("five",5);
    const ten = 10;
    $a=20;
    $b=50;
    $c=$a*five;
    $d=$a*ten;
    define("tableStart","<table style=\"border:1px solid;color:blue\">");
    define("tableEnd","</table>");
    echo $c."<br>";
    echo $d."<br>";
    swap($a,$b);
    echo $a."<br>".$b;
    printf("<br>".$b);
    print("<br>".$b);
    echo tableStart.
            "<tr>   
                <td style=\"border:1px solid;color:blue\">123</td>
                <td style=\"border:1px solid;color:blue\">456</td>
            </tr>
            <tr>
                <td style=\"border:1px solid;color:blue\">123</td>
                <td style=\"border:1px solid;color:blue\">456</td>
            </tr>"
        .tableEnd;

    $i=6;
    $j=9;
    $x=($i>$j)?">":"<";
    echo "<br>$x"
?>
