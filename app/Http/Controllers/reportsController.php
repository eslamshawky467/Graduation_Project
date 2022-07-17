<?php

namespace App\Http\Controllers;

use App\Models\machinereport;
use App\Models\Report;
use Illuminate\Http\Request;

class reportsController extends Controller
{


    public function index()
    {
        $reports=Report::all();
        return view('Admin.reports',compact('reports'));
    }


    public function create()
    {

    }


    public function store(Request $request)
    {

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


    public function destroy($id)
    {
        //متنساش تضيف فانكشن destroy
        //خدها من اي كنترولر
    }
    public function deletecheckup($id)
    {
        $data = machinereport::find($id);
        $data->delete();
        return redirect()->back();

    }

// حط فانكشن سيرش لما تضيف الريبورتات متنساش
//خدها من اي كنتيرولر وعدل عليها بس
//متنساش تحط الروت بتاعها وخلي اسمها search4

    public function bulkDelete()
    {
        foreach (json_decode(request()->record_ids) as $recordId) {

            $admin = Report::FindOrFail($recordId);
            $this->delete($admin);

        }
        session()->flash('delete', __('تم الحذف بنجاح'));
        return redirect()->route('reports.index');
    }
    private function delete(Report $protect)
    {
        $protect->delete();

    }


    public function showallmachinereports()
    {
        $data = machinereport::all();
        return view('Admin.showmachineusersreports',compact('data'));
    }







}

