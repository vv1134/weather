<?php
$server = 'localhost';
$user = 'id19459190_punjab';
$pasword = '@Cheema113468';
$dbname = 'id19459190_login_data';
$con = mysqli_connect( $server, $user, $pasword, $dbname );
if ( isset( $_POST['sbmt'] ) ) {
    $nme = mysqli_real_escape_string( $con, $_POST['Nme'] );
    $eml = mysqli_real_escape_string( $con, $_POST['eml'] );
    $pass = mysqli_real_escape_string( $con, $_POST['pass'] );
    $cpass = mysqli_real_escape_string( $con, $_POST['cpass'] );

    $epass = password_hash( $pass, PASSWORD_BCRYPT );
    $ecpass = password_hash( $cpass, PASSWORD_BCRYPT );

    $emailquery = "select * from regf where email='$eml'";

    $query = mysqli_query( $con, $emailquery );

    $emlcount = mysqli_num_rows( $query );
    if ( $emlcount>0 ) {
        echo "email already exist";
    } else {
        if ( $cpass === $pass ) {
            $sql = "INSERT INTO `regf` (`name`, `email`, `password`, `cpassword`) VALUES ('$nme', '$eml', '$pass', '$cpass') ";
            $myquery = mysqli_query( $con, $sql );
            header('location:login.php');
        } else {
            echo 'password not matched';
        }
    }

}
?>
<html>
<header>
<title>Sign up</title>
<link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin = "anonymous">
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity = "sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin = "anonymous"></script>

<style>

</style>
</header>
<body style="background:#57facf">
<section class = "vh-80" style="">
<div class = "mask d-flex align-items-center h-70 gradient-custom-3">
<div class = "container">
<div class = "row d-flex justify-content-center align-items-center h-70">
<div class = "col-12 col-md-9 col-lg-7 col-xl-6">
<div class = "card" style = "border-radius: 15px;padding:20px;border-radius: 50px;height:600px;margin-top:100px">
<div class = "class div">

<h2 class = "text-uppercase text-center mb-5">Create an account</h2>

<form method = "post" action = "#">

<div class = "form-outline mb-4">
<input type = "text" id = "form3Example1cg" name = "Nme" class = "form-control form-control-lg" />
<label class = "form-label" for = "form3Example1cg">Your Name</label>
</div>

<div class = "form-outline mb-4">
<input type = "email" id = "form3Example3cg" name = "eml" class = "form-control form-control-lg" />
<label class = "form-label" for = "form3Example3cg">Your Email</label>
</div>

<div class = "form-outline mb-4">
<input type = "password" id = "form3Example4cg" name = "pass" class = "form-control form-control-lg" />
<label class = "form-label" for = "form3Example4cg">Password</label>
</div>

<div class = "form-outline mb-4">
<input type = "password" id = "form3Example4cdg" name = "cpass" class = "form-control form-control-lg" />
<label class = "form-label" for = "form3Example4cdg">Repeat your password</label>
</div>

<div class = "d-flex justify-content-center">
<button type = "submit"

class = "btn btn-success btn-block btn-lg gradient-custom-4 text-body" name = "sbmt">Register</button>
</div>

<p class = "text-center text-muted mt-5 mb-0">Have already an account? <a href = "login.php"

class = "fw-bold text-body"><u>Login here</u></a></p>

</form>

</div>
</div>
</div>
</div>
</div>
</div>
</section>
</body>
</html>