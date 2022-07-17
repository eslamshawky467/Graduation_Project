<?php

namespace App\Http\Controllers;

use App\Models\Protection;
use Illuminate\Http\Request;

class protectionController extends Controller
{
    public function index()
    {
        $protects = Protection::all();
        return view('Admin.admin_create_protection',compact('protects'));
    }



    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' =>'image|mimes:jpeg,png,jpg,gif,svg',
        ],[
            'image.mimes' =>'    ادخل الصورة  بالصيغة الصحيحة ',
        ]);
        $protects = new Protection();
        if($request->image != null)
        {
            $image = $request->image;
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $image->move('image_protectionFolder',$imagename);
            $protects->image = $imagename;

        }
        $protects->title = $request->title;
        $protects->body = $request->body;
        $protects->save();
        session()->flash('Add', 'تم اضافة الدواء بنجاح ');
        return redirect()->route('protection.index');
    }



    public function destroy(Request $request ){
        $protects = Protection::findOrFail($request->id)->delete();
        session()->flash('delete', 'تم حذف الدواء بنجاح ');
        return redirect()->route('protection.index');
    }






    public function update(Request $request){
        $validatedData = $request->validate([
            'image' =>'image|mimes:jpeg,png,jpg,gif,svg',
        ],[
            'image.mimes' =>'    ادخل الصورة  بالصيغة الصحيحة ',
        ]);
        $protects = Protection::findOrFail($request->id);
        if($request->image != null)
        {
            $image = $request->image;
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $image->move('image_protectionFolder',$imagename);
            $protects->image = $imagename;
        }
        $protects->title = $request->title;
        $protects->body = $request->body;
        $protects->save();
        session()->flash('edit', 'تم تعديل الدواء بنجاح ');
        return redirect()->route('protection.index');
    }




    public function search9(Request $request ){
        $search=$request->search;
         $protects=Protection::where('title' ,'Like','%'.$search."%")->orWhere('body' ,'Like','%'.$search."%")->get();
         return view('Admin.admin_create_protection',compact('protects'));
        }





         public function bulkDelete()
            {
                foreach (json_decode(request()->record_ids) as $recordId) {

                    $admin = Protection::FindOrFail($recordId);
                    $this->delete($admin);

                }
                session()->flash('delete', __('تم الحذف بنجاح'));
                return redirect()->route('protection.index');
            }




            private function delete(Protection $protect)
            {
                $protect->delete();

            }
        }
