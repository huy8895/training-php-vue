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



echo '<br>'.'duyệt mảng 2 chiều'.'<br>';
$data = [0 => 1, 1 => [3 => 4, 5 => 6]];
foreach ($data as $key => $val) {
    if (is_array($val)) {
        echo '---key: '.'is_array '.$key.'<br>';
        foreach ($val as $k => $v) {
            echo 'key: '.$k .' - value: '.$v . "<br/>";
        }
    } else
        echo '---key: '.'is_not_array '.$key.'<br>';;
}


?>

<?php
$cars = array (
    array("Volvo",22,18),
    array("BMW",15,13),
    array("Saab",5,2),
    array("Land Rover",17,15)
);

echo $cars[0][0].": In stock: ".$cars[0][1].", sold: ".$cars[0][2].".<br>";
echo $cars[1][0].": In stock: ".$cars[1][1].", sold: ".$cars[1][2].".<br>";
echo $cars[2][0].": In stock: ".$cars[2][1].", sold: ".$cars[2][2].".<br>";
echo $cars[3][0].": In stock: ".$cars[3][1].", sold: ".$cars[3][2].".<br>";

echo '<br>';
foreach ($cars as $key => $value) {
    echo 'key: '.$key .' - value: ' . "<br/>";

}
?>

<?php

echo '<br><br>'.'Bài 10: Vòng lặp while và do while trong PHP';
$i = 0; // khởi tạo biến
while ($i <= 10 /* điều kiện dừng*/) {
    echo $i . "<br>"; // in ra số
    $i++; //sau mỗi lần lặp biến $i tăng thêm 1 đơn vị
}

echo '<br>'.'--------'.'2, Vòng lặp do-while.';
$i = 0;
do {
    $j = $i;
    do {
        echo "*";
        $j++;
    } while ($j <= 10);
    echo "<br>";
    $i++;
} while ($i <= 10);
?>


</body>
</html>