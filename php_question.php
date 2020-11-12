*******************************  Fibonacci Series   *********************************
1) Using Recursive way

<?php   
// PHP code to get the Fibonacci series 
// Recursive function for fibonacci series. 
function Fibonacci($number){ 
      
    // if and else if to generate first two numbers 
    if ($number == 0) 
        return 0;     
    else if ($number == 1) 
        return 1;     
      
    // Recursive Call to get the upcoming numbers 
    else
        return (Fibonacci($number-1) +  
                Fibonacci($number-2)); 
} 
  
// Driver Code 
$number = 10; 
for ($counter = 0; $counter < $number; $counter++){   
    echo Fibonacci($counter),' '; 
} 
?> 


2) Using the iterative way
<?php 
// PHP code to get the Fibonacci series 
function Fibonacci($n){ 
  
    $num1 = 0; 
    $num2 = 1; 
  
    $counter = 0; 
    while ($counter < $n){ 
        echo ' '.$num1; 
        $num3 = $num2 + $num1; 
        $num1 = $num2; 
        $num2 = $num3; 
        $counter = $counter + 1; 
    } 
} 
  
// Driver Code 
$n = 10; 
Fibonacci($n); 
?> 

*******************************  Check if a number is prime   *********************************

1) Simple Method
<?php 
// PHP code to check wether a number is prime or Not 
// function to check the number is Prime or Not 
function primeCheck($number){ 
    if ($number == 1) 
    return 0; 
    for ($i = 2; $i <= $number/2; $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
  
// Driver Code 
$number = 31; 
$flag = primeCheck($number); 
if ($flag == 1) 
    echo "Prime"; 
else
    echo "Not Prime"
?> 

2) Efficient Method

<?php 
// PHP code to check wether a number is prime or Not 
// function to check the number is Prime or Not 
function primeCheck($number){ 
    if ($number == 1) 
    return 0; 
      
    for ($i = 2; $i <= sqrt($number); $i++){ 
        if ($number % $i == 0) 
            return 0; 
    } 
    return 1; 
} 
  
// Driver Code 
$number = 31; 
$flag = primeCheck($number); 
if ($flag == 1) 
    echo "Prime"; 
else
    echo "Not Prime"
?> 


*******************************  Factorial of a number   *********************************

1) Iterative way

<?php 
// PHP code to get the factorial of a number 
// function to get factorial in iterative way 
function Factorial($number){ 
    $factorial = 1; 
    for ($i = 1; $i <= $number; $i++){ 
      $factorial = $factorial * $i; 
    } 
    return $factorial; 
} 
  
// Driver Code 
$number = 10; 
$fact = Factorial($number); 
echo "Factorial = $fact"; 
?> 

2) Use of recursion

<?php 
// PHP code to get the factorial of a number 
// function to get factorial in iterative way 
function Factorial($number){ 
    if($number <= 1){   
        return 1;   
    }   
    else{   
        return $number * Factorial($number - 1);   
    }   
} 
  
// Driver Code 

$number = 10; 
$fact = Factorial($number); 
echo "Factorial = $fact"; 
?> 

*******************************  Write a program for this pattern ?   *********************************

1) 
* * * * * 
* * * * 
* * * 
* * 
*

<?php
for($i=0;$i<=5;$i++){
for($j=5-$i;$j>=1;$j--){
echo "*&nbsp;";
}
echo "<br>";
}
?>

2) 
*
* *
* * *
* * * *
* * * * *

<?php
for($i=0;$i<=5;$i++){
for($j=1;$j<=$i;$j++){
echo "*&nbsp;";
}
echo "<br>";
}
?>

3) 
*
*  *
*  *  *
*  *  *  *
*  *  *  *  *
*  *  *  *  *  *
*  *  *  *  *
*  *  *  *
*  *  *
*  *
*

<?php
for($i=0;$i<=6;$i++){
for($k=6;$k>=$i;$k--){
echo " &nbsp;";
}
for($j=1;$j<=$i;$j++){
echo "* &nbsp;";
}
echo "<br>";
}
for($i=5;$i>=1;$i--){
for($k=6;$k>=$i;$k--){
echo " &nbsp;";
}
for($j=1;$j<=$i;$j++){
echo "* &nbsp;";
}
echo "<br>";
}
?>

4) 
*****
*****
*****
*****
*****

<?php
for ($a=1; $a<=5; $a++)
{
	for($b=1; $b<=5; $b++)
	{
		echo "*";
	}
	echo "<br>";
}
?>

5) 
        * 
      * * 
    * * * 
  * * * * 
* * * * * 
<?php
function pypart2($n) 
{ 
    for ($i = 1; $i <= $n; $i++) { 
        for ($j = 1; $j <= $n; $j++) { 
            if($j<=($n-$i)){ 
                echo " "." "; 
                  
            }else { 
                echo "* "; 
            } 
              
        } 
        echo PHP_EOL; 
    }  
} 
    // Driver Code 
    $n = 5; 
    pypart2($n); 
?>

*******************************  number armstrong or not   *********************************

<?php
if(isset($_POST['submit']))
{
$number = $_POST['num'];      // get the number entered by user
$temp = $number;
$sum  = 0;
while($temp != 0 )
{
$remainder   = $temp % 10; //find reminder
$sum         = $sum + ( $remainder * $remainder * $remainder );
$temp        = $temp / 10;
}
if( $number == $sum )
{
echo "$number is an Armstrong Number";
}else
{
echo "$number is not an Armstrong Number";
}
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Whether a number Armstrong or not</title>
</head>
<body>
 <form name="armstrong" action="" method="post">
 Number :<input type="text" name="num" value="" required=""><br>
 <input type="submit" value="Submit" name="submit">
 </form>
</body>
</html>


*******************************  a year leap year or not    *********************************
<?php
if(isset($_POST['submit']))
{
$year=$_POST['year'];
if($year%4==0)
{
echo "It is a leap year";
}
else
 {
   echo "It is not a leap year";
 }
}
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 <title>Leap year</title>
 </head>
 <body>
 <form name="leapyear" action="" method="post">
 Year :<input type="text" name="year" value="" required=""><br /><br />
 <input type="submit" value="Submit" name="submit">
 </form>
 </body>
 </html>

 *******************************  Write a program for this pattern(number pyramid)     *********************************

1
22
333
4444
55555

<?php
for($i=1;$i<=5;$i++)
{
for($j=1;$j<=$i;$j++)
{
print("$i");
}
print "<br>";
}
?>

*******************************  print a number reverse     *********************************
<?php
if(isset($_POST['submit']))
{
         $rev=0;
         $num=$_POST['num'];
          while($num>=1)
                {
                  $re=$num%10;
                  $rev=$rev*10+$re;
                  $num=$num/10;
                 }
                   echo "Reverse number of is " .$rev;
}
?>
<!DOCTYPE html>
 <html>
 <head>
 <title>Reverse of a number</title>
 </head>
 <body>
 <form name="reversenumber" action="" method="post">
 Number :<input type="text" name="num" value="" required=""><br>
 <input type="submit" value="Submit" name="submit">
 </form>
 </body>
 </html>

 *******************************  Swap two values without third variable ?     *********************************
 <?php
if(isset($_POST['submit']))
{
$value1=$_POST['num1'];
$value2=$_POST['num2'];
$value1=$value1+$value2;
$value2=$value1-$value2;
$value1=$value1-$value2;
        echo "Value of first variable after swapping" .$value1."<br />";
        echo "Value of second variable after swapping"  .$value2;
}
?>
<!DOCTYPE html>
 <html>
 <head>
 <title>Swap two values without third Variable</title>
 </head>
 <body>
 <form name="factorial" action="" method="post">
 Number 1 :<input type="text" name="num1" value="" required=""><br /><br />
 Number 2 :<input type="text" name="num2" value="" required=""><br />
 <input type="submit" value="Submit" name="submit">
 </form>
 </body>
 </html>

 *******************************  Write a Program to swap two numbers in PHP.     *********************************

 <?php

$a=15;
$b=10;
echo "The value of a is ".$a." and b is ".$b;
echo " before swapping.<br />";
$temp=$a;
$a=$b;
$b=$temp;
echo "The value of a is ".$a." and b is ".$b;
echo " After swapping <br />";

?>


*******************************  Write a Program for finding the smallest number in an array     *********************************
<?php

$numbers=array(12,23,45,20,5,6,34,17,9,56);
$length=count($numbers);
$min=$numbers[0];
for($i=1;$i<$length;$i++)
  {
      if($numbers[$i]<$min)
        {
          $min=$numbers[$i];
        }
  }
echo "The smallest number is ".$min;
?>

*******************************  Write a program to print the below format      *********************************
1 5 9
2 6 10
3 7 11
4 8 12

<?php
for($i=1;$i<=4;$i++)
{
 $i1=$i+4;
 $i2=$i+8;
echo $i." ".$i1." ".$i2;
echo "<br />";
}
?>

*******************************  Write a program to print the below Pattern    *********************************

*****
*    *
*    *
*    *
*****

<?php
for($i = 1; $i<=5; $i++){
            for($j = 1; $j<=5; $j++){
               if($i == 1 || $i == 5){
                   echo "*";
               }
               else if($j == 1 || $j == 5){
                   echo "*";
               }
               else {
                   echo "&nbsp;&nbsp;";
               }
            }
            echo "<br/>";
		}
?>

*******************************  Write a program to print the below Pattern    *********************************

*0
***00
******000
**********0000
***************00000

<?php

$k = 0;
for ($i=1; $i<=5; $i++)
{
    $k += $i;
    for ($j=1; $j<=$k; $j++)
    {   
       echo "*";
    }
        for ($z=0; $z<$i; $z++)
            {
                echo "0";
            }       
    echo "</br>";    
}
?>

*******************************  How to write a Floyd's Triangle? *********************************

1
23
456
78910
1112131415

<?php
$a = 1;
for($i = 1; $i<=5; $i++)
{
    for($j = 1; $j<=$i; $j++)
    {
        echo $a;
        $a++;
    }
    echo '<br/>';
}
?>

*******************************  Write a program to make a chess: *********************************

<table width="270px" cellspacing="0px" cellpadding="0px" border="1px">  
   <!-- cell 270px wide (8 columns x 60px) -->  
      <?php  
      for($row=1;$row<=8;$row++)  
      {  
          echo "<tr>";  
          for($col=1;$col<=8;$col++)  
          {  
          $total=$row+$col;  
          if($total%2==0)  
          {  
          echo "<td height=30px width=30px bgcolor=#FFFFFF></td>";  
          }  
          else  
          {  
          echo "<td height=30px width=30px bgcolor=#000000></td>";  
          }  
          }  
          echo "</tr>";  
    }  
          ?>  
  </table>

  ********************concatenate two strings character by character.e.g:JOHN + SMITH =JSOMHINTH *********************************

<?php

 $str= "JOHN";
$str2 = "SMITH";
$a = str_split($str);
$a2 = str_split($str2);
 
static $j = 0;
  for($i = 0; $i<= 9; $i++){
   if($i%2 !== 0 && $i >0) {
    array_splice($a,$i,0,$a2[$j]);
   $j++;
    }
  }
 
 echo $str_new = implode('',$a);
 echo '<br/>';
?>

*******************************  Write a program to find second highest number in an array. *********************************

<?php 
$array = array('200', '12','69','250','50','500');
 
$maxnum1 = 0;
$maxnum2 = 0;
 
for($i=0; $i< count($array); $i++)
{
    if($array[$i] > $maxnum1)
    {
      $maxnum2 = $maxnum1;
      $maxnum1 = $array[$i];
    }
    else if($array[$i] > $maxnum2)
    {
      $maxnum2 = $array[$i];
    }
}

echo "Second Maximum NO is ".$maxnum2; 
?>

******************************* Program to find the LCM of two numbers. *********************************

<?php

if(isset($_POST['submit']))
{
 
    $num1=$_POST['number1'];
    $num2=$_POST['number2'];
 
    $hcf = gcd($num1, $num2);
    $lcm = ($num1*$num2)/$hcf;
}
 
 function gcd($x, $y)
  {
		if ($x == 0) {
		return $y;
		}
		
		while ($y != 0) {
			if ($x > $y) {
			   $x = $x - $y;
			}
			else {
			   $y = $y - $x;
			}
		}
    return $x;
  }
?>


******************************* Find missing number ********************************
<?php
$a=[0,1,2,3,4,6,7,8,10,11,12,13,15];
$position=0;
$count=0;
$flag=false;
findmissingnumber($position,$a);
function findmissingnumber($position,$a)
{
  if($position==sizeof($a)-1)
      return;
  
  for(;$position < $a[sizeof($a)-1];$position++)
    {
      if(($a[$position]-$GLOBALS['count'])!=$position)
            {
              print("Missing Number is:".($position + $GLOBALS['count']));
              $flag=true;
              $GLOBALS['count']++;
              break;
            }
    }
  if($flag)
    {
      $flag=false;
      findmissingnumber($position,$a);
    }
}

?>

******************************* Array sorting without using inbuild function ********************************
<?php
$array= array(1, 6, 23, 10, 3, 2, 15,7); 

    for($i=0; $i<count($array)-1; $i++)
    {
        for($j=0; $j<count($array)-1; $j++)
        {
            if($array[$j]> $array[$j+1]){
                $temp= $array[$j+1];
                $array[$j+1]= $array[$j];
                $array[$j]= $temp;
            }
        }

    }
    print_r($array);
  ?>

  *******************************  ********************************