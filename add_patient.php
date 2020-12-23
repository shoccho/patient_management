<!-- need to convert this to patient -->


<?php
include 'header.php';
if (isset($_POST['id'])) {
    $id = $_POST['id'];

    $roll = $_POST['roll'];
    $fullname = $_POST['fullname'];
    $fathers_name  = $_POST['fathers_name'];
    $class  = $_POST['class'];
    $section = $_POST['section'];
    $phone = $_POST['phone'];
    $address = $_POST['address'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "INSERT INTO `students` (`id`, `roll`, `username`, `password`, `phone`, `fullname`, `fathers_name`, `class`, `section`, `address`) VALUES ('$id', '$roll', '$username', '$password', '$phone', '$fullname', '$fathers_name', '$class', '$section', '$address') ;";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
<div class="wrapper">
    <h2>Add a student</h2>
    <form method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="id">Students id</label>
            <div class="col-sm-10 "> <input type="text" name="id" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="roll">Students roll</label>
            <div class="col-sm-10 "> <input type="text" name="roll" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="username">Students username</label>
            <div class="col-sm-10 "> <input type="text" name="username" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="password">Students password</label>
            <div class="col-sm-10 "> <input type="text" name="password" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="fullname">Students fullname</label>
            <div class="col-sm-10 "> <input type="text" name="fullname" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="fathers_name">Students fathers name</label>
            <div class="col-sm-10 "> <input type="text" name="fathers_name" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="class">Students class</label>
            <div class="col-sm-10 "> <input type="text" name="class" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="section">Students section</label>
            <div class="col-sm-10 "> <input type="text" name="section" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="phone">Students phone</label>
            <div class="col-sm-10 "> <input type="text" name="phone" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="address">Students address</label>
            <div class="col-sm-10 "> <input type="text" name="address" /></div>
        </div>
        <input type="submit" name="Insert">

</div>
</form>
</div>