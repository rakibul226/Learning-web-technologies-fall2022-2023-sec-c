


<!-- Calculating VAT -->
<?php
$amount =100;
$vat = $amount*(15/100);

echo "Total VAT is: " . $vat;
?>

<br><br>


<!-- Finding odd or even -->
<?php

$num = 10;
if ($num % 2 == 0)
 {
    echo "Given Number $num  is even";
 } else 
 {
  echo "Given Number $num  is odd";
 }

?>

<br><br>


<!-- Find the largest number  -->
<?php

$Number1 = 5;
$Number2 = 15;
$Number3 = 10;

if ($Number1 >= $Number2 && $Number1 >= $Number3) 
{
  echo"$Number1  is the largest Number";
} 
elseif ($Number2 >= $Number1 && $Number2 >= $Number3) 
{
  echo "$Number2 is the largest Number";
} 
else 
{
  echo "$Number3  is the largest Number";
}
?>

<br><br>

<!-- Printing all the odd number between 10 to 100 -->
<?php

for($num=10;$num<=100;$num++)
{
    if($num%2!==0)
    {
        echo "$num\n";
    }
}

?>


<br><br>
<!-- Printing the shapes -->

<?php 

    for($i=0;$i<=2;$i++)
    {        
        for($j=0;$j<=$i;$j++){
            echo "*";
        }
        echo "<br>";
    }

    echo "<br>";

    for($i=2;$i>=0;$i--)
    {
        $x=1;        
        for($j=0;$j<=$i;$j++){
            echo ($x. " ");
            $x=$x+1;
        }
        echo "<br>";
    }

echo "<br>";


    $k=65;
    for($i=0; $i<4; $i++)
    {
    for($j=0;$j<$i;$j++)
     {
        echo chr($k)," ";
        $k++;
     }
        echo"</br>";

    }


?>


</html>

