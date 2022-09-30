<html>
    <head>
        <title>PHP Exercise 1</title>
        <!-- PLS IGNORE : stylesheet -->
        <style>
            body {
                background-color: #0000FF;
                /* color: #FFFFFF; */
            }
            .main-div {
                margin: 30px auto;
                text-align: center;
                padding: 20px;
                width: 70%;
                min-height: 100px;
                border-radius: 20px;
                background-color: rgba(255,255,255,80);
            }
        </style>
        <!-- PLS IGNORE : stylesheet end -->
    </head>
    <body>
        <div class="main-div">
            <?php
                // Declaring variables/information
                $full_name = "Aloysius Atheos Butac";
                $college_program = "BS Computer Engineering";
                $year = 3;
                $suffix = "th";
                $section = 301;

                if($year==1) $suffix = "st";
                else if($year==2) $suffix = "nd";
                else if($year==3) $suffix = "rd";

                // printing info
                echo "Full name: $full_name";
                echo "<br/>";
                echo "College Program: $college_program";
                echo "<br/>";
                echo "Year and Section: $year$suffix Year - Block $section";
                echo "<br/>";
                echo "Today, I will learn PHP programming"
            ?>
        </div>
    </body>
</html>