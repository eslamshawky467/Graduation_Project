<!DOCTYPE html>
<html lang="en">
@include('layouts.head')
<body class="g-sidenav-show  bg-gray-200">
 @include('layouts.side')
  <main class="main-content position-relative max-height-vh-100 w-100 ms-18 ms-0   h-100 border-radius-lg ">
    <!-- Navbar -->
    @include('layouts.Navbar')
<div class="row">
@if ($errors->any())
    <div class="error">{{ $errors->first('Name') }}</div>
@endif
<div class="col-xl-12 mb-30">
    <div class="card card-statistics h-100">
        <div class="card-body">

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <br><br>
            <div class="container-scroller">
                 <form action="{{url('search4')}}" method="get">
                    <h5>ابحث عن موعد<h5>
                    <input class="form-control" type="text"
                    id="exampleFormControlTextarea1" placeholder="بحث..." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                    name="search">
                    <br>
                   <input type="submit" value="ابحث" class="btn btn-success">
              </form>
                </div>
            </div>
            <div class="table-responsive">
                <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                    style="text-align: center">
                    <thead>
                        <tr>
                            <th>اسم المريض</th>
                            <th>البريد الالكتروني </th>
                            <th>رقم الهاتف المحمول </th>
                            <th>ملاحظات </th>
                            <th>الموعد </th>
                            <th>الحالة</th>
                            <th>اسم الدكتور</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($reservations as $reservation)
                        <tr id="sid{{ $reservation->id}}">
                                <td>{{ $reservation->patient_name }}</td>
                                <td>{{ $reservation->patient_email }}</td>
                                <td>{{ $reservation->patient_phone }}</td>
                                <td>{{ $reservation->book_message }}</td>
                                <td>{{ $reservation->appointment }}</td>
                                <td>{{ $reservation->status }}</td>
                                <td>{{ $reservation->doctor->name }}</td>
                            </tr>
                            @endforeach
                    </tbody>
                </table>
            </div>
    </div>
</div>
@include('layouts.Footer')
    </div>
  </main>
  @include('layouts.Setting')
  <!--   Core JS Files   -->
@include('layouts.Scripts')
<script src="js/users.js"></script>
</body>
</html>
