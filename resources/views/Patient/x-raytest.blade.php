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


        @if(session()->has('test'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <p style="text-align: right"><strong>{{ session()->get('test') }}</strong></p>
                </button>
            </div>
        @endif
  
      {{-- <div class="page-section pb-0" style="direction: rtl; background-color: white;"> --}}
        <br>
        <h1 style="text-align: center">
            <b>
            إجراء فحص
            </b>
        </h1>
        <br>


        <br>
        <form action="{{url('/makecheckup')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="imagefile">

            <br>
            <br>
            <input type="submit" style="background-color:#48D1CC; margin-left:20px" class="btn btn-primary" value="اضغط للفحص">
            <div>
      
        </form>


        
        <div style="margin-top: 80px"></div>
        

          
    {{-- </div> <!-- .page-section --> --}}
  
    <!-- .page-section -->
  
    <!-- .banner-home -->
  
    @include('Patient.patient_footer')
  
  </div>
</div>
<!-- end sidebar-->
  <!-- Back to top button -->
  
  @include('Patient.patient_scripts')
  

</body>
</html>