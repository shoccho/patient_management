<?php
include 'header.php';

if (isset($_GET['name'])) {
    $name = $_GET['name']; 

    $sql = "SELECT * FROM `medicines` where name = '" . $name . "' ;";

    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $indication = $row['indication'];
        $caution = $row['caution'];
    
    }
}
echo'<div style="padding-left:100px;">';
    if (isset($indication)) {

        echo "<h5>Name of medicine:</h5><h2> " . $name . "</h2><hr/>";
        
        echo '<div class="indication"><h4>indication</h4><p>'.$indication."</p><hr/></div>";
        echo '<div class="caution"><h4>caution</h4><p>'.$caution."</p></div>";      
    } else {
        echo "404 the page you requested can not be found!";
    }
echo'</div>';

// echo "<a href=\"edit_patient.php?id=" .$nam. "\">Edit </a>";

include 'footer.php';
?>