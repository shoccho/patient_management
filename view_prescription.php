<?php
include 'header.php';
if (isset($_GET['time'])) {
    $time = $_GET['time'];
   
    $sql = "SELECT * FROM `prescription`  where `time` = '" . $time . "' ;";
    
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $phone = $row['phone'];
        $medicine= $row['medicine'];
        $instructions = $row['instructions'];
        $guidelines = $row['guidelines'];
        $symptoms = $row['symptoms'];
      
    }
    $sql = "select * from `patients` where `phone` = " . $phone . " ;";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $patient_name = $row['full_name'];
        $patient_age = $row['age'];
        $patient_gender = $row['gender'];
    }
}
echo'<div style="padding-left:100px;">';
    if (isset($phone)) {

        echo "<h4>Name of patient: " . $patient_name . "</h4>";
        echo "<p>Age: " . $patient_age . "<br>Gender:  ".$patient_gender."</p><hr/>";
        echo '<div class="symptoms"><h4>Symptoms </h4><p>'.$symptoms."</p><hr/></div>";
        echo '<div class="medicine"><h4>Medicine </h4><p>'.$medicine."</p>";
        echo '<h4>Instructions </h4><p>'.$instructions."</p><hr/></div>";
        echo '<div class="guidelines"><h4>Guidelines </h4><p>'.$guidelines."</p><hr/></div>";
  
    } else {
        echo "404 the page you requested can not be found!";
    }
echo'<div>';



include 'footer.php';
?>