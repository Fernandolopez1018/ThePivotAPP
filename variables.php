<?php 
    $High              = 995.50;
    $Low               = 944.00;
    $Close             = 978.50;        
    $DailyPivot = $High = $Low + $Close;
    $PreSecondNumber      = $High+$Low;
    $SecondNumber      = $PreSecondNumber /2 ;
    $PivotDifferential = $DailyPivot - $SecondNumber;
    $PivotRange1       = $DailyPivot + $PivotDifferential;
    $PivotRange2       = $DailyPivot - $PivotDifferential;

echo "This is the Daily Pivot $DailyPivot";
echo "<br>";
echo "This is the Second Number $SecondNumber";
echo "<br>";
echo "This is the Pivot Differential $PivotDifferential";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "<br>";
echo "This is the Pivot Range 1 = $PivotRange1";
echo "<br>";
echo "This is the Pivot Range 2 = $PivotRange2";


?>