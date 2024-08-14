<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 3</title>
</head>

<body>
    <!--
    Create a program that convert the temperature from Fahrenheit to Celcius with remark. Use the table below for the temperature remark.

    -----------------------------------------
    |    Temperature    |       Remark      |
    -----------------------------------------
    |  0 and below      |  Freezing point   |
    -----------------------------------------
    |  100 and above    |  Boiling point    |
    -----------------------------------------
    |  1 to 25          |  Cold             |
    -----------------------------------------
    |  26 to 40         |  Warm             |
    -----------------------------------------
    |  41 to 99         |  Hot              |
    -----------------------------------------

    Fahrenheit to Celcius formula: °C = (°F - 32) × 5/9

    Sample Case #1:
    Fahrenheit: 80

    Celcius: 26.67
    Remarks: Warm

    Sample Case #2:
    Fahrenheit: 200

    Celcius: 93.33
    Remarks: Hot
    -->

    <h1>Exercise 3</h1>
    <form action="">
        Fahrenheit: <input type="text" name="inputFahrenheit"> <button>Convert</button>
    </form><br /><br />
    <?php
     $remarks = ""; 
     $finaltotal = 0;
    // Do your code here
        if(isset($_GET["inputFahrenheit"])){
            $inputFahrenheit = $_GET["inputFahrenheit"]; 
            $total = ($inputFahrenheit-32)*5/9;
            $finaltotal = $total; 
            if($total <= 0){
                $remarks = "Freezing Point"; 
            }
            elseif($total <=25){
                $remarks = "Cold"; 
            }
            elseif($total <=40){
                $remarks = "Warm";
            }
            elseif($total <=99){
                $remarks = "Hot";
            }
            elseif($total >=100){
                $remarks = "Boiling Hot"; 
            }
            
        }
    // OUTPUT
    echo "Celcius: ".number_format($finaltotal,2);
    echo "<br>";
    echo "Remarks: ".$remarks;
    ?>
</body>

</html>