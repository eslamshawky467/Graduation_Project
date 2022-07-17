<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Protection;
use Illuminate\Http\Request;

class CategoryController extends Controller
{

    public function index()
    {
        $cats = Category::all();
        return view('Admin.Category',compact('cats'));
    }

    public function create()
    {

    }
    public function store(Request $request)
    {
        Category::create([
            'name' => $request->name,
            'note' => $request->note,
        ]);
        session()->flash('Add', 'تم اضافة القسم بنجاح ');
        return redirect()->route('Category.index');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }
    public function update(Request $request)
    {
        $cats = Category::findOrFail($request->id);
        $cats->update([
                'name' => $request->name,
                'note' => $request->note,
        ]);
        session()->flash('edit', 'تم تعديل القسم بنجاح ');
        return redirect()->route('Category.index');
    }

    public function destroy(Request $request)
    {
        $cats = Category::findOrFail($request->id)->delete();
        session()->flash('delete', 'تم حذف القسم  بنجاح ');
        return redirect()->route('Category.index');
    }
    public function search15(Request $request ){
        $search=$request->search;
         $cats= Category::where('name' ,'Like','%'.$search."%")->orWhere('note' ,'Like','%'.$search."%")->get();
         return view('admin.Category',compact('cats'));
        }
        public function bulkDelete()
            {
                foreach (json_decode(request()->record_ids) as $recordId) {

                    $admin = Category::FindOrFail($recordId);
                    $this->delete($admin);

                }
                session()->flash('delete', __('تم الحذف بنجاح'));
                return redirect()->route('Category.index');
            }
            private function delete(Category $c)
            {
                $c->delete();

            }
}
