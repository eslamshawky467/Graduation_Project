<!DOCTYPE html>
<html lang="en">
  @include('patient.patient_styles')

<body>
  <div class="wrapper">
    <!-- Sidebar Holder -->
    @include('Patient.patient_sidebar')
    <!-- Page Content Holder -->
    <div id="content">
      <!-- Back to top button -->
      <div class="back-to-top"></div>

  @include('Patient.patient_header')

  <div class="page-banner overlay-dark bg-image" style="background-image: url('../Front Views/assets/img/bg3.jpg');">
    <div class="banner-section">
      <div class="container text-center wow fadeInUp">
        <nav aria-label="Breadcrumb">
          <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2">
            <li class="breadcrumb-item"><a href="Home.html">الصفحة الرئيسية</a></li>
            <li class="breadcrumb-item active" aria-current="page">اتصل بنا</li>
          </ol>
        </nav>
        <h1 class="font-weight-normal">اتصل بنا</h1>

      </div> <!-- .container -->
    </div> <!-- .banner-section -->
  </div> <!-- .page-banner -->

  <div class="page-section">
    <div class="container" style="direction: rtl;">
      <h1 class="text-center wow fadeInUp"> ابقى على اتصال بنا</h1>

      <form class="contact-form mt-5" method="POST" action="{{url('contact')}}">
        @csrf
        <div class="row mb-3">
          <div class="col-sm-6 py-2 wow fadeInLeft">

            <input type="text" id="fullName" name="name" class="form-control" placeholder="الأسم بالكامل..">
          </div>
          <div class="col-sm-6 py-2 wow fadeInRight">

            <input type="text" id="emailAddress" name="email" class="form-control" placeholder="البريد الألكتروني..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">

            {{-- <input type="text" id="message" name="t" class="form-control" placeholder="عنوان الرسالة.." /> --}}
            <input name="Title" id="message" class="form-control" rows="1" placeholder="تفاصيل الرسالة..">
          </div>
          <div class="col-12 py-2 wow fadeInUp">

            <textarea name="msg" id="message" class="form-control" rows="8" placeholder="تفاصيل الرسالة.."></textarea>
          </div>
        </div>
        <button type="submit" class="btn btn-primary wow zoomIn">إرسال </button>
      </form>
    </div>
  </div>


  @include('Patient.patient_footer')

    </div>
  </div>
  <!-- Back to top button -->


  @include('Patient.patient_scripts')

<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAIA_zqjFMsJM_sxP9-6Pde5vVCTyJmUHM&callback=initMap"></script>

</body>
</html>
