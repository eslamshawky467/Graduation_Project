<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\pharmacy;
use App\Models\Protection;
use Illuminate\Http\Request;
use App\Models\pharmacyorder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Builder;

class PharmacymController extends Controller
{

    public function index()
    {
        $categories = Category::all();
        $pharmacies =pharmacy::all();
        $myappointments = Book::where('doctor_id',auth()->user()->id)
        ->join('users','books.doctor_id','=','users.id')
        ->select('users.name','books.*')
        ->get();
        $orders=pharmacyorder::all();
        return view('Doctor.doctor_medicine',compact('myappointments','orders','pharmacies','categories'));
    }


    public function create()
    {
    }


    public function store(Request $request)
    {

            foreach ($request->addMoreInputFields as $key => $value) {
                pharmacyorder::create($value);
            }
            session()->flash('Add', 'تم اضافة الدواء  بنجاح ');
            return redirect()->back();
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
        $orders = pharmacyorder::findOrFail($request->id);
        $orders->update([
            'quantity' => $request->quantity,
            'pharmacy_id' => $request->pharmacy_id,
            'user_id' => $request->user_id,
        ]);
        session()->flash('edit', 'تم تعديل الدواء بنجاح ');
        return redirect()->route('Pharmacym.index');
    }


    public function destroy(Request $request)
    {
        $orders = pharmacyorder::findOrFail($request->id)->delete();
        session()->flash('delete', 'تم حذف الدواء  بنجاح ');
        return redirect()->route('Pharmacym.index');
    }

    //دي فانكشن الاجاكس اللي بتجيب الادوية عن طريق القسم category
    public function Get_medicine($id){
        $meds = pharmacy::where("category_id", $id)->pluck("name", "id");
        return $meds;
    }
    public function search17(Request $request ){
        $search=$request->search;
        $categories = Category::all();
        $users=User::all();
        $pharmacies =pharmacy::all();
        $myappointments = Book::where('doctor_id',auth()->user()->id);
        $orders =pharmacyorder::join('books','pharmacyorders.user_id','=','books.id')
        ->select('books.patient_name','pharmacyorders.*')->where('books.patient_name','Like','%'.$search."%")
        ->get();
         return view('Doctor.doctor_medicine',compact('orders','myappointments','pharmacies','categories'));
        }
        public function bulkDelete()
            {
                foreach (json_decode(request()->record_ids) as $recordId) {

                    $admin = pharmacyorder::FindOrFail($recordId);
                    $this->delete($admin);

                }
                session()->flash('delete', __('تم الحذف بنجاح'));
                return redirect()->route('Pharmacym.index');
            }
            private function delete(pharmacyorder $protect)
            {
                $protect->delete();

            }

}
