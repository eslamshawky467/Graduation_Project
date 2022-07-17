<!DOCTYPE html>
<html lang="en">
    <head>
        <style>
            .container {
                  max-width: 600px;
              }
              @import url('https://fonts.googleapis.com/css2?family=Cairo&display=swap');
      *:not(i){
        font-family: 'Cairo', sans-serif !important;
      }
          </style>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
        <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="../GP_Doctor/assets/css/style.css">
    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous"></script>
    </head>
<body class="g-sidenav-show  bg-gray-200">
    @include('layouts.head')
    @include('Doctor.doctor_header')
                <!--sidebar-->
            @include('Doctor.doctor_sidebar')

            <div class="page-wrapper">
            <div class="page-hero bg-image overlay-dark" style="background-image: url('../GP_Doctor/assets/img/bg4.jpg');">
                <div class="hero-section">
                  <div class="container text-center">

                    <h1 class="display-6"></h1>

                  </div>
                </div>
            </div>
            <div class="content">
              <div class="container" style="direction: rtl; ">
                <br>
                <h1 class="text-center wow fadeInUp"> الادوية</h1>
                {{-- <table class="table" style="margin-bottom: 200px">
                    <thead class="table-light" >
                        <tr>

                            <td>اسم المريض</td>
                            <td>الموعد</td>
                            <td>الرسالة</td>
                            <td>اسم الطبيب</td>
                            <td>وقت الحجز</td>

                        </tr>
                    </thead>
                    @foreach ($myappointments as $item)
                        <tbody>
                            @if ($item->status != "aproved")
                                <td class="btn btn-success" ><a href="{{url('confirmation/'.$item->id)}}" >Aprove</a></td>
                                <td class="btn btn-danger" ><a href="{{url('confirmationcanceled/'.$item->id)}}" > Cancel </a></td>
                            @endif
                            <td>{{$item->patient_name}}</td>
                            <td>{{$item->petient_name}}</td>
                            <td>{{$item->book_message}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->created_at->diffForHumans()}}</td>

                        </tbody>
                    @endforeach
                </table> --}}
                <main  class="main-content position-relative max-height-vh-100 w-100h-100 border-radius-lg ">
                    <!-- Navbar -->
                    <div  class="row" >
                        @if ($errors->any())
                            <div class="error">{{ $errors->first('Name') }}</div>
                        @endif
                        <div class="col-xl-12 mb-30">
                            <div class="card card-statistics h-100">
                                <div class="card-body" style="height:500px">

                                    @if ($errors->any())
                                        <div class="alert alert-danger">
                                            <ul>
                                                @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    @endif
                <br>
                <br>

                                    <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                                        Add Medicine
                                    </button>
                                    <br><br>
                                    <div class="container-scroller">
                                         <form action="{{url('search17')}}" method="get">
                                            <h5>Search Medicine<h5>
                                            <input  class="form-control" style="background-color: blanchedalmond" type="text"
                                            id="exampleFormControlTextarea1" placeholder="بحث..." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                            name="search">
                                            <br>
                                           <input type="submit" value="Search" class="btn btn-success">
                                      </form>
                                        </div>
                                    <div class="table-responsive">
                                        <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                                            style="text-align: center">
                                            <thead>
                                                <tr>
                                                    <th>Quantity</th>
                                                    <th>Doctor_Name</th>
                                                    <th>Doctor Speciality</th>
                                                    <th>Category </th>
                                                    <th>Pharmacy Name  </th>
                                                    <th>Patient_Name</th>
                                                    <th> Total</th>
                                                    <th>Created_at</th>
                                                    <th>Operations </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($orders as $order)
                                                    <tr>
                                                        <td> {{$order->quantity}}</td>
                                                        <td>{{ $order->doctor->name }}</td>
                                                        <td>{{ $order->doctor->speciality }}</td>
                                                        <td>{{$order->pharmacy->categories->name  }}</td>
                                                        <td>{{$order->pharmacy->name }}</td>
                                                        <td>{{ $order->users->name }} </td>
                                                        <td>{{ $order->quantity * $order->pharmacy->price }} </td>
                                                        <td>{{ $order->created_at }} </td>
                                                        <td>
                                                            <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                                                data-target="#edit{{ $order->id }}"
                                                                title="Edit Note"><i class="fa fa-edit"></i></button>

                                                                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                                                data-target="#delete{{ $order->id }}"
                                                                title="Delete Note"><i
                                                                    class="fa fa-trash"></i></button>
                                                        </td>
                                                    </tr>
                                                    <div class="modal fade" id="delete{{ $order->id }}" tabindex="-1" role="dialog"
                                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                       <div class="modal-dialog" role="document">
                                                           <div class="modal-content">
                                                               <div class="modal-header">
                                                                   <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                       id="exampleModalLabel">
                                                                       Delete Medicine
                                                                   </h5>
                                                                   <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                                           aria-label="Close">
                                                                       <span aria-hidden="true">&times;</span>
                                                                   </button>
                                                               </div>
                                                               <div class="modal-body">
                                                                   <form action="{{ route('Pharmacym.destroy', 'test') }}"
                                                                         method="post">
                                                                       {{ method_field('Delete') }}
                                                                       @csrf
                                                                       <input id="id" type="hidden" name="id" class="form-control"
                                                                              value="{{ $order->id }}">Do You Want To Delete {{ $order->quantity }} ?
                                                                       <div class="modal-footer">

                                                                           <button type="button" class="btn btn-secondary"
                                                                                   data-dismiss="modal">close</button>
                                                                           <button type="submit"
                                                                                   class="btn btn-danger">Submit</button>
                                                                       </div>
                                                                    </div>
                                                                </form>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                             </div>
                                             <div class="modal fade" id="edit{{ $order->id }}" tabindex="-1" role="dialog"
                                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                                                id="exampleModalLabel">
                                                                Edit
                                                            </h5>
                                                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                                aria-label="Close">
                                                                <span aria-hidden="true">&times;</span>
                                                            </button>

                                                        </div>
                                                        <div class="modal-body">
                                                            <!-- add_form -->
                                                            <form action="{{ route('Pharmacym.update', 'test') }}" method="post"enctype="multipart/form-data">
                                                                {{ method_field('patch') }}
                                                                @csrf
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <input id="id" type="hidden" name="id" class="border"
                                                                            value="{{ $order->id }}">
                                                                    </div>
                                                                <div class="form-group">
                                                                    <label
                                                                        for="exampleFormControlTextarea1">Post Body
                                                                        :</label>
                                                                    <textarea class="form-control" name="quantity"
                                                                        id="exampleFormControlTextarea1" placeholder="بحث..." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                                        >{{$order->quantity}}</textarea>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-control"type="text" name="pharmacy_id">
                                                                        <option value="{{$order->id}}">{{ $order->pharmacy->name }}</option>
                                                                        @foreach ($pharmacies as $p)
                                                                        <option value="{{$p->id}}">{{ $p->categories->name }}/{{ $p->name }}/{{ $p->medicine_status }}</option>
                                                                        @endforeach
                                                                    </select>
                                                                </div>
                                                                <div class="form-group">
                                                                    <select class="form-control"type="text" name="user_id">
                                                                        <option value="{{$order->id}}">{{$order->users->patient_name}}</option>
                                                                        @foreach ($myappointments as $item)
                                                                        <option value="{{$item->id}}">{{$item->patient_name}}</option>
                                                                    @endforeach
                                                                    </select>
                                                                </div>
                                                                <br><br>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-secondary"
                                                                        data-dismiss="modal">Close</button>
                                                                    <button type="submit"
                                                                        class="btn btn-success">Submit</button>
                                                                </div>
                                                            </form>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                           @endforeach
                                   </table>
                               </div>
                           </div>
                       </div>
                    </div>
                <!-- add_modal_class -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                                    Add Medicine
                                </h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body">
                                <form action="{{ route('Pharmacym.store')}}" method="POST" enctype="multipart/form-data">
                                    @csrf
                                <div class="container">
                                    <div class="row">
                                        <div class="col-sm-50 col-sm-offset-50">

                                            <table class="table table-bordered" id="dynamicAddRemove">
                                                <tr>
                                                    <th>quantity</th>
                                                    <th>pharmacy Name</th>
                                                    <th>user</th>
                                                    <th></th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr>
                                                    <td><input type="number" name="addMoreInputFields[0][quantity]" placeholder="Enter subject" class="form-control" /></td>
                                                        <td><select class="form-control"type="text" name="addMoreInputFields[0][pharmacy_id]">
                                                            @foreach ($pharmacies as $p)
                                                                <option value="{{ $p->id }}">{{ $p->categories->name }}/{{ $p->name }}/{{ $p->medicine_status }} </option>
                                                            @endforeach
                                                        </select>
                                                    </td>
                                                    <td><select class="form-control"type="text" name="addMoreInputFields[0][user_id]">
                                                        @foreach ($myappointments as $item)
                                                            <option value="{{ $item->patient_id }}">{{ $item->patient_name }}</option>
                                                        @endforeach
                                                    </select>
                                                </td>
                                                <td><select class="form-control"type="text" hidden name="addMoreInputFields[0][doctor_id]">
                                                        <option value="{{ Auth::user()->id}}">Doctor</option>

                                                </select>
                                            </td>
                                                <td><button type="button" name="add" id="dynamic-ar" class="btn btn-outline-primary">Add Medicine</button></td>
                                                </tr>
                                            </table>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">close</button>
                                        <button type="submit"
                                            class="btn btn-success">submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </main>

              </div>
            </div>

        </div>
    </div>
    <div class="sidebar-overlay" data-reff=""></div>

    {{-- @include('Doctor.doctor_footer') --}}

    @include('Doctor.doctor_scripts')

  <!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript">
    var i = 0;
    $("#dynamic-ar").click(function () {
        ++i;
        $("#dynamicAddRemove").append('<tr><td><input type="number" name="addMoreInputFields[' + i +
            '][quantity]" placeholder="Enter subject" class="form-control" /></td><td><select class="form-control"type="text" name="addMoreInputFields[' + i +
            '][pharmacy_id]"> @foreach ($pharmacies as $p)<option value="{{$p->id }}">{{ $p->categories->name}}/{{ $p->name }}::${{ $p->medicine_status }} </option> @endforeach</select></td> <td><select class="form-control"type="text" name="addMoreInputFields[' + i +
            '][user_id]">@foreach ($myappointments as $item)<option value="{{ $item->patient_id }}">{{ $item->patient_name }}</option></select></td> <td><select class="form-control"type="text" hidden name="addMoreInputFields[' + i +
            '][doctor_id]"><option value="{{ Auth::user()->id}}">Doctor</option> @endforeach </select></td><td><button type="button" class="btn btn-outline-danger remove-input-field">Delete</button></td></tr>'
            );
    });
    $(document).on('click', '.remove-input-field', function () {
        $(this).parents('tr').remove();
    });
</script>
  <script>
    $(document).ready(function () {
        $('select[name="category_id"]').on('change', function () {
            var category_id = $(this).val();
            if (category_id) {
                $.ajax({
                    url: "{{ URL::to('/Get_medicine') }}/" + category_id,
                    type: "GET",
                    dataType: "json",
                    success: function (data) {
                        $('select[name="pharmacy_id"]').empty();
                        $.each(data, function (key, value) {
                            $('select[name="pharmacy_id"]').append('<option selected disabled >{{trans('Parent_trans.Choose')}}...</option>');
                            $('select[name="pharmacy_id"]').append('<option value="' + key + '">' + value + '</option>');
                        });
                    },
                });
            }
            else {
                console.log('AJAX load did not work');
            }
        });
    });
</script>
  <!--   Core JS Files   -->
@include('layouts.Scripts')
<script src="js/users.js"></script>
</body>
</html>



