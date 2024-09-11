<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $arrlist = array(
            [
            'Item' => "Laptop", 
            'Category' => "Electronics", 
            'Stock' => 30
            ],
            [
                'Item' => "Shampoo", 
                'Category'=> "Cosmetics", 
                'Stock' => 50
            ], 
            [
                'Item' => "Notebook", 
                'Category'=> "Stationery", 
                'Stock' => 30
            ]);

            echo "Initial Inventory:","<br>";
            foreach($arrlist as $arr){
                echo " ",$arr["Item"]," (Category: ",$arr["Category"], ") - Stock: ",$arr["Stock"], "<br>"; 
            }
            
            $arrayUpdated =
                [
                    'Item' => "Pen", 
                    'Category'=> "Stationery", 
                    'Stock' => 100
                ]
                ;

            array_push($arrlist, $arrayUpdated); 

            echo "Adding new product: ";
            
                echo "",$arr["Item"]," (Category: ",$arr["Category"]," ) - Stock: ",$arr["Stock"], "<br>";
                

                $arrupdate = 
                    [
                        'Item' => "Laptop",
                        'Category' => "Electornics", 
                        'Stock' => 20
                    ];
                    $productfound = 0; 
        
                    foreach($arrlist as $key =>$arr){
                        if($arr['Item'] == $arrupdate['Item']){
                            echo "Updating stock for: ",$arrupdate["Item"],"<br>"; 
                            $arrlist[$key]['Stock'] = $arrupdate['Stock'];
                            $productfound++; 
                        }
                    }

                    if($productfound == 0){
                        echo "Item not found<br>"; 
                    }

            echo "Updated Inventory<br>";
            foreach($arrlist as $arr){
                echo " ",$arr["Item"]," (Category: ",$arr["Category"], ") - Stock: ",$arr["Stock"], "<br>"; 
            }

            
    ?>
</body>
</html>