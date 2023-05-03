<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>會員登入</title>
    <style>
        form>div{
            border: 1px solid lightgreen;
            box-shadow: 0 0 10px lightgreen;
            width: 400px;
            margin: 150px auto;
            padding: 20px;
            border-radius: 10px;
            text-align: center;
            backdrop-filter: blur(5px);
        }
        .acc{
            margin: 10px auto;
        }
        .pw{
            margin: 10px auto;
        }
        .acc>input,.pw>input{
            border: 0;
            border-bottom: 1px solid black;
        }
        input[type="submit"]{
            border: 0;
            background-color: lightskyblue;
            padding: 5px 15px;
            border-radius: 5px;
            box-shadow: 0 0 5px #ccc;
        }
        input[type="submit"]:hover{
            cursor: pointer;
            background-color: deepskyblue;
        }
    </style>
</head>

<body>
    <?php
    session_start();
        if(isset($_SESSION['login'])){
            echo "登入成功!歡迎，";
            echo $_SESSION['login'];
            echo "<a href='logout.php'>登出</a>";
        }else{
    ?>
    <form action="check.php" method="post">
        <div>
            <?php
                if(isset($_SESSION['error'])){
                    echo "<div style=\"color:red\">";
                    echo $_SESSION['error'];
                    echo "</div>";
                }
            ?>
            <div class="acc">
                <label for="acc">帳號</label>
                <input type="text" name="acc" id="id">
            </div>
            <div class="pw">
                <label for="pw">密碼</label>
                <input type="password" name="pw" id="pw">
            </div>
            <div>
                <input type="submit" value="登入">
            </div>
        </div>
        <?php
        }
        ?>
    </form>
</body>

</html>