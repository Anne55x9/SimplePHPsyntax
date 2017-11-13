<?php
/**
 * Created by PhpStorm.
 * User: ASW
 * Date: 13/11/2017
 * Time: 11:57
 */

$numbers = $_REQUEST["numbers"];
$numbers_array = explode("",$numbers);
$sum = $sumIt($numbers_array);

function sumIt($num_array)
{
    $result = 0;
    foreach ($num_array as $num){
        $result += $num;
    }
    return $result;
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Result</title>
</head>
<body>
<h1>Array functions</h1>
<h2>Sum</h2>
<?php echo $sum ?>
<h2>Sorted</h2>
<?php
natsort($numbers_array);
print_r($numbers_array); ?>
<h2>Product</h2>
<?php echo array_product($numbers_array) ?>
</body>
</html>
