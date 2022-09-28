<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>lab1</title>
</head>
<body>
<?php

echo phpinfo();   
/////////////////////////////////
define('WebName',"HagarHosny");   
echo WebName;


//////////////////////
 echo $_SERVER; 

 /////////////////////////////////

$i = 0;
$num = 50;

while( $i < 10) {
   $num--;
   $i++;
}
echo "the o/p is:" $i,$num;
/////////////////////////////////



///////////////////////////////////

$array = array( 1, 2, 3, 4, 5);
   foreach( $array as $value ) {
   if( $value == 3 )
   continue;
   echo "Value is $value <br />";
}


///////////////////////////////////

$arr = array( 1, 2, 3, 4, 5);
         
foreach( $arr as $value ) {
   echo "Value is $value <br />";
}
$b = 0;
         while( $b < 10) {
            $b++;
            if( $b == 3 )break;
         }
echo $b ; 
///////////////////////////////////
       
$age = 10;

switch ($age) {
  case $age <= 5:
    echo "Stay at home";
    break;
  case $age==5:
    echo "Go to Kindergarden";
    break;
  case $age >= 6 && $age <= 12:
    echo "Go to grade one";
    break;
  default:
    echo "You are in primary school";
}
?>
</body>
</html>


