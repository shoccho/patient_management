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
           
        </li>



    </div>
</nav>

<php?
include 'footer.php';
?>
