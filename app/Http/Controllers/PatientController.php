<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\comment;
use App\Models\fees;
use App\Models\machinereport;
use App\Models\Message;
use App\Models\pharmacy;
use App\Models\pharmacyorder;
use App\Models\post;
use App\Models\Protection;
use App\Models\Userlike2;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;

class PatientController extends Controller
{
    //
    public function patient_dashboard(){
        return view("Patient.patient_dashboard");
    }

    public function patient_about_us(){
        return view("Patient.patient_about_us");
    }
    public function patient_doctors(){
        $doctors = User::where('usertype','Doctor')->get();
        return view("Patient.patient_doctors",compact('doctors'));
    }
    public function patient_call_us(){
        return view("Patient.patient_call_us");
    }
    public function appointment(Request $request )
    {
        $book = new Book();
        $book->patient_name = $request->fullname;
        $book->patient_email = $request->email;
        $book->patient_id = auth()->user()->id;
        $book->patient_phone = $request->phone;
        $book->doctor_id = $request->doctor_id;
        $book->book_message = $request->message;
        $book->appointment = $request->appointment;
        $book->save();
        return redirect()->back();


    }
    public function posts()
    {
        $posts = post::join('users','posts.doctor_id','=','users.id')
        ->select('users.name','posts.*')
        //->join('comments','users.id','=','comments.user_id')
        ->get();
        return view('Patient.posts',compact('posts'));
    }
    public function storecomment(Request $request)
    {

        $comment = new comment();
        $comment->body = $request->body;
        $comment->post_id = $request->post_id;
        $comment->parent_id = $request->parent_id;
        $comment->user_id = auth()->user()->id;
        $comment->save();
        return redirect()->back();
    }
    public function storecommentt(Request $request)
    {

        $comment = new comment();
        $comment->body = $request->body;
        $comment->post_id = $request->post_id;
        $comment->parent_id = $request->parent_id;
        $comment->user_id = auth()->user()->id;
        $comment->save();
        return redirect()->back();
    }

    public function dashboardselect()
    {
       $users = User::all();
       return view('chat.selectonetochat',compact('users'));
    }
    public function patientchatnow($id)
    {
        $reciever = $id;
        return view('Patient.patient_chat',compact('reciever'));
    }
    public function patientdeletmsg($id)
    {
        $deletmsg = Message::find($id);
        $deletmsg->delete();

    }
    public function patientsearch(Request $request)
    {
        $users = User::where('name', 'LIKE' , '%'.$request->search.'%')
        ->get();
        return view('Patient.patient_chat',compact('users'));
    }
    public function patient_protection()
    {
        $protect = Protection::all();
        return view('Patient.patient_protection',compact('protect'));
    }
    public function show_protection_post($id)
    {
        $protect = Protection::find($id);
        return view('Patient.show_protection_post',compact('protect'));
    }
    public function myappointments()
    {
        $myappointments = Book::where('patient_id',Auth::user()->id)
        ->join('users','books.doctor_id','=','users.id')
        ->get();
        return view('Patient.myappointments',compact('myappointments'));
    }
    public function show_illness()
    {
        if(Auth::user()->user_type==0 or Auth::user()->user_type==2 )
        {

            $pharmacy_data = pharmacy::all()->unique('illness');
            //$doctor =  doctor::all();
            //$news = news::all();
            /*$user_name = news::where('doctor_id',$news->doctor_id)->join('users','news.doctor_id','=','users.id')->get();*/
            //$doctor_statuse = false ;
            //$user_name = DB::table('users')->join('news','users.id','=','news.doctor_id')->get();
            return view('Patient.show_illness' , compact('pharmacy_data'));



        }
    }
    public function show_medicine($illness)
    {
        if(Auth::user()->user_type==0  )
            {
                $pharmacy_data = pharmacy::where('illness',$illness)->get();
                //$doctor =  doctor::all();

                //$news = news::all();
                /*$user_name = news::where('doctor_id',$news->doctor_id)->join('users','news.doctor_id','=','users.id')->get();*/
                //$doctor_statuse = false ;
                //$user_name = DB::table('users')->join('news','users.id','=','news.doctor_id')->get();
                return view('Patient.show_medicine' , compact('pharmacy_data'));



            }
    }
    public function make_order($id)
    {
        $product = pharmacy::find($id);
        return view('Patient.patient_show_medicine',compact('product'));
    }
    public function medicine_make_order(Request $request,$id)
    {
        $order = new pharmacyorder();
        $order->pharmacy_id = $id;
        $order->quantity = $request->qty;
        $order->doctor_id = auth()->user()->id;
        $order->user_id = auth()->user()->id;
        $order->save();
        return redirect()->back();
    }
    public function patient_livepost()
    {
        $posts = post::join('users','posts.doctor_id','=','users.id')
        
        ->select('users.name','posts.*')
        
        ->get();
        $likecount = Userlike2::where('like',1)->count();

    
        return view('Patient.patient_livepost', compact('posts','likecount'));
    }

    public function patienttaxes()
    {
        $taxes = fees::where('user_id',Auth::id())->get();
        return view('Patient.taxes',compact('taxes'));
    }

    public function testmachine()
    {
        return view('Patient.x-raytest');
    }
    
    public function makecheckup(Request $request)
    {
        $userid = Auth::id();
        $user = User::find($userid);
        $report = new machinereport();
        $image = $request->imagefile;
        $imageurl = time().'.'.$image->getClientOriginalExtension();
        $image->move('machinefolder',$imageurl);
        $imagecontent = file_get_contents('machinefolder/'.$imageurl);
        $imagebaseconverted = base64_encode($imagecontent);
        $response = Http::post('https://diabeticretinopathyapp.herokuapp.com/upload',[
                'imagefile' => $imagebaseconverted
                ]);

            // return[
            //         'status' => $response->status(),
            //         'data' => json_decode($response->body(), true)
            // ];

            if($response->status() == '500'){
                session()->flash('test', 'من فضلك ادخل صورة الاشعة الصحيحة');
                return redirect()->back();
            }
            else{
                $data = json_decode($response->body(), true);
                $report->user_id = $userid;
                $report->imagefile = $imageurl;
                $report->name = $user->name;
                $report->email = $user->email;
                $report->socialid = $user->socialid;
                $report->address = $user->address;
                $report->phonenumber = $user->phonenumber;
                $report->age = $user->age;
                $report->gender = $user->gender;
                $report->classnumber = $data['ClassNo'];
                $report->classname = $data['ClassName'];
                $report->save();
                // return redirect('/generatedreport');
                return redirect('/generatedreport');
            }

        

}    

public function generatedreport()
{
    $data = machinereport::where('user_id',Auth::id())->get();
    return view('Patient.report',compact('data'));
}

public function deletecheckup($id)
{
    $data = machinereport::find($id);
    $data->delete();
    return redirect()->back();
    
}
public function showspeceficcheckup($id)
{
    $data = machinereport::find($id);
    return view('Patient.speceficreport',compact('data'));
    
}






}
