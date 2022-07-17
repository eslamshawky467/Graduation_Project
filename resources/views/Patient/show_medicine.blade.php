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
    <h1 class="text-center wow fadeInUp">الدواء</h1>
    <div class="row mt-5">
        @foreach ($pharmacy_data as $item)
            
                <div style="width:100%" class="col-md-6 col-lg-4">
                    <!-- Bootstrap 5 card box -->
                    <a href="{{url('make_order/'.$item->id)}}">
                        <div class="card-box">
                            <div class="card-thumbnail">

                                <img
                                src="{{ asset('/image_medicineFolder/'.$item->medicine_image) }}" width="100%"
                                    class="img-fluid"
                                    alt=""
                                />
                            </div>
                            <h3 class="mt-2 text-danger" style="text-align: right;">{{$item->name}}</h3>
                            <h4 class="mt-2 text-danger" style="text-align: right;">{{$item->illness}}</h4>
                            <p class="text-secondary" style="text-align: right;">
                                {{$item->illness}}
                            </p>
                            <p class="text-secondary" style="text-align: right;">
                                {{$item->description}}
                            </p>
                            <div  class="col-12 text-center mt-4 wow zoomIn">
                                <a href="{{url('make_order/'.$item->id)}}" class="btn btn-primary">للمزيد من الاطباء والتفاصيل</a>
                                </div>
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