<?php
    if(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true)
    {
        $loggedin = true;
    }
    else{
        $loggedin = false;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../css/bootstrap.min.css">
  <script src="../js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../php/partials/regis.css">
  <style>
  </style>
</head>

<body>
  <?php
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="opacity:0.8; color:white; font-weight:bold;">
  <a class="navbar-brand" href="#">Heroitic</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto">
      <li class="nav-item active">
        <a class="nav-link" href="../html/index.html">Home</a>
      </li>';
      if(!$loggedin){

        echo ' <li class="nav-item">
           <a class="nav-link" href="login.php">Login</a>
         </li>
         <li class="nav-item">
           <a class="nav-link" href="regis.php">signup</a>
         </li>';
      }
      
            if($loggedin){
            echo  '<li class="nav-item">
              <a class="nav-link" href="logout.php">Logout</a>
            </li>';
            }
      
    echo '</ul>
   
  </div>
</nav>';
    
?>
</body>

</html>
