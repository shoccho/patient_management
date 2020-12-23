<?php
include 'header.php';
if (isset($_GET['id'])) {
    $patient_id = $_GET['id'];
    $sql = "select * from patients where id=" . $patient_id . ";";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $patient_name = $row['full_name'];
        $patient_age = $row['age'];
        $patient_gender = $row['gender'];
        $contact_info = $row['contact_info'];
        $symptoms = $row['symptoms'];
        $diagnosis = $row['diagnosis'];

    }
}
echo'<div style="padding-left:100px;">';
    if (isset($patient_id)) {

        echo "<h4>Name of patient: " . $patient_name . "</h4>";
        echo "<p>Age: " . $patient_age . "<br>Gender:  ".$patient_gender."</p><hr/>";
        echo '<div class="symptoms"><h4>Symptoms</h4><p>'.$symptoms."</p><hr/></div>";
        echo '<div class="diagnosis"><h4>Diagnosis</h4><p>'.$diagnosis."</p></div>";      
    } else {
        echo "404 the page you requested can not be found!";
    }
echo'<div>';
include 'footer.php';
?>