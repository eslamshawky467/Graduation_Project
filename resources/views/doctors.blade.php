<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />

    <meta name="copyright" content="MACode ID, https://macodeid.com/" />

    <title>الأطباء</title>

    <link rel="stylesheet" href="../../Front Views/assets/css/maicons.css" />

    <link rel="stylesheet" href="../../Front Views/assets/css/bootstrap.css" />

    <link
      rel="stylesheet"
      href="../../Front Views/assets/vendor/owl-carousel/css/owl.carousel.css"
    />

    <link rel="stylesheet" href="../../Front Views/assets/vendor/animate/animate.css" />

    <link rel="stylesheet" href="../../Front Views/assets/css/theme.css" />

    <link rel="stylesheet" href="../../Front Views/assets/css/readMore.css" />
<!--
  <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css"
    />
-->
    

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <style>
      .card-box {
        border: 1px solid #ddd;
        padding: 20px;
        box-shadow: 0px 0px 10px 0px #c5c5c5;
        margin-bottom: 30px;
        float: left;
        border-radius: 10px;
      }
      .card-box .card-thumbnail {
        max-height: 200px;
        overflow: hidden;
        border-radius: 10px;
        transition: 1s;
      }
      .card-box .card-thumbnail:hover {
        transform: scale(1.2);
      }
      .card-box h3 a {
        font-size: 20px;
        text-decoration: none;
      }
    </style>
  </head>
  <body>
    <!-- Back to top button -->
    <div class="back-to-top"></div>

    <header>
      <nav
        class="navbar navbar-expand-lg navbar-light shadow-sm"
        style="direction: rtl"
      >
        <div class="container">
          <div class="collapse navbar-collapse" id="navbarSupport">
            <ul class="navbar-nav ml-auto">
              
                @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <x-app-layout>

                            </x-app-layout>     
                            {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                        </li>
                            @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}"  class="nav-link">تسجيل الدخول</a>
                        </li>
                            @if (Route::has('register'))
                        <li class="nav-item">    
                            <a href="{{ route('register') }}" class="nav-link" >التسجيل لأول مرة </a>
                        </li>
                            @endif
                        @endauth
                @endif

  
              <li class="nav-item">
                <a class="nav-link" href="{{url('/')}}">الصفحة الرئيسية</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/about us')}}">من نحن ؟</a>
              </li>
              <li class="nav-item active">
                <a class="nav-link" href="{{url('/doctors')}}">الأطباء</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="B_blog.html">الأخبار</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="{{url('/call us')}}">اتصل بنا</a>
              </li>
              <!--
              <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
              </li>
            --></ul>
          </div>
          <!-- .navbar-collapse -->

          <a class="navbar-brand" href="/"
            ><span class="text-primary">Diabetic</span>-Retinopathy</a
          >

          <button
            class="navbar-toggler"
            type="button"
            data-toggle="collapse"
            data-target="#navbarSupport"
            aria-controls="navbarSupport"
            aria-expanded="false"
            aria-label="Toggle navigation"
          >
            <span class="navbar-toggler-icon"></span>
          </button>
        </div>
        <!-- .container -->
      </nav>
    </header>

    <div
      class="page-banner overlay-dark bg-image"
      style="background-image: url('../../Front Views/assets/img/bg3.jpg')"
    >
      <div class="banner-section">
        <div class="container text-center wow fadeInUp">
          <nav aria-label="Breadcrumb">
            <ol
              class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0 mb-2"
            >
              <li class="breadcrumb-item"><a href="../index.html">الصفحة الرئيسية</a></li>
              <li class="breadcrumb-item active" aria-current="page">
                الأطباء
              </li>
            </ol>
          </nav>
          <h1 class="font-weight-normal">الأطباء</h1>
          <a href="../loginOrRegister.html" class="btn btn-primary"
            >تسجيل الدخول / الأشتراك</a
          >
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
              <div class="col-md-6 col-lg-4">
                <!-- Bootstrap 5 card box -->
                <div class="card-box">
                  <div class="card-thumbnail">
                    <img
                      src="../../Front Views/assets/img/doctors/d1.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <h3 class="mt-2 text-danger" style="text-align: right;">د/ أمنية</h3>
                  <p class="text-secondary" style="text-align: right;">
                    طبيبة عيون بمستشفى الدقى العام
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#exampleModal"
                    style="margin-right: 10px; margin-top: 10px"
                  >
                    اقرأ المزيد
                  </button>

                  <button
                    type="button"
                    class="btn btn-danger"
                    data-toggle="modal"
                    data-target="#exampleModal11"
                    style="margin-right: 10px; margin-top: 10px"
                    disabled
                  >
                    حجز موعد
                  </button>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- Bootstrap 5 card box -->
                <div class="card-box">
                  <div class="card-thumbnail">
                    <img
                      src="../../Front Views/assets/img/doctors/d2.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <h3 class="mt-2 text-danger" style="text-align: right;">د/ هنا</h3>
                  <p class="text-secondary" style="text-align: right;">
                    طبيبة عيون بمستشفى الوراق المركزي
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#exampleModal2"
                    style="margin-right: 10px; margin-top: 10px"
                  >
                    اقرأ المزيد
                  </button>

                  <button
                    type="button"
                    class="btn btn-danger"
                    data-toggle="modal"
                    data-target="#exampleModal11"
                    style="margin-right: 10px; margin-top: 10px"
                    disabled
                  >
                    حجز موعد
                  </button>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- Bootstrap 5 card box -->
                <div class="card-box">
                  <div class="card-thumbnail">
                    <img
                      src="../../Front Views/assets/img/doctors/d3.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <h3 class="mt-2 text-danger" style="text-align: right;">د/ منى</h3>
                  <p class="text-secondary" style="text-align: right;">
                    دكتورة عيون بمستشفى السلام العام
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#exampleModal3"
                    style="margin-right: 10px; margin-top: 10px"
                  >
                    اقرأ المزيد
                  </button>

                  <button
                    type="button"
                    class="btn btn-danger"
                    data-toggle="modal"
                    data-target="#exampleModal11"
                    style="margin-right: 10px; margin-top: 10px"
                    disabled
                  >
                    حجز موعد
                  </button>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- Bootstrap 5 card box -->
                <div class="card-box">
                  <div class="card-thumbnail">
                    <img
                      src="../../Front Views/assets/img/doctors/d4.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <h3 class="mt-2 text-danger" style="text-align: right;">د/ احمد</h3>
                  <p class="text-secondary" style="text-align: right;">
                    طبيب واخصائي العيون بمستشفى عيادات اليوم الواحد
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#exampleModal4"
                    style="margin-right: 10px; margin-top: 10px"
                  >
                    اقرأ المزيد
                  </button>

                  <button
                    type="button"
                    class="btn btn-danger"
                    data-toggle="modal"
                    data-target="#exampleModal11"
                    style="margin-right: 10px; margin-top: 10px"
                    disabled
                  >
                    حجز موعد
                  </button>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- Bootstrap 5 card box -->
                <div class="card-box">
                  <div class="card-thumbnail">
                    <img
                      src="../../Front Views/assets/img/doctors/d5.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <h3 class="mt-2 text-danger" style="text-align: right;">د/ مصطفى</h3>
                  <p class="text-secondary" style="text-align: right;">
                    طبيب عيون بمستشفى الرحمة الخاصة
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#exampleModal5"
                    style="margin-right: 10px; margin-top: 10px"
                  >
                    اقرأ المزيد
                  </button>

                  <button
                    type="button"
                    class="btn btn-danger"
                    data-toggle="modal"
                    data-target="#exampleModal11"
                    style="margin-right: 10px; margin-top: 10px"
                    disabled
                  >
                    حجز موعد
                  </button>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- Bootstrap 5 card box -->
                <div class="card-box">
                  <div class="card-thumbnail">
                    <img
                      src="../../Front Views/assets/img/doctors/d6.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <h3 class="mt-2 text-danger" style="text-align: right;">د/ عماد</h3>
                  <p class="text-secondary" style="text-align: right;">
                    طبيب عيون بمستشفى الإسراء الخاصة
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#exampleModal6"
                    style="margin-right: 10px; margin-top: 10px"
                  >
                    اقرأ المزيد
                  </button>

                  <button
                    type="button"
                    class="btn btn-danger"
                    data-toggle="modal"
                    data-target="#exampleModal11"
                    style="margin-right: 10px; margin-top: 10px"
                    disabled
                  >
                    حجز موعد
                  </button>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- Bootstrap 5 card box -->
                <div class="card-box">
                  <div class="card-thumbnail">
                    <img
                      src="../../Front Views/assets/img/doctors/d7.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <h3 class="mt-2 text-danger" style="text-align: right;">د/ مروة</h3>
                  <p class="text-secondary" style="text-align: right;">
                    طبيبة عيون بمستشفى حلوان العام
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#exampleModal7"
                    style="margin-right: 10px; margin-top: 10px"
                  >
                    اقرأ المزيد
                  </button>

                  <button
                    type="button"
                    class="btn btn-danger"
                    data-toggle="modal"
                    data-target="#exampleModal11"
                    style="margin-right: 10px; margin-top: 10px"
                    disabled
                  >
                    حجز موعد
                  </button>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- Bootstrap 5 card box -->
                <div class="card-box">
                  <div class="card-thumbnail">
                    <img
                      src="../../Front Views/assets/img/doctors/d8.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <h3 class="mt-2 text-danger" style="text-align: right;">د/ طارق</h3>
                  <p class="text-secondary" style="text-align: right;">
                    طبيب عيون بمستشفى القصر العيني
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#exampleModal8"
                    style="margin-right: 10px; margin-top: 10px"
                  >
                    اقرأ المزيد
                  </button>

                  <button
                    type="button"
                    class="btn btn-danger"
                    data-toggle="modal"
                    data-target="#exampleModal11"
                    style="margin-right: 10px; margin-top: 10px"
                    disabled
                  >
                    حجز موعد
                  </button>
                </div>
              </div>

              <div class="col-md-6 col-lg-4">
                <!-- Bootstrap 5 card box -->
                <div class="card-box">
                  <div class="card-thumbnail">
                    <img
                      src="../../Front Views/assets/img/doctors/d9.jpg"
                      class="img-fluid"
                      alt=""
                    />
                  </div>
                  <h3 class="mt-2 text-danger" style="text-align: right;">د/ محمد</h3>
                  <p class="text-secondary" style="text-align: right;">
                    طبيب عيون بمستشفى محمد السيد بالجيزة
                  </p>
                  <button
                    type="button"
                    class="btn btn-primary"
                    data-toggle="modal"
                    data-target="#exampleModal9"
                    style="margin-right: 10px; margin-top: 10px"
                  >
                    اقرأ المزيد
                  </button>

                  <button
                    type="button"
                    class="btn btn-danger"
                    data-toggle="modal"
                    data-target="#exampleModal11"
                    style="margin-right: 10px; margin-top: 10px"
                    disabled
                  >
                    حجز موعد
                  </button>
                </div>
              </div>

              <!--
            Read More Modelss
          -->
              <!--1-->
              <div
              class="modal fade"
              id="exampleModal"
              tabindex="-1"
              aria-labelledby="exampleModalLabel"
              aria-hidden="true"
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
                      <span aria-hidden="true"
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
                                      >طبيب عيون</span
                                    >
                                  </div>
                                </td>
                                <td>
                                  <div class="d-flex flex-column">
                                    <span class="heading d-block"
                                      >قام بتعينه</span
                                    >
                                    <span class="subheadings"
                                      >د/ محمود</span
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
                                      >مستشفى الدقى العام بشارع مصدق الدقي - الحيزة</span
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
                              src="../../Front Views/assets/img/doctors/d1.jpg"
                              width="100"
                              class="rounded-circle img-thumbnail"
                            />
                            <span class="d-block mt-3 font-weight-bold"
                              >د/ أمنية</span
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

              <!--2-->
              <div
                class="modal fade"
                id="exampleModal2"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
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
                        <span aria-hidden="true"
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
                                        >مستشفى الوراق المركزي</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >مواعيد العمل</span
                                      >
                                      <span class="subheadings"
                                        >8:00 AM - 4:00 PM</span
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
                                        >طبيب عيون</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >قام بتعينه</span
                                      >
                                      <span class="subheadings"
                                        >د/ على</span
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
                                        >شارع ترعة السواحل مستشفى الوراق - الوراق - الجيزة</span
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
                                src="../../Front Views/assets/img/doctors/d2.jpg"
                                width="100"
                                class="rounded-circle img-thumbnail"
                              />
                              <span class="d-block mt-3 font-weight-bold"
                                >د/ هنا</span
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
                                          >جامعة حلوان</span
                                        >
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >اللغات</span
                                        >
                                        <span class="subheadings"
                                          >عربي, انجليزي, اسباني</span
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

              <!--3-->
              <div
                class="modal fade"
                id="exampleModal3"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
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
                        <span aria-hidden="true"
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
                                        >مستشفى السلام العام</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >مواعيد العمل</span
                                      >
                                      <span class="subheadings"
                                        >1:00 AM - 1:00 PM</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >الحالة</span
                                      >
                                      <span class="subheadings"
                                        ><i class="dots1"></i>غير متاح</span
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
                                        >طبيب عيون</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >قام بتعينه</span
                                      >
                                      <span class="subheadings"
                                        >د/ ابراهيم</span
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
                                        >شارع السلام المتفرع من شارع ابراهيم الدسوقي بجوار بنزينة وطنية - الجيزة</span
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
                                src="../../Front Views/assets/img/doctors/d3.jpg"
                                width="100"
                                class="rounded-circle img-thumbnail"
                              />
                              <span class="d-block mt-3 font-weight-bold"
                                >د/ منى</span
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
                                          >جامعة حلوان</span
                                        >
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >اللغات</span
                                        >
                                        <span class="subheadings"
                                          >عربي, انجليزي, الماني</span
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

              <!--4-->
              <div
                class="modal fade"
                id="exampleModal4"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
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
                        <span aria-hidden="true"
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
                                        >عيادات اليوم الواحد</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >مواعيد العمل</span
                                      >
                                      <span class="subheadings"
                                        >8:00 AM - 4:00 PM</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >الحالة</span
                                      >
                                      <span class="subheadings"
                                        ><i class="dots1"></i>غير متاح</span
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
                                        >طبيب عيون</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >قام بتعينه</span
                                      >
                                      <span class="subheadings"
                                        >د/ على</span
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
                                        >طريق العلمين - مصر اسكندرية الصحراوي- مستشفى الطوارئ</span
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
                                src="../../Front Views/assets/img/doctors/d4.jpg"
                                width="100"
                                class="rounded-circle img-thumbnail"
                              />
                              <span class="d-block mt-3 font-weight-bold"
                                >د/ احمد</span
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
                                          >جامعة القاهرة</span
                                        >
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >اللغات</span
                                        >
                                        <span class="subheadings"
                                          >عربي, انجليزي</span
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

              <!--5-->
              <div
                class="modal fade"
                id="exampleModal5"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
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
                        <span aria-hidden="true"
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
                                        >مستشفى الرحمة الخاصة</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >مواعيد العمل</span
                                      >
                                      <span class="subheadings"
                                        >12:00 PM - 11:00 PM</span
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
                                        >طبيب عيون</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >قام بتعينه</span
                                      >
                                      <span class="subheadings"
                                        >د/ انصاف</span
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
                                        >مستشفى الرحمة الخاصة متفرعة من شارع ترعة السواحل</span
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
                                src="../../Front Views/assets/img/doctors/d5.jpg"
                                width="100"
                                class="rounded-circle img-thumbnail"
                              />
                              <span class="d-block mt-3 font-weight-bold"
                                >د/ مصطفى</span
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
                                          >جامعة الاسكندرية</span
                                        >
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >اللغات</span
                                        >
                                        <span class="subheadings"
                                          >عربي, انجليزي</span
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

              <!--6-->
              <div
                class="modal fade"
                id="exampleModal6"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
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
                        <span aria-hidden="true"
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
                                        >مستشفى الإسراء الخاصة</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >مواعيد العمل</span
                                      >
                                      <span class="subheadings"
                                        >9:00 PM - 10:00 AM</span
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
                                        >طبيب عيون</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >قام بتعينه</span
                                      >
                                      <span class="subheadings"
                                        >د/ ليلى</span
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
                                        >مستشفى الإسراء الخاصة متفرعة من شارع ترعة السواحل</span
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
                                src="../../Front Views/assets/img/doctors/d6.jpg"
                                width="100"
                                class="rounded-circle img-thumbnail"
                              />
                              <span class="d-block mt-3 font-weight-bold"
                                >د/ عماد</span
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
                                          >جامعة دمنهور</span
                                        >
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >اللغات</span
                                        >
                                        <span class="subheadings"
                                          >عربي, انجليزي, عبري</span
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

              <!--7-->
              <div
                class="modal fade"
                id="exampleModal7"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
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
                        <span aria-hidden="true"
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
                                        >مستشفى حلوان العام</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >مواعيد العمل</span
                                      >
                                      <span class="subheadings"
                                        >8:00 AM - 10:00 PM</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >الحالة</span
                                      >
                                      <span class="subheadings"
                                        ><i class="dots1"></i>غير متاح</span
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
                                        >طبيب عيون</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >قام بتعينه</span
                                      >
                                      <span class="subheadings"
                                        >د/ ليلى</span
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
                                        >شارع الكورنيش الجديد بحلوان بجوار سور المترو</span
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
                                src="../../Front Views/assets/img/doctors/d7.jpg"
                                width="100"
                                class="rounded-circle img-thumbnail"
                              />
                              <span class="d-block mt-3 font-weight-bold"
                                >د/ مروة</span
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
                                          >جامعة حلوان</span
                                        >
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >اللغات</span
                                        >
                                        <span class="subheadings"
                                          >عربي, انجليزي, سواحلي</span
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

              <!--8-->
              <div
                class="modal fade"
                id="exampleModal8"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
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
                        <span aria-hidden="true"
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
                                        >مستشفى القصر العيني - كورنيش النيل - الجيزة </span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >مواعيد العمل</span
                                      >
                                      <span class="subheadings"
                                        >6:00 AM - 11:00 PM</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >الحالة</span
                                      >
                                      <span class="subheadings"
                                        ><i class="dots"></i>متاح</span
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
                                        >طبيب عيون</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >قام بتعينه</span
                                      >
                                      <span class="subheadings"
                                        >د/ ناصر</span
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
                                        >مستشفى القصر العيني الجديد بشارع كورنيش النيل بجوار مشرحة زينهم</span
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
                                src="../../Front Views/assets/img/doctors/d8.jpg"
                                width="100"
                                class="rounded-circle img-thumbnail"
                              />
                              <span class="d-block mt-3 font-weight-bold"
                                >د/ طارق</span
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
                                          >جامعة القاهرة</span
                                        >
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >اللغات</span
                                        >
                                        <span class="subheadings"
                                          >عربي, انجليزي, الماني</span
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

              <!--9-->
              <div
                class="modal fade"
                id="exampleModal9"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
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
                        <span aria-hidden="true"
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
                                        >مستشفى محمد السيد  </span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >مواعيد العمل</span
                                      >
                                      <span class="subheadings"
                                        >5:00 AM - 6:00 PM</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >الحالة</span
                                      >
                                      <span class="subheadings"
                                        ><i class="dots"></i>متاح</span
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
                                        >طبيب عيون</span
                                      >
                                    </div>
                                  </td>
                                  <td>
                                    <div class="d-flex flex-column">
                                      <span class="heading d-block"
                                        >قام بتعينه</span
                                      >
                                      <span class="subheadings"
                                        >د/ ناصر</span
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
                                        >مستشفى محمد السيد بشارع عبد المنعم رياض المقاطع لشارع كورنيش النيل</span
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
                                src="../../Front Views/assets/img/doctors/d9.jpg"
                                width="100"
                                class="rounded-circle img-thumbnail"
                              />
                              <span class="d-block mt-3 font-weight-bold"
                                >د/ محمد</span
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
                                          >جامعة القاهرة</span
                                        >
                                      </div>
                                    </td>
                                    <td>
                                      <div class="d-flex flex-column">
                                        <span class="heading d-block"
                                          >اللغات</span
                                        >
                                        <span class="subheadings"
                                          >عربي, انجليزي, الماني</span
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
                class="modal fade"
                id="exampleModal11"
                tabindex="-1"
                aria-labelledby="exampleModalLabel"
                aria-hidden="true"
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
                          ><i class="fa fa-close"></i
                        ></span>
                      </button>
                    </div>
                    <div class="modal-body" style="direction: rtl;">
                      <div class="container">
                        <form class="main-form">
                          <h1 class="text-center wow fadeInUp">حجز موعد</h1>
                          <div class="row mt-5">
                            <div class="col-12 col-sm-6 py-2 wow fadeInLeft">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="الأسم بالكامل"
                              />
                            </div>
                            <div class="col-12 col-sm-6 py-2 wow fadeInRight">
                              <input
                                type="text"
                                class="form-control"
                                placeholder="البريد الألكتروني"
                              />
                            </div>
                            <div
                              class="col-12 py-2 wow fadeInUp"
                              data-wow-delay="300ms"
                            >
                              <input
                                type="text"
                                class="form-control"
                                placeholder="رقم الهاتف.."
                              />
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
                            class="btn btn-primary mt-3 wow zoomIn"
                            style="margin-bottom: 10px"
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
            </div>
          </div>
        </div>
      </div>
      <!-- .container -->
    </div>
    

    <footer class="page-footer">
      <div class="container">
        

        <p id="copyright" style="text-align: right;">
          
          جميع الحقوق محفوظة لدى فريقنا
        </p>
      </div>
    </footer>

    <script src="../../Front Views/assets/js/jquery-3.5.1.min.js"></script>

    <script src="../../Front Views/assets/js/bootstrap.bundle.min.js"></script>

    <script src="../../Front Views/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../../Front Views/assets/vendor/wow/wow.min.js"></script>

    <script src="../../Front Views/assets/js/theme.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  </body>
</html>
