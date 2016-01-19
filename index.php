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

    <div class="col-sm-4 col-sm-offset-4">

        <form action="getdata.php" method="post" class="form form-group" id="form">
            <div class="form-group">

                <input type="text" class="form-control input-lg info" placeholder="Hospital Name" autofocus name="hospital_name">
            </div>
            <br>

            <div class="form-group">

                <input type="text" class="form-control" placeholder="Dr. Name" name="doctor_name">
            </div>
            <br>

            <div class="form-group">

                <input type="text" class="form-control" placeholder="Qualification" name="qualification">
            </div>
            <br>
            <div class="form-group">

                <input type="text" class="form-control" placeholder="Specialization" name="specialization">
            </div>
            <br>
            <div class="form-group">

                <input type="text" class="form-control" placeholder="Experience" name="experience">
            </div>
            <br>
            <div class="form-group">

                <input type="textarea" class="form-control" placeholder="Address" name="address">
            </div>
            <br>
            <div class="form-group">

                <input type="text" class="form-control" placeholder="Location" name="location">
            </div>
            <br>
            <div class="form-group">

                <input type="text" class="form-control" placeholder="City" name="city">
            </div>
            <br>
            <div class="form-group">

                <input type="text" class="form-control" placeholder="State" name="state">
            </div>
            <br>
            <div class="form-group">

                <input type="text" class="form-control" placeholder="Consulting Fee" name="fee">
            </div>
            <br>
            <div class="form-group form-inline">
                <label for=".checkbox">Available Days:    </label>
                <input type="checkbox" class="checkbox form-control" name="chk[]" value="Monday">
                <span class="input-addon">Mon</span>
                <input type="checkbox" class="checkbox form-control" name="chk[]" value="Tuesday">
                <span class="input-addon">Tue</span>
                <input type="checkbox" class="checkbox form-control" name="chk[]" VALUE="Wednesday">
                <span class="input-addon">Wed</span>
                <input type="checkbox" class="checkbox form-control" name="chk[]" value="Thursday">
                <span class="input-addon">Thu</span>
                <input type="checkbox" class="checkbox form-control" name="chk[]" value="Friday">
                <span class="input-addon">Fri</span>
                <input type="checkbox" class="checkbox form-control" name="chk[]" value="Saturday">
                <span class="input-addon">Sat</span>
                <input type="checkbox" class="checkbox form-control" name="chk[]" value="Sunday">
                <span class="input-addon">Sun</span>
            </div>
            <br>
            <div class="form-group input-group">
                <h4 class="text-center">Available Time</h4>
                <div class="input-group">

                <span class="input-group-addon">From</span>
                <input type="text" id="from-tm" class="form-control"> <span class="input-group-addon">To:</span><input type="text" id="to-tm" class="form-control">
                </div>
            </div>
            <br>
            <div class="form-group">
                <label for="#pr-ph">Profile Photo</label>
                <input type="file" id="pr-ph" class="form-control btn btn-success">
                <br>
                <label for="#cl-ph">Hospital Photo</label>
                <input type="file" id="cl-ph" class="form-control btn btn-success">
            </div>
            <div class="form-group">
                <input type="submit" class="form-control btn btn-primary">

            </div>
        </form>



    </div>

</div>

</div>

<script type="text/javascript">
    $('#from-tm,#to-tm').timepicker();

</script>
</body>
</html>