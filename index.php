<?php
    include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Hello World</title>

    <?php
    // Perform a database query to fetch your name
    if(isset($_GET['id'])) {
        // Process the provided student ID here
        $studentID = $_GET['id'];
        // Query to fetch student's name using the provided ID
        $sql = "SELECT name FROM info WHERE id = $studentID";
        $result = $conn->query($sql);

        // Fetch the name
        if ($result->num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $name = $row["name"];
            }
        } else {
            $name = "Student"; // Default name if no name is found in the database for the provided ID
        }
        $conn->close();
    } else {
        $name = "Student"; // Default name if no ID is provided
    }
    ?>
</head>
<body>
<script>
        function getStudentID() {
            var studentID = prompt("Please enter the student ID:");
            if (studentID != null && studentID != "") {
                // Redirect to a PHP script with the student ID as a parameter
                window.location.href = "index.php?id=" + studentID;
            }
        }
</script>
    <h1><?php echo "Hello World, $name!"; ?></h1><button onclick="getStudentID()">get id</button>

    <hr>

    <p>
    <?php

    $num1 = 0.5;
    $num2 = 0.8;
    $num3 = 1.4;
    $num4 = 1.8;
    $num5 = 2.6;

    echo "num1 = $num1, num2 = $num2, num3 = $num3, num4 = $num4, num5 = $num5<br>";
    $total =  $num1+$num2+$num3+$num4+$num5;
    echo "Total = $total |";

    $avg = $total/5;
    echo " Average = $avg |";

    $max = max($num1,$num2,$num3,$num4,$num5);
    echo " Max = $max |";

    $min = min($num1,$num2,$num3,$num4,$num5);
    echo " Min = $min ";
    ?>
    </p>

    <hr>

    <?php
    // Declare the name array containing the names of students
    $name = array("Saqif", "Hakim", "Eidrix", "Faris", "Hazman");

    // Declare the marks array containing each student's examination marks
    $marks = array(87, 90, 78, 95, 89);

    // Display each name with his/her respective marks
    for ($i = 0; $i < count($name); $i++) {
        echo "<p>Name: " . $name[$i] . ", Marks: " . $marks[$i] . "</p>";
    }
    ?>
</body>
</html>
