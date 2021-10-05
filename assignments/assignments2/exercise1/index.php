<?php

$firstNum = 2;
$secondNum = 6;
$listStr = "";

for($i = 1; $i<=$firstNum; $i++)
    {
        $listStr .= "<li>list item " . (string)$i . "\n <ol> \n"; 

        for($j = 1; $j<=$secondNum; $j++)
            {
                $listStr .= "<li>sublist item </li>"; 
            }   
        $listStr .= "</ol> \n </li> \n"; 
    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p> <?php echo $listStr ?> </p>
</body>
</html>