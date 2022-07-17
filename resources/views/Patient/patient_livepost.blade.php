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
  <div class="back-to-top"></div>

  @include('Patient.patient_header')
 
  @include('Patient.patient_PPM')

   
 
 
  <div class="page-wrapper">
    <div class="content">
        <section class="main-content">
            <div class="container">
                
                <br>
                <div class="row">
                    <div class="col-sm-8 offset-sm-1" style="margin-top: -150px;">
                        <h1 class="text-center text-uppercase">Social Media Post</h1>
                        <livewire:live-post :posts="$posts">

                    </div>
                </div>
            </div>
        </section>
    </div>

</div>
 
 @include('Patient.patient_footer')
  </div>
</div>
<!-- end sidebar-->

  

@include('Patient.patient_scripts')

</body>
</html>





