<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BASICS of the PHP language as backend</title>
    <style>
        *{
            padding: 0px;
            margin:0px;
        }
        .container{
            width: 80%;
            display:block;
            margin: auto;
            padding: auto;
           background-color: pink;

        }
    </style>
</head>
<body>
    <div class="container">
        <H3>Let's learn about PHP</H3>
        <P>You party status is here :</P>
 
    <?php
        $age=90;
        if($age>=18){
            echo "<Strong>Wellcome to party </Strong><br>";
        }
        else if($age == 7){
            echo "You are  $age years old ";
        }
        else if($age == 6){
            echo "You are  $age years old ";
        }
        else{
            echo "You are not invited to the party ";  
        }
        $language = array("python",7,"c++","C#",'a');
        echo $language[0];
        echo "<br>";
        echo $language[1];
        echo "<br>";
        echo $language[2];
        echo "<br>";
        echo $language[3];
        echo "<br>";
        echo $language[4];
        // echo $language[5];


        //While loop in PHP
        echo "<br>";
        $a=0;
        while($a<10){
            echo "<br>The value of  a is while loop $a";
            $a++;
        }

        //do while loop in PHP
        echo "<br>";
        $a=0;
        do{
            echo "<br>The value of  a is do while loop $a";
            $a++;
        }
        while($a<10);
        echo "<br>";
        //for loop;
        for($a=0;$a<10;$a++){
            echo "<br> The value of a for the for loop is $a";
        }
        echo "<br>";
        foreach($language as $value){
            echo "<br> The value from foreach loop is $value";
        }
        ////////////////////////////////
        var_dump($language);
        ///////////////////////////////


        // Function in PHP

        function printNumber($num){
            echo "<br> You have entered the number $num ";
        }
        echo "<br>";
        printNumber(9);
        printNumber(99);
        printNumber(999);
        printNumber(9999);
        
    ?>  
    </div>
</body>
</html>