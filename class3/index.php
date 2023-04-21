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
    echo "<br>";
    $test = [
        'a' => [
            [
                'a', 'b'
            ],
            [
                'c', 'd'
            ]
        ],
        'b'=>[
            [
                'e','f'
            ],
            [
                'g','h'
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
    echo "<br>";

    ?>
</body>

</html>