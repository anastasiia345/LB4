<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Homework_4</title>
</head>
<body>
<?php
  //убирает все дублирущие элементы каждого массива;
  $array = array("Красный", "Желтый", "Красный", "Белый");
  $result = array_unique($array);
  print_r($result);
  echo "<br>";
  //выводит количество дублирущих элементов двух массивов;
  $arr1 = [1,2,3,4,5,6];
  $arr2 = [2,5,6,7,8];
  print_r(array_uintersect($arr1, $arr2, "strcasecmp"));
  echo "<br>";
  //сливает два массива в один, убирая все дублирующиеся значения;
  $arr3 = [1,1,2,3,4,5];
  $arr4 = [1,2,3,6,7,8,9];
  $uniqueArr = array_merge(array_unique($arr3), array_unique($arr4));
  $uniqueArr = array_unique($uniqueArr);
  print_r($uniqueArr);
  echo "<br>";
  //меняет местами значения массива (первый элемент массива становится последним, предпоследний - вторым, ..., последний первым). Использовать foreach.
  $arr5 = [1,2,3,4,5,6];
  $reverseArray = [];
  $i = count($arr5) - 1;
  foreach ($arr5 as $value) {
    $reverseArray[] = $arr5[$i--];
  }
  print_r($reverseArray);
?>
</body>
</html>
<?php