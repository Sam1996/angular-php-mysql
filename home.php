<!DOCTYPE html>
<html>
    <head>
    <title>OPA</title>
    <link rel="stylesheet" href="assets/style.css">
        <link rel="stylesheet" href="assets/bootstrap/flatly.min.css">
        <link rel="stylesheet" href="assets/jquery.timepicker.css">
        <link rel="stylesheet" type="text/css" href="style.css">
        <script src="assets/bootstrap/bootstrap/jquery/jquery-2.1.0.min.js"></script>
        <script src="assets/bootstrap/bootstrap/js/bootstrap.min.js"></script>
        <script src="assets/jquery.timepicker.min.js"></script>
</head>
<body>
<div class="col-sm-12">
<div class="row">   
    <div class="jumbotron" id="heading">
    <h1 class="header text-center"><span class="med">Med</span>track</h1>

    </div>
</div>
<div class="row">   
        <div class="col-sm-offset-4 col-sm-4">
                <div class="col-sm-12">
            <div class="row">
                <ul class="nav nav-tabs" role="tablist">
                    <li role="presentation" class="active">
                        <a href="#login" aria-controls="login" role="tab" data-toggle="tab">Log In</a>
                    </li>
                    <li role="presentation">
                        <a href="#register" aria-controls="register" role="tab" data-toggle="tab">Register</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="tab-content">
        <div class="col-sm-12 tab-pane fade in active" id="login" style="padding-top:18px">
            <div class="row">
                <form class="form-group" action="publiclogin.php">
                    <input type="email" class="form-control input-lg" name="email" placeholder="E-mail"><br>
                    <input type="password" class="form-control input-lg" name="password" placeholder="Password" ><br>
                    <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="LogIn">
                </form>
            </div>
        </div>
        <div class="col-sm-12 tab-pane fade" id="register" style="padding-top:18px">
            <div class="row">
                <form class="form-group" action="publicregister.php">
                    <input type="text" class="form-control input-lg" name="firstname" placeholder="First Name"><br>
                    <input type="text" class="form-control input-lg" name="lastname" placeholder="Last Name"><br>
                    <input type="email" class="form-control input-lg" name="email" placeholder="E-mail"><br>
                    <input type="password" class="form-control input-lg" name="password" placeholder="Password" ><br>
                    <input type="submit" name="submit" class="btn btn-lg btn-primary btn-block" value="Register">
                </form>
            </div>
        </div>
        </div>
        </div>
</div>  
</div>
</body>
</html>
