<?php
  // 3.10 В каждой строке массива А(N,М) найти и удалить максимальные элементы.

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
    [100,11,25,-12,140,15],
    [1,-15,17,10],
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
    for($j=0;$j<countElem($mas[$i]);$j++)
    {
      if($j==0) $max=0;
      if($mas[$i][$j]>$max)
      {
        $max=$mas[$i][$j];
        $posMaxJ=$j;
      }
    }

    for($r=0;$r<$posMaxJ;$r++)
    {
      $mas[$i][$r]=$mas[$i][$r];
    }
    for($t=$posMaxJ;$t<countElem($mas[$i]);$t++)
    {
      $mas[$i][$t]=$mas[$i][$t+1];
    }
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
