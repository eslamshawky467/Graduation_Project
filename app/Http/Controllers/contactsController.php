<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Protection;
use Illuminate\Http\Request;

class contactsController extends Controller
{

    public function index()
    {
        $contacts = Contact::all();
        return view('Admin.contacts',compact('contacts'));
    }
    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request ){
        $medicines= Contact::findOrFail($request->id)->delete();
        session()->flash('delete', 'تم حذف الاشعار  بنجاح ');
        return redirect()->route('contacts.index');
    }
    public function search6(Request $request ){
        $search=$request->search;
         $contacts=Contact::where('name' ,'Like','%'.$search."%")->orWhere('Title' ,'Like','%'.$search."%")->orWhere('message' ,'Like','%'.$search."%") ->get();
         return view('admin.contacts',compact('contacts'));
        }
        public function bulkDelete()
            {
                foreach (json_decode(request()->record_ids) as $recordId) {

                    $admin = Contact::FindOrFail($recordId);
                    $this->delete($admin);

                }
                session()->flash('delete', __('تم الحذف بنجاح'));
                return redirect()->route('contacts.index');
            }
            private function delete(Contact $protect)
            {
                $protect->delete();

            }
}
