

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
