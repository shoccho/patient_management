<?php
$loggedin = false;
include 'header.php';

if (isset($_SESSION['username'])) {
    $loggedin = true;
}
?>



<?php
if ($loggedin) {
    echo "<div style=\"width:100%; text-align:center; padding:10px; margin:10px;\"><h4> Welcome to your portal " . $_SESSION['username'] . "  </h4>";
} else {

    echo '<div style="text-align:center; padding:10px; margin:10px;"><a href="login.php">Log in here!</a>';
}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="index.php?q=patients">Patients</a>

        </li>

        <li class="nav-item active">
            <a class="nav-link" href="index.php?q=add_patient">Add a new patient</a>

        </li>


    </div>
</nav>
<?php
if (isset($_GET['q']) && $_GET['q'] == 'patients') {
    include 'patients.php';
}
?>
<?php
if (isset($_GET['q']) && $_GET['q'] == 'add_patient') {
    include 'add_patient.php';
}
?>


<php?
include 'footer.php';
?>
