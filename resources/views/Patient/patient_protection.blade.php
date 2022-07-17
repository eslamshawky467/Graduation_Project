<!DOCTYPE html>
<html lang="en">
<  @include('patient.patient_styles')
<body>

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
              
@foreach ($protect as $protect)
    

              <div class="col-md-6 col-lg-4">
                <!-- Bootstrap 5 card box -->
               

                <div class="card-box">
                  <div class="card-thumbnail">
                    <img
                      src="../Front Views/assets/img/doctors/d1.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <h3 class="mt-2 text-danger" style="text-align: right;">
                    {{$protect->title}}
                    
                    
                  </h3>
                  
                  <p class="text-secondary" style="text-align: right;">

                    مقالات توعيه
                  </p>

                  <a href="{{url('show_protection_post/'.$protect->id)}}" >
                    <button
                    type="button" 
                    data-toggle="modal"
                    data-target="#"
                    onclick =
                    "
                        var div = document.getElementById('');  
                            if (div.style.display !== 'none')   
                                div.style.display = 'none';  
                            else  
                                div.style.display = 'block';  
                    " 
                    style=" background-color:rgba(0, 148, 217, 0.658)
                    ;font-size: 20px; width:230px; "
                    class="btn btn-primary mt-3 wow zoomIn">اقرأ المزيد</button>
                  </a>
                  
                  
                  
                  

                  
                </div>
                
              </div>
              @endforeach


              <!--Read More Modelss-->
          

             

            </div>
            
          </div>
        </div>
      </div>
        
      <!-- .container -->
    </div>

    @include('Patient.patient_footer')

    @include('Patient.patient_scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
</body>
</html>