
<?php
include_once 'internal/connect_database.php';



if (isset($_POST['id'])) {
    
    $id = $_POST['id'];
    $age = $_POST['age'];
    $full_name = $_POST['full_name'];
    $gender  = $_POST['gender'];
    $symptoms  = $_POST['symptoms'];
    $diagnosis = $_POST['diagnosis'];
    $contact_info = $_POST['contact_info'];
   
    $sql = "INSERT INTO `patients` (`id`, `age`, `contact_info`, `full_name`, `gender`, `symptoms`, `diagnosis`) 
    VALUES ('$id', '$age',  '$contact_info', '$full_name', '$gender', '$symptoms', '$diagnosis') ;";

    if (mysqli_query($conn, $sql)) {
        echo "New patient entered into dtabase";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<div class="wrapper">
    <h2>Add a patient</h2>
    <form method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="id">Patients id</label>
            <div class="col-sm-10 "> <input type="text" name="id" /></div>
        </div>


        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="full_name">Patients fullname</label>
            <div class="col-sm-10 "> <input type="text" name="full_name" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="age">Patients age</label>
            <div class="col-sm-10 "> <input type="text" name="age" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="gender">Gender</label>
            <div class="col-sm-10 "> <input type="text" name="gender" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="contact_info"> contact information</label>
            <div class="col-sm-10 "> <input type="text" name="contact_info" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="symptoms"> Symptoms</label>
            <div class="col-sm-10 "> <input type="text" name="symptoms" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="diagnosis"> diagnosis</label>
            <div class="col-sm-10 "> <input type="text" name="diagnosis" /></div>
        </div>
        <input type="submit" name="Insert">

</div>
</form>
</div>