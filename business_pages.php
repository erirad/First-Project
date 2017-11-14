<?php
$db = mysqli_connect("localhost", "root", "root", "puslapiai1");
// Check connection
if($db === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
$sql = "SELECT * FROM business";
if($result = mysqli_query($db, $sql)){
    if(mysqli_num_rows($result) > 0){
        // echo "<h3> Business web pages</h3>";
        while($row = mysqli_fetch_array($result)){
                echo "<a href='#'>" . $row['link'] . "</a><br />";
        }
            mysqli_free_result($result);
    } else{
        echo "No records matching your query were found.";
    }
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
// Close connection
mysqli_close($db);
?>
