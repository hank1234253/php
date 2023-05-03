<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <?php
        session_start();
            if(isset($_SESSION['login'])){
                echo "歡迎".$_SESSION['login'];
                echo "<a href='logout.php'>登出</a>";
            }
        ?>
    </div>
    <div>
        <ul>
            <li>首頁</li>
            <li>產品</li>
            <li>關於我們</li>
        </ul>
    </div>
    <div>
        <span>選單</span>
    </div>
</body>
</html>