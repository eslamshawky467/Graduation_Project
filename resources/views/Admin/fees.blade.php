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

        @if(session()->has('paied'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>{{ session()->get('paied') }}</strong>
                </button>
            </div>
        @endif





            <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#exampleModal">
                اضافة فاتورة
            </button>





            <br><br>






            <div class="container-scroller">
                 <form action="{{url('search11')}}" method="get">
                    <h5>ابحث عن فاتورة <h5>
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
                            <th>اسم المشتري </th>
                            <th>رقم البطاقة </th>
                            <th>رقم الفاتورة</th>
                            <th>نوع الفاتورة</th>
                            <th>سعر الكشف  </th>
                            <th> (مثل الادوية)سعر الخدمات الاخري  </th>
                            <th> المجموع  </th>
                            <th> حالة الفاتورة  </th>
                            <th> تاريخ الفاتورة  </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($fees as $fee)
                        <tr id="sid{{ $fee->id}}">
                                <td>{{ $fee->name }}</td>
                                <td>{{ $fee->socialid }}</td>
                                <td>{{ $fee->invoice_number }}</td>
                                <td>{{ $fee->product }}</td>
                                <td>{{ $fee->cash }} $</td>
                                <td>{{ $fee->others }} $</td>
                                <td>{{ $fee->Total }} $</td>

                                <td>
                                    @if($fee->Status == 'لم يتم الدفع')
                                        {{ $fee->Status }}
                                        <td class="btn btn-success" ><a href="{{url('confirmationpayment/'.$fee->id)}}" >اضغط لتأكيد الدفع </a></td>
                                    @else
                                        {{ $fee->Status }}
                                    @endif

                                </td>
                                <td>{{ $fee->created_at }}</td>
                                <td>

                                    <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                                            data-target="#delete{{ $fee->id }}"
                                            title="Delete Medicine"><i
                                            class="fa fa-trash"></i></button>
                                </td>

                            </tr>













                            <!-- delete_modal_Grade -->
                            <div class="modal fade" id="delete{{ $fee->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="exampleModalLabel" aria-hidden="true">
                               <div class="modal-dialog" role="document">
                                   <div class="modal-content">
                                       <div class="modal-header">
                                           <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                               id="exampleModalLabel">
                                               حذف فاتورة
                                           </h5>
                                           <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                                   aria-label="Close">
                                               <span aria-hidden="true">&times;</span>
                                           </button>
                                       </div>
                                       <div class="modal-body">
                                           <form action="{{ route('fees.destroy', 'test') }}"
                                                 method="post">
                                               {{ method_field('Delete') }}
                                               @csrf
                                               <input id="id" type="hidden" name="id" class="form-control"
                                                      value="{{ $fee->id }}">هل تريد حذف الفاتورة رقم  {{ $fee->invoice_number }} ?
                                               <div class="modal-footer">

                                                   <button type="button" class="btn btn-secondary"
                                                           data-dismiss="modal">اغلاق </button>
                                                   <button type="submit"
                                                           class="btn btn-danger">تأكيد </button>
                                               </div>
                                           </form>
                                       </div>
                                   </div>
                               </div>
                           </div>
                        </div>










                        <div class="modal fade" id="edit{{ $fee->id }}" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                                            id="exampleModalLabel">
                                            تعديل الفاتورة
                                        </h5>
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                            aria-label="Close">
                                            <span aria-hidden="true">&times;</span>
                                        </button>

                                    </div>
                                    <div class="modal-body">
                                        <!-- add_form -->
                                        <form action="{{ route('fees.update', 'test') }}" method="post"enctype="multipart/form-data">
                                            {{ method_field('patch') }}
                                            @csrf
                                            <div class="row">
                                                <div class="col">
                                                    <label for="Medicine Name"
                                                        class="mr-sm-2"> اسم المشتري
                                                        :</label>
                                                    <input id="Name" type="text" name="name"
                                                        class="form-control"
                                                        value="{{ $fee->name}}"
                                                        required>
                                                    <input id="id" type="hidden" name="id" class="border"
                                                        value="{{ $fee->id }}">
                                                </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">رقم الفاتورة
                                                    :</label>
                                                <input class="form-control" name="invoice_number"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $fee->invoice_number}}" required>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1"> سعر الكشف
                                                    :</label>
                                                    <br>
                                                <input class="amount" name="cash"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $fee->cash}}"onblur="findTotal()" size="39" required>
                                            </div>

                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">سعر الخدمات الاخري
                                                    :</label><br>
                                                <input class="amount" name="others"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $fee->others}}" onblur="findTotal()"size="35">
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1">المجموع
                                                    :</label><br>
                                                <input name="Total"
                                                    id="totalordercost" readonly
                                                    value="{{ $fee->Total}}"size="40" required>
                                            </div>
                                            <div class="form-group">
                                                <label
                                                    for="exampleFormControlTextarea1"> رقم البطاقة
                                                    :</label>
                                                <input class="form-control" name="socialid"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                                                    value="{{ $fee->socialid}}" required>
                                            </div>
                                            <br>
                                            <br>
                                            <br>
                                            <div class="form-group">
                                            <label for="exampleFormControlTextarea1">نوع الفاتورة
                                                :</label>
                                            <select name="product"
                                            id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" class="form-select" aria-label="Default select example" required>
                                            <option>  {{ $fee->product }}</option>
                                            <option value="كشف">كشف  </option>
                                            <option value="خدمات اخري  & كشف ">كشف  & خدمات اخري  </option>
                                            </select>
                                        </div>
                                            <br>
                                            <div class="form-group">
                                            <label for="exampleFormControlTextarea1">حالة الفاتورة
                                                :</label>
                                                    <select name="Status"
                                                    id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" class="form-select" aria-label="Default select example" required>
                                                    <option>  {{ $fee->Status }}</option>
                                                      <option value="تم الدفع ">تم الدفع </option>
                                                      <option value=" لم يتم الدفع ">لم يتم الدفع  </option>
                                                    </select>
                                            </div>
                                            </div>
                                            <br><br>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">اغلاق</button>
                                                <button type="submit"
                                                    class="btn btn-success"></button>
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
                    {{ ('اضافة فاتورة') }}
                </h5>
                <button type="button" class="btn btn-secondary" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <!-- add_form -->
                <form action="{{ route('fees.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" name="userid" value="{{$user->id}}">
                    <div class="row">
                        <div class="col">
                            <label for="Name" class="mr-sm-2"> اسم المشتري
                                :</label>
                            <input id="name" type="text" value="{{$user->name}}" name="name" class="form-control" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">رقم البطاقة
                            :</label>
                        <input class="form-control" type="text" value="{{$user->socialid}}" name="socialid" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3" required>
                    </div>

                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">رقم الفاتورة
                            :</label>
                        <input class="form-control" type="text" name="invoice_number" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            rows="3" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">نوع الفاتورة
                            :</label>
                            <select name="product"
                            id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" class="form-select" aria-label="Default select example" required>
                              <option value="كشف ">كشف </option>
                              <option value="كشف & خدمات اخري ">كشف & خدمات اخري </option>
                            </select>
                    </div>
                    <br>
                    <div class="form-group" style="margin-bottom: 7px;">
                        <label for="exampleFormControlTextarea1">سعر الكشف
                            </label>
                        <input oninput="myFunction();" class="amount"type="text" name="cash" id="amount"
                            rows="3"onblur="findTotal()" size="39" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1">  الأدوية
                            </label>
                        <input class="amount" type="text" name="others" id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;"
                            value="{{$total}}"  rows="3" onblur="findTotal()" size="39">
                    </div>
                    <br>
                    {{-- <div class="form-group">
                        <label for="exampleFormControlTextarea1">المجموع
                            :</label>
                        <input  type="text" name="Total" id="totalordercost" readonly
                            rows="3" size="44" required>
                    </div> --}}
                    <p id="demo"></p>
                    <div class="form-group">
                        <label for="exampleFormControlTextarea1"> حالة الفاتورة
                            :</label>
                            <select name="Status"
                            id="exampleFormControlTextarea1" placeholder="." style="border: 1px solid #e3e3e3;padding: 1rem;border-radius: 20px;font-size: 18px;" class="form-select" aria-label="Default select example" required>
                            <option value="تم الدفع    ">تم الدفع    </option>
                            <option value=" لم يتم الدفع "> لم يتم الدفع </option>
                            </select>
                    </div>
                    <br><br>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary"
                    data-dismiss="modal">اغلاق </button>
                <button type="submit" class="btn btn-success">
                    تأكيد
                    {{-- <a href="{{url('change_statuse/'.$user->id)}}" >تأكيد</a> --}}
                </button>
            </div>
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
<script src="{{asset('js/users.js')}}"></script>
{{-- <script>
function findTotal(){
    var arr = document.getElementsByClassName('amount');
    var tot=0;
    for(var i=0;i<arr.length;i++){
        if(parseFloat(arr[i].value))
            tot += parseFloat(arr[i].value);
    }
    document.getElementById('totalordercost').value = tot;
}
</script> --}}
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
        <script>
            function myFunction() {
            var x = document.getElementById("amount").value;
            document.getElementById("demo").innerHTML = {{$total}} + parseFloat(x);
            }
        </script>

</body>
</html>

