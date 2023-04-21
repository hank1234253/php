<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table,td{
            border: 1px solid #ccc;
            border-collapse: collapse;
        }
    </style>
</head>

<body>
    <?php
    //陣列
    echo "陣列<br>";
    $a[4] = "D";
    $a['005'] = "E";
    $a[] = "F";
    $b[] = "B";
    $c = ["A", "B", 'C'];
    $d = [5 => 'D', 2 => "B"];
    echo $a['005'];
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    echo "<br>";
    echo $b[0];
    echo "<br>";
    echo $c[2];
    echo "<br>";
    echo $d[5];
    echo "<hr>";
    //多維陣列
    echo "多維陣列<br>";
    $test = [
        'a' => [
            [
                'a',
                'b'
            ],
            [
                'c',
                'd'
            ]
        ],
        'b' => [
            [
                'e', 'f'
            ],
            [
                'g', 'h'
            ]
        ]
    ];
    echo "<pre>";
    print_r($test);
    echo "</pre>";
    echo $test['a'][0][0];
    echo "<br>";
    echo $test['a'][0][1];
    echo "<br>";
    echo $test['a'][1][0];
    echo "<br>";
    echo $test['a'][1][1];
    echo "<hr>";
    //陣列檢查
    echo "陣列檢查<br>";
    if (is_array($test)) {
        echo '$test是陣列<br>';
    } else {
        echo '$test不是陣列<br>';
    }
    echo "<hr>";

    //檢查值是否在陣列中
    echo "檢查值是否在陣列中<br>";
    if (in_array("c", $test['a'][1])) {
        echo '在陣列中';
    } else {
        echo '不在陣列中';
    }
    echo "<hr>";
    //陣列排序
    echo "陣列排序";
    $num = ['5', '9', '3', '2'];
    echo "<pre>";
    print_r($num);
    echo "</pre>";
    sort($num);
    echo "<pre>";
    print_r($num);
    echo "</pre>";
    rsort($num);
    echo "<pre>";
    print_r($num);
    echo "</pre>";
    echo "<hr>";
    //陣列填滿
    echo "陣列填滿<br>";
    $fill = array_fill(0, 10, "Hi");
    echo "<pre>";
    print_r($fill);
    echo "</pre>";
    echo "<hr>";

    //尋找值在陣列中的索引
    echo "尋找值在陣列中的索引<br>";
    echo array_search("Hi", $fill);
    echo "<hr>";

    //以陣列的索引當值產生新陣列
    echo "以陣列的索引當值產生新陣列<br>";
    $a = array("Volvo" => "XC90", "BMW" => "X5", "Toyota" => "Highlander");
    echo "<pre>";
    print_r($a);
    echo "</pre>";
    echo "<pre>";
    print_r(array_keys($a));
    echo "</pre>";
    echo "<hr>";

    //陣列合併
    echo "陣列合併<br>";
    $a1 = array("a" => "red", "b" => "green");
    echo "<pre>";
    print_r($a1);
    echo "</pre>";
    $a2 = array("c" => "blue", "b" => "yellow");
    echo "<pre>";
    print_r($a2);
    echo "</pre>";
    echo "<pre>";
    print_r(array_merge($a1, $a2));
    echo "</pre>";
    echo "<hr>";

    //序列化與反序列化
    echo "序列化與反序列化<br>";
    $en=["a","b","c","d","e"];
    echo "<pre>";
    print_r($en);
    echo "</pre>";
    $en=serialize($en);
    echo $en;
    $en=unserialize($en);
    echo "<pre>";
    print_r($en);
    echo "</pre>";
    echo "<hr>";

    //陣列拆分成字串 字串合成陣列
    echo "陣列拆分成字串 字串合成陣列<br>";
    $en=implode(',',$en);
    echo $en;
    $en=explode(",",$en);
    echo "<pre>";
    print_r($en);
    echo "</pre>";
    echo "<hr>";

    //學生成績陣列
    echo "學生成績陣列2種寫法";
    $students=[
        "judy"=>[
            "國文"=>95,
            "英文"=>64,
            "數學"=>70,
            "地理"=>90,
            "歷史"=>84
        ],
        "amo"=>[
            "國文"=>88,
            "英文"=>78,
            "數學"=>54,
            "地理"=>81,
            "歷史"=>71
        ],
        "john"=>[
            "國文"=>45,
            "英文"=>60,
            "數學"=>68,
            "地理"=>70,
            "歷史"=>62
        ],
        "peter"=>[
            "國文"=>59,
            "英文"=>32,
            "數學"=>77,
            "地理"=>54,
            "歷史"=>42
        ],
        "hebe"=>[
            "國文"=>71,
            "英文"=>62,
            "數學"=>80,
            "地理"=>62,
            "歷史"=>64
        ]
    ];
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    //              名字    科別
    echo $students["judy"]["國文"];

    $subjects=[
        "國文"=>[
            "judy"=>95,
            "amo"=>88,
            "john"=>45,
            "peter"=>59,
            "hebe"=>71
        ],
        "英文"=>[
            "judy"=>64,
            "amo"=>78,
            "john"=>60,
            "peter"=>32,
            "hebe"=>62
        ],
        "數學"=>[
            "judy"=>70,
            "amo"=>54,
            "john"=>68,
            "peter"=>77,
            "hebe"=>80
        ],
        "地理"=>[
            "judy"=>90,
            "amo"=>81,
            "john"=>70,
            "peter"=>54,
            "hebe"=>62
        ],
        "歷史"=>[
            "judy"=>84,
            "amo"=>71,
            "john"=>62,
            "peter"=>42,
            "hebe"=>64
        ],
    ];
    echo "<pre>";
    print_r($subjects);
    echo "</pre>";
    //              科別    名字
    echo $subjects["國文"]["judy"];
    echo "<hr>";
    //將陣列以表格方式列出
    echo "將陣列以表格方式列出<br>";
    echo "<table>";
    echo "<tr><td></td><td>國文</td><td>英文</td><td>數學</td><td>地理</td><td>歷史</td>";
    foreach ($students as $name => $scores) {
        echo "<tr><td>$name</td>";
        foreach($scores as $sub =>$sco){
            echo "<td>$sco</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
    //陣列九九乘法表
    echo "陣列九九乘法表<br>";
    for($i=1;$i<10;$i++){
        for($j=1;$j<10;$j++){
            $num1[]=$i." x ".$j." = ".$i*$j;
            $num2[$i][$j]=$i." x ".$j." = ".$i*$j;
        }
    }
    echo "一維<br>";
    echo "<pre>";
    print_r($num1);
    echo "</pre>";
    echo "<table>";
    foreach ($num1 as $k=> $value ){
        if($k%9==0)
            echo "<tr>";
        echo "<td>";
        echo $value;
        echo "</td>";
        if($k%9==8)
            echo "</tr>";
    }
    echo "</table>";

    echo "二維<br>";
    echo "<pre>";
    print_r($num2);
    echo "</pre>";
    echo "<table>";
    foreach ($num2 as $i => $j) {
        echo "<tr>";
         foreach ($j as $k => $value) {
            echo "<td>";
            echo  $value." ";
            echo "</td>";
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "<hr>";
    //威力彩選號
    echo "威力彩選號<br>";
    $game=[];
    while(count($game)<6){
        $tmp=rand(1,38); 
        if(!in_array($tmp,$game)){
            $game[]=$tmp;
        }
    }
    sort($game);    
    echo "<pre>";
    print_r($game);
    echo "</pre>";
    echo "<hr>";
    //找出五百年內的閏年
    echo "找出五百年內的閏年<br>";
    $year500=[];
    for($i=1;$i<=500;$i++){
        if($i%4==0&&$i%100!=0||$i%400==0){
            $year500[]=$i;
        }
    }
    echo "<pre>";
    print_r($year500);
    echo "</pre>";
    
    ?>
    
</body>

</html>