<?php include('security.php'); ?>
<?php include('includes/header.php');?>
<?php include('includes/navbar.php');?>

   
 <style type="text/css">
  
   button{
  background: #3fbbc0;
  border: 0;
  padding: 10px 24px;
  color: #151515;
  transition: 0.4s;
  border-radius: 4px;
}

.section .card-header a{
  color: white;
}

</style>
<br><br><br>
    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact</h2>
        </div>

        <div class="row">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>Abids,Telangana</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>shaharyaarkutchi7@gmail.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>+91 9533699475</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6 mt-4 mt-md-0">
            <form action="code.php" method="post" >
              <div class="form-row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                  <div class="validate"></div>
                </div>
                <div class="col-md-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid email" />
                  <div class="validate"></div>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phonenumber" data-rule="minlen:8" data-msg="Please enter at least 8 chars of phone" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject" />
                <div class="validate"></div>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" data-rule="required" data-msg="Please write something for us" placeholder="Message"></textarea>
                <div class="validate"></div>
              </div>
              <div class="text-center"><button type="submit" name="contact_form">Send Message</button></div>
            </form> 
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

       <section class="section" id="contact">
<div class="container">

<h1>Our Social Hub </h1>
<br>
<div class="card-deck text-center" id="social">

    <div class="card" style="background-color: green;">
        <div class="card-body">
            <img src="img/contact/whatsapp.png">
        </div>
        <div class="card-header">
           <a href="https://api.whatsapp.com/send?phone=919596655577&text=Hi&source=&data=&app_absent="><h5>Whatsapp</h5></a>
         </div>   
    </div>
    <div class="card" style="background-color: #1B46CF;">
        <div class="card-body">
            <img src="img/contact/facebook.png">
        </div>
        <div class="card-header">
           <a href="https://www.messenger.com/login.php?next=https%3A%2F%2Fwww.messenger.com%2Ft%2FMyGovIndia"><h5>Facebook Messenger</h5></a>
         </div>   
    </div>
    <div class="card" style="background-color:#17379D;">
        <div class="card-body">
            <img src="img/contact/facebook (1).png">
        </div>
        <div class="card-header">
           <a href="https://www.facebook.com/MyGovIndia/"><h5>Facebook Page</h5></a>
         </div>   
    </div>
    <div class="card" style="background-color: #1B46CF;">
        <div class="card-body">
            <img src="img/contact/telegram.png">
        </div>
        <div class="card-header">
           <a href="https://t.me/MyGovCoronaNewsdesk"><h5>Newsdesk Telegram</h5></a>
         </div>   
    </div>
</div>
</div>
</section>


<?php include('includes/scripts.php');?>
<?php include('includes/footer.php');?>
