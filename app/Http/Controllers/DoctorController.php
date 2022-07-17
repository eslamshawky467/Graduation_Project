<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Message;
use App\Models\post;
use App\Models\Love;
use App\Models\machinereport;
use App\Models\User;
use App\Models\Userlike2;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DoctorController extends Controller
{
    //

    public function doctordashboard(){
        return view("Doctor.doctor_dashboard");
    }
    public function doctorcontact(){
        return view("Doctor.doctor_contact");
    }
    public function doctoraboutus(){
        return view("Doctor.doctor_aboutus");
    }
    public function doctornews(){
        return view("Doctor.doctor_news");
    }
    public function myappointments()
    {
        $myappointments = Book::where('doctor_id',auth()->user()->id)
        ->join('users','books.doctor_id','=','users.id')
        ->select('users.name','books.*')
        ->get();
        return view('Doctor.doctor_appointments',compact('myappointments'));
    }
    public function confirmation($id)
    {
        
        $confirm = Book::find($id);
        $confirm->status = "aproved" ;
        $confirm->update();
        return redirect()->back();
    }
    public function confirmationcanceled($id)
    {   
        $confirm = Book::find($id);
        $confirm->delete() ;
       

        return redirect()->back();
    }
    public function index()
    {
        $posts = post::join('users','posts.doctor_id','=','users.id')
        
        ->select('users.name','posts.*')
        
        ->get();
        $likecount = Userlike2::where('like',1)->count();

    
        return view('Doctor.liveposts', compact('posts','likecount'));
    }
   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create_post()
    {
        return view('Doctor.create_post');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_post(Request $request)
    {
        $post = new post();
        if($request->image != null)
        {
            $image = $request->image;
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $image->move('image_postFolder',$imagename);
            $post->body = $request->body;
            $post->image = $imagename ;
            $post->doctor_id = Auth()->user()->id ;
            
            $post->save();

        }
        else
        {
            $post->body = $request->body;
            $post->doctor_id = Auth()->user()->id ;
            $post->save();

        }
        
    
        return redirect()->back();
    }
    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function show_post($id)
    {
        $post = post::find($id);
        return view('Petient.show', compact('post'));
    }
    public function editstorepost(Request $request)
    {
        $post = new post();
        if($request->image != null)
        {
            $image = $request->image;
            $imagename =time().'.'.$image->getClientOriginalExtension();
            $image->move('image_postFolder',$imagename);
            $post->body = $request->body;
            $post->image = $imagename ;
            $post->doctor_id = Auth()->user()->id ;
            
            $post->save();

        }
        else
        {
            $post->body = $request->body;
            $post->doctor_id = Auth()->user()->id ;
            $post->update();

        }
        
    
        return redirect()->back();
    }
    public function editpost($id)
    {
        $post = post::find($id);
        return view('Doctor.edit_post',compact('post'));
    }
    public function deletpost($id)
    {
        $post = post::find($id);
        $post->delete();
        return redirect()->back();
    }
    public function dashboardselect()
    {
       $users = User::all();
       return view('chat.selectonetochat',compact('users'));
    }
    public function chatnow($id)
    {
        $reciever = $id;
        return view('chat.dashboard2',compact('reciever'));
    }
    public function deletmsg($id)
    {
        $deletmsg = Message::find($id);
        $deletmsg->delete();
        return redirect()->back();
    }
    
    public function search2(Request $request)
    {
        $users = User::where('name', 'LIKE' , '%'.$request->search.'%')
        ->get();
        return view('chat.dashboard2',compact('users'));
    }
    public function chatwithpatient()
    {
        $doctors = User::where('usertype','User')
        ->get();
        return view("Doctor.chat_with_patient",compact('doctors'));
    }
    public function doctorreports()
    {
        $book = Book::where('doctor_id',Auth::id())->get();
        $data = DB::table('books')->join('machinereports','books.patient_id','=','machinereports.user_id')
        ->select('machinereports.*')->get();
        return view('Doctor.docpatientreports',compact('data'));
    }

    public function docshowspeceficcheckup($id)
    {
        $data = machinereport::find($id);
        return view('Doctor.docpatientspecificreport',compact('data'));
    }






}


