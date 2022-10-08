<html>
<head><title>My Web Page</title></head>
<?php

    $content = "Welcome to PHP Programming";
    $a = 5;
    $_msg = 'Hello, again';

    $x = 8;
    $y = 2;

    echo $content;
    echo "<br>".$a;
    echo "<br>";
    echo $_msg;

    // Arithmetic operations

    echo "<br>";
    echo $x + $y;
    echo "<br>";
    echo $x - $y;
    echo "<br>";
    echo $x * $y;
    echo "<br>";
    echo $x / $y;
    echo "<br>";
    echo $x % $y;
    echo "<br>";
    echo $x ** $y;
    echo "<br>";

    // Comparison operators

    echo "<br>";
    if($x===$y) echo "They are identical";
    else echo "They are not identical";

    // Increment/decrement operators
    // For loop
    for($a = 5; $a > 1; $a--) {
        echo "<br>".$a;
    }
    // While Loop
    echo "<br>";
    $a = 5;
    while($a >= 1) {
        echo "<br> The number is: ".$a;
        $a--;
    }
    // Do While Loop
    echo "<br>";
    $a = 5;
    do {
        echo "<br> The number is: ".$a;
        $a--;
    } while($a >= 1)




?>

</html>
