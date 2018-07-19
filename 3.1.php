<?
  // 3.1 В массиве А(N,N) найти суммы элементов, расположенных на главной диагонали, ниже диагонали и выше диагонали.

  function countElemI($m)
  {
    $mas=$m;
    $i=0;
    while($mas[$i]>0 || $mas[$i]<0 || $mas[$i]===0)
    {
      $countI++;
      $i++;
    }
    return $countI;
  }

  function countElemJ($m)
  {
    $mas=$m;
    $j=0; $i=0;
    while($mas[$i]>0 || $mas[$i]<0 || $mas[$i]===0)
    {
      while($mas[$j]>0 || $mas[$j]<0 || $mas[$j]===0)
      {
        $countJ++;
        $j++;
      }
      $i++;
    }
    return $countJ;
  }

  $masA = [
    [1,2,3,13],
    [4,5,6,14],
    [7,8,9,15],
    [1,2,4,16],
  ];

$countElemI=countElemI($masA);
$countElemJ=countElemJ($masA);

for($i=0;$i<$countElemI;$i++)
{
  for($j=0;$j<$countElemJ;$j++)
  {
    echo $masA[$i][$j]." | ";
  }
  echo "<br>";
}

for($i=0;$i<$countElemI;$i++)
{
  for($j=0;$j<$countElemJ;$j++)
  {
    if($j>$i) $sumUp=$sumUp+$masA[$i][$j];
    elseif($j<$i) $sumDown=$sumDown+$masA[$i][$j];
    else $sum=$sum+$masA[$i][$j];
  }
}
  echo "Cумма элементов выше главной диагонали = $sumUp.<br>Cумма элементов ниже главной диагонали - $sumDown.<br>Cумма элементов на главной диагонали - $sum";

?>
