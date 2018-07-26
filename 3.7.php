<?php
  // 3.7 В массиве А(N,N) поменять местами максимальные элементы нижнего и верхнего треугольников относительно главной диагонали.

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
    [1,2,3,-4,5],
    [20,7,9,9,10],
    [11,25,12,14,15],
    [1,15,17,1,16],
    [11,-2,22,10,1],
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
      if($j>$i)
      {
        if($mas[$i][$j]>$maxGl)
        {
          $maxGl=$mas[$i][$j];
          $posMaxIGl=$i;
          $posMaxJGl=$j;
        }
      }
      elseif($j<$i)
      {
        if($mas[$i][$j]>$maxNGl)
        {
          $maxNGl=$mas[$i][$j];
          $posMaxINGl=$i;
          $posMaxJNGl=$j;
        }
      }
    }
  }

  echo "Максимальный элемент верхнего треугольника - $maxGl.<br> Максимальный элемент нижнего треугольника - $maxNGl<br><br>";

  $mas[$posMaxIGl][$posMaxJGl]=$maxNGl;
  $mas[$posMaxINGl][$posMaxJNGl]=$maxGl;

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
