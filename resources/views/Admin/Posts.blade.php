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
            <form method="post" action="{{ route('showposts.bulk_delete') }}" style="display: inline-block;">
                @csrf
                @method('delete')
                <input type="hidden" name="record_ids" id="record-ids">
                <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true">حذف </button>
            </form>
            <br><br>
            <div class="container-scroller">
                 <form action="{{url('search10')}}" method="get">
                    <h5>ابحث عن منشور <h5>
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
                            <th><input type="checkbox" id="checkboxall"/></th>
                            <th>نشر بواسطة</th>
                            <th>الصورة الشخصية </th>
                            <th>وقت النشر </th>
                            <th>المنشور</th>
                            <th>صورة المنشور </th>
                            <th> العمليات </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                        <tr id="sid{{ $post->id}}">
                            <td><input type="checkbox" name="ids[{{ $post->id }}]" class="checkbox" value="{{ $post->id }}"/></td>
                                <td>{{ $post->myname->name }}</td>
                                <td> <img src="{{ $post->myname->profile_photo_url }}" alt="{{ $post->myname->name }}" class="rounded-full h-25 w-25 object-cover"></td>
                                <td>{{ $post->created_at }}</td>
                                <td>{{ $post->body }}</td>
                                <td><img src="image_postFolder/{{$post->image}}"class="rounded-full h-30 w-30 object-cover"></td>
                                <td>
                                        <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                        data-target="#delete{{ $post->id }}"
                                        title="Delete Medicine"><i
                                            class="fa fa-trash"></i></button>
                                            <a href="{{ route('showposts.show', $post->id) }}" class="btn btn-primary btn-sm"><i class="fas fa-eye"></i></a>
                                </td>
                            </tr>


                            <!-- delete_modal_Grade -->
                            <div class="modal fade" id="delete{{ $post->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                               id="exampleModalLabel">
                                               حذف منشور
                                           </h5>
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                   aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                       </div>
                                       <div class="modal-body">
                                           <form action="{{ route('showposts.destroy', 'test') }}"
                                                 method="post">
                                               {{ method_field('Delete') }}
                                               @csrf
                                               <input id="id" type="hidden" name="id" class="form-control"
                                                      value="{{ $post->id }}">هل تريد حذف المنشور ؟
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
                        @endforeach


    </div>
</div>

</div>
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


