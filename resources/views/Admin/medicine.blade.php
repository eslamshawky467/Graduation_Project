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
                اضافة دواء
            </button>






            <form method="post" action="{{ route('medicine.bulk_delete') }}" style="display: inline-block;">
                @csrf
                @method('delete')
                <input type="hidden" name="record_ids" id="record-ids">
                <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true">حذف</button>
            </form>
            <br><br>




            <div class="container-scroller">
                 <form action="{{url('search8')}}" method="get">
                    <h5>ابحث عن دواء<h5>
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
                            <th><input type="checkbox" id="checkboxall"/>تحديد الكل</th>

                            <th>الاسم </th>
                            <th>نوع المرض</th>
                            <th>الوصف</th>
                            <th>السعر</th>
                            <th>صورة للدواء</th>
                            <th>صورة للاعراض التي يستخدم فيها الدواء</th>
                            <th> حالة الدواء </th>
                            <th> القسم  </th>
                            <th> العمليات </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($medicines as $medicine)
                        <tr id="sid{{ $medicine->id}}">
                            <td><input type="checkbox" name="ids[{{ $medicine->id }}]" class="checkbox" value="{{ $medicine->id }}"/></td>
                                <td>{{ $medicine->name }}</td>
                                <td>{{ $medicine->illness }}</td>
                                <td>{{ $medicine->description }}</td>
                                <td>{{ $medicine->price }}</td>
                                <td><img src="/image_medicineFolder/{{ $medicine->medicine_image}}"class="rounded-full h-30 w-30 object-cover"></td>
                                <td><img src="/image_illnessFolder/{{ $medicine->illness_image}}"class="rounded-full h-30 w-30 object-cover"></td>
                                <td>{{ $medicine->medicine_status }}</td>
                                <td>{{ $medicine->categories->name }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit{{ $medicine->id }}"
                                        title="Edit Medicine"><i class="fa fa-edit"></i></button>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete{{ $medicine->id }}"
                                        title="Delete Medicine"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>









                            <!-- delete_modal_Grade -->
                            <div class="modal fade" id="delete{{ $medicine->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                               id="exampleModalLabel">
                                               حذف الدواء
                                           </h5>
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                   aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                       </div>
                                       <div class="modal-body">
                                           <form action="{{ route('medicine.destroy', 'test') }}"
                                                 method="post">
                                               {{ method_field('Delete') }}
                                               @csrf
                                               <input id="id" type="hidden" name="id" class="form-control"
                                                      value="{{ $medicine->id }}">هل تريد حذف  {{ $medicine->name }} ?
                                               <div class="modal-footer">

                                                   <button type="button" class="btn btn-secondary"
                                                           data-dismiss="modal">اغلاق</button>
                                                   <button type="submit"
                                                           class="btn btn-danger">تأكيد </button>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </div>








                        <div class="modal fade" id="edit{{ $medicine->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                            id="exampleModalLabel">
                                            تعديل مستخدم
                                        </h5>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body">












                                        <!-- UPDATE_form -->
                                        <form action="{{ route('medicine.update', 'test') }}" method="post"enctype="multipart/form-data">
                                            {{ method_field('patch') }}
                                            @csrf
                                            <div class="row">
                                                <div class="col">
                                                    <label for="Medicine Name"
                                                        class="mr-sm-2">اسم الدواء
                                                        :</label>
                                                    <input id="Name" type="text" name="name"
                                                        class="form-control"
                                                        value="{{ $medicine->name}}"
                                                        required>
                                                    <input id="id" type="hidden" name="id" class="border"
                                                        value="{{ $medicine->id }}">
                                                </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">اسم المرض
                                                    :</label>
                                                <input class="form-control" name="illness"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $medicine->illness}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">السعر
                                                    :</label>
                                                <input class="form-control" name="price"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $medicine->price}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">الوصف
                                                    :</label>
                                                <input class="form-control" name="description"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $medicine->description}}" required>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                <label class="label">صورة الدواء </label>
                                                <input type="file" name="medicine_image" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label
                                                <label class="label">صورة الاعراض التي يعالجها المرض  </label>
                                                <input type="file" name="illness_image" class="form-control">
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">حالة الدواء
                                                    :</label>
                                                    <select name="medicine_status"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" class="form-select" aria-label="Default select example" required>
                                                    <option>  {{ $medicine->medicine_status }}</option>
                                                      <option value="متوفر">متوفر </option>
                                                      <option value="غير متوفر">غير متوفر </option>
                                                    </select>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1"> القسم
                                                    :</label>
                                                    <select name="category_id"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" class="form-select" aria-label="Default select example" required>
                                                    <option value="{{$medicine->category_id}}">{{$medicine->categories->name}}</option>
                                                    @foreach ($cats as $cat )

                                                      <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                      @endforeach
                                                    </select>
                                            </div>
                                            <br><br>

                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">اغلاق</button>
                                                <button type="submit"
                                                    class="btn btn-success">تأكيد </button>
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
                    {{ ('اضافة دواء') }}
                </h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('medicine.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2"> اسم الدواء
                                :</label>
                            <input id="name" type="text" name="name" class="form-control"  required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">اسم المرض
                            :</label>
                        <input class="form-control" type="text" name="illness" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">السعر
                            :</label>
                        <input class="form-control"type="number" name="price" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">الوصف
                            :</label>
                        <textarea class="form-control" type="text" name="description" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3" required></textarea>
                    </div>
                    <div class="form-group">
                        <label class="label">صورة الدواء </label>
                        <input type="file" name="medicine_image" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label class="label">صورة الاعراض التي يعالجها الدواء </label>
                        <input type="file" name="illness_image" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">حالة الدواء
                            :</label>
                            <select name="medicine_status"
                            id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" class="form-select" aria-label="Default select example" required>
                              <option value="متوفر">متوفر</option>
                              <option value="غير متوفر">غير متوفر</option>
                            </select>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">القسم
                            :</label>
                            <select name="category_id"
                            id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" class="form-select" aria-label="Default select example" required>
                            @foreach ($cats as $cat )
                              <option value="{{$cat->id}}">{{ $cat->name }}</option>
                              @endforeach
                            </select>
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
</div>
@include('layouts.Footer')
    </div>
  </main>













  @include('layouts.Setting')
  <!--   Core JS Files   -->
@include('layouts.Scripts')
<script src="js/users.js"></script>
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

