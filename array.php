<!doctype html>
<html>
<head>
  <title></title>
</head>
<body>
<?php

$data = array();
array_push($data, 1, 5, 10, 15, 20, 25, 30, 35 ,40 , 45 ,50 );
$data = array_filter($data);
$average = array_sum($data)/count($data);
print_r($data);
echo "<br>";
echo "The Average is :";
echo $average;
echo "<br>";
echo "The sum is: ";
print_r(array_sum($data));
echo "<br>";
echo "The count is: ";
echo count($data);
?>

</html>
