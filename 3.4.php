<?php
  // 3.4 В массиве А(N,М) найти сумму тех элементов, в записи которых используются только цифры 0, 1, 3, 8.
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

  function Num($num)
  {
    $n=$num;
    if($n==0) $res=false;

    while($n>1)
    {
      $number=$n%10;
      if($number==0 || $number==1 || $number==3 || $number==8)
      {
        $result++;
        $countResult++;
      }
      else {
        $result++;
        $countResult--;
      }
      $n=$n/10;
    }

    if($result==$countResult && $countResult>=4) $res=true;
    else $res=false;

    return $res;
  }

  $mas=[
    [0,1,3,8,1083],
    [138,81,31,1038,33],
    [1308,81,31,138,8013],
    [3108,138,3801,0,12],
  ];

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
      if(Num($mas[$i][$j])) $sum+=$mas[$i][$j];
    }
  }
  echo "Сумму элементов, в записи которых используются цифры 0, 1, 3, 8 = ".$sum;
?>
