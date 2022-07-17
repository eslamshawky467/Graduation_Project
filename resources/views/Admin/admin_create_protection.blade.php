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
                اضافة منشور
            </button>
            <form method="post" action="{{ route('admins.bulk_delete') }}" style="display: inline-block;">
                @csrf
                @method('delete')
                <input type="hidden" name="record_ids" id="record-ids">
                <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true">حذف </button>
            </form>
            <br><br>

            <div class="container-scroller">
                 <form action="{{url('search9')}}" method="get">
                    <h5>البحث  عن منشور <h5>
                    <input class="form-control" type="text"
                    id="exampleFormControlTextarea1" placeholder="" style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" placeholder="" style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
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
                            <th><input type="checkbox" id="checkboxall"/></th>
                            <th> عنوان المنشور</th>
                            <th>صورة المنشور </th>
                            <th>المنشور</th>
                            <th> العمليات  </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($protects as $protect)
                            <tr id="sid{{ $protect->id}}">
                                <td><input type="checkbox" name="ids[{{ $protect->id }}]" class="checkbox" value="{{ $protect->id }}"/></td>
                                <td> {{ $protect->title }}</td>
                                <td><img src="/image_protectionFolder/{{ $protect->image}}"class="rounded-full h-10 w-10 object-cover"></td>
                                <td>{{ $protect->body }}</td>
                                <td>
                                    <button type="button" class="btn btn-info btn-sm" data-toggle="modal"
                                        data-target="#edit{{ $protect->id }}"
                                        title="Edit Medicine"><i class="fa fa-edit"></i></button>

                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete{{ $protect->id }}"
                                        title="Delete Medicine"><i
                                            class="fa fa-trash"></i></button>
                                </td>
                            </tr>











                            <!-- delete_modal_Grade -->
                            <div class="modal fade" id="delete{{ $protect->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                               id="exampleModalLabel">
                                               حذف المنشور
                                           </h5>
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                   aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                       </div>
                                       <div class="modal-body">
                                           <form action="{{ route('protection.destroy', 'test') }}"
                                                 method="post">
                                               {{ method_field('Delete') }}
                                               @csrf
                                               <input id="id" type="hidden" name="id" class="form-control"
                                                      value="{{ $protect->id }}">هل تريد حذف  {{ $protect->title }} ?
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


















                        <div class="modal fade" id="edit{{ $protect->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                            id="exampleModalLabel">
                                            تعديل المنشور
                                        </h5>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body">
                                        <!-- add_form -->
                                        <form action="{{ route('protection.update', 'test') }}" method="post"enctype="multipart/form-data">
                                            {{ method_field('patch') }}
                                            @csrf
                                            <div class="row">
                                                <div class="col">
                                                    <label for="Medicine Name"
                                                        class="mr-sm-2">عنوان المنشور
                                                        :</label>
                                                    <input id="Name" type="text" name="title"
                                                        class="form-control"
                                                        value="{{ $protect->title}}"
                                                        required>
                                                    <input id="id" type="hidden" name="id" class="border"
                                                        value="{{ $protect->id }}" required>
                                                </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">المنشور
                                                    :</label>
                                                <input class="form-control" name="body"
                                                    id="exampleFormControlTextarea1" placeholder="" style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $protect->body}}">
                                            </div>
                                            <div class="form-group">
                                                <label
                                                <label class="label">صورة المنشور  </label>
                                                <input type="file" name="image" class="form-control">
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
                    {{ ('اضافة منشور') }}
                </h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('protection.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label class="label">عنوان المنشور  </label>
                            <input type="text" name="title" class="form-control" required />
                            <label class="label">صورة المنشور  </label>
                                    <input type="file" name="image" class="form-control" />
                                </div>
                                <div class="form-group">
                                    <label class="label">المنشور  </label>
                                    <textarea name="body" rows="10" cols="30" class="form-control" required></textarea>
                                </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">اغلاق</button>
                <button type="submit" class="btn btn-success">تأكيد </button>
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



















































































































































































































































































































































