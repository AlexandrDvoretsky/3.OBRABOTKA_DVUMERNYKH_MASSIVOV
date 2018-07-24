<?php
  // 3.3 В массиве А(N,М) найти максимальный и минимальный элементы среди всех элементов тех строк, которые упорядочены по возрастанию или по убыванию.

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

  function boolSortAsc($m,$c)
  {
    $mas=$m;
    $count=$c;
    for($k=1;$k<$count;$k++)
    {
       for($r=0;$r<$count-1;$r++)
       {
         if($mas[$r]<$mas[$r+1])
         {
           $result++;
           $countResult++;
         }
         else
         {
           $result++;
           $countResult-=2;
         }
       }
    }
   if($result==$countResult) $res=true;
   else $res=false;
   return $res;
  }

  function boolSortWan($m,$c)
  {
    $mas=$m;
    $count=$c;
    for($k=1;$k<$count;$k++)
    {
       for($r=0;$r<$count-1;$r++)
       {
         if($mas[$r]>$mas[$r+1])
         {
           $result++;
           $countResult++;
         }
         else
         {
           $result++;
           $countResult--;
         }
       }
    }
   if($result==$countResult) $res=true;
   else $res=false;
   return $res;
  }

  $mas = [
    [10,9,8,7,6,0],
    [-1,2,3,4,5],
    [10,12,16,19,15,20],
    [2,3,14,18],
  ];

  for($i=0;$i<countElem($mas);$i++)
  {
    for($j=0;$j<countElem($mas[$i]);$j++)
    {
      echo $mas[$i][$j]." | ";
    }
    echo "<br>";
  }
  $max=0;$min=0;
  for($i=0;$i<countElem($mas);$i++)
  {
    for($j=0;$j<countElem($mas[$i]);$j++)
    {
      if(boolSortAsc($mas[$j],countElem($mas[$j])))
      {
        for($r=0;$r<countElem($mas[$j]);$r++)
        {
          if($mas[$j][$r]>$maxNumUp) $maxNumUp=$mas[$j][$r];
        }
        if($i==0) $minNumUp=$maxNumUp;
        for($r=0;$r<countElem($mas[$j]);$r++)
        {
          if($mas[$j][$r]<$minNumUp) $minNumUp=$mas[$j][$r];
        }
      }
      if(boolSortWan($mas[$j],countElem($mas[$j])))
      {
        for($r=0;$r<countElem($mas[$j]);$r++)
        {
          if($mas[$j][$r]>$maxNumDown) $maxNumDown=$mas[$j][$r];
        }
        if($i==0) $minNumDown=$maxNumDown;
        for($r=0;$r<countElem($mas[$j]);$r++)
        {
          if($mas[$j][$r]<$minNumDown) $minNumDown=$mas[$j][$r];
        }
      }
    }
   if($maxNumUp>$maxNumDown) $max=$maxNumUp;
   else $max=$maxNumDown;

    if($minNumUp>$minNumDown) $min=$minNumDown;
    else $min=$minNumUp;
  }
  echo "<br>Максимальный и минимальный элементы среди возрастаниющих и убываниющих строк $max и $min";
?>
