<?php

$rows = 15;
$columns = 5;
$listStr = '<table border="1">';

for($i = 1; $i<=$rows; $i++)
    {
        $listStr .= "<tr>\n"; 
        $strRow = (string)$i;

        for($j = 1; $j<=$columns; $j++)
            {
                $strColumn = (string)$j;
                $listStr .= "<td>Row $strRow Cell $strColumn</td>\n"; 
            }   
        $listStr .= "</tr>\n"; 
    }

$listStr.="</table>";

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