<?php

namespace App\Http\Controllers;

use App\Models\Notes;
use App\Models\Protection;
use Illuminate\Http\Request;

class NotesController extends Controller
{
    public function index()
    {
        $notes=Notes::all();

        return view('Admin.Notes',compact('notes'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $notes=Notes::all();
        return view('Patient.notifcation',compact('notes'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'image' =>'image|mimes:jpeg,png,jpg,gif,svg',
        ],[
            'image.mimes' =>'    ادخل الصورة  بالصيغة الصحيحة ',
        ]);
        $notes =new Notes();
        if($request->image != null)
        {
            $image = $request->image;
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $image->move('image_notesFolder',$imagename);
            $notes->image = $imagename;

        }
        $notes->postbody = $request->postbody;
        $notes->created_by= $request->created_by;
        $notes->user_id = Auth()->user()->id ;
        $notes->save();
        session()->flash('Add', 'تم اضافة الاشعار بنجاح ');
        return redirect()->route('Notes.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $notes = Notes::findOrFail($request->id);
        $validatedData = $request->validate([
            'image' =>'image|mimes:jpeg,png,jpg,gif,svg',
        ],[
            'image.mimes' =>'    ادخل الصورة  بالصيغة الصحيحة ',
        ]);
        if($request->image != null)
        {
            $image = $request->image;
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $image->move('image_notesFolder',$imagename);
            $notes->image = $imagename;
        }
        $notes->postbody = $request->postbody;
        $notes->user_id = Auth()->user()->id ;
        $notes->save();
        session()->flash('edit', 'تم تعديل الاشعار بنجاح ');
        return redirect()->route('Notes.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        $notes = Notes::findOrFail($request->id)->delete();
        session()->flash('delete', 'تم حذف الاشعار  بنجاح ');
        return redirect()->route('Notes.index');
    }
    public function search13(Request $request ){
        $search=$request->search;
         $notes= Notes::Where('postbody' ,'Like','%'.$search."%")->get();
         return view('Admin.Notes',compact('notes'));
        }
        public function bulkDelete()
        {
            foreach (json_decode(request()->record_ids) as $recordId) {

                $admin = Notes::FindOrFail($recordId);
                $this->delete($admin);

            }
            session()->flash('delete', __('تم الحذف بنجاح'));
            return redirect()->route('Notes.index');
        }
        private function delete(Notes $protect)
        {
            $protect->delete();

        }

}
