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


            @if(session()->has('delete'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('delete') }}</strong>
                </button>
            </div>
        @endif







            <br><br>
            <form method="post" action="{{ route('contacts.bulk_delete') }}" style="display: inline-block;">
                @csrf
                @method('delete')
                <input type="hidden" name="record_ids" id="record-ids">
                <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true">حذف</button>
            </form>
            <br><br>
            <div class="container-scroller">
                 <form action="{{url('search6')}}" method="get">
                    <h5>ابحث عن رسائل <h5>
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
                            <th>الاسم </th>
                            <th> البريد الالكتروني </th>
                            <th>عنوان الرسالة  </th>
                            <th>الرسالة </th>
                            <th>العمليات</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($contacts as $contact)
                        <tr id="sid{{ $contact->id}}">
                            <td><input type="checkbox" name="ids[{{ $contact->id }}]" class="checkbox" value="{{ $contact->id }}"/></td>
                                <td>{{ $contact->name }}</td>
                                <td>{{ $contact->email }}</td>
                                <td>{{ $contact->Title }}</td>
                                <td>{{ $contact->message }}</td>
                                <td>
                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete{{ $contact->id }}"
                                    title="Delete"><i
                                        class="fa fa-trash"></i></button>
                                </td>
                            </tr>

                    </tbody>
                </table>
            </div>
    </div>
</div>
<!-- delete_modal_Grade -->
<div class="modal fade" id="delete{{ $contact->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                   id="exampleModalLabel">
                   حذف رسالة
               </h5>
               <button type="button" class="btn btn-secondary" data-dismiss="modal"
                       aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
               <form action="{{ route('contacts.destroy', 'test') }}"
                     method="post">
                   {{ method_field('Delete') }}
                   @csrf
                   <input id="id" type="hidden" name="id" class="form-control"
                          value="{{ $contact->id }}">هل تريد حذف هذه الرسالة  {{ $contact->message_title }} ?
                   <div class="modal-footer">

                       <button type="button" class="btn btn-secondary"
                               data-dismiss="modal">اغلاق </button>
                       <button type="submit"
                               class="btn btn-danger">تأكيد </button>
                   </div>
                   @endforeach
               </form>
           </div>
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
