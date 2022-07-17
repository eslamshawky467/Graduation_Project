<?php
namespace App\Http\Controllers;
use App\Models\Protection;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
class usersController extends Controller
{
    public function index()
    {
        $users = User::all();
      return view('Admin.users',compact('users'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255|min:6',
            'address' =>'required|max:255',
            'certifcate' => 'max:255',
            'speciality' => 'max:255',
            'usertype' => 'required',
            'socialid' => 'required|max:255|unique:users',
            'phonenumber' => 'required|max:255',
            'gender' => 'required|max:255',
            'age' => 'required|max:200',
            'email' => 'required|max:255|email|unique:users',
            'password' => 'required|max:255|min:8',
        ],[

            'name.required' =>' ادخل الاسم  ',
            'name.min' =>'الاسم  قصير للغاية ',
            'address.required'=>'ادخل العنوان',
            'usertype.required'=>'ادخل نوع المستخدم',
            'socialid.required'=>'ادخل رقم البطاقة',
            'phonenumber.required'=>'ادخل رقم الهاتف المحمول',
            'gender.required'=>'ادخل النوع',
            'age.required'=>'ادخل السن',
            'email.required'=>'ادخل البريد الالكتروني',
            'password.required'=>'ادخل الرقم السري',
            'email.unique'=>'البريد الالكتروني مسجل مسبقا',
            'socialid.unique'=>'رقم البطاقة مسجل مسبقا',
            'password.min'=>'الرقم السري قصير للغاية '
        ]);
        User::create([
            'name' => $request->name,
            'address' => $request->address,
            'speciality' => $request->speciality,
            'certifcate' => $request->certifcate,
            'phonenumber' => $request->phonenumber,
            'password'=>  Hash::make($request->password),
            'usertype' => $request->usertype,
            'age' => $request->age,
            'gender' => $request->gender,
            'socialid' => $request->socialid,
            'email' => $request->email,
        ]);
        session()->flash('Add', 'تم اضافة المستخدم بنجاح ');
        return redirect()->route('users.index');


        // creat fn user
    }
public function update(Request $request){

    $users = User::findOrFail($request->id);
    $validatedData = $request->validate([
        'name' => 'required|max:255|min:6',
        'address' =>'required|max:255',
        'certifcate' => 'max:255',
        'speciality' => 'max:255',
        'usertype' => 'required',
        'socialid' => 'required|max:255',
        'phonenumber' => 'required|max:255',
        'gender' => 'required|max:255',
        'age' => 'required|max:200',
    ],[
        'name.required' =>' ادخل الاسم  ',
        'name.min' =>'الاسم  قصير للغاية ',
        'address.required'=>'ادخل العنوان',
        'usertype.required'=>'ادخل نوع المستخدم',
        'socialid.required'=>'ادخل رقم البطاقة',
        'phonenumber.required'=>'ادخل رقم الهاتف المحمول',
        'gender.required'=>'ادخل النوع',
        'age.required'=>'ادخل السن',
    ]);
    $users->update([
            'name' => $request->name,
            'address' => $request->address,
            'speciality' => $request->speciality,
            'certifcate' => $request->certifcate,
            'phonenumber' => $request->phonenumber,
            'usertype' => $request->usertype,
            'age' => $request->age,
            'gender' => $request->gender,
            'socialid' => $request->socialid,
    ]);
    session()->flash('edit','تم تعديل المستخدم بنجاح');
    return redirect()->route('users.index');
}
//update user function

public function destroy(Request $request ){
    $users = User::findOrFail($request->id)->delete();
    session()->flash('delete', 'تم حذف المستخدم بنجاح ');
    return redirect()->route('users.index');
}



// destroy fn for users
public function search3(Request $request ){
    $search=$request->search;
     $users= User::where('usertype' ,'Like','%'.$search."%")->orWhere('socialid' ,'Like','%'.$search."%")->orWhere('name' ,'Like','%'.$search."%")->get();
     return view('Admin.users',compact('users'));
    }
    //search fn for users




    public function bulkDelete()
            {
                foreach (json_decode(request()->record_ids) as $recordId) {

                    $admin = User::FindOrFail($recordId);
                    $this->delete($admin);

                }
                session()->flash('delete', __('تم الحذف بنجاح'));
                return redirect()->route('users.index');
            }






            private function delete(User $user)
            {
                $user->delete();

            }

}
