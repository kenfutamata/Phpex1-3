<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 2</title>
</head>

<body>
    <!-- 
    Sample Case #1
    Num 1: 1
    Num 2: 2
    Num 3: 3
    Num 4: 4

    Lowest Number: 1 - Num 1
    Highest Number: 4 - Num 4

    Sample Case #2
    Num 1: 1
    Num 2: 2
    Num 3: 3
    Num 4: 4

    Lowest Number: 1 - Num 1
    Highest Number: 4 - Num 4
    -->

    <h1>Exercise 2</h1>
    <form action="" method="get">
        Num 1 <input type="text" name="num1"><br /><br />
        Num 2 <input type="text" name="num2"><br /><br />
        Num 3 <input type="text" name="num3"><br /><br />
        Num 4 <input type="text" name="num4"><br /><br />
        <button class="display">Display</button>
    </form><br /><br />
    <?php
$highest = 0; 
$lowest = 0;
    // Do your code here
    if(isset($_GET["num1"])){
         
        $num1 = $_GET["num1"]; 
        $num2 = $_GET["num2"]; 
        $num3 = $_GET["num3"]; 
        $num4 = $_GET["num4"]; 
        
    
        if($num1 >= $num2 && $num1 >= $num3 && $num1 >= $num4){   
                $highest = $num1;
        }
        else if ($num2 >= $num1 && $num2 >= $num3 && $num2 >= $num4){
            $highest = $num2; 
        }
        else if($num3 >= $num1 && $num3 >= $num2 && $num3 >= $num4){
            $highest = $num3; 
        }
        else if($num4 >= $num1 && $num4 >= $num2 && $num4 >= $num3){
            $highest = $num4; 
        }

        if($num1 <= $num2 && $num1 <= $num3 && $num1 <= $num4){   
            $lowest = $num1;
         }
        else if ($num2 <= $num1 && $num2 <= $num3 && $num2 <= $num4){
        $lowest = $num2; 
         }
        else if($num3 <= $num1 && $num3 <= $num2 && $num3 <= $num4){
        $lowest = $num3; 
        }
        else if($num4 <= $num1 && $num4 <= $num2 && $num4 <= $num3){
        $lowest = $num4; 
        }
   
    }
    // OUTPUT
    echo "Lowest Number:".$lowest;
    echo "<br>";
    echo "Highest Number: ".$highest;
    ?>
</body>

</html>