
<?php
include 'header.php';
// include 'internal/connect_database.php';
if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];

    $sql = "SELECT * FROM `prescription`  where `phone`=".$phone.";";
    // echo $sql;
    // echo $conn;
    $records_found=false;
    $result = mysqli_query($conn, $sql);
    if ($row = mysqli_fetch_assoc($result)) {

    
    
        $records_found = true;
    } else {
        $records_found = false;

    }
}
?>
<div class="wrapper">
    <h2>Enter clients phone number </h2>
    <form method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="phone">Phone number</label>
            <div class="col-sm-10 "> <input type="text" name="phone" /></div>
        </div>
  
<input type="submit" name="Insert">

</div>
</form>
<?php
    if ($records_found ==true){
        echo "<div><h4>Previous medical records has been found with this patient</h4>";
        echo "<a href=list_prescriptions.php?phone=".$phone."> Previous prescriptions</a>";
        echo "<a href=new_prescription.php?phone=".$phone."&old=True> write a new prescriptions</a></div>";
    }
    elseif (isset($records_found)) {
        echo "<a href=new_prescription.php?phone=".$phone."> write a new prescriptions</a></div>";
    }
    ?>
</div>
<?php
include 'footer.php';
?>