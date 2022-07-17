<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Protection;
use Illuminate\Http\Request;

class reservationController extends Controller
{
    public function index()
    {
        $reservations = Book::all();
        return view('Admin.reservations',compact('reservations'));
    }
    public function search4(Request $request ){
        $search=$request->search;
        $reservations=Book::join('users','users.id','=','books.doctor_id')->where('patient_name' ,'Like','%'.$search."%")->orWhere('appointment' ,'Like','%'.$search."%")->orWhere('name' ,'Like','%'.$search."%") ->get();
        return view('admin.reservations',compact('reservations'));
        }


}
