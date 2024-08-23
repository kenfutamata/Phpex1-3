<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        Starting number: <input type="text" name="startingNumber">
        <br>
        <br>
        Ending number: <input type="text" name="endingNumber">
        <br>
        <br>
        <button type="submit" name="display">Display</button>
    </form>

    <?php
        $startingNumber = 0; 
        $endingNumber = 0; 
        if(isset($_POST["display"])){
            $startingNumber = $_POST["startingNumber"]; 
            $endingNumber = $_POST["endingNumber"]; 
            if($startingNumber >= $endingNumber){
                echo"Starting Number: ",$startingNumber, " <br>"; 
                echo"Ending Number: ",$endingNumber, "<br>"; 
                echo"Odd Numbers: ",reverseOdd($startingNumber, $endingNumber),"<br>";
                echo"Even Numbers: ",reverseEven($startingNumber, $endingNumber),"<br>";
                echo"Divisible by 3 Numbers: ",reverseDivisibleBy3($startingNumber, $endingNumber),"<br>"; 
                echo"Divisible by 5 Numbers:",reverseDivisibleBy5($startingNumber, $endingNumber),"<br>";
                echo"List of prime numbers: ",reversePrimeNumbers($startingNumber, $endingNumber),"<br>"; 
            }
            else{
                echo"Starting Number: ",$startingNumber, " <br>"; 
                echo"Ending Number: ",$endingNumber, "<br>"; 
                echo"Odd Numbers: ",oddNumbers($startingNumber, $endingNumber), "<br>";
                echo"Even Numbers: ",evenNumbers($startingNumber, $endingNumber),"<br>";
                echo"Divisible by 3 Numbers: ",divisibleBy3Numbers($startingNumber, $endingNumber),"<br>"; 
                echo"Divisible by 5 Numbers:",divisibleBy5Numbers($startingNumber, $endingNumber),"<br>";
                echo"List of prime numbers: ",primeNumbers($startingNumber, $endingNumber),"<br>"; 
            }
        }

            function oddNumbers($startingNumber, $endingNumber){
                for($i = $startingNumber; $i <=$endingNumber; $i++){
                   if($i % 2 != 0) 
                        echo $i," ";
                } 
            }

            function evenNumbers($startingNumber, $endingNumber){
                for($i = $startingNumber; $i <=$endingNumber; $i++){
                    if($i % 2 == 0)
                    echo $i," ";  
                }  
            }

            function divisibleBy3Numbers($startingNumber, $endingNumber){
                for($i = $startingNumber; $i <=$endingNumber; $i++){
                    if($i % 3 == 0)
                        echo $i," "; 
                } 
            }

            function divisibleBy5Numbers($startingNumber, $endingNumber){
                for($i = $startingNumber; $i <=$endingNumber; $i++){
                    if($i % 5 == 0)
                        echo $i," "; 
                } 
            }

            function primeNumbers($startingNumber, $endingNumber){
                if($startingNumber < 2){
                    $startingNumber = 2; 
                }
                while($startingNumber<$endingNumber){
                    $count = 0; 
                    for($i = 1; $i <=$startingNumber; $i++){
                        if(($startingNumber%$i)==0){
                            $count++; 
                        }
                    }
                    if($count < 3){
                        echo $startingNumber, " "; 
                    }
                    $startingNumber = $startingNumber+1; 
                }
               
            }
            $reverseodd = [];
            function reverseOdd($startingNumber, $endingNumber){
                for($i = $startingNumber; $i >= $endingNumber; $i--){
                    if($i % 2 != 0)
                    echo $i." "; 
                }
            }

            function reverseEven($startingNumber, $endingNumber){
                for($i = $startingNumber; $i >= $endingNumber; $i--){
                    if($i % 2 == 0)
                    echo $i." "; 
                    }
            }
            
            function reverseDivisibleBy3($startingNumber, $endingNumber){
                for($i = $startingNumber; $i >= $endingNumber; $i--){
                    if($i % 3 == 0)
                    echo $i." "; 
                    }
            }

            function reverseDivisibleBy5($startingNumber, $endingNumber){
                for($i = $startingNumber; $i >= $endingNumber; $i--){
                    if($i % 5 == 0)
                    echo $i." "; 
                    }
            }
            

            function reversePrimeNumbers($startingNumber, $endingNumber){
                if($endingNumber < 2){
                    $endingNumber = 2; 
                }
                while($startingNumber>=$endingNumber){
                    $count = 0; 
                    for($i = 1; $i <=$startingNumber; $i++){
                        if(($startingNumber%$i)==0){
                            $count++; 
                        }
                    }
                    if($count < 3){
                        echo $startingNumber, " "; 
                    }
                    $startingNumber = $startingNumber-1; 
                }
            }
        /*function oddNumbers($startingNumber, $endingNumber){
            for($i = $startingNumber; $i <=$endingNumber; $i++){
                $oddNumbers[$i] = " " .$i; 
            }
            return $oddNumbers;
        }*/
       
        /*foreach($key as $odd){
            echo $key;
        }*/

    ?>
</body>
</html>