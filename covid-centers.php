<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>


<style type="text/css">
    
.button{
    background: #3498db;
    color: #fff;
    border-radius: 50px;
    margin: 0 15px;
    padding: 10px 30px; 
}


    
</style>
    <!-- bradcam_area_start  -->
    <div class="bradcam_area breadcam_bg ">
        <div class="container">
            <br><br><br><br>
            <div class="row">
                <div class="col-lg-6">
                    <div class="bradcam_text">
                        <br>
                        <h1>Covid Care Centers</h1>
                        <p>Currently, there are 6 government laboratories and 2 private laboratories approved to test for Real-Time PCR tests (RT PCR tests); 34 government laboratories to test for TrueNat tests; 1 government laboratory and 1 private laboratory approved to test for CBNAAT testing of COVID-19 in Bihar. .</p>
                            <a href="#iso"><button class="button">Know More</button></a>

                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="bradcam_text">
                        <img src="img/bihar/center.jpg" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- bradcam_area_end  -->


    <!-- Start Sample Area -->
       <section id="clients" class="clients clients ">
      <div class="container  text-center">

        <div class="row col-lg-12">

          <div class="col-lg-3 " data-aos="zoom-in" data-aos-delay="100">
            <a href="#"><h4>Isolation Centers</h4></a>
          </div>

          <div class="col-lg-3 " data-aos="zoom-in" data-aos-delay="100">
            <a href="#"><h4>Quarantine Centers</h4></a>
          </div>

          <div class="col-lg-3 " data-aos="zoom-in" data-aos-delay="100">
            <a href="covid-dashboard.php #testing"><h4>Testing Centers</h4></a>
            
          </div>

          <div class="col-lg-3 " data-aos="zoom-in" data-aos-delay="100">
            <a href="#"><h4>Containment Zones</h4></a>
            
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->

    <br><br><br>
    <!-- Start Align Area -->


     <div class="whole-wrap">
        <div class="container box_1170">
            <div class="col-lg-12">
                     <h2 class="title-1 m-b-25" id="iso" >Covid19 Health Care Centers In Bihar</h2>
                    <div class="table-responsive table--no-card m-b-40">
                        <table class="table table-borderless table-striped table-earning"  id="state-wise">
                                    <thead>
                                        <tr>
                                            <th class="bg-secondary">S.No</th>
                                            <th class="bg-info">Health Facility Name</th>
                                            <th class="bg-warning">Landmark</th>
                                            <th class="bg-primary">District</th>
                                            <th class="bg-success">Facility Type</th>
                                            <th class="bg-danger">Pincode</th>
                                        </tr>
                                    </thead>
                                    <tbody id="state-wise">
                                        
                                        
                                    </tbody>
                              
                        </table>
                     </div>
            </div>
        </div>
    </div>        

   <script type="text/javascript">
        
        $.ajax({
    url:"https://api.data.gov.in/resource/0dfebd78-bac4-44be-9291-025a983323f4?api-key=579b464db66ec23bdd0000016eb95066326649877300f6063b2b8d14&format=json&offset=0&limit=2000",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data) {


     console.log(covid_data.records);


     var newArray = covid_data.records.filter(function (el) {

      return el.state_name === 'Bihar';

    });

     

    console.log(newArray);

       var sno = 1;

    $.each(newArray, function(key, value){
      

      $("#state-wise").append("<tr>" + 
        "<td>" + sno + " </td>" +
        "<td>" + value.health_facility_name + "</td>" +
        "<td>" + value.landmark + "</td>" +
        "<td>" + value.district_name + "</td>" +
        "<td>" + value.facility_type + "</td>" +
        "<td>" + value.pincode + "</td>" +
        "</tr>" );
      sno++;


    });


     }
     

    });    

    </script>

<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>



                

          