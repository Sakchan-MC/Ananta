<?php

namespace App\Http\Controllers;

use App\Content;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ContentController extends Controller
{
    public function index()
    {
        $content = Content::all();
        return view('admin.category.index', compact('content'));
    }
    public function create(Request $request)
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
        ]);
        $content = new Content;
        $content->name = $request->name;
        $content->detail = $request->detail;
        $content->save();
        return redirect('admin/content');

        // dd($request);
    }

    public function edit($content_id)
    {
        $content = Content::find($content_id);

        return view('admin.category.edit', compact('content'));
    }
    public function update(Request $request, $content_id)
    {
        Content::updateOrCreate(
            [
                'id' => $content_id
            ],
            [
                'name' => $request->name,
                'detail' => $request->detail,
            ]
        );

        return redirect('admin/content');
    }
    public function delete($content_id)
    {
        Content::destroy($content_id);
        return redirect('/admin/content');
    }
}
