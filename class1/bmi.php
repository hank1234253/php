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
    if (!empty($_GET["height"]) && !empty($_GET["weight"])) {
        $height = $_GET["height"];
        $weight = $_GET["weight"];
        echo "身高：$height 公分<br>";
        echo "體重：$weight 公斤<br>";
        $height = $height / 100;
        $height = $height * $height;
        $bmi = round($weight / $height, 2);
        echo "BMI：$bmi" . "<br>";
        if ($bmi >= 27) {
            echo "肥胖";
        } else if ($bmi >= 24) {
            echo "體重過重";
        } else if ($bmi >= 18.5) {
            echo "健康體重";
        } else {
            echo "體重過輕";
        }
        echo "<br>";
        echo "<a href=\"./index.php\">回上一頁</a>";
    }else{
        header("location:index.php?bmierror=請輸入身高及體重");
    }
    ?>
</body>

</html>