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
$str="今天天氣很好";
$str2="Today is a good day";
echo $str;
echo "<br>";
echo $str2;
echo "<br>";
echo "<h3>substr</h3>";
echo substr($str,0,3);
echo "<br>";
echo substr($str2,0,3);

echo "<h3>mb_substr</h3>";
echo "<h3>substr</h3>";
echo mb_substr($str,0,3);
echo "<br>";
echo mb_substr($str2,0,3);

echo "<h3>中英混合取字串</h3>";
$str="Today 真是個 good day";
echo $str;
echo "<br>";
echo mb_substr($str,0,8);
echo "<hr>";
$str="   今天天氣真好  ";
echo "<br>";
echo $str;
echo "<br>";
echo trim($str);
echo "<hr>";
$str="YA";
echo str_repeat($str,5);
echo "<hr>";
$str="今天天氣很好";
echo $str;
echo "<br>";
echo str_replace("天氣","心情",$str);
echo "<br>";
echo $str;
echo "<br>";
echo str_replace(["天氣","很好"],["心情","很糟"],$str);
echo "<hr>";
echo $str="隨著 ChatGPT 盛起，現在也支援 OpenAI API，把你的 OpenAI key 放入之後，整頁翻譯、電子書翻譯都能用 OpenAI 來翻。";
$str2=explode('，',$str);
echo "<pre>";
print_r($str2);
echo "</pre>";
echo implode("，",$str2);
echo "<br>";
echo join("，",$str2);
echo "<hr>";
$str="今天天氣很好";
echo $str;
echo "<br>strpos找天氣<br>";
echo strpos($str,"天氣");
echo "<br>mb_strpos找天氣<br>";
echo mb_strpos($str,"天氣");
echo "<br>strlen<br>";
echo strlen($str);
echo "<br>mb_strlen<br>";
echo mb_strlen($str);
echo "<hr>";
echo "<h3>練習 字串取代</h3>";
$str="aaddw1123";
echo $str."<br>";
echo str_replace(['a','d','w',1,2,3],'*',$str)."<br>";
echo str_repeat("*",strlen($str));
echo "<hr>";
echo "<h3>練習 字串分割</h3>";
$str="this,is,a,book";
$str=explode(",",$str);
echo "<pre>";
print_r($str);
echo "</pre>";
echo "<hr>";
echo "<h3>練習 字串合併</h3>";
echo implode(" ",$str);
echo "<hr>";
echo "<h3>練習 子字串取用</h3>";
$str="The reason why a great man is great is that he resolves to be a great man";
echo $str."<br>";
echo substr($str,0,10)."...";
echo "<hr>";
echo "<h3>練習 尋找字串與HTML、css整合應用</h3>";
$str="學會PHP網頁程式設計，薪水會加倍，工作會好找";
echo $str."<br>";
$str=str_replace("程式設計","<div style=\"display:inline;font-size:30px;color:blue\">程式設計</div>",$str);
echo $str;


?>
</body>
</html>