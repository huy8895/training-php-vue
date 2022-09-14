<?php
//header("Content-type: application/json");
//require  "index.php";
echo 'Bài 22: Tham trị và tham chiếu trong PHP'.'<br>';

$a = 10;
function binhphuong(&$b)
{
    $b *= $b;
}
binhphuong($a); //100
echo $a; //10 //100 sau khi thêm &



