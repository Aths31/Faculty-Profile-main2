<!DOCTYPE html>
<html lang="en">
    <?php 
        @session_start();
        if (isset($_SESSION['sdrn'])){
        echo '<script language="javascript"> alert("LOGIN OUT.."); </script>';
        session_unset();
        session_destroy();
        }
    ?>

    <head>
        <title>LOGIN</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/login_css.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </head>

    <body >
        <div class="sign-in-form">
            <h1 class="text-center">Sign In</h1>
            <form action="verify.php " method="POST">
                <div class="form-group position-relative">
                    <input type="text" id="sdrn" name="sdrn" placeholder="Enter SDRN" class="login-input-box" required>
                    <i class="fa fa-user fa-lg position-absolute"></i>
                </div>
                <div class="form-group position-relative">
                    <input type="password" id="Password" name="Password" placeholder="Enter Password" class="login-input-box" required>
                    <i class="fa fa-unlock-alt fa-lg position-absolute"></i>
                </div>
                <br>
                <button type="submit" id="user_login" name="user_login" class="sign-in-button">Login</button>
            </form>
        </div>
    </body>
</html>