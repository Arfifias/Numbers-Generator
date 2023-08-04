<html lang="">
<head>
    <title>Random Numbers</title>
</head>
<body style="background-color: purple;">
<?php
function numbers($num1,$num2,$num3){
    echo "<h1 style='text-align: center;color: black'>Numbers Generator</h1><br>";
    echo "<h1 style = 'text-align: center; color: black;'>$num1-$num2-$num3</h1>";
    if($num1 == 9 && $num2 == 9 && $num3 == 9){
        echo "<h2 style='text-align: center;color: black;'>10000000 points</h2>";
    }else if ($num1 == 9 && $num2 == 9){
        echo "<h2 style='text-align: center;color: black;'>1000 points<h2>";
    }else{
        echo "<h2 style = 'text-align: center; color: black;'>You lost</h2>";
    }

}
$num1 = rand(0,9);
$num2 = rand(0,9);
$num3 = rand(0,9);

numbers($num1,$num2,$num3);
?>
</body>
</html>