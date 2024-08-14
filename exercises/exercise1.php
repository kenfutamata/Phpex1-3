<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercise 1</title>
</head>

<body>
    <!-- 
    Options under Employee Status:
    Regular
    Probationary
    Casual

    Salary Rate:
    Regular - 500
    Probationary - 400
    Casual - 300

    Options under Civil Status:
    Single
    Married
    Widow

    Tax Rate:
    Single - 12%
    Probationary - 10%
    Casual - 7% 
    
    Sample Case #1:
    No. of Days Worked: 15
    Employee Status:    Regular
    Civil Status:       Single
    Result:

    Gross Salary:       7,500.00
    Tax:                12%
    Deduction:          900.00
    Net Salary:         6,600.00

    Sample Case #2:
    No. of Days Worked: 15
    Employee Status:    Probationary
    Civil Status:       Married
    Result:

    Gross Salary:       4,800.00
    Tax:                10%
    Deduction:          480.00
    Net Salary:         4,320.00
    -->
    
    <h1>Exercise 1</h1>
    <form action="">
        No. of Days Worked <input type="text" name="daysWorked"><br /><br />
        Employee Status:
        <select name="employeeStatus">
            <option>Emp. Status</option>
            <option value="Regular">Regular</option>
            <option value="Probationary">Probationary</option>
            <option value="Casual">Casual</option>
        </select><br /><br />
        Civil Status:
        <select name="civilStatus">
            <option>Civil Status</option>
            <option value="Single">Single</option>
            <option value="Married">Married</option>
            <option value="Widow">Widow</option>
        </select><br /><br />
        <button class="submit">Compute Salary</button>
    </form><br /><br />
    <?php
    // Do your code here
        $grossSalary = 0;
        $tax = 0; 
        $civilStatus = ""; 
        $numberofdaysWorked = 0; 
        $deductSalary = 0;
        $totalfinal = 0;
        if(isset($_GET["employeeStatus"])){
            $employeesStatus = $_GET["employeeStatus"]; 
            $civilStatus = $_GET["civilStatus"];
            $numberofdaysWorked = $_GET["daysWorked"];            
            if($employeesStatus == "Regular"){
                $tax = 12;
                $grossSalary = regular($numberofdaysWorked); 
                $deductSalary = deductRegular($grossSalary);
                $totalfinal = totalRegular($deductSalary, $grossSalary);
                
            }
            elseif($employeesStatus == "Probationary"){
                $tax = 10; 
                $daysWorked = $numberofdaysWorked;
                $grossSalary = probationary($daysWorked); 
                $deductSalary = deductProbationary($grossSalary); 
                $totalfinal = totalProbationary($deductSalary, $grossSalary); 
            }
            elseif($employeesStatus == "Casual"){
                $tax = 7; 
                $daysWorked = $numberofdaysWorked;
                $grossSalary = casual($daysWorked); 
                $deductCasual = deductCasual($grossSalary); 
                $totalfinal = totalCasual($deductCasual, $grossSalary); 
            }

        }
        function regular($daysWorked){  
            $regular = $daysWorked*500;  
            return $regular;
        }

        function probationary($daysWorked){  
           // $deductSalary = deductProbationary($daysWorked*400); 
            return $daysWorked*400; 
        }

        function casual($daysWorked){
            //$casual = $daysWorked*300
            //$deductSalary =  deductcasual($casual); 
            return $daysWorked*300; 
        }

        function deductRegular($deductRegular){
            $regularDeduct = $deductRegular*0.12;
            return $regularDeduct;
        } 

        function deductProbationary($deductProbationary){
            $regularProbationary = $deductProbationary*0.10;
            return $regularProbationary;
        } 
    
        function deductCasual($deductCasual){
            $regularCasual = $deductCasual*0.7;
            return $regularCasual;
        } 
        
        function totalRegular($deductRegular, $grossSalary){
            $final = $grossSalary - $deductRegular; 
            return $final; 
        }

        function totalProbationary($deductRegular, $grossSalary){
            $final = $grossSalary - $deductRegular; 
            return $final; 
        }

        function totalCasual($deductRegular, $grossSalary){
            $final = $grossSalary - $deductRegular; 
            return $final; 
        }

    // OUTPUT

            echo "Gross Salary:".$grossSalary;
            echo "<br>"; 
            echo "Tax: ".$tax."%";
            echo "<br>";
            echo "Deduction: ". $deductSalary;
            echo "<br>";
            echo "Net Salary: ". number_format($totalfinal, 2);

    ?>


</body>

</html>