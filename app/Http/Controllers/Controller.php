<?php

namespace App\Http\Controllers;

use App\Models\Message;
use App\Models\User;
use GuzzleHttp\Psr7\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
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
        
    }
    public function search(Request $request)
    {
        $users = User::where('name', 'LIKE' , '%'.$request->search.'%')
        ->get();
        return view('chat.dashboard2',compact('users'));
    }
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
