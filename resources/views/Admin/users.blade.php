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








            @if(session()->has('Add'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('Add') }}</strong>

                </button>
            </div>
        @endif






        @if(session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('delete') }}</strong>
                </button>
            </div>
        @endif




        @if(session()->has('edit'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('edit') }}</strong>
                </button>
            </div>
        @endif




            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                اضافة مستخدم
            </button>






            <form method="post" action="{{ route('users.bulk_delete') }}" style="display: inline-block;">
                @csrf
                @method('delete')
                <input type="hidden" name="record_ids" id="record-ids">
                <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true">حذف</button>
            </form>
            <br><br>








            <div class="container-scroller">
                 <form action="{{url('search3')}}" method="get">
                    <h5>ابحث عن مستخدم </h5>
                    <input class="form-control" type="text"
                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
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
                            <th><input type="checkbox" id="checkboxall"/>تحديد الكل </th>
                            <th>الاسم بالكامل </th>
                            <th>العنوان</th>
                            <th>العمر</th>
                            <th>البريد الالكتروني</th>
                            <th>النوع</th>
                            <th>رقم البطاقة </th>
                            <th>رقم الهاتف المحمول</th>
                            <th>الشهادة</th>
                            <th>التخصص</th>
                            <th>نوع المستخدم</th>
                            <th>الصورة الشخصية</th>
                            <th> العمليات  <th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 0; ?>
                        @foreach ($users as $user)
                        <tr id="sid{{ $user->id}}">
                            <td><input type="checkbox" name="ids[{{ $user->id }}]" class="checkbox" value="{{ $user->id }}"/></td>
                                <td>{{ $user->name }}</td>
                                <td>{{ $user->address }}</td>
                                <td>{{ $user->age }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->gender }}</td>
                                <td>{{ $user->socialid }}</td>
                                <td>{{ $user->phonenumber }}</td>
                                <td>{{ $user->certifcate }}</td>
                                <td>{{ $user->speciality }}</td>
                                <td>{{ $user->usertype }}</td>
                                <td> <img src="{{ $user->profile_photo_url }}" alt="{{ $user->name }}" class="rounded-full h-30 w-30 object-cover"></td>

                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit{{ $user->id }}"

                                        title="Edit User"><i class="fa fa-edit"></i></button>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete{{ $user->id }}"
                                        title="Delete"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>











                            <!-- delete_modal_Grade -->
                            <div class="modal fade" id="delete{{ $user->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                               id="exampleModalLabel">
                                               حذف مستخدم
                                           </h5>
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                   aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                       </div>
                                       <div class="modal-body">
                                           <form action="{{ route('users.destroy', 'test') }}"
                                                 method="post">
                                               {{ method_field('Delete') }}
                                               @csrf
                                               <input id="id" type="hidden" name="id" class="form-control"
                                                      value="{{ $user->id }}">هل تريد حذف  {{ $user->name }} ?
                                               <div class="modal-footer">

                                                   <button type="button" class="btn btn-secondary"
                                                           data-dismiss="modal">اغلاق</button>
                                                   <button type="submit"
                                                           class="btn btn-danger">تأكيد</button>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </div>









                        <div class="modal fade" id="edit{{ $user->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                            id="exampleModalLabel">
                                            تعديل بيانات مستخدم
                                        </h5>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body">
                                        <!-- add_form -->
                                        <form action="{{ route('users.update', 'test') }}" method="post">
                                            {{ method_field('patch') }}
                                            @csrf
                                            <div class="row">
                                                <div class="col">
                                                    <label for="Name"
                                                        class="mr-sm-2">الاسم
                                                        :</label>
                                                    <input id="Name" type="text" name="name"
                                                        class="form-control"
                                                        value="{{ $user->name}}"
                                                        required>
                                                    <input id="id" type="hidden" name="id" class="border"
                                                        value="{{ $user->id }}">
                                                </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">العنوان
                                                    :</label>
                                                <input class="form-control" name="address"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $user->address}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">السن
                                                    :</label>
                                                <input class="form-control" name="age"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $user->age}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">النوع
                                                    :</label>
                                                    <select name="gender"
                                                     required id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" class="form-select" aria-label="Default select example">
                                                    <option>  {{ $user->gender }}</option>
                                                      <option value="ذكر">ذكر</option>
                                                      <option value="انثي ">انثي</option>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">رقم البطاقة
                                                    :</label>
                                                <input class="form-control" name="socialid"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $user->socialid}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">رقم الهاتف المحمول
                                                    :</label>
                                                <input class="form-control" name="phonenumber"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $user->phonenumber}}" required>

                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">نوع المستخدم
                                                    :</label>
                                                    <select  class="form-select" aria-label="Default select example" name="usertype"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" required>
                                                    <option>{{ $user->usertype }}</option>
                                                      <option value="Admin">Admin</option>
                                                      <option value="Doctor">Doctor</option>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">الشهادة
                                                    :</label>
                                                <input class="form-control" name="certifcate"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $user->certifcate}}">
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">التخصص
                                                    :</label>
                                                <input class="form-control" name="speciality"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $user->speciality}}">
                                            </div>

                                            <br><br>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">اغلاق</button>
                                                <button type="submit"
                                                    class="btn btn-success">تأكيد</button>
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













<!-- add_modal_Grade -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title" id="exampleModalLabel">
                    {{ ('اضافة مستخدم') }}
                </h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2">الاسم بالكامل
                                :</label>
                            <input id="name" type="text" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">العنوان
                            :</label>
                        <input class="form-control" type="text" name="address" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">السن
                            :</label>
                        <input class="form-control"type="number" name="age" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">التخصص
                            :</label>
                        <input class="form-control" type="text" name="speciality" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">النوع
                            :</label>
                            <select name="gender"
                            id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" class="form-select" aria-label="Default select example" required>
                              <option value="ذكر">ذكر</option>
                              <option value="انثي">انثي</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">رقم الهاتف المحمول
                            :</label>
                        <input class="form-control" name="phonenumber" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3" type="number" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">رقم البطاقة
                            :</label>
                        <input class="form-control" type="number" name="socialid" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">نوع المستخدم
                            :</label>
                            <select  class="form-select" aria-label="Default select example" name="usertype"
                            id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" required>
                              <option value="Admin">Admin</option>
                              <option value="Doctor">Doctor</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"> الشهادة
                            :</label>
                        <input class="form-control" type="text" name="certifcate" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">البريد الالكتروني
                            :</label>
                        <input class="form-control" name="email" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">الرقم السري
                            :</label>
                        <input type="password" class="form-control" name="password" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3" required>
                    </div>
                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-success">تأكيد</button>
            </div>
            </form>

        </div>
    </div>

</div>
@include('layouts.footer')
</div>
</main>










  @include('layouts.Setting')
  <!--   Core JS Files   -->
<script src="js/users.js"></script>
@include('layouts.Scripts')
<script>
    $.ajaxSetup({
      headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
    });
     </script>
          <script>
     $(document).on('change', '.checkbox', function () {
            getSelectedRecords();
        });

        // used to select all records
        $(document).on('change', '#checkboxall', function () {

            $('.checkbox').prop('checked', this.checked);
            getSelectedRecords();
        });

        function getSelectedRecords() {
            var recordIds = [];

            $.each($(".checkbox:checked"), function () {
                recordIds.push($(this).val());
            });

            $('#record-ids').val(JSON.stringify(recordIds));

            recordIds.length > 0
                ? $('#bulk-delete').attr('disabled', false)
                : $('#bulk-delete').attr('disabled', true)

        }


          </script>

</body>

</html>

