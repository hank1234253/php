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
        $height=$_GET["height"];
        $weight=$_GET["weight"];
        echo "身高：$height 公分<br>";
        echo "體重：$weight 公斤<br>";
        $height=$height/100;
        $height=$height*$height;
        $bmi=$weight/$height;
        echo "BMI：$bmi"
    ?>
</body>
</html>