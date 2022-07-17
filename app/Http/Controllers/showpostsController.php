<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\comment;
use App\Models\Protection;
use Illuminate\Http\Request;

class showpostsController extends Controller
{

    public function index()
    {
        $posts=post::all();
        return view('Admin.Posts',compact('posts'));
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
            $posts =post::find($id);
            return view('Admin.showposts',compact('posts'));

    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request){

        $comments = comment::findOrFail($request->post_id);
        $comments->update([
                'body' => $request->body,
                'created_at' => $request->created_at,
        ]);
        return redirect()->back();
    }


    public function destroy(Request $request ){
        $posts = post::findOrFail($request->id)->delete();
        session()->flash('delete', 'تم حذف المنشور  بنجاح ');
        return redirect()->route('showposts.index');
    }

    public function search10(Request $request ){
        $search=$request->search;
         $posts=post::where('body' ,'Like','%'.$search."%")->get();
         return view("Admin.Posts",compact('posts'));
        }
        public function bulkDelete()
            {
                foreach (json_decode(request()->record_ids) as $recordId) {

                    $admin = post::FindOrFail($recordId);
                    $this->delete($admin);

                }
                session()->flash('delete', __('تم الحذف بنجاح'));
                return redirect()->route('showposts.index');
            }
            private function delete(post $protect)
            {
                $protect->delete();

            }


}
