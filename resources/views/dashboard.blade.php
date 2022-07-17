<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="g-sidenav-show  bg-gray-200">
 @include('layouts.side')
  <main class="main-content position-relative max-height-vh-100 w-100 ms-18 ms-0   h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('layouts.Navbar')
    <div class="row" >
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-success">
                                <i class="fas fa-user-tie highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">عدد المستخدمين</p>
                            <h4>{{\App\Models\User::count()}}</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('users.index')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-warning">
                                <i class="fas fa-chalkboard-teacher highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">الحجوزات </p>
                            <h4>{{\App\Models\Book::count()}}</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('reservations.index')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-success">
                                <i class="fas fa-user-tie highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark"> الرسائل </p>
                            <h4>{{\App\Models\Contact::count()}}</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('contacts.index')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
                    </p>
                </div>
            </div>
        </div>
        <div class="col-xl-3 col-lg-6 col-md-6 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="clearfix">
                        <div class="float-left">
                            <span class="text-primary">
                                <i class="fas fa-chalkboard highlight-icon" aria-hidden="true"></i>
                            </span>
                        </div>
                        <div class="float-right text-right">
                            <p class="card-text text-dark">  عدد  الادوية</p>
                            <h4>{{\App\Models\pharmacy::count()}}</h4>
                        </div>
                    </div>
                    <p class="text-muted pt-3 mb-0 mt-2 border-top">
                        <i class="fas fa-binoculars mr-1" aria-hidden="true"></i><a href="{{route('medicine.index')}}" target="_blank"><span class="text-danger">عرض البيانات</span></a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Orders Status widgets-->


    <div class="row">

        <div  style="height: 400px;" class="col-xl-12 mb-30">
            <div class="card card-statistics h-100">
                <div class="card-body">
                    <div class="tab nav-border" style="position: relative;">
                        <div class="d-block d-md-flex justify-content-between">
                            <div class="d-block w-100">
                                <h5 style="font-family: 'Cairo', sans-serif" class="card-title">اخر العمليات علي النظام</h5>
                            </div>
                            <div class="d-block d-md-flex nav-tabs-custom">
                                <ul class="nav nav-tabs" id="myTab" role="tablist">

                                    <li class="nav-item">
                                        <a class="nav-link active show" id="students-tab" data-toggle="tab"
                                           href="#students" role="tab" aria-controls="students"
                                           aria-selected="true"> المستخدمين </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="tab-content" id="myTabContent">

                            {{--students Table--}}
                            <div class="tab-pane fade active show" id="students" role="tabpanel" aria-labelledby="students-tab">
                                <div class="table-responsive mt-15">
                                    <table style="text-align: center" class="table center-aligned-table table-hover mb-0">
                                        <thead>
                                        <tr  class="table-info text-danger">
                                            <th>عدد المستخدمين </th>
                                            <th>اسم المستخدم</th>
                                            <th> نوع المستخدم</th>
                                            <th>تاريخ الاضافة</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        @forelse(\App\Models\User::latest()->take(5)->get() as $student)
                                            <tr>
                                                <td>{{$loop->iteration}}</td>
                                                <td>{{$student->name}}</td>
                                                <td>{{$student->usertype}}</td>
                                                <td class="text-success">{{$student->created_at}}</td>
                                                @empty
                                                    <td class="alert-danger" colspan="8">لاتوجد بيانات</td>
                                            </tr>
                                        @endforelse
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



@include('layouts.Footer')
    </div>
  </main>
  @include('layouts.Setting')
  <!--   Core JS Files   -->
@include('layouts.Scripts')

</body>

</html>

