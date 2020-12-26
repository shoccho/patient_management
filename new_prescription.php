
<?php
include 'header.php';


if (isset($_POST['phone'])) {
    $phone = $_POST['phone'];
    $age = $_POST['age'];
    $full_name = $_POST['full_name'];
    $medicine = $_POST['medicine'];
    $gender  = $_POST['gender'];
    $symptoms  = $_POST['symptoms'];
    $instructions  = $_POST['instructions'];
    $guidlines = $_POST['guidlines'];
    
   
    $sql = "INSERT INTO `prescription` (`phone`, `medicine`,`instructions`, `symptoms`,`guidelines`) VALUES ('$phone', '$medicine','$instructions', '$symptoms','$guidelines') ;";

    if (mysqli_query($conn, $sql)) {
       
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    $sql = "SELECT * FROM `patients` WHERE `phone` = ".$phone .";";
    $res=mysqli_query($conn, $sql) ;
    if (! $now = mysqli_fetch_assoc($res)){
    
        $sql ="INSERT INTO `patients` (`phone`,`full_name`,`age`,`gender`) VALUES ('$phone','$full_name','$age','$gender');";

        if (mysqli_query($conn, $sql)) {
           
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }
    }
}

elseif (isset($_GET['phone']))
{
    $rphone =$_GET['phone'];
    if (isset($_GET['old']) && $_GET['old']=='True'){
        $sql = "SELECT * FROM `patients`  WHERE `phone` = ". $rphone . " ;";
        
        $result = mysqli_query($conn, $sql);
        if ($row = mysqli_fetch_assoc($result)) {
            $rname = $row['full_name'];
            $rage = $row['age'];
            $rgender = $row['gender'];
        }
        else {}
    }
}
?>
<div class="wrapper">
    <h2>Write a new prescription</h2>
    <form method="POST">
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="phone">Patients phone</label>
            <div class="col-sm-10 "> <input type="text" name="phone" value="<?php echo $rphone;?>" /></div>
        </div>


        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="full_name">Patients fullname</label>
            <div class="col-sm-10 "> <input type="text" name="full_name" 
            value="<?php 
            if (isset($rname)) 
            {
                 echo $rname ;
            } 
            ?>"/></div></div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="age">Patients age</label>
            <div class="col-sm-10 "> <input type="text" name="age"
            value="<?php if (isset($rage)) { echo $rage;} ?>"
             /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="gender">Gender</label>
            <div class="col-sm-10 "> <input type="text" name="gender"
            value="<?php if (isset($rgender)) {echo $rgender; }?>" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="symptoms"> Symptoms</label>
            <div class="col-sm-10 "> <input type="text" name="symptoms" /></div>
        </div>

        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="diagnosis"> diagnosis</label>
            <div class="col-sm-10 "> <input type="text" name="diagnosis" /></div>
        </div>

        <div class="form-group row">
        <label class="col-sm-2 col-form-label" for="medicines"> medicine</label>
        <?php
            include_once 'internal/connect_database.php';

            $sql = "SELECT * FROM `medicines`;";
            $result = mysqli_query($conn, $sql);
         
            echo "<select name=\"medicines\" class=\"col-sm-2 \">";
            echo "<option value='None'>select a medicine </option>";
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<option value='" . $row['name'] . "'>" . $row['name'] . "</option>";
            }
            echo "</select>";
        ?>
        
        </div>
        
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="instructions"> instructions</label>
            <div class="col-sm-10 "> <input type="text" name="instructions" /></div>
        </div>
        <div class="form-group row">
            <label class="col-sm-2 col-form-label" for="guidelines"> guidelines</label>
            <div class="col-sm-10 "> <input type="text" name="guidelines" /></div>
        </div>
        <input type="submit" name="Insert">

</div>
</form>

<?php
include 'footer.php';
?>