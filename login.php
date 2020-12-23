<?php
include 'header.php';

?>

<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <h2 class="text-center">Login</h2>
        <form action="internal/login_function.php" method="POST">
            <div class="p-1">
                <input type="text" placeholder="Username" name="username" required="" class="form-control" />
            </div>
            <div class="p-1">
                <input type="password" placeholder="Password" name="password" required="" class="form-control" />
            </div>
            <br />
     
            <div class="p-1">
                <input type="submit" value="Log In" name="login" class="btn btn-info pull-right" />
            </div>
        </form>

    </div>
</div>
<?php
include 'footer.php';
?>