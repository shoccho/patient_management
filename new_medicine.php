<?php
include 'header.php';


if (isset($_POST['name'])) {
    
    $name = $_POST['name'];
    $indication = $_POST['indication'];
    $caution = $_POST['caution'];
   
    $sql = "INSERT INTO `medicines` (`name`, `indication`, `caution`) 
    VALUES ('$name', '$indication',  '$caution') ;";

    if (mysqli_query($conn, $sql)) {
        echo "New medicine entered into dtabase";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<div class="wrapper">
    <h2>Insert a new medicine</h2>
    <form method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="name">Medicine's name</label>
            <div class="col-sm-10 "> <input type="text" name="name" /></div>
        </div>


        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="indication">Medicine's indication</label>
            <div class="col-sm-10 "> <input type="text" name="indication" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="caution">Medicine's caution</label>
            <div class="col-sm-10 "> <input type="text" name="caution" /></div>
        </div>

        <input type="submit" name="Insert">

</div>
</form>
<?php
include 'footer.php';
?>