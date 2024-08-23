<?php 
  include('./dbConnection.php');
  include('./mainInclude/header.php'); 
?>
<style>
  /* Ensure the navbar stays on top and visible */
  .navbar {
    background-color: #343a40; /* Example color; adjust as needed */
    z-index: 1050; /* Ensure it's above other content */
  }

  /* Provide space below the fixed navbar */
  body {
    margin-top: 70px; /* Adjust this value based on the height of your navbar */
  }

  .container-fluid {
    z-index: 1; /* Ensure it's below the navbar */
  }

  .container {
    z-index: 100; /* Ensure it's above other content but below the navbar */
  }
</style>
    <div class="container-fluid bg-dark"> 
      <div class="row">
        <img src="./image/c.jpg" alt="courses" style="height:300px; width:100%; object-fit:cover; box-shadow:10px;"/>
      </div> 
    </div> 


    <div class="container jumbotron mb-5">
     <div class="row">
      <div class="col-md-4">    
        <h5 class="mb-3">If Already Registered !! Login</h5>
       <form role="form" id="stuLoginForm">
         <div class="form-group">
           <i class="fas fa-envelope"></i><label for="stuLogEmail" class="pl-2 font-weight-bold">Email</label><small id="statusLogMsg1"></small><input type="email"
               class="form-control" placeholder="Email" name="stuLogEmail" id="stuLogEmail">
           </div>
           <div class="form-group">
            <i class="fas fa-key"></i><label for="stuLogPass" class="pl-2 font-weight-bold">Password</label><input type="password" class="form-control" placeholder="Password" name="stuLogPass" id="stuLogPass">
         </div>
         <button type="button" class="btn btn-primary" id="stuLoginBtn" onclick="checkStuLogin()">Login</button>
       </form><br/>
       <small id="statusLogMsg"></small>
      </div>
      <div class="col-md-6 offset-md-1">
      <h5 class="mb-3">New User !! Sign Up</h5>
        <form role="form" id="stuRegForm">
           <div class="form-group">
             <i class="fas fa-user"></i><label for="stuname" class="pl-2 font-weight-bold">Name</label><small id="statusMsg1"></small><input type="text"
               class="form-control" placeholder="Name" name="stuname" id="stuname">
           </div>
           <div class="form-group">
           <i class="fas fa-envelope"></i><label for="stuemail" class="pl-2 font-weight-bold">Email</label><small id="statusMsg2"></small><input type="email"
               class="form-control" placeholder="Email" name="stuemail" id="stuemail">
             <small class="form-text">We'll never share your email with anyone else.</small>
           </div>
           <div class="form-group">
             <i class="fas fa-key"></i><label for="stupass" class="pl-2 font-weight-bold">New
               Password</label><small id="statusMsg3"></small><input type="password" class="form-control" placeholder="Password" name="stupass" id="stupass">
           </div>
           <button type="button" class="btn btn-primary" id="signup" onclick="addStu()">Sign Up</button>
        </form> <br/>
        <small id="successMsg"></small>
      </div>
     </div>
    </div>
    <hr/>
    <?php 
    // Contact Us
    include('./contact.php'); 
    ?>  
<?php 
 
  include('./mainInclude/footer.php'); 
?> 