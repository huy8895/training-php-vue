<!DOCTYPE html>
<html lang="vi">
<head>
    <title>my php</title>

</head>
<body>

<h1>My first PHP page</h1>

<?php

//comment
echo "Hello World!";
echo "noidung";
//hoặc
echo ("noidung");
//hoặc
echo 'noi dung';

//Bài 4: Biến và Hằng trong PHP
//1, Biến.

$php = 'hello';
//đúng
$_php = 'hello';
//đúng
//$5php = 'hello';
//sai vì bắt đầu bằng số;
//$-php = 'hello';
//sai vì bắt đầu bằng -

echo ($php . $_php);

//2, Hằng.
define('NAME', 'trinh van huy');

echo (NAME)

//Bài 5: Các Kiểu dữ liệu trong PHP

?>

<?php
echo '<br>';

echo 'bai 5';
$a = 1234; // hệ số thập phân
$a = -123; // số âm
$a = 0123; // Bát phân
$a = 0x1A; // Hệ thập lục
$a = 0b11111111; // Hệ nhị phân

$float = 5.586; //Kiểu số thực.
$is_Male = true; //Kiểu boolean.

$string = 'toidicode.com';
$string = "toidicode1.com";
echo NAME;
echo $a;

$string = 'new';

$array = array();
$array = [];
$array = array('giá trị 1', 3, 3.14);
$haha = print_r($array);
echo '<br>';
echo $haha;
echo '<br>';
echo $array[0];
$array['key'] = 'value';

echo '<br>';
print_r($array);
?>

<?php

echo '<br><br>'.'Bài 9: Vòng lặp for và foreach trong PHP';

$list = [1,2,3,4];

for( $i = 0; $i <= 10; $i++) {
    echo 'counting '. $i .' <br>';
};

echo '<br>'.'------> foreach // Lặp cả key lẫn value của mảng';
foreach ($list as $key => $value) {
    echo "<br>day la phan tu co key = $key"." and value = $value";
}

echo '<br>'."// Lặp value của mảng_________________ <br/>";
// Lặp value của mảng
foreach ($list as $value) {
    echo "Giá trị phần tử = $value <br/>";
}

?>

<?php

echo 'br'
?>

</body>
</html>