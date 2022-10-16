<html>
    <head>
        <title>Student Grade Evaluation</title>
    </head>
    <body>
        <div style="text-align: center;">
            <?php
                $passing_grade = 70;
                $remedial_grade = 60;

                $student_grade = 75;
                echo "Student Grade: $student_grade<br/>";

                if($student_grade >= $passing_grade) echo "PASSED";
                else if($student_grade >= $remedial_grade) echo "REMEDIAL";
                else echo "FAILED";
                echo "<br/>";
            ?>
        </div>
    </body>
</html>