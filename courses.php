<?php
  include('./dbConnection.php');
  
  include('./mainInclude/header.php'); 
?>  
<style>
  .my-content{
    margin-left:73px;
    font-weight:bold;
    margin-top:160px;
    border:1px solid black;
    border-radius:10px;
    background-color:#ed213a;
    padding:15px;
    
  }
</style>
    <div class="container-fluid remove-vid-marg" id="yyy">
      <div class="vid-parent">
        <video playsinline autoplay muted loop>
          <source src="video/aaa.mp4" />
        </video>  
        <div class="vid-overlay"></div>
      </div>

      <div class="vid-content" >
        <h1 class="my-content"> ALL COURSES</h1>
      </div>
    </div> 

    <div class="container mt-5"> 
      
      <div class="row mt-4"> 
      <?php
          $sql = "SELECT * FROM course";
          $result = $conn->query($sql);
          if($result->num_rows > 0){ 
            while($row = $result->fetch_assoc()){
              $course_id = $row['course_id'];
              echo ' 
                <div class="col-sm-4 mb-4">
                  <a href="coursedetails.php?course_id='.$course_id.'" class="btn" style="text-align: left; padding:0px;"><div class="card">
                    <img src="'.str_replace('..', '.', $row['course_img']).'" class="card-img-top" alt="Guitar" />
                    <div class="card-body">
                      <h5 class="card-title">'.$row['course_name'].'</h5>
                      <p class="card-text">'.$row['course_desc'].'</p>
                    </div>
                    <div class="card-footer">
                       <a class="btn btn-primary text-white font-weight-bolder float-right" href="coursedetails.php?course_id='.$course_id.'">Enroll</a>
                    </div>
                  </div> </a>
                </div>
              ';
            }
          }
        ?> 
        </div>   
      </div>  
     
<?php 
  
  include('contact.php'); 
?> 


     <!-- Start userTestimonial -->
     <div class="container-fluid mt-5" style="background-color: #4B7289" id="Feedback">
        <h1 class="text-center testyheading p-4"> User's Feedback </h1>
        <div class="row">
          <div class="col-md-12">
            <div id="testimonial-slider" class="owl-carousel">
            <?php 
              $sql = "SELECT s.stu_name, s.stu_occ, s.stu_img, f.f_content FROM student AS s JOIN feedback AS f ON s.stu_id = f.stu_id";
              $result = $conn->query($sql);
              if($result->num_rows > 0) {
                while($row = $result->fetch_assoc()){
                  $s_img = $row['stu_img'];
                  $n_img = str_replace('../','',$s_img)
            ?>
              <div class="testimonial">
                <p class="description">
                <?php echo $row['f_content'];?>  
                </p>
                <div class="pic">
                  <img src="<?php echo $n_img; ?>" alt=""/>
                </div>
                <div class="testimonial-prof">
                  <h4><?php echo $row['stu_name']; ?></h4>
                  <small><?php echo $row['stu_occ']; ?></small>
                </div>
              </div>
              <?php }} ?>
            </div>
          </div>
        </div>
    </div>  <!-- End Students Testimonial -->

<?php 

  include('./mainInclude/footer.php'); 
?>  
