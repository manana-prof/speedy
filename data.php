<?php 
require("db_connection.php");
    $result = mysqli_query($con, "SELECT  municipality, contact_person, email, phone, designation, department, project_data FROM projects");

       // Add all records into an array

       $rows= array(); 
        while ($row = mysqli_fetch_array($result))
        {
            $rows [] = $row;
        }
            echo json_encode($rows);
    ?>  
