<?php
$showerror = false;
     $success = false;
     if($_SERVER["REQUEST_METHOD"] == "POST"){
         include 'connection.php';
         $username = $_POST["username"];
         $curpassword = $_POST["currentpassword"];
         $newpassword = $_POST["newpassword"];
          $psw = md5($curpassword);
        //   echo ($curpassword);
      
 
            $sql = "SELECT * from `itlabexercise` WHERE `NAME`='$username' AND  `PASSWORD`='$psw' ";
             $result = mysqli_query($conn,$sql);
             $num = mysqli_num_rows($result);
 
             if($num == 1){
                $login= $newpassword; 
                $hasspass = md5($newpassword);
                $update = "UPDATE `itlabexercise` SET `password` = '$hasspass' WHERE `itlabexercise`.`Name` = '$username'";
                $retval = mysqli_query($conn,$update);
 
                if(!$retval ) {
                //    die('Could not update data: ' . mysqli_error());
                echo "something is wrong";
                }
                else{
                    $success = "password reset successfully";
                }
                
 
             }
             else{
                 $showerror = "Current Password do not match";
             }
 
             mysqli_close($conn);
            }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reset Password</title>
    <link rel="stylesheet" href="partials/regis.css">
    <style>
        body{
            background : url("../image/back.jpg");
            background-size:cover;
            background-image: center center;
            background-repeat:no-repeat;
        }
        .container{
            margin-top:200px;
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    border: none;
    border-radius: 5px;
}
    </style>
</head>
<body>
<?php
        require "nav.php";
    ?>

<?php
    if($showerror){
        echo '<div class="success" style=" width: 300px; text-align: center;    background-color: rgb(158, 219, 45);margin : 20px auto;">
         <strong>Error! </strong>'.$showerror .' <strong> Please Use correct current password </strong>'  .'</div>';}
    if($success){
       echo '<div class="success" style=" width: 300px; text-align: center;    background-color: rgb(158, 219, 45);margin : 20px auto;">
        <strong>Success!</strong>'.$success .'</div>';}
?>
 <div class="container w-50 my-4">
        <h2 class="text-center text-uppercase my-3">Reset your password</h2>

        <form action="../php/resetpassword.php" method="post">
            <div class="mb-0">
                <label for="username" class="form-label">Username</label>
                <input type="text" maxlength="11" class="form-control" id="username" name="username" aria-describedby="emailHelp">
                <div id="emailHelp" class="form-text">We'll never share your username with anyone else.</div>
            </div>
            <div class="mb-0">
                <label for="password" class="form-label">Current Password</label>
                <input type="password" maxlength="11" class="form-control" id="currpassword" name="currentpassword">
            </div>
            <div class="mb-0">
                <label for="cpassword1" class="form-label">New Password</label>
                <input type="password" maxlength="11" class="form-control" id="newpassword" name="newpassword">
                <small id="" class="form-text text-muted">create new password</small>
            </div>
        
            <button type="submit" class="btn btn-primary">Reset</button>
        </form>
    </div>




</body>
</html>