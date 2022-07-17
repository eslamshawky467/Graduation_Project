<div class="page-hero bg-image overlay-dark" style="background-image: url('../Front Views/assets/img/bg3.jpg');">
    <div class="hero-section">
    <div class="container text-center wow zoomIn">
        <h2 style="color: rgb(56, 161, 161);">مهمتنا هي جعل حياتك صحية</h2>
        <h1 class="display-4"> مرحبا بك يا {{Auth::user()->name}}</h1>
    </div>
    </div>
</div>


<div class="bg-light" style="background-color: white;">
    <div class="page-section py-3 mt-md-n5 custom-index" style="background-color: white;">
        <div class="container">
            <div class="row justify-content-center">
                <a href="{{url('/patient-doctors')}}">
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-secondary text-white">
                                <span class="mai-chatbubbles-outline"></span>
                            </div>
                            <p>التواصل مع الأطباء</p>
                        </div>
                    </div>
                </a>
                <a href="{{url('patient_protection')}}" >
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p>لحماية أفضل</p>
                        </div>
                    </div>
                </a>
                <a href="{{url('show_illness')}}" >
                    <div class="col-md-4 py-3 py-md-0">
                        <div class="card-service wow fadeInUp">
                            <div class="circle-shape bg-primary text-white">
                                <span class="mai-shield-checkmark"></span>
                            </div>
                            <p>صيدلية</p>
                        </div>
                    </div>
                </a>
            </div>
    </div>
    </div> <!-- .page-section -->