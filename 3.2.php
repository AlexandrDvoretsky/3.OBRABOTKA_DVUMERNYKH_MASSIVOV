<?php
  // 3.2 В массиве А(N,М) найти номер строки, среднее арифметическое положительных элементов которой является наименьшим

  function countElem($m)
  {
    $mas=$m;
    $i=0;
    while($mas[$i]>0 || $mas[$i]<0 || $mas[$i]===0)
    {
      $count++;
      $i++;
    }
    return $count;
  }

  $mas = [
    [1,2,3,6],
    [4,5,6],
    [7,-8,-9,1,1],
    [1,1,2,4],
    [-1,5,-40,2,2],
    [1,-2,-4,-5,-6,-76],
    [1,2,3,6]
  ];

  for($i=0;$i<countElem($mas);$i++)
  {
    for($j=0;$j<countElem($mas[$i]);$j++)
    {
      echo $mas[$i][$j]." | ";
    }
    echo "<br>";
  }

  for($i=0;$i<countElem($mas);$i++)
  {
    for($j=0;$j<countElem($mas[$i]);$j++)
    {
      if($mas[$i][$j]>0)
      {
        $s+=$mas[$i][$j];
        $k++;
        if($i==0) $min=$s;
      }
    }
    $sum = $s/$k;
    echo "<br>Сумма $i строки = $sum";
    $s=0; $k=0;
    if($sum<$min)
    {
      $min=$sum;
      $pos=$i;
    }
  }
  echo "<br>Номер строки $pos. Среднее арифметическое положительных элементов = $min.";
?>
