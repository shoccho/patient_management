<div class="wrapper">
    <h3>Patients</h3>
    <?php


    $sql = "select * from patients";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        echo '<div class="patients"><div style="width:30%; padding:10px;float:left;">';
        echo "<span style=\"padding-right:50px\">" . date("D M j G:i:s", $row['id']) . "</span> </div>";
        echo "<div style=\"width:60%; padding:10px;float:left;\"><bold> <a href=\"patient.php?id=" . $row['id'] . "\">  " . $row['full_name'] . "  </a></bold></p>";
        echo '</div></div>';
    }
?>