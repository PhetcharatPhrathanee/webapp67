<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>wrteMessage function</title>
</head>
<body>
    <?php
        function addFunction($num1, $num2)
        { //start function
            $num = $num1 + $num2;
            return $num;
        }
        $return_value = addFunction(10, 20);
        
        echo "the value of return from addFunction is $return_value";
        ?>    
</body>
</html>