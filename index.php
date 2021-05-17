<?php include('security.php'); ?>
<?php include('includes/header.php') ?>
<?php include('includes/navbar.php') ?>

 <section id="hero" class="d-flex align-items-center">

    <div class="container">
      <div class="row">
        <div class="col-lg-6 ">
          <h1 data-aos="fade-up">Welcome To Bihar</h1>
          <h3 data-aos="fade-up" id="MainStateConfirmed">Covid19 Cases - </h3>
          <h2 data-aos="fade-up" style="font-size: 50px;" id="TelanganaConfirmed"></h2>
          <div data-aos="fade-up" data-aos-delay="800">
            <a href="covid-dashboard.php" class="btn-get-started scrollto">Covid 19 Dashboard</a>
          </div>
        </div>
        <div class="col-lg-6 order-1 order-lg-2 hero-img" data-aos="fade-left" data-aos-delay="200">
          <img src="img/bihar/map.png" class="img-fluid animated" alt="">
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row no-gutters">
          <div class="content col-xl-5 d-flex align-items-stretch" data-aos="fade-right">
            <div class="content">
              <h3>About Bihar</h3>
              <p>
                Bihar is located in the eastern part of the country (between 83°-30' to 88°-00' longitude). It is an entirely land–locked state, although the outlet to the sea through the port of Kolkata is not too far away. Bihar lies mid-way between the humid West Bengal in the east and the sub humid Uttar Pradesh in the west which provides it with a transitional position in respect of climate, economy and culture. It is bounded by Nepal in the north and by Jharkhand in the south. The Bihar plain is divided into two unequal halves by the river Ganga which flows through the middle from west to east.
              </p>
              <a href="https://state.bihar.gov.in/main/Content.html?links&page=Bihar%20State%20Profile" class="about-btn">Know More <i class="bx bx-chevron-right"></i></a>
            </div>
          </div>
          <div class="col-xl-7 d-flex align-items-stretch" data-aos="fade-left">
            <div class="icon-boxes d-flex flex-column justify-content-center">
              <div class="row">
                <div class="col-lg-12 icon-box" data-aos="fade-up" data-aos-delay="100">
                 
                  <h5 style="text-decoration: underline;">Country</h5>
                  <h5><strong>Formation:</strong> 22 March 1912</h5>
                  <h5><strong>Capital:</strong> Patna</h5>
                  <h5><strong>Districts:</strong> 38</h5>
                </div>
                <div class="col-lg-12 icon-box" data-aos="fade-up" data-aos-delay="200">
                  
                  <h5 style="text-decoration: underline;">Government</h5>
                  <h5><strong>Governor Shri:</strong> Phagu Chauhan</h5>
                  <h5><strong>Chief Minister:</strong> Shri Nitish Kumar</h5>
                  <h5><strong>Deputy Chief Minister:</strong> Shri Sushil Kumar Modi </h5>
                </div>
                <div class="col-lg-12 icon-box" data-aos="fade-up" data-aos-delay="300">
                 
                  <h5 style="text-decoration: underline;">Area</h5>
                  <h5><strong>Total Area:</strong> 94,163 km2 (36,357 sq mi)</h5>
                  <h5><strong>Population:</strong> 10,40,99,452</h5>

                </div>

              </div>
            </div><!-- End .content-->
          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Clients Section ======= -->
    <section id="clients" class="clients">
      <div class="container" data-aos="zoom-in">

        <div class="row">

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <h5>Confirmed Cases - &nbsp;</h5>
            <h6 id="StateConfirmed"></h6>
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
           <h5>Active Cases - &nbsp;</h5>
           <h6 id="StateActive"></h6>
          </div>

           <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <h5>Recovered Cases - &nbsp;</h5>
            <h6 id="StateRecovered"></h6>
          </div>

          <div class="col-lg-3 col-md-4 col-6 d-flex align-items-center justify-content-center">
            <h5>Death Cases - &nbsp;</h5>
            <h6 id="StateDeath"></h6>
          </div>

        </div>

      </div>
    </section><!-- End Clients Section -->



  <!-- ======= Cta Section ======= -->
    <section id="cta" class="cta">
      <div class="container" data-aos="zoom-in">

        <div class="text-center">
          <h3>Coronavirus</h3>
          <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus.
Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.<br><br>
The COVID-19 virus spreads primarily through droplets of saliva or discharge from the nose when an infected person coughs or sneezes, so it’s important that you also practice respiratory etiquette (for example, by coughing into a flexed elbow).
At this time, there are no specific vaccines or treatments for COVID-19. However, there are many ongoing clinical trials evaluating potential treatments. WHO will continue to provide updated information as soon as clinical findings become available.</p>
        </div>

      </div>
    </section><!-- End Cta Section -->

     <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Covid19 Symptoms</h2>
        </div>

        <div class="row">

          <div class="col-lg-3 " data-aos="zoom-in" data-aos-delay="100" >
            <div class="icon-box">
              <div class="icon">
                <img src="img/icons/education.png">
              </div>
              <h4 class="title"><a href="">Fever</a></h4>
              <p class="description">A temporary increase in average body temperature of 98.6°F (37°C).</p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100"  >
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <img src="img/icons/cold.png">
              </div>
              <h4 class="title"><a href="">Tiredness</a></h4>
              <p class="description">Feeling overtired, with low energy and a strong desire to sleep that interferes with normal daily activities.</p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100"  >
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <img src="img/icons/avatar.png">
              </div>
              <h4 class="title"><a href="">Dry cough</a></h4>
              <p class="description">A sudden, forceful hacking sound to release air and clear an irritation in the throat or airway.</p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100"  >
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <img src="img/icons//healthcare-and-medical (2).png">
              </div>
              <h4 class="title"><a href="">Aches and Pains</a></h4>
              <p class="description">Muscle pain is most often related to tension, overuse, or muscle injury from exercise or hard physical work.</p>
            </div>
          </div>

        </div>
        <br><br><br>
        <div class="row">

             <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100"  >
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <img src="img/icons/discharge.png">
              </div>
              <h4 class="title"><a href="">Nasal Congestion</a></h4>
              <p class="description">Nasal passages swollen with excess fluid and mucus, may be triggered by infection, tobacco smoke or perfume.</p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100"  >
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <img src="img/icons/discharge (5).png">
              </div>
              <h4 class="title"><a href="">Runny Nose</a></h4>
              <p class="description">Excess drainage, ranging from a clear fluid to thick mucus, from the nose and nasal passages.</p>
            </div>
          </div>
          
          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100"  >
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <img src="img/icons/medical.png">
              </div>
              <h4 class="title"><a href="">Sore Throat</a></h4>
              <p class="description">Pain or irritation in the throat that can occur with or without swallowing, often accompanies infections, such as a cold or flu.</p>
            </div>
          </div>

          <div class="col-lg-3" data-aos="zoom-in" data-aos-delay="100"  >
            <div class="icon-box iconbox-blue">
              <div class="icon">
                <img src="img/icons/healthcare-and-medical (1).png">
              </div>
              <h4 class="title"><a href="">Diarrhoea</a></h4>
              <p class="description">Loose, watery bowel movements that may occur frequently and with a sense of urgency.</p>
            </div>
          </div>


          
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Our Services</h2>
        </div>

        <div class="row">
          <div class="col-lg-12 d-flex justify-content-center">
            <ul id="portfolio-flters">
              <li data-filter="*" class="filter-active">All</li>
              <li data-filter=".filter-app">Health Care</li>
              <li data-filter=".filter-card">Disaster Management</li>
              <li data-filter=".filter-web">Education & Skilling</li>
            </ul>
          </div>
        </div>

        <div class="row portfolio-container" data-aos="fade-up" data-aos-delay="200">

          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/home/center.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Public Health Care Center</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/home/medical.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Medical</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/home/blood.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Blood Bank</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/donate.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Donations</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

             <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/volunteer.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Volunteers</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/govt1.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Government Services</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

           <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/mask.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Movement Pass</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>
          
         <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="img/home/hr.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>HR Recruitment</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <img src="img/home/courses.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Online Vocational Training Courses</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-app">
            <img src="img/home/msme.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>MSME Products</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/courses.png" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Essential Workers</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>


          <div class="col-lg-4 col-md-6 portfolio-item filter-card">
            <img src="img/home/donation.jpg" class="img-fluid" alt="" style="height: 220px; width: 420px;">
            <div class="portfolio-info">
              <h4>Food Supply</h4>
              <a href="#" class="details-link" title="More Details"></a>
            </div>
          </div>

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq bg-warning">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>STAY HOME, STAY SAFE</h2>
          <p>To Flatten The Curve & Break the Chain</p>
        </div>

        <ul class="faq-list">

          <li data-aos="fade-up" data-aos-delay="100">
            <a data-toggle="collapse" class="collapsed" href="#faq1">WASH HANDS OFTEN <i class="icofont-simple-up"></i></a>
        
          </li>

          <li data-aos="fade-up" data-aos-delay="200">
            <a data-toggle="collapse" href="#faq2" class="collapsed">COVER YOUR COUGH <i class="icofont-simple-up"></i></a>
        
          </li>

          <li data-aos="fade-up" data-aos-delay="300">
            <a data-toggle="collapse" href="#faq3" class="collapsed">KEEP A SAFE DISTANCE  <i class="icofont-simple-up"></i></a>
           
          </li>

          <li data-aos="fade-up" data-aos-delay="400">
            <a data-toggle="collapse" href="#faq4" class="collapsed">SICK? CALL THE HELPLINE <i class="icofont-simple-up"></i></a>
        
          </li>

        </ul>



      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

<script type="text/javascript">
  
$.ajax({
    url:"https://api.covid19india.org/v2/state_district_wise.json",
    type:"GET",
    dataType:"JSON",
    success : function(covid_data) {

     //console.log(covid_data);
     var newArray = covid_data.filter(function (el) {

      return el.state === 'Bihar';

    });

    //console.log(newArray);

    Array.prototype.sum = function (prop) {
    var total = 0
    for ( var i = 0, _len = this.length; i < _len; i++ ) {
        total += this[i][prop]
    }
    return total
    }

    var StateConfirmed = newArray[0].districtData.sum("confirmed");
    document.getElementById("StateConfirmed").innerHTML = StateConfirmed;

    var StateActive = newArray[0].districtData.sum("active");
    document.getElementById("StateActive").innerHTML = StateActive;

    var StateDeath = newArray[0].districtData.sum("deceased");
    document.getElementById("StateDeath").innerHTML = StateDeath;

    var StateRecovered = newArray[0].districtData.sum("recovered");
    document.getElementById("StateRecovered").innerHTML = StateRecovered;

    var MainStateConfirmed = newArray[0].districtData.sum("confirmed");
    document.getElementById("MainStateConfirmed").innerHTML = "Covid19 Cases - " + (MainStateConfirmed) ;
}

});


</script>

<?php include('includes/footer.php') ?>
<?php include('includes/scripts.php') ?>
