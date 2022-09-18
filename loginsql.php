<?php
session_start();
$server = 'localhost';
$user = 'id19459190_punjab';
$pasword = '@Cheema113468';
$dbname = 'id19459190_login_data';
$con = mysqli_connect( $server, $user, $pasword, $dbname );
if ( isset( $_POST['submt'] ) )
 {
    $eml = mysqli_real_escape_string( $con, $_POST['eml'] );
    $pass = mysqli_real_escape_string( $con, $_POST['pass'] );
    $emailquery = "select * from regf where email='$eml'";
    // $passquery = "select * from regf where password='$pass'";
    $query = mysqli_query( $con, $emailquery );
    $emlcount = mysqli_num_rows( $query );
    if($emlcount>0)
    {
        $eml_pass=mysqli_fetch_assoc($query);
        $vpass= $eml_pass['password'];
        $_SESSION['namee']=$eml_pass['name'];
        if($vpass==$pass)
        {
          echo " login succesful";
       echo "<script type='text/javascript'>window.location.href='loggedin.php'</script>";
        }
        else
        {
            echo "password incorrect";
        }
    }
}
    else{
         echo "check e-mail";
    }
?>