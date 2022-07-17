<?php
namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\medicine;
use App\Models\pharmacy;
use App\Models\Protection;
use Illuminate\Http\Request;

class medicineController extends Controller
{
    public function index()
    {
        $medicines = pharmacy::all();
        $cats=Category::all();
      return view('Admin.medicine',compact('medicines','cats'));
    }
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|max:255',
            'illness' =>'required|max:255',
            'description' => 'required|max:255',
            'price' => 'required|max:255',
            'medicine_image' =>'image|required',
            'illness_image' =>'image|required',
        ],[
            'name.required' =>'  ادخل اسم الدواء',
            'illness.required' =>'ادخل اسم الاعراض    ',
            'description.required' =>' ادخل وصف الدواء  ',
            'price.required' =>'ادخل سعر الدواء ',
            'medicine_image.required' =>'ادخل صورة الدواء ',
            'illness_image.required' =>'ادخل صورة الاعراض التي يعالجها المرض ',
            'medicine_image.mimes' =>'  jpeg ,jpg , png ادخل صورة الدواء ',
            'illness_image.mimes' =>'ادخل صورة اعراض الدواء ',
        ]);
        $medicines = new pharmacy ();
        if($request->medicine_image != null)
        {
            $medicine_image = $request->medicine_image;
            $imagename =time().'.'.$medicine_image->getClientOriginalExtension();
            $medicine_image->move('image_medicineFolder',$imagename);
            $medicines->medicine_image = $imagename;
        }
        if($request->illness_image != null)
        {
            $illness_image = $request->illness_image;
            $imgname =time().'.'.$illness_image->getClientOriginalExtension();
            $illness_image->move('image_illnessFolder',$imgname);
            $medicines->illness_image = $imgname;
        }
        $medicines->illness = $request->illness;
        $medicines->price = $request->price;
        $medicines->description = $request->description;
        $medicines->name = $request->name;
        $medicines->medicine_status = $request->medicine_status;
        $medicines->category_id = $request->category_id;
        $medicines->save();
        session()->flash('Add', 'تم اضافة الدواء بنجاح ');
        return redirect()->route('medicine.index');
    }
public function update(Request $request){

    $medicines = pharmacy::findOrFail($request->id);
    $validatedData = $request->validate([
        'name' => 'required|max:255',
        'illness' =>'required|max:255',
        'description' => 'required|max:255',
        'price' => 'required|max:255',
        'medicine_image' =>'image|mimes:jpeg,png,jpg,gif,svg',
        'illness_image' =>'image|mimes:jpeg,png,jpg,gif,svg',
    ],[
        'name.required' =>'  ادخل اسم الدواء',
        'illness.required' =>'ادخل اسم الاعراض    ',
        'description.required' =>' ادخل وصف الدواء  ',
        'price.required' =>'ادخل سعر الدواء ',
        'medicine_image.mimes' =>'  ادخل صورة الدواء بالصيغة الصحيحة  ',
        'illness_image.mimes' =>'    ادخل صورة الدواء بالصيغة الصحيحة ',
    ]);
    if($request->medicine_image != null)
    {
        $medicine_image = $request->medicine_image;
        $imagename =time().'.'.$medicine_image->getClientOriginalExtension();
        $medicine_image->move('image_medicineFolder',$imagename);
        $medicines->medicine_image = $imagename;
    }
    if($request->illness_image != null)
    {
        $illness_image = $request->illness_image;
        $imgname =time().'.'.$illness_image->getClientOriginalExtension();
        $illness_image->move('image_illnessFolder',$imgname);
        $medicines->illness_image = $imgname;
    }
    $medicines->price = $request->price;
    $medicines->illness = $request->illness;
    $medicines->medicine_status = $request->medicine_status;
    $medicines->description = $request->description;
    $medicines->name = $request->name;
    $medicines->category_id = $request->category_id;
    $medicines->save();
    session()->flash('edit', 'تم تعديل الدواء بنجاح ');
    return redirect()->route('medicine.index');
}

//update user function
public function destroy(Request $request ){
    $medicines= pharmacy::findOrFail($request->id)->delete();
    session()->flash('delete', 'تم حذف الدواء بنجاح ');
    return redirect()->route('medicine.index');
}
// destroy fn for users
public function search8(Request $request ){
    $search=$request->search;
    $cats=Category::all();
     $medicines= pharmacy::where('name' ,'Like','%'.$search."%")->orWhere('illness' ,'Like','%'.$search."%")->orWhere('medicine_status' ,'Like','%'.$search."%")->get();
     return view('admin.medicine',compact('medicines','cats'));
    }
    public function bulkDelete()
            {
                foreach (json_decode(request()->record_ids) as $recordId) {

                    $admin = pharmacy::FindOrFail($recordId);
                    $this->delete($admin);

                }
                session()->flash('delete', __('تم الحذف بنجاح'));
                return redirect()->route('medicine.index');
            }
            private function delete(pharmacy $protect)
            {
                $protect->delete();

            }
}
