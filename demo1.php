<html>
<head> <title> This is my first webpage </title> </head>
<body bgcolor="#0000FF">
<p> This HTML will get delivered as is </p>
<?php 
    echo "<p> But this code is interpreted by PHP and turned into HTML </p>";

    $username = "Aloy";
    $count = 17;
    $sum = 6 + 2;

    echo $username;
    echo "<br/>";
    echo $count;
    echo "<br/>";
    echo "6 + 2 = ".(6 + 2);
    echo "<br/>";
    echo "6 + 2 = $sum";
    echo "<br/>";
    echo "My name is ".$username;
    echo "<br/>";

    // Single Line Comment
    /*
        Multi Line Comment
        Multi Line Comment: Line 2
        Multi Line Comment: Line 3
    */ 

   $pi = 3.1416;
   $radius = 5;
   echo $pi*($radius*$radius);
   echo "<br/>";

   $j = 2;
   $k = 4;
   echo $j === $k;
   if($j == $k) echo "True";
   else echo "False";

   echo "<br/>";

   $l = 2;
   if($j === $l) echo "Identical (Equal and of same data type)";
   else echo "Not Identical";
?>
</body>
</html>