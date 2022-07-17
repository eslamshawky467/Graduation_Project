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


  <div
      class="page-banner overlay-dark bg-image"
      style="background-image: url('../Front Views/assets/img/bg3.jpg')"
    >
      <div class="banner-section">
        <div class="container text-center wow fadeInUp">
          <nav aria-label="Breadcrumb">
            <ol
              class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2"
            >
              <li class="breadcrumb-item"><a href="Home.html">الصفحة الرئيسية</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                الأطباء
              </li>
            </ol>
          </nav>
          <h1 class="font-weight-normal">الأطباء</h1>


        </div>
        <!-- .container -->
      </div>
      <!-- .banner-section -->
    </div>
    <!-- .page-banner -->

    <div class="page-section bg-light">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="row">
<div class="table-responsive">
    <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
        style="text-align: center">
        <thead>
            <tr>
                <th>Created By</th>
                <th>Post Image</th>
                <th>Post Body</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 0; ?>
            @foreach ($notes as $note)
                <tr>
                    <td> {{$note->created_by}}</td>
                    <td><img src="/image_notesFolder/{{ $note->image}}"class="rounded-full h-10 w-10 object-cover"></td>
                    <td>{{ $note->postbody }}</td>
                </tr>
            @endforeach









                @include('Patient.patient_scripts')

            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</div>
</div>
            </body>
            </html>
