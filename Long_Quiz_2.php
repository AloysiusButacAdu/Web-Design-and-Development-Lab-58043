<html>
    <head>
        <title>Midterm Long Quiz 11/5/22</title>
        <style>
            body {
                background: #ccffff;
            }
            #main {
                background: #FFFFFF;
                border-radius: 7px;
                margin: 20px auto 20px auto;
                padding: 15px;
                max-width: 80%;
                float: center;
                text-align: center;
                font-family: Arial, sans-serif;
            }
        </style>
    </head>
    <body>
        <div id="main">
            <?php
                // Problem 1

                $salary_rate_per_day = 600;
                $salary = $salary_rate_per_day * 15;
                $tax = $salary * 0.30;
                $net_pay = $salary - $tax;

                echo "<h3>Problem 1</h3>";
                echo "Salary rate: $salary_rate_per_day<br/>";
                echo "Salary: $salary<br/>";
                echo "Taxable amount: $tax<br/>";
                echo "Net Pay: $net_pay<br/>";

                echo "<br/ >";
                echo "<hr/>";

                // Problem 2

                $cap = 50;
                $total = 0;
                for($i= 0; $i <= $cap; $i++) {
                    $total += $i;
                }

                echo "<h3>Problem 2</h3>";
                echo "The sum of all positive integers from 1-$cap is <b>$total</b>";


                echo "<br/ >";
                echo "<br/ >";
                echo "<hr/>";
                echo "<em>Submitted by: Aloysius Butac<br/>"."CpE 301</em>";
            ?>
        </div>
    </body>
</html>
