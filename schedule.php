<!DOCTYPE html>
<html>
<header>
    <h1>Schedule</h1>
</header>
<body>
    <?php include("resources/layout/header.html"); ?>

    // Demo list crate by Rui. Only for test. Will be delete later if need.
    <?php
        require '/resources/php/dbConnectOrangeWolves.php';
        $sql= "SELECT * FROM events";
        $result = mysqli_query($conn, $sql) or die("Error Events information - ".mysqli_error($conn));
        while($row = mysqli_fetch_array($result)){
            $eventName = $row["name"];
            $description = $row["description"];
            $date = $row["date"];
            $teamID = $row["teamID"];
            $busID = $row["busID"];
            echo "<h2>$eventName</h2>";
            echo "<h3>$date</h3>";
            echo "<p>$description</p><br><br>";
        }     
    ?>
    //above code for test. 
</body>

<?php include("resources/layout/footer.html"); ?>

</html>
