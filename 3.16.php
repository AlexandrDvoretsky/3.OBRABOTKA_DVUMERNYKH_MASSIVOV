<?php
/* 3.16 В массив А(N,М) вставить одномерный массив В(N), расположив его перед
   последним столбцом, содержащим нулевой элемент. Если такого столбца не окажется,
   то вставить массив В(N) после последнего столбца.*/

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
     [12,11,2,3,-4],
     [0,13,6,7,8],
     [20,17,0,1,2],
   ];

   $masOd=[1,2,3];

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
       if($mas[$i][$j]==0)
       {
         $pos=$j;
         $countZero++;
       }
     }
   }

   if($countZero>=1)
   {
     for($r=0;$r<$countSlobl;$r++)
     {
       for($t=0;$t<$pos;$t++)
       {
         $masNew[$r][$t]=$mas[$r][$t];
       }
       for($t=$pos;$t<$pos+1;$t++)
       {
         $masNew[$r][$t]=$masOd[$r];
       }
       for($t=$pos+1;$t<$countSlobl+$countSlobl;$t++)
       {
         $masNew[$r][$t]=$mas[$r][$t-1];
       }
     }
   }
   else
   {
     for($r=0;$r<countElem($mas);$r++)
     {
       for($t=0;$t<countElem($mas[$r]);$t++)
       {
         $masNew[$r][$t]=$mas[$r][$t];
       }
       for($t=countElem($mas[$r]);$t<countElem($mas[$r])+1;$t++)
       {
         $masNew[$r][]=$masOd[$r];
       }

     }
   }

   for($i=0;$i<$countStrok+1;$i++)
   {
   for($j=0;$j<$countSlobl+1;$j++)
     {
       $mas[$i][$j]= $masNew[$i][$j];
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
