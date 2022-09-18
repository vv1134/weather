<?php include 'loginsql.php'; ?>
<!DOCTYPE html>
<html>
    <header>
        <title>Login</title>
        <link href = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel = "stylesheet" integrity = "sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin = "anonymous">
<script src = "https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity = "sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin = "anonymous"></script>
    </header>
<body>
    <section class = "vh-100 bg-image">
<div class = "mask d-flex align-items-center h-100 gradient-custom-3">
<div class = "container h-100">
<div class = "row d-flex justify-content-center align-items-center h-100">
<div class = "col-12 col-md-9 col-lg-7 col-xl-6">
<div class = "card" style = "border-radius: 15px;padding:20px;border-radius: 50px;
background: #e0e0e0;
box-shadow:  20px 20px 60px #bebebe,
             -20px -20px 60px #ffffff;">
<div class = "class div">

<h2 class = "text-uppercase text-center mb-5">Login</h2>

<form method = "post" action = "#">

<div class = "form-outline mb-4">
<input type = "email" id = "form3Example3cg" name = "eml" class = "form-control form-control-lg" />
<label class = "form-label" for = "form3Example3cg">Your Email</label>
</div>

<div class = "form-outline mb-4">
<input type = "password" id = "form3Example4cg" name = "pass" class = "form-control form-control-lg" />
<label class = "form-label" for = "form3Example4cg">Password</label>
</div>

<div class = "d-flex justify-content-center">
<button type = "submit"

class = "btn btn-success btn-block btn-lg gradient-custom-4 text-body" name = "submt">Login</button>
</div>

<p class = "text-center text-muted mt-5 mb-0">Don't Have an account? <a href = "signup.php"

class = "fw-bold text-body"><u>Create here</u></a></p>

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