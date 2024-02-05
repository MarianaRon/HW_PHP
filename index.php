

<?php
$a = 50;
$c = 'привет';
$str1 = '$a hello';
$str2 = "$a hello";

echo $str1;
echo '<br>';
echo $str2;
echo '<br>';
//СКОРОЧЕНА ФОРМА
echo "$str1<br>$str2";
echo '<br>';
//экранирование
echo "<div class = \"$c\">экранирование<div>";

?>
