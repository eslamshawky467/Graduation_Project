<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller{

 public function home(){

  if(Auth::id()){

    return redirect("redirects");
  }else{

    return view("HomePage");

  }
 }
  public function index(){
    $usertype=Auth::user()->usertype;
    if($usertype=='Admin')
   {
     return view('dashboard');
     //دي عشان اليوزر تايب وانت بتضيف خلي بالك عند التلاتة دول
   }
   elseif($usertype=='Doctor'){
    return view('Doctor.doctor_dashboard');
   }
   else{
     return view('Patient.patient_dashboard');
   }
}
 public function about_us(){

  return view("about_us");

 }
 public function doctors(){

  return view("doctors");
}
public function call_us(){

  return view("call_us");
}
public function contact(Request $request)
{
  $contact = new Contact();
  $contact->name = $request->name;
  $contact->email = $request->email;

  $contact->Title = $request->Title;

  $contact->message = $request->msg;

  if(Auth::check())
  {
    $contact->sender_id = auth()->user()->id;
  }

  $contact->save();
  return redirect()->back();
}













}
