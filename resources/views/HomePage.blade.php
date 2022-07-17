<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <meta name="copyright" content="MACode ID, https://macodeid.com/">

  <title>الصفحة الرئيسية</title>

  <link rel="stylesheet" href="../Front Views/assets/css/maicons.css">

  <link rel="stylesheet" href="../Front Views/assets/css/bootstrap.css">

  <link rel="stylesheet" href="../Front Views/assets/vendor/owl-carousel/css/owl.carousel.css">

  <link rel="stylesheet" href="../Front Views/assets/vendor/animate/animate.css">

  <link rel="stylesheet" href="../Front Views/assets/css/theme.css">


<!--
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
-->


  <style>
    @import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
          *:not(i){
        font-family: 'Cairo', sans-serif !important;
      }
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

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm" style="direction: rtl;">
      <div class="container-xl d-flex justify-content-between">
        <div class="collapse navbar-collapse" id="navbarSupport">

          <ul class="navbar-nav p-0">

          @if (Route::has('login'))
                        @auth
                        <li class="nav-item">
                            <x-app-layout>

                            </x-app-layout>
                            {{-- <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a> --}}
                        </li>
                            @else
                        <li class="nav-item">
                            <a href="{{ route('login') }}"  class="nav-link border-2 text-primary border border-primary p-2 m-1 text-center">تسجيل الدخول</a>
                        </li>
                            @if (Route::has('register'))
                        <li class="nav-item">
                            <a href="{{ route('register') }}" class="nav-link border-2 text-primary border border-primary p-2 m-1 text-center" >انشاء حساب</a>
                        </li>
                            @endif
                        @endauth
                @endif


            <li class="nav-item active">
              <a class="nav-link text-center" href="/">الصفحة الرئيسية</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="{{url('/about us')}}">من نحن ؟</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="{{url('/doctors')}}">الأطباء</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="">الأخبار</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center" href="{{url('/call us')}}">اتصل بنا</a>
            </li>

            <!--
              <div class="btn-group">
              <button type="button" class="btn dropdown-toggle" data-bs-toggle="dropdown">bary</button>
              <div class="dropdown-menu">
                  <a href="#" class="dropdown-item">Action</a>
                  <a href="#" class="dropdown-item">Another action</a>
                  <div class="dropdown-divider"></div>
                  <a href="#" class="dropdown-item">Separated link</a>
              </div>
          </div>
            -->

            <!--
              <li class="nav-item">
              <a class="btn btn-primary ml-lg-3" href="#">Login / Register</a>
              </li>
            -->

          </ul>
        </div> <!-- .navbar-collapse -->

        <a class="navbar-brand" href="/"><span class="text-primary">Diabetic</span>-Retinopathy</a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>


      </div> <!-- .container -->
    </nav>
  </header>

  <div class="page-hero bg-image overlay-dark" style="background-image: url('../Front Views/assets/img/bg3.jpg');">
    <div class="hero-section">
      <div class="container text-center wow zoomIn">
        <h1 class="subhead">لنجعل حياتك أسعد</h1>
        <h1 class="display-4">حياة صحية</h1>
        <a href="{{ route('login') }}" class="btn btn-primary">تسجيل الدخول </a>
        <a href="{{ route('register') }}" class="btn btn-primary">تسجيل الدخول </a>

      </div>
    </div>
  </div>


  <div class="bg-light" style="background-color: white;">
    <div class="page-section py-3 mt-md-n5 custom-index" style="background-color: white;">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-secondary text-white">
                <span class="mai-chatbubbles-outline"></span>
              </div>
              <p>التواصل مع الأطباء</p>
            </div>
          </div>
          <div class="col-md-4 py-3 py-md-0">
            <div class="card-service wow fadeInUp">
              <div class="circle-shape bg-primary text-white">
                <span class="mai-shield-checkmark"></span>
              </div>
              <p>لحماية أفضل</p>
            </div>
          </div>

        </div>
      </div>
    </div> <!-- .page-section -->

    <div class="page-section pb-0" style="direction: rtl; background-color: white;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>أهلا بكم في موقعنا للكشف عن مرض السكري من خلال قرنية العين</h1>
            <p class="text-grey mb-4">اعتلال الشبكية السكري هو أحد مضاعفات مرض السكري ، وينتج عن ارتفاع مستويات السكر في الدم مما يؤدي إلى تلف الجزء الخلفي من العين (شبكية العين). يمكن أن يسبب العمى إذا ترك دون تشخيص ودون علاج. ومع ذلك ، عادةً ما يستغرق اعتلال الشبكية السكري عدة سنوات للوصول إلى مرحلة يمكن أن تهدد بصرك. لتقليل مخاطر حدوث ذلك ، يجب على مرضى السكري: تأكد من أنهم يتحكمون في مستويات السكر في الدم وضغط الدم والكوليسترول حضور مواعيد فحص العين لمرضى السكري - يتم تقديم فحص سنوي لجميع مرضى السكري الذين تتراوح أعمارهم بين 12 عامًا وما فوق لالتقاط وعلاج أي مشاكل في وقت مبكر              !</p>

          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../Front Views/assets/img/eyes/eye1up.jpg" style="border-radius: 100px;" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>كيف يمكن أن يؤثر مرض السكري على العين</h1>
            <p class="text-grey mb-4">شبكية العين هي طبقة الخلايا الحساسة للضوء الموجودة في الجزء الخلفي من العين والتي تحول الضوء إلى إشارات كهربائية. يتم إرسال الإشارات إلى الدماغ الذي يحولها إلى الصور التي تراها. تحتاج شبكية العين إلى إمدادات مستمرة من الدم ، والتي تتلقاها عبر شبكة من الأوعية الدموية الدقيقة. بمرور الوقت ، يمكن أن يؤدي ارتفاع مستوى السكر في الدم بشكل مستمر إلى تلف هذه الأوعية الدموية في 3 مراحل رئيسية: اعتلال الشبكية في الخلفية - تتطور انتفاخات صغيرة في الأوعية الدموية ، والتي قد تنزف قليلاً ولكنها لا تؤثر عادةً على رؤيتك اعتلال الشبكية ما قبل التكاثر - تغيرات أكثر شدة وانتشارًا تؤثر على الأوعية الدموية ، بما في ذلك نزيف أكبر في العين اعتلال الشبكية التكاثري - يتطور النسيج الندبي والأوعية الدموية الجديدة التي تكون ضعيفة وتنزف بسهولة على شبكية العين ؛ هذا يمكن أن يؤدي إلى بعض فقدان البصر ومع ذلك ، إذا تم اكتشاف مشكلة في عينيك مبكرًا ، يمكن أن يؤدي تغيير نمط الحياة والعلاج إلى منع تفاقم المشكلة.
              !</p>

          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../Front Views/assets/img/eyes/eye2up.jpg"  style="border-radius: 100px;" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->

    <div class="page-section pb-0" style="direction: rtl; background-color: white;">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>أهل أنا مُعرض لخطر الإصابة باعتلال الشبكية السكري؟</h1>
            <p class="text-grey mb-4">من المحتمل أن يكون أي شخص مصاب بداء السكري من النوع 1 أو داء السكري من النوع 2 معرضًا لخطر الإصابة باعتلال الشبكية السكري. أنت في خطر أكبر إذا: يعانون من مرض السكري لفترة طويلة لديك ارتفاع مستمر في نسبة السكر في الدم (جلوكوز الدم) لديك ارتفاع في ضغط الدم لديهم نسبة عالية من الكوليسترول حامل هم من خلفية آسيوية أو أفريقية كاريبية من خلال الحفاظ على مستويات السكر في الدم وضغط الدم والكوليسترول تحت السيطرة ، يمكنك تقليل فرص الإصابة باعتلال الشبكية السكري</p>

          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../Front Views/assets/img/eyes/eye3up.jpg" style="border-radius: 100px;" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->

    <div class="page-section pb-0">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-6 py-3 wow fadeInUp">
            <h1>أعراض اعتلال الشبكية السكري</h1>
            <p class="text-grey mb-4">لن تلاحظ عادة اعتلال الشبكية السكري في المراحل المبكرة ، حيث لا تظهر عليه أي أعراض واضحة إلا بعد أن يصبح أكثر تقدمًا. ومع ذلك ، يمكن التعرف على العلامات المبكرة للحالة عن طريق التقاط صور للعينين أثناء فحص العين لمرضى السكري. اتصل بطبيبك العام أو فريق رعاية مرض السكري على الفور إذا واجهت: تدهور الرؤية تدريجيًا فقدان الرؤية المفاجئ الأشكال العائمة في مجال رؤيتك (العوامات) رؤية غير واضحة أو غير مكتملة ألم أو احمرار في العين صعوبة الرؤية في الظلام لا تعني هذه الأعراض بالضرورة أنك مصاب باعتلال الشبكية السكري ، ولكن من المهم فحصها. لا تنتظر حتى موعد الفحص التالي.</p>

          </div>
          <div class="col-lg-6 wow fadeInRight" data-wow-delay="400ms">
            <div class="img-place custom-img-1">
              <img src="../Front Views/assets/img/eyes/eye4up.jpg"  style="border-radius: 100px;" alt="">
            </div>
          </div>
        </div>
      </div>
    </div> <!-- .bg-light -->

  </div> <!-- .bg-light -->
  </div> <!-- .bg-light -->



 
  <!-- .page-section -->

  <!-- .banner-home -->

  <footer class="page-footer">
    <div class="container">


      <p id="copyright" style="text-align: right;">

        جميع الحقوق محفوظة لدى فريقنا
      </p>
    </div>
  </footer>

<script src="../Front Views/assets/js/jquery-3.5.1.min.js"></script>

<script src="../Front Views/assets/js/bootstrap.bundle.min.js"></script>

<script src="../Front Views/assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

<script src="../Front Views/assets/vendor/wow/wow.min.js"></script>

<script src="../Front Views/assets/js/theme.js"></script>

</body>
</html>


