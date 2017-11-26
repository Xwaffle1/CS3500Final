<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CS3500 Final</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reset.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>

</head>

<header>
    <?php
    if (session_status() == PHP_SESSION_NONE) {
        session_start();
    }
    include("navbar-top.php"); ?>
</header>

<body>
<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form class="" method="post">
                    <div class="form-group"><label>Username</label>
                        <input name="username" class="form-control" placeholder="Enter username"></div>
                    <div class="form-group"><label>Email address</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter email"></div>
                    <div class="form-group"><label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"></div>
                    <div class="form-group"><label>Confirm Password</label>
                        <input type="password" name="password-confirm" class="form-control" placeholder="Confirm Password">
                    </div>
                    <button type="submit" class="btn btn-primary">Register Account</button>
                    <a href="login.php"><p class="sign-in-here">Already a member? Sign in here.</p></a>
                </form>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"
        integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"
        integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1"
        crossorigin="anonymous"></script>
</body>

</html>