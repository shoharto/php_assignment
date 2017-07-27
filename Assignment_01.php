<?php
/**
 * Find Largest Number From Three Variables
 * Created by Bayes Ahmed Shoharto.
 * Date: 27-Jul-17
 * Time: 08:00 PM
 */

$one = 100;
$two = 200;
$three = 300;
if ($one>$two)
{
   if($one>$three)
      {echo "The Largest Number is: $one ";}
   else
      {echo "The Largest Number is: $three ";}
 }
else
{
if ($two>$three)
    {echo "The Largest Number is: $two";}

else
    {echo "The Largest Number is: $three ";}
}

?>