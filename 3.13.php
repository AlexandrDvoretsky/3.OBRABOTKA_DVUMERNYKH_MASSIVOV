<?php
  // 3.13 В массиве А(N,М) поменять местами столбцы, содержащие максимальный и минимальный элементы.

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
    [-1,200,7,9],
    [100,11,25,-12],
    [1,-15,17,10],
    [11,-2,-22,10],
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

  for($i=0;$i<countElem($mas)/countElem($mas);$i++)
  {
    $countStrok=countElem($mas);
    $countSlobl=countElem($mas[$i]);
  }

  for($j=0;$j<$countSlobl;$j++)
  {
    for($i=0;$i<$countStrok;$i++)
    {
      if($mas[$i][$j]>$max)
      {
        $max=$mas[$i][$j];
        $stolbMax=$i;
      }
      if($j==0)$min=$max;
      if($mas[$i][$j]<$min)
      {
        $min=$mas[$i][$j];
        $stolbMin=$i;
      }
    }
  }

  $buff=$mas[$stolbMax];
  $mas[$stolbMax]=$mas[$stolbMin];
  $mas[$stolbMin]=$buff;

  echo "<br>";
  for($j=0;$j<$countSlobl;$j++)
  {
    for($i=0;$i<$countStrok;$i++)
    {
      echo $mas[$i][$j]." | ";
    }
    echo "<br>";
  }

?>
