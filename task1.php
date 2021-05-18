<?php  
// 1.program to print string a value using echo and print
 
echo "dffnsk"."<br>";
print "adfghdsrrdfg"."<br>";
        
//2.program to print in a single statement by assigning two values to two variables
 
$a=10;
$b=20;
echo "a:",$a," ","b:",$b."<br>";
 
//3.program for sum of 2 numbers without using functions
 
$c=5;
$d=5;
echo $c+$d."<br>";
 
/*4.program to assign some different values on different data types 
and print them with datatype and values*/
$r="100";
var_dump($r);


 
/*5.program for Checking the difference errors that occurs at which conditions 
by using the comments too*/
 
      //warning error
 
include ('app.php');
 
     //notice error
 
 echo $y; 
 
     //parse error
 
    //print $a,$b;
 
    /*fatal error
   myfun();*/
 
//6. program for local variables
 
function local(){
    $x=100;
    echo $x."<br>";
}
local();
 
//7. program for global variables
 
$t=1000;
function globalone(){
    global $t;
    echo $t."<br>";
}
globalone();
 
//8. program for static Variables
 
function e(){
    static $i=4;
    echo $i."<br>";
    $i--;
}
e();
e();
 
/*9.Write a program for 2 or more values assigned to the different variables 
and use all the athematic operations and print all the values*/    
 
$g=6;
$p=8;
echo $g+$p."<br>";
echo $g-$p."<br>";
echo $g*$p."<br>";
echo $g%$p."<br>";
echo $g/$p."<br>";
 
/*10.program for addition of 2 numbers 
and that should be stored in already existing variable*/   
 
$h=3;
$j=2;
echo $h+=$j."<br>";
 
//11.Program for show the difference between “==” and “===” 
 
$k=4;
$l="4";
var_dump($k==$l)."<br>";
 
var_dump($k===$l)."<br>";
 
/*12. program for assigned the variable for 
   different increment and decrement operations*/  
 
   function incrdcr(){
    static $f=4;
    echo $f."<br>";
    //$f++;
    $f--;
    
}
incrdcr();
incrdcr();
 
?>