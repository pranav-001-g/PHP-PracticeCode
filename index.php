<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP tutorial </title>
</head>
<body>
     this is my first program
     <?php
        echo "Hello world and this is printed using php ";
        
        //Operators in PHP

        //Arithmatic Operations
        
        echo " <br> <br> Arithmatic Operations";
        echo "<br> <br>";  
        $a=9;
        $b=5;
        echo "The value of a is = ";
        echo $a ;
        echo " <br>" ;
        echo "The value of b is = " ;
        echo $b;
        echo " <br>";

        Echo "Addition of a + b is = "; 
        echo $a + $b ;
        echo " <br>";  
        Echo "Multiplication of a * b is = ";
        echo $a*$b ;
        echo" <br>";  
        Echo "Division  of a / b is = "   ;  
        Echo  $a/$b;
        echo " <br>";  
        Echo "Subtraction of a - b is = ";
        echo  $a-$b;
        echo  " <br>";  

        echo " <br> <br> Assigment  Operations";
        echo "<br> <br>";  

        echo " Assigment Operator '=' <br> ";
        $c= $a;
        echo " New variable is c and c = a <br>";
        
        echo " The value of  c= $c <br> ";
        $c+=2;
        echo " addition assigment c  <br> ";

        echo "<b> var_dump(1<=0) is ";
        
        echo var_dump(1<=0); echo"<br>";
    

     ?>
    <?php
        echo "Hello world prinded once again";
    ?>
</body>
</html> 