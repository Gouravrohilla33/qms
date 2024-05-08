<?php

include '../config.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $course = $_POST['course'];
    $sem = $_POST['sem'];

    // Prepare and execute the query
    $query = "SELECT * FROM student_data WHERE `course` = '$course' AND `sem` = '$sem'";
    $result = $con->query($query);

    // Check if there are rows returned from the query
    if ($result->num_rows > 0) {
    
    echo "
       <table class='table'>
                <tr >
                    <th>Name</th>
                    
                    <th>Roll No.</th>
                    <th>Allotment</th>
                </tr>";
        // Output each pool as an option
        while ($row = $result->fetch_assoc()) {
            echo "<tr>
                    <td>" . $row['name'] . "</td>
                    
                    <td>" . $row['roll'] . "</td>
                    <td><input type='checkbox' name='alloted_to[]' value='" . $row['roll'] . "/>'</td>
                </tr>";
        }

        echo "</table> ";
    } else {
        // If no pools are found for the given course and year, disable the select
        echo '<option disabled>No Pools Found</option>';
    }
}
