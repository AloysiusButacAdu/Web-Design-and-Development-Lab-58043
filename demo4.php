<html>
    <head>
        <title>My Looping Statements</title>
    </head>
    <?php
        /*
        // While Loop
        $count = 1;
        while($count < 12) {
            echo "$count times 12 is ".($count*12)."<br/>";
            $count++;
        }
        echo "<br/>";

        // do .. while Loop
        $fuel = 12;
        do {
            echo "There is enough fuel <br/>";
        } while($fuel-- > 1);
        echo "<br/>";

        // For Loop
        for($fuel = 10; $fuel > 1; $fuel--) {
            echo "There is enough fuel <br/>";
        }
        echo "<br/>";

        // Foreach Loop
        $fruits = array("apple", "banana", "grapes", "pear");
        foreach($fruits as $fruit) {
            echo $fruit."<br/>";
        }
        echo "<br/>";

        $colors = array("red", "green", "blue", "yellow");
        foreach($colors as $color) {
            echo $color."<br/>";
        }
        echo "<br/>";

        // Break Statement
        for($x = 0; $x < 10; $x++) {
            if($x == 4) {
                break;
            }
            echo "The number is: $x <br/>";
        }

        // Continue Statement
        for($x = 0; $x < 10; $x++) {
            if($x == 4) {
                continue;
            }
            echo "The number is: $x <br/>";
        }
        */

        // Application 1
            echo "<h3>Application 1</h3>";
            $limit = 10;

            for($i = 0; $i < $limit; $i++) {
                echo "Hello $i <br/>";
            }
            echo "<br/>";

        // Appliation 2
            echo "<h3>Application 2</h3>";
            for($i = 0; $i < 10; $i++) {
                if($i < 3) continue;
                echo $i."<br/>";
            }
            echo "<br/>";

    ?>
</html>