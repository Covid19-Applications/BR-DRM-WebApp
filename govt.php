<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>


<br><br><br><br>

  
<style type="text/css">
  
.button{
  background: #3498db;
    color: #fff;
    border-radius: 50px;
    margin: 0 15px;
    padding: 10px 30px; 
}

.services .icon-box {
    padding: 60px 30px;
    transition: all ease-in-out 0.3s;
    background:#ffc107;
    box-shadow: 0px 5px 90px 0px rgba(110, 123, 131, 0.1);
    border-radius: 18px;
    border-bottom: 5px solid #fff;
    height: 50px;
    width: 400px;
}

.services .icon-box h4 {
    margin-left: 0px; 
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 18px;
}
.services .icon-box p {
    margin-left: 0px; 
    font-weight: 700;
    margin-bottom: 15px;
    font-size: 18px;
}

</style>

    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="img/bihar/banner1.jpg" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bihar/banner2.jpg" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="img/bihar/banner3.jpg" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

     <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>E-Services</h2>
        </div>

        <div class="row">
          <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
            <div class="icon-box">
              <h4><a href="https://state.bihar.gov.in/disastermgmt/CitizenHome.html">Disaster Management</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
            <div class="icon-box">
              <h4><a href="https://state.bihar.gov.in/main/CitizenHome.html">Commercial Taxes</a></h4>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
            <div class="icon-box">
              <h4><a href="https://state.bihar.gov.in/transport/CitizenHome.html">Transport</a></h4>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <h4><a href="https://state.bihar.gov.in/educationbihar/CitizenHome.html">Education</a></h4>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
              <h4><a href="https://state.bihar.gov.in/krishi/CitizenHome.html">Agriculture</a></h4>
              
            </div>
          </div>

          <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
            <div class="icon-box">
             <h4><a href="https://state.bihar.gov.in/yac/CitizenHome.html">Youth & Art Culture</a></h4>
            
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Services Section -->


<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>
