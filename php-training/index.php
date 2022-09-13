<!DOCTYPE html>
<html>
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


?>

</body>
</html>