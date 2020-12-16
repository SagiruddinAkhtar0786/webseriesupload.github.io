<?php
  
  if(session_status() == PHP_SESSION_NONE)
  {
    session_start();
  }

  // if(!isset($_SESSION['isset']))
  // {
  //   header('Location: ../html/index.html');
  // }
?>

  <?php

  $servername="localhost";
  $username = "root";
  $password ="";
  $dbname = "dbms";

  $conn = mysqli_connect($servername, $username, $password, $dbname);
  if($conn->connect_error)
  {
    die("Connection Failed : ".$conn->connect_error);
  }


  ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>series</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
  <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<style type="text/css">

.footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   background-color: white;
   color: black;
   text-align: center;
   padding-bottom:4px;
}

  @media only screen and (max-width: 450px)
    {
      .carousel-inner img
      {
        max-height: 200px; 
      }
    }
  .content
  {
    text-align: center;
  }
  iframe
  {
    margin-left: 10%;
  }

</style>
<body style="background-color: black;">
    <!--========================Header code starts here=========================-->
   

<nav class="navbar navbar-inverse fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" style="background-color:#f0ad4e;">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#" style="color: #f0ad4e; font-size: 25px;">HEROITIC</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse" style="border-color: #3c5984; width: 100%;">
          <ul class="nav navbar-nav" style="width: auto;">
         
          </ul>
           <ul class="nav navbar-nav" style="width: auto; float: right; ">
           <li class="nav-item active">
        <a class="nav-link" href="../html/index.html">Home</a>
      </li>
          </ul> 
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <!--====================Header code ends here=========================-->

<div class="container-fluid"> 
  <div class="row" style="margin-top: -20px;">
  <div id="myCarousel" class="carousel slide" data-ride="carousel" data-interval="2000" >
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
      <li data-target="#myCarousel" data-slide-to="3"></li>
      <li data-target="#myCarousel" data-slide-to="4"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner">
      <div class="item active">
        <img src="../image/trailer.jpg" alt="Chicago" style="width:100%; height: 500px; transition-duration: 2s;">
        <div class="carousel-caption">
        <h1>Sherlock Holmes</h1>
        <pr>Crime drama</pr>
      </div>
      </div>



      <div class="item">
        <img src="../image/mv3.webp" alt="Chicago" style="width:100%; height: 500px; transition-duration: 2s;">
        <div class="carousel-caption">
        <h1>Smoke</h1>
        <pr> Crime-thriller</pr>
      </div>
      </div>

      <div class="item">
        <img src="../image/mv1.gif" alt="Chicago" style="width:100%; height: 500px; transition-duration: 2s;">
        <div class="carousel-caption">
        <h1>Manhunt: Unabomber</h1>
        <pr>Drama</pr>
      </div>
      </div>

      <div class="item">
         <img src="../image/run.jpg" alt="Los Angeles" style="width:100%; height: 500px; transition-delay: 1s;">
        <div class="carousel-caption">
        <h1>MindHunter</h1>
        <pr>Psychological thriller</pr>
      </div>
      </div>
    
      <div class="item">
        <img src="../image/movieposter1.webp" alt="New york" style="width:100%; height: 500px; transition-duration: 2s;">
        <div class="carousel-caption">
        <h1>Made in Heaven</h1>
        <pr>Drama</pr>
      </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myCarousel" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myCarousel" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div><!--for row-->
</div><!--container fluid-->
<hr>


  <!--===================================WEB SERIES===========================================-->


    <div class="container-fluid">
      <h4 style="text-align:center" ><b>Indian Web Series</b></h4>
      <div class="row"> 
      <?php
      include('../php/connection.php');
      $query = mysqli_query($conn, "select * from webupload");
      while($row = mysqli_fetch_array($query))
      {

       echo '<div class="col-xs-12 col-sm-12 col-md-2 ">
          <div class="card">
                          <img class="card-img-top" src="../html/uploads/'.$row["imageinput"].'" alt="card-image" width="200" height="250" >
                              <div class="card-body">
                                <h4 class="card-text"><b>'.$row['name'].'</b></h4>
                               <p><b> '.$row["genre"].' &nbsp;- '.$row["duration"].' <br>'.$row["rating"].' imdb &nbsp; '.$row["imdb"].'</b>
                                 
                               
                                <button class="btn btn-warning" data-dismiss="modal" data-toggle="modal" data-target="#movie'.$row['id'].'" style="float:right; margin-top:-20px;"> watch</button></p>

                                <div class="modal fade bg-transparent" id="movie'.$row['id'].'">
                               <div class="modal-dialog modal-xl" style="margin-left:15%; width:70%;">
                                
      
       
                                   <div class="modal-body" style="width:100%;">

                                    <div class=" my-auto">
                                       <button type="button" class="btn btn-default float-right mx-n2 pb-0 border-0 text-white" data-dismiss="modal" style="float:right;">X</button>
                                       </div>
                                    <div class="embed-responsive embed-responsive-16by9">
                                  <video  controls><source src="../html/uploads/'.$row['videoinput'].'" type="video/mp4"> </video>
                                  </div>
                                 </div>
        
       
                                
                              </div>
                            </div>


                              </div>
                        </div>
          </div>';
        }
          ?>

        <div class="col-xs-12 col-sm-12 col-md-2">
          
          <div class="card-body">
            <img src="../image/sacredgames.jpg" style="width: 200px; height: 250px;">
            <h4 class="card-title"><b>Sacred Games<b></h4>
            <p class="card-text">(2018) - 58 min <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             thriller</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../image/man'sworld.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Man's World<b></h4>
            <p class="card-text">(2015) - 16 min <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             comedy</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../image/pitchers.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Pitchers<b></h4>
            <p class="card-text">(2015) - 37 min <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             comedy-drama</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../image/kotafactory.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Kota Factory<b></h4>
            <p class="card-text">(2019) - 45 min <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             drama-comedy</p>
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-2">
          <img src="../image/insideedge.jpg" style="width: 200px; height: 250px;">
          <div class="card-body">
            <h4 class="card-title"><b>Inside Edge<b></h4>
            <p class="card-text">(2017) - 40 min <a href="#" class="btn btn-warning" style="float: right;">watch</a>
             drama</p>
          </div>
        </div>
      </div>
    </div><br> <br>

      

<!--========================footer code starts here=========================-->

    
    <div class="footer">
    <p>Copy &copy; dec 2020 sagir.akhtar387@gmail.com</p>
  </div>
  

    <!--====================footer code ends here=========================-->


</body>
</html>
