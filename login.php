<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>CS3500 Final</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/reset.css"/>
    <link rel="stylesheet" href="assets/css/main.css"/>
    <script src="assets/js/main.js"></script>
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
                <form id="login" method="post" action="auth.php">
                    <div class="form-group"><label>Username or Email</label>
                        <input type="email" name="email" class="form-control" placeholder="Enter username or email address"></div>
                    <div class="form-group"><label>Password</label>
                        <input type="password" name="password" class="form-control" placeholder="Password"></div>
                    <a class="btn navbar-btn ml-2 text-white bg-inverse" href="javascript:void(0)"
                       onclick="authenticate()"> Login</a>
                    <a class="btn navbar-btn ml-2 text-white bg-inverse" href="register.php"> Register</a>
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