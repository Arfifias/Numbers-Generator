<html lang="">
<head>
    <title>Random Numbers</title>
</head>
<body style="background-color: purple;">
<?php
/*
 * Bellow is the function that changes the numbers by a refresh
 * In each case three messages can appear
 * Enjoy this is a small mini game
 */
function numbers($num1,$num2,$num3){
    echo "<h1 style='text-align: center;color: black'>Numbers Generator</h1><br>";//Title
    echo "<h1 style = 'text-align: center; color: black;'>$num1-$num2-$num3</h1>";//The actual numbers
    if($num1 == 9 && $num2 == 9 && $num3 == 9){
        echo "<h2 style='text-align: center;color: black;'>10000000 points</h2>";//1st possible message
    }else if ($num1 == 9 && $num2 == 9){
        echo "<h2 style='text-align: center;color: black;'>1000 points<h2>";//2nd possible message
    }else{
        echo "<h2 style = 'text-align: center; color: black;'>You lost</h2>";//3rd possible message
    }

}
$num1 = rand(0,9);
$num2 = rand(0,9);
$num3 = rand(0,9);

/*
 * In the lines above in the num variables the line which changes the numbers is inserted
 * The numbers can change from 0 to 9
 * Please enjoy
 */

numbers($num1,$num2,$num3);//Calling the function!!!
?>
</body>
</html>