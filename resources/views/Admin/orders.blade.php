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






            <form method="post" action="{{ route('order.bulk_delete') }}" style="display: inline-block;">
                @csrf
                @method('delete')
                <input type="hidden" name="record_ids" id="record-ids">
                <button type="submit" class="btn btn-danger" id="bulk-delete" disabled="true">حذف</button>
            </form>
            <br><br>







            <div class="container-scroller">
                 <form action="{{url('search18')}}" method="get">
                    <h5>ابحث عن طلب <h5>
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
                            <th>الكمية </th>
                            <th>اسم الدكتور </th>
                            <th>التخصص</th>
                            <th>القسم</th>
                            <th>السعر</th>
                            <th>  اسم الدواء</th>
                            <th>اسم المريض</th>
                            <th> سعر الدواء </th>
                            <th>تاريخ الطلب </th>
                            <th>الحالة  </th>
                            <th>العمليات  </th>
                            <th>اكشن  </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $o)
                        <tr id="sid{{ $o->id}}">
                            <td><input type="checkbox" name="ids[{{ $o->id }}]" class="checkbox" value="{{ $o->id }}"/></td>
                                <td> {{$o->quantity}}</td>
                                <td>{{ $o->doctor->name }}</td>
                                <td>{{ $o->doctor->speciality }}</td>
                                <td>{{$o->pharmacy->categories->name}}</td>
                                <td>{{$o->pharmacy->price}} $</td>
                                <td>{{$o->pharmacy->name }}</td>
                                <td>{{ $o->users->name }} </td>
                                <td>{{ $o->quantity * $o->pharmacy->price }} $ </td>
                                <td>{{ $o->created_at }} </td>
                                <td>{{ $o->statuse }} </td>
                                <td> <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                    data-target="#delete{{ $o->id }}"
                                    title="Delete Note"><i
                                        class="fa fa-trash"></i></button>
                                </td>
                                <td>
                                     <a href="{{url('choose/'.$o->user_id)}}" >choose</a> {{--<button type="button" class="btn btn-danger "

                                    title="Delete Note"><i
                                        class="fa fa-trash"></i> </button> --}}
                                </td>
                        </tr>







<!-- delete_modal_Grade -->
<div class="modal fade" id="delete{{ $o->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                   id="exampleModalLabel">
                   حذف طلب
               </h5>
               <button type="button" class="btn btn-secondary" data-dismiss="modal"
                       aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
               <form action="{{ route('order.destroy', 'test') }}"
                     method="post">
                   {{ method_field('Delete') }}
                   @csrf
                   <input id="id" type="hidden" name="id" class="form-control" value="{{ $o->id }}">هل تريد حذف الطلب رقم  {{ $o->id}}?
                   <div class="modal-footer">
                       <button type="button" class="btn btn-secondary"
                               data-dismiss="modal">اغلاق</button>
                       <button type="submit"
                               class="btn btn-danger">تأكيد</button>
                   </div>
               </form>
           </div>
           @endforeach
       </div>
   </div>
</div>
</div>
  </main>
  @include('layouts.Scripts')
  <!--   Core JS Files   -->














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
