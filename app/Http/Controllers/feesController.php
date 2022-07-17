<?php

namespace App\Http\Controllers;

use App\Models\fees;
use App\Models\Protection;
use App\Models\pharmacyorder;
use App\Models\User;
use Illuminate\Http\Request;

class feesController extends Controller
{
    public function index()
    {
        $fees = fees::all();
        $users=User::all();
        return view('Admin.fees',compact('fees','users'));
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:6',
            'invoice_number' =>'required|max:255',
            'product' => 'required|max:255',
            'cash' => 'required',
            'socialid' => 'required|max:255',
        ],[
            'name.required' =>'  رقم الفاتورة مطلوب  ',
            'name.min' =>'الاسم  قصير للغاية ',
            'invoice_number.required'=>'رقم الفاتورة مطلوب ',
            'product.required'=>' نوع الفاتورة مطلوب ',
            'cash.required'=>'  سعر الكشف مطلوب',
            'socialid.required'=>'رقم البطاقة مطلوب   ',
        ]);
        // fees::create([
        //     'name' => $request->name,
        //     'socialid' => $request->socialid,
        //     'invoice_number' => $request->invoice_number,
        //     'product' => $request->product,
        //     'cash' => $request->cash,
        //     'others' => $request->others,
        //     'Total' => $request->cash + $request->others,
        //     'Status' => $request->Status,
        //     'user_id' => $request->name
        // ]);
        // session()->flash('Add', 'تم اضافة الفاتورة بنجاح ');
        $data = new fees();
        $data->name = $request->name;
        $data->socialid = $request->socialid;
        $data->invoice_number = $request->invoice_number;
        $data->product = $request->product;
        $data->cash = $request->cash;
        $data->others = $request->others;
        $data->Total = $request->cash + $request->others;
        $data->Status = $request->Status;
        $data->user_id = $request->userid;
        $data->save();
        $admin = pharmacyorder::where('user_id',$request->userid)->where('statuse','in progress')->get();

            foreach( $admin as $o )
            {
                $o->statuse ="done" ;
                $o->update() ;
            }
        return redirect()->back();
        // ->route('fees.index');


        // creat fn user
    }



public function update(Request $request){

    $fees = fees::findOrFail($request->id);
    $validatedData = $request->validate([
    'name' => 'required|max:255|min:6',
    'invoice_number' =>'required|max:255',
    'product' => 'required|max:255',
    'cash' => 'required',
    'socialid' => 'required|max:255',
],[
    'name.required' =>'  رقم الفاتورة مطلوب  ',
    'name.min' =>'الاسم  قصير للغاية ',
    'invoice_number.required'=>'رقم الفاتورة مطلوب ',
    'product.required'=>' نوع الفاتورة مطلوب ',
    'cash.required'=>'  سعر الكشف مطلوب',
    'socialid.required'=>'رقم البطاقة مطلوب   ',
]);
    $fees->update([
        'name' => $request->name,
        'socialid' => $request->socialid,
        'invoice_number' => $request->invoice_number,
        'product' => $request->product,
        'cash' => $request->cash,
        'others' => $request->others,
        'Total' => $request->Total,
        'Status' => $request->Status,
        'user_id' => $request->id
    ]);
    session()->flash('edit', 'تم تعديل الفاتورة بنجاح ');
    return redirect()->back();
}



//update user function
public function destroy(Request $request ){
    $fees = fees::findOrFail($request->id)->delete();
    session()->flash('delete', 'تم حذف الفاتورة  بنجاح ');
    return redirect()->back();
}



// destroy fn for users
public function search11(Request $request ){
    $search=$request->search;
     $fees= fees::where('name' ,'Like','%'.$search."%")->orWhere('socialid' ,'Like','%'.$search."%")->orWhere('invoice_number' ,'Like','%'.$search."%")->get();
     return view('admin.fees',compact('fees'));
    }




    public function bulkDelete()
            {
                foreach (json_decode(request()->record_ids) as $recordId) {

                    $admin = fees::FindOrFail($recordId);
                    $this->delete($admin);

                }
                session()->flash('delete', __('تم الحذف بنجاح'));
                return redirect()->route('fees.index');
            }




            private function delete(fees $protect)
            {
                $protect->delete();

            }

public function confirmationpayment($id)
{
    $data = fees::find($id);
    $data->Status = 'تم الدفع';
    $data->save();
    session()->flash('paied', 'تم دفع الفاتورة بنجاح ');
    return redirect()->back();
}


}
