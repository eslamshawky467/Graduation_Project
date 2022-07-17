
@foreach($comments as $comment)
    <div class="display-comment" @if($comment->parent_id != null) style="margin-left:40px;" @endif>
        <div class="table-responsive">
            <table id="datatable" class="table  table-hover table-sm table-bordered p-0" data-page-length="50"
                style="text-align: center">
                <thead>
                    <tr>
                        <th><input type="checkbox" id="checkboxall"/></th>
                        <th>اسم الناشر </th>
                        <th> التعليق </th>
                        <th>الصورة الشخصية</th>
                        <th>العمليات</th>
                    </tr>
                </thead>
                <tbody>
                <tr id="sid{{ $comment->id}}">
                <td><input type="checkbox" name="ids[{{ $comment->id }}]" class="checkbox" value="{{ $comment->id }}"/></td>
        <td>{{ $comment->user->name }}</td>
        <td>{{ $comment->body }}</td>
        <td> <img src="{{ $comment->user->profile_photo_url }}" alt="{{ $comment->user->name }}" class="rounded-full h-15 w-15 object-cover"></td>
        <td>
                <button type="button" class="btn btn-danger btn-sm" data-toggle="modal"
                data-target="#delete{{ $comment->id }}"
                title="Delete Medicine"><i
                    class="fa fa-trash"></i></button>
        </td>

        @include('Admin.commentsDisplay', ['comments' => $comment->replies])

        <!-- delete_modal_Grade -->
<div class="modal fade" id="delete{{ $comment->id }}" tabindex="-1" role="dialog"
    aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog" role="document">
       <div class="modal-content">
           <div class="modal-header">
               <h5 style="font-family: 'Cairo', sans-serif;" class="modal-title"
                   id="exampleModalLabel">
                   حذف تعليق
               </h5>
               <button type="button" class="btn btn-secondary" data-dismiss="modal"
                       aria-label="Close">
                   <span aria-hidden="true">&times;</span>
               </button>
           </div>
           <div class="modal-body">
               <form action="{{ route('showcomments.destroy', 'test') }}"
                     method="post">
                   {{ method_field('Delete') }}
                   @csrf
                   <input id="id" type="hidden" name="id" class="form-control"
                          value="{{ $comment->id }}">هل تريد حذف هذا التعليق ؟
                   <div class="modal-footer">

                       <button type="button" class="btn btn-secondary"
                               data-dismiss="modal">اغلاق</button>
                       <button type="submit"
                               class="btn btn-danger">تأكيد</button>
                   </div>
                   @endforeach
               </form>
           </div>
       </div>
   </div>
</div>
</div>
    </div>

