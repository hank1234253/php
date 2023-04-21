<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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
    $students=[
        "judy"=>[
            ["國文","95"],
            ["英文","64"],
            ["數學","70"],
            ["地理","90"],
            ["歷史","84"]
        ],
        "amo"=>[
            ["國文","88"],
            ["英文","78"],
            ["數學","54"],
            ["地理","81"],
            ["歷史","71"]
        ],
        "john"=>[
            ["國文","45"],
            ["英文","60"],
            ["數學","68"],
            ["地理","70"],
            ["歷史","62"]
        ],
        "peter"=>[
            ["國文","59"],
            ["英文","32"],
            ["數學","77"],
            ["地理","54"],
            ["歷史","42"]
        ],
        "hebe"=>[
            ["國文","71"],
            ["英文","62"],
            ["數學","80"],
            ["地理","62"],
            ["歷史","64"]
        ]
    ];
    echo "<pre>";
    print_r($students);
    echo "</pre>";
    //            名字 0~4國~歷 0科別1分數
    echo $students["judy"][2][1];
    ?>
</body>

</html>