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



    




<div class="page-section bg-light">
    <div class="container">
    <h1 class="text-center wow fadeInUp">الادويه</h1>
    <div class="row mt-5">
        @foreach ($pharmacy_data as $item)
            
                <div class="col-md-6 col-lg-4">
                    <!-- Bootstrap 5 card box -->
                    <a href="{{url('show_medicine/'.$item->illness)}}">
                        <div class="card-box">
                            <div class="card-thumbnail">
                                <img
                                    src="../Front Views/assets/img/doctors/WhatsApp Image 2022-06-21 at 8.59.40 PM (1).jpeg"
                                    class="img-fluid"
                                    alt=""
                                />
                            </div>
                            <h3 class="mt-2 text-danger" style="text-align: right;">{{$item->name}}</h3>
                            <p class="text-secondary" style="text-align: right;">
                                {{$item->illness}}
                            </p>
                        </div>
                    </a>
                </div>
            
        @endforeach

       
        

        
    </div>
    </div>
</div> <!-- .page-section -->

<!-- .page-section -->

<!-- .banner-home -->


@include('Patient.patient_footer')
</div>
</div>
<!-- end sidebar-->



@include('Patient.patient_scripts')

</body>
</html>