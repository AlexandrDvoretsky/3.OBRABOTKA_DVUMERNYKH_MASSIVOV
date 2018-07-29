<?php
  // 3.15 В массиве А(N,М) удалить столбцы, все элементы которых являются простыми числами.

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

  function simpleNum($num)
  {
    $n = $num;
    for($i=2;$i<$n;$i++)
    {
      if($n%$i==0) $k++;
    }
    if($k<2) $res=true;
    else $res=false;
    $k=0;
    return $res;
  }

  $mas=[
    [12,11,2,3,-4],
    [16,13,6,7,8],
    [20,17,0,1,2],
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

  for($i=0;$i<countElem($mas)/countElem($mas);$i++)
  {
    $countStrok=countElem($mas);
    $countSlobl=countElem($mas[$i]);
  }

  for($j=0;$j<$countSlobl;$j++)
  {
    for($i=0;$i<$countStrok;$i++)
    {
      if(simpleNum($mas[$i][$j]))
      {
        $simpleNum++;
        $step++;
      }
      else
      {
        $simpleNum--;
        $step++;
      }
    }
    
    if($step==$countStrok)
    {
      if($simpleNum==$countStrok && $step==$countStrok && $step==$simpleNum) $delStolb=$j;
    }
    $step=0;$simpleNum=0;

    if($delStolb)
    {
      for($r=0;$r<countElem($mas);$r++)
      {
        for($t=0;$t<$delStolb;$t++)
        {
          $mas[$r][$t]=$mas[$r][$t];
        }
        for($t=$delStolb;$t<countElem($mas[$r]);$t++)
        {
          $mas[$r][$t]=$mas[$r][$t+1];
        }
      }
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
