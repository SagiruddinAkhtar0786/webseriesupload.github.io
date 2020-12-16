<?php
$showalert = false;
$showerror = false;
if($_SERVER["REQUEST_METHOD"] == "POST"){
    include '../php/connection.php';
    $username = $_POST["username"];
    // echo ($username);
    $password = $_POST["password"];
//    echo ($password);
       $psw = md5($password);
   

    // check whether username exist
    $existsql = "SELECT * FROM `itlabexercise` WHERE Name = '$username'";
  
    $result = mysqli_query($conn,$existsql);
    
   
    $numexistrows = mysqli_num_rows($result);
    // echo ($result);
    if($numexistrows == 1){
        $showerror = "username already exist";
    }   
    else{
        
            $sql = "INSERT INTO `itlabexercise` (`Name`, `password`, `reg_date`) VALUES ('$username', '$psw', current_timestamp())";
            $result = mysqli_query($conn,$sql);
       
            

            if($result){
                
                $showalert = true; 
                  
            }
          
        
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>user registration</title>
    <link rel="stylesheet" href="partials/regis.css">
    <style>
        body{
            background : url("../image/back.jpg");
            background-size:cover;
            background-image: center center;
            background-repeat:no-repeat;
        }
        .container{
            margin-top:140px;
    background-color: rgba(0, 0, 0, 0.8);
    color: white;
    border: none;
    border-radius: 5px;
}
    </style>
</head>

<body>
    <!-- include nav.php will access navbar  -->
    <?php
    require 'nav.php';
    ?>

<?php
    if($showalert){
       echo '<div class="success" style=" width: 300px; text-align: center;    background-color: rgb(158, 219, 45);margin : 20px auto;">
        <strong>Success! </strong> Your account is Created Successfully.
        </div>';}
    if($showerror){
       echo '<div class="success" style=" width: 300px; text-align: center;    background-color: rgb(158, 219, 45);margin : 20px auto;">
        <strong>Error!</strong>'.$showerror.'</div>';}
?>

    <!-- Sign up form creation  -->

    <div class="container w-50 my-4">
        <h2 class="text-center text-uppercase my-3">Signup foe webseries</h2>

        <form action="../php/regis.php" method="post">
            <div class="mb-0">
                <label for="username" class="form-label">Username</label>
                <input type="text"  class="form-control" id="username" name="username">
                <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
            </div>
            <div class="mb-0">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-0">
                <label for="cpassword1" class="form-label">Confirm Password</label>
                <input type="password" class="form-control" id="cpassword" name="cpassword">
                <small id="" class="form-text text-muted">Make sure to type the same password</small>
            </div>
        
            <button type="submit" class="btn btn-primary">Signup</button>
        </form>
    </div>
    


</body>

</html>