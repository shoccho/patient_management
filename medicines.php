

<div class="wrapper">
    <h3>Medicines</h3>

    <a href="new_medicine.php">Insert a new medicine into database</a>
    <?php


    $sql = "select * from medicines";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {

        echo '<div class="medicines"><div style="width:30%; padding:10px;float:left;">';
        
        echo "<div style=\"width:60%; padding:10px;float:left;\"><bold> <a href=\"medicine.php?name=" . $row['name'] . "\">  " . $row['name'] . "  </a></bold></p>";
        echo '</div></div>';
    }
?>