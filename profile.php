<?php
include 'header.php';
{
    
    $sql = "select * from `doctors` ;";
    $result = mysqli_query($conn, $sql);
    while ($row = mysqli_fetch_assoc($result)) {
        $name = $row['full_name'];
        $academics = $row['academics'];

    }
}


if (isset($_POST['update'])){
    $sql = "UPDATE `doctors` set `full_name` = \" ".$_POST['name'] ." \" ,`academics` = \" ".$_POST['academics'] . " \" ;";
    $result = mysqli_query($conn, $sql);


    if (mysqli_query($conn, $sql)) {
        echo "Profile updated";
        header('Location: '.$_SERVER['PHP_SELF']);  
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

}
?>
<div class="wrapper">
<h2>Update profile</h2>
<form method="POST">
    <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="id">Fullname</label>
        <div class="col-sm-10 "> <input type="text" name="name"value="<?php if (isset($name)) { echo $name;} ?>" /></div>
    </div>

    
    <div class="form-group ">
        <label class="col-sm-2 col-form-label" for="academics">Academics</label>
         <textarea  class="form-control" name="academics"><?php if (isset($academics)) { echo $academics;} ?></textarea>
    </div>
    <input type="submit" name="update">
</form>
<?php
    include 'footer.php';
    ?>