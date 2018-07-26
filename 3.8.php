<?php
  // 3.8 В каждой строке массива А(N,М) поменять местами максимальный и минимальный элементы.

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

  $mas=[
    [1,2,3,-4],
    [-1,0,20,7,9],
    [100,11,25,-12,14,15],
    [1,-15,17,1],
    [11,-2,22,10,-3,5],
  ];

  echo "Исходная матрица: <br>";
  for($i=0;$i<countElem($mas);$i++)
  {
    for($j=0;$j<countElem($mas[$i]);$j++)
    {
      echo $mas[$i][$j]." | ";
    }
    echo "<br>";
  }
  echo "<br>";

  for($i=0;$i<countElem($mas);$i++)
  {
    $max=0;
    for($j=0;$j<countElem($mas[$i]);$j++)
    {
      if($mas[$i][$j]>$max)
      {
        $max=$mas[$i][$j];
        $posMaxJ=$j;
      }
      if($j==0)$min=$max;
      if($mas[$i][$j]<$min)
      {
        $min=$mas[$i][$j];
        $posMinJ=$j;
      }
    }
    $mas[$i][$posMaxJ]=$min;
    $mas[$i][$posMinJ]=$max;
  }

  echo "Измененная матрица: <br>";
  for($i=0;$i<countElem($mas);$i++)
  {
    for($j=0;$j<countElem($mas[$i]);$j++)
    {
      echo $mas[$i][$j]." | ";
    }
    echo "<br>";
  }
  echo "<br>";
?>
