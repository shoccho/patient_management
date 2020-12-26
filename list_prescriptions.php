<?php
include 'header.php';
?>
<div class="wrapper">
    

    <?php
    if (isset($_GET['phone'])) {
        $phone = $_GET['phone'];
        
        $name ="" ;
        $sql = "SELECT * FROM `patients` WHERE `phone`= ".$phone.";";
        $result = mysqli_query($conn, $sql);
        if($row = mysqli_fetch_assoc($result)){
            $name = $row['full_name'];
        }
        else{
           
        }

        $sql = "SELECT * FROM `prescription`  where `phone` = ".$phone." ;" ;
        echo $sql;

        echo '<h3> Prescriptions of '.$name.'</h3>';
        
        $result = mysqli_query($conn, $sql);
        while ($row = mysqli_fetch_assoc($result)) {
        
            echo '<div class="prescriptions"><div style="width:30%; padding:10px;float:left;">';
            
            echo "<div style=\"width:60%; padding:10px;float:left;\"><bold> <a href=\"view_prescription.php?time=" . $row['time'] . "\"> Prescription of date :  " . date("l d/m/Y ", strtotime($row["time"])). "  </a></bold></p>";
            echo '</div></div>';
        }
    }

include 'footer.php';

?>