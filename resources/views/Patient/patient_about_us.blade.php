<!DOCTYPE html>
<html lang="en">
  @include('patient.patient_styles')

<body>
<!-- sidebar -->
<div class="wrapper">
  <!-- Sidebar Holder -->
  @include('Patient.patient_sidebar')
  <!-- Page Content Holder -->
  <div id="content">
    <!-- Back to top button -->
    <!-- Back to top button -->
  <div class="back-to-top"></div>

  @include('Patient.patient_header')


  <div class="page-banner overlay-dark bg-image" style="background-image: url('../Front Views/assets/img/bg3.jpg');">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="Home.html">الصفحة الرئيسية</a></li>
            <li class="breadcrumb-item active" aria-current="page">من نحن</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">من نحن</h1>
        
      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-4">
          <div class="card-box text-center">
            <div class="user-pic">
              <img src="../Front Views/assets/img/about-us/body.jpg" class="img-fluid" alt="User Pic">
            </div>
            <h4>Abd El-Rahman Ramadan</h4>
            <h6>Software Engineer (Backend Developer)</h6>
            <hr>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            <!--
            <hr>
            <a href="#" class="btn btn-primary">Know More</a>
            -->
            
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-box text-center">
            <div class="user-pic">
              <img src="../Front Views/assets/img/about-us/eslam.jpg" class="img-fluid" alt="User Pic">
            </div>
            <h4>Eslam Shawky</h4>
            <h6>Backend Developer</h6>
            <hr>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
            
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-box text-center">
            <div class="user-pic">
              <img src="../Front Views/assets/img/about-us/mohamady.jpg" class="img-fluid" alt="User Pic">
            </div>
            <h4>Eslam Mohammady</h4>
            <h6>Backend Developer</h6>
            <hr>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s</p>
          
          </div>
        </div>

        <div class="col-md-4">
          <div class="card-box text-center">
            <div class="user-pic">
              <img src="../Front Views/assets/img/about-us/ragabola.jpg" class="img-fluid" alt="User Pic">
            </div>
            <h4>Abd El-Rahman Ragab</h4>
            <h6>Data Analyst</h6>
            <hr>
            <p>I'm a curious data enthusiast who loves to code. Ever since i got introduced to programming, i have been obsessed with using code to solve problems or create scripts for tasks.</p>
            
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box text-center">
            <div class="user-pic">
              <img src="../Front Views/assets/img/about-us/bary.jpeg" class="img-fluid" alt="User Pic">
            </div>
            <h4>Abd El-Bary Nasser</h4>
            <h6>QA Engineer</h6>
            <hr>
            <p>Finding bugs is not only a job for me, but iy's also my favorite hobby;
              Delivering the software as high quality as possible is my highest priority.</p>
              <span>Bug Hunter</span>
      
          </div>
        </div>
        <div class="col-md-4">
          <div class="card-box text-center">
            <div class="user-pic">
              <img src="../Front Views/assets/img/about-us/farahat.jpg" class="img-fluid" alt="User Pic">
            </div>
            <h4>Ahmed Farahat</h4>
            <h6>Front End Developer</h6>
            <hr>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s.</p>
          </div>
        </div>

        
      </div>
    </div>
  </div>

<!-- .banner-home -->

@include('Patient.patient_footer')
  
  </div>
</div>
<!-- end sidebar-->
  

@include('Patient.patient_scripts')

</body>
</html>