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
        $acc="root";
        $pas="root";
        if(!empty($_POST["account"])&&!empty($_POST["password"])){
            if($acc==$_POST["account"]&&$pas==$_POST["password"]){
                echo "登入成功<br>";
            }else{
                echo "帳號或密碼錯誤<br>";
                header("location:index.php?error=帳號或密碼錯誤");
            }
        }
        else{
            header("location:index.php?error=請輸入帳號或密碼");
            
        }
    ?>
</body>
</html>