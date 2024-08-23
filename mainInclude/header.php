<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">

    <!-- Font Awesome CSS -->
    <link rel="stylesheet" type="text/css" href="css/all.min.css">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">

    <!-- Student Testimonial Owl Slider CSS -->
    <link rel="stylesheet" type="text/css" href="css/owl.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl.theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/testyslider.css">

    <!-- Custom Style CSS -->
    <link rel="stylesheet" type="text/css" href="./css/style.css" />
    <style>
      #myMenu{
        padding-left:700px;
        margin:10px;
        font-weight:bold;
      }
      .navbar{
        border:2px solid black;
         background-color: #225470;
         z-index: 100000000000000000;
      }
      #myMenu a{
        border:2px solid white;
        border-radius:10px;
      }
      .m-2 a{
        border: 2px solid black;
        background-color:#225470;
        border-radius:10px;
        padding:9px;
        margin:5px;
      }
      .m-2 a:hover{
        border:3px solid black;
        background-color:#225470;
      }
      .container{
        background-color:#225470;
      }
      .nav-link{
        border:2px solid white;
      }
      
      body{
        /* z-index:-1000; */
        background-color: #225470;
      }
    </style>
    <title>Fit Fusion</title>
  </head>
  <body>
     <!-- Start Nagigation -->
    <nav class="navbar navbar-expand-sm navbar-dark pl-5 fixed-top" id="aaa">
      <a href="index.php" class="navbar-brand">Fit Fusion</a>
    
      <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#myMenu">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="myMenu">
        <ul class="navbar-nav pl-5 custom-nav">
          <li class="nav-item custom-nav-item" ><a href="index.php" class="nav-link">Home</a></li>
          <li class="nav-item custom-nav-item"><a href="courses.php" class="nav-link">Courses</a></li>
         
          <?php 
              session_start();   
              if (isset($_SESSION['is_login'])){
                echo '<li class="nav-item custom-nav-item"><a href="student/studentProfile.php" class="nav-link">My Profile</a></li> <li class="nav-item custom-nav-item"><a href="logout.php" class="nav-link">Logout</a></li>';
              } else {
                echo '<li class="nav-item custom-nav-item"><a href="#login" class="nav-link" data-toggle="modal" data-target="#stuLoginModalCenter">Login</a></li> <li class="nav-item custom-nav-item"><a href="#signup" class="nav-link" data-toggle="modal" data-target="#stuRegModalCenter">Signup</a></li>';
              }
          ?> 
          <li class="nav-item custom-nav-item"><a href="#Feedback" class="nav-link">Feedback</a></li>
          <li class="nav-item custom-nav-item"><a href="#Contact" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </nav> <!-- End Navigation -->