<?php

namespace App\Http\Controllers;

use App\Models\post;
use App\Models\comment;
use App\Models\Protection;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function index($id)
    {

    }

    public function create()
    {

    }


    public function store(Request $request)
    {

    }


    public function show($id)
    {

    }


    public function edit($id)
    {

    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy(Request $request)
    {
        $comments = comment::findOrFail($request->id)->delete();
        session()->flash('delete', 'تم حذف المنشور  بنجاح ');
        return redirect()->back();
        }
            public function bulkDelete()
            {
                foreach (json_decode(request()->record_ids) as $recordId) {

                    $admin = comment::FindOrFail($recordId);
                    $this->delete($admin);

                }
                session()->flash('delete', __('تم الحذف بنجاح'));
                return redirect()->back();
            }
            private function delete(comment $protect)
            {
                $protect->delete();

            }

}
