<?php
namespace App\Http\Controllers;
use App\Models\Book;
use App\Models\User;
use App\Models\Category;
use App\Models\pharmacy;
use App\Models\Protection;
use Illuminate\Http\Request;
use App\Models\pharmacyorder;
use App\Models\fees;

class orderController extends Controller
{

    public function index()
    {
        $order=pharmacyorder::all();
        return view('Admin.orders',compact('order'));
    }

    public function delet($id)
    {
        $delet = pharmacyorder::find($id);
        $delet->delete();
        return redirect()->back();
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


    public function destroy(Request $request)
    {
        $order=pharmacyorder::findOrFail($request->id)->delete();
        return redirect()->route('order.index');

    }
    public function search18(Request $request ){
        $search=$request->search;
        $categories = Category::all();
        $users=User::all();
        $pharmacies =pharmacy::all();
        $myappointments = Book::where('doctor_id',auth()->user()->id)
        ->join('users','books.doctor_id','=','users.id')
        ->select('users.name','books.*')
        ->get();
        $order =pharmacyorder::join('books','pharmacyorders.user_id','=','books.id')
        ->select('books.patient_name','pharmacyorders.*')->where('books.patient_name','Like','%'.$search."%")
        ->get();
         return view('Admin.orders',compact('order','myappointments','pharmacies','categories'));
        }
        public function bulkDelete()
        {
            foreach (json_decode(request()->record_ids) as $recordId) {

                $admin = pharmacyorder::FindOrFail($recordId);
                $this->delete($admin);

            }
            return redirect()->route('order.index');
        }
        private function delete(pharmacyorder $protect)
        {
            $protect->delete();

        }
        public function choose($id)
        {
            $user = User::find($id);
            $admin = pharmacyorder::where('user_id',$id)->where('statuse','in progress')->get();
            $total = 0;
            foreach( $admin as $o )
            {
                $total +=  $o->quantity * $o->pharmacy->price ;
            }
            $fees = fees::all();
            return view('Admin.fees',compact('fees','total','user'));
        }

}
