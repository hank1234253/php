<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        div{
            margin: 10px 0;
        }
    </style>
</head>

<body>
    <h1>BMI</h1>
    <?php
        if(isset($_GET["bmierror"])){
            echo "<span style=\"color:red\">";
            echo $_GET["bmierror"];
            echo "</span>";
        }
    ?>
    <form action="./bmi.php" method="get">
        <div>
            <label for="height">身高</label>
            <input type="number" name="height" id="height" value="">公分
        </div>
        <div>
            <label for="weight">體重</label>
            <input type="number" name="weight" id="weight" value="">公斤
        </div>
        </div>
            <input type="submit" value="送出">
        </div>
    </form>
    <hr>
    <h1>登入頁面</h1>
    <?php
        if(isset($_GET["error"])){
            echo "<span style=\"color:red\">";
            echo $_GET["error"];
            echo "</span>";
        }
    ?>
    <form action="./login.php" method="post" >
        <div>
        <label for="account">帳號</label>
        <input type="text" name="account" id="account">
         </div>
         <div>
            <label for="password">密碼</label>
            <input type="password" name="password" id="password">
         </div>
         <div>
            <input type="submit" value="送出">
         </div>

    </form>
</body>

</html>