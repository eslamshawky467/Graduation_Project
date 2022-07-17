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
                @foreach ($doctors as $doctor)
  
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
                      {{$doctor->name}}
                      <a href="{{url('patientchatnow/'.$doctor->id)}}" >
                        <i class="fa fa-commenting-o" style="font-size:24px"></i>
                      </a>
                      
                    </h3>
                    
                    <p class="text-secondary" style="text-align: right;">
  
                      {{$doctor->speciality}}
                    </p>
  
                    
                    <button
                    type="button" 
                    data-toggle="modal"
                    data-target="#"
                    onclick =
                    "
                        var div = document.getElementById('{{$doctor->id}}');  
                            if (div.style.display !== 'none')   
                                div.style.display = 'none';  
                            else  
                                div.style.display = 'block';  
                    " 
                    style=" background-color:rgba(0, 148, 217, 0.658)
                    ;font-size: 20px; width:230px; "
                    class="btn btn-primary mt-3 wow zoomIn">اقرأ المزيد</button>
                   
                    <button  
                   
                    type="button" 
                    data-toggle="modal"
                    data-target="#"
                    onclick =
                    "
                        var div = document.getElementById('{{$doctor->id}}_2');  
                            if (div.style.display !== 'none')   
                                div.style.display = 'none';  
                            else  
                                div.style.display = 'block';  
                    " 
                    style=" background-color:#00d9a5
                    ;font-size: 20px; width:230px; "
                    class="btn btn-primary mt-3 wow zoomIn">احجز الآن</button>
                    
                    
                    
  
                    
                  </div>
                  
                </div>
  
  
                <!--
              Read More Modelss
            -->
                <!--1-->
  
  
                <div
                class="modal"
                id="{{$doctor->id}}"
                tabindex="-1"
                aria-labelledby="eslam"
                style="display: none"
              >
                <div class="modal-dialog modal-lg">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">
                        تفاصيل الطبيب
                      </h5>
                      <button
                        type="button"
                        class="close"
                        data-dismiss="modal"
                        aria-label="Close"
                      >
                        <span aria-hidden="true" onclick =
                        "
                            var div = document.getElementById('{{$doctor->id}}');  
                                if (div.style.display !== 'none')   
                                    div.style.display = 'none';  
                                else  
                                    div.style.display = 'block';  
                        " 
                          ><i class="fa fa-close"></i
                        ></span>
                      </button>
                    </div>
                    <div class="modal-body">
                      <div class="row g-0">
                        <div class="col-md-8 border-right">
                          <div class="status p-3">
                            <table class="table table-borderless">
                              <tbody>
                                <tr>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >المستفى</span
                                      >
                                      <span class="subheadings"
                                        >مستشفى الدقى العام</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >مواعيد العمل</span
                                      >
                                      <span class="subheadings"
                                        >5:00 AM - 9:00 PM</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >الحالة</span
                                      >
                                      <span class="subheadings"
                                        ><i class="dots"></i> متاح</span
                                      >
                                    </div>
                                  </td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >التخصص</span
                                      >
                                      <span class="subheadings"
                                        >{{$doctor->speciality}}</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >قام بتعينه</span
                                      >
                                      <span class="subheadings"
                                        >{{$doctor->name}}</span
                                      >
                                    </div>
                                  </td>
                                  <td></td>
                                </tr>
                                <tr>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >العنوان</span
                                      >
                                      <span class="subheadings"
                                        >{{$doctor->address}}</span
                                      >
                                    </div>
                                  </td>
                                  <td colspan="2">
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >سبب الزيارة</span
                                      >
                                      <span class="subheadings"
                                        >جميع امراض العيون</span
                                      >
                                    </div>
                                  </td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <div class="col-md-4">
                          <div class="p-2 text-center">
                            <div class="profile">
                              <img
                                src="../Front Views/assets/img/doctors/d1.jpg"
                                width="100"
                                class="rounded-circle img-thumbnail"
                              />
                              <span class="d-block mt-3 font-weight-bold"
                                >{{$doctor->name}}</span
                              >
                            </div>
                            <div class="about-doctor">
                              <table class="table table-borderless">
                                <tbody>
                                  <tr>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >التخرج</span
                                        >
                                        <span class="subheadings"
                                          >جامعة عين شمس</span
                                        >
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >اللغات</span
                                        >
                                        <span class="subheadings"
                                          >عربي, انجليزي, فرنساوي</span
                                        >
                                      </div>
                                    </td>
                                  </tr>
                                  <tr>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >المنظمة</span
                                        >
                                        <span class="subheadings"
                                          >منظمة الصحة العالمية</span
                                        >
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >التخصص</span
                                        >
                                        <span class="subheadings"
                                          >العيون</span
                                        >
                                      </div>
                                    </td>
                                  </tr>
                                </tbody>
                              </table>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
  
                </div>
  
  
  
                </div>
  
                
                
  
                <!--
          make appointment Models
        -->
  
                <div
                  class="modal "
                  id="{{$doctor->id}}_2"
                  tabindex="-1"
                  aria-labelledby="exampleModalLabel"
                 style="display: none" 
                >
                  <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                      <div class="modal-header">
                        <button
                          type="button"
                          class="close"
                          data-dismiss="modal"
                          aria-label="Close"
                        >
                          <span aria-hidden="true"
                          onclick =
                          "
                              var div = document.getElementById('{{$doctor->id}}_2');  
                                  if (div.style.display !== 'none')   
                                      div.style.display = 'none';  
                                  else  
                                      div.style.display = 'block';  
                          " 
                            ><i class="fa fa-close"></i
                          ></span>
                        </button>
                      </div>
                      <div class="modal-body" style="direction: rtl;">
                        <div class="container">
                          <form class="main-form" method="POST" action="{{url('book')}}">
                            @csrf
                            <h1 class="text-center wow fadeInUp">حجز موعد</h1>
  
                            <h1 class="text-right wow fadeInUp mt-3">{{$doctor->name}}</h1>
  
                            <div class="row mt-3">
                              
                              <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                                <input
                                  type="text"
                                  name="fullname"
                                  id="name"
                                  class="form-control"
                                  placeholder="الأسم بالكامل"
                                  required
                                />
                              </div>
                              <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                <input
                                  type="text"
                                  name="email"
                                  id="email"
                                  class="form-control"
                                  placeholder="البريد الألكتروني"
                                  required
                                />
                              </div>
                              <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                                <input
                                  type="number"
                                  name="phone"
                                  id="phone"
                                  class="form-control"
                                  placeholder="البريد الألكتروني"
                                  required
                                />
                              </div>
                              <input type="hidden" name="doctor_id" value="{{$doctor->id}}"  />
                              <div
                                class="col-12 py-2 wow fadeInUp"
                                data-wow-delay="300ms"
                              >
                                <select class="form-control" name="appointment" required>
                                  <option>اختار موعد الحجز</option>
                                  <option>الواحده ظهرا</option>
                                  <option>الثانيه ظهرا</option>
                                  <option>العاشرة صباحا</option>
                                </select>
                              </div>
                              <div
                                class="col-12 py-2 wow fadeInUp"
                                data-wow-delay="300ms"
                              >
                                <textarea
                                  name="message"
                                  id="message"
                                  class="form-control"
                                  rows="6"
                                  placeholder="تفاصيل الحجز.."
                                ></textarea>
                              </div>
                            </div>
  
                            <button
                              type="submit"
                                
                              style="margin-bottom: 10px;background-color: blue;width:60px;border-width: 1px"
                            >
                              حجز
                            </button>
                          </form>
                        </div>
                        <!-- .container -->
                      </div>
                    </div>
                  </div>
                </div>
  
                @endforeach
  
              </div>
              
            </div>
          </div>
        </div>
          
        <!-- .container -->
      </div>
  
      @include('Patient.patient_footer')
  </div>
</div>
<!-- end sidebar-->
  <!-- Back to top button -->
  

    @include('Patient.patient_scripts')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  
</body>
</html>