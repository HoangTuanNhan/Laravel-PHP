<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Pages;
use App\Http\Requests\RequestPages;

class AdminListPages extends Controller {

    public function getListPage() {
        $data = Pages::all();
        return view('admin.page.list', compact('data'));
    }

    public function deletePage($id) {
        $data = Pages::find($id);
        $data->delete($id);
        return redirect()->route('listpage');
    }

    public function editPage($id) {
        $data = Pages::findOrFail($id)->toArray();
        return view('admin.page.edit', compact('data', 'id'));
    }

    public function editPost(RequestPages $request, $id) {
//        $page=Pages::find($id);
//        $page->name=$request->input('txtName');
//        $page->content=$request->input('txtGhiChu');
//        $page->save();
//        return redirect()->route('admin.pages.list');
        return("dsf");
    }

    public function edit(Request $request, $id) {
        $page = Pages::find($id);
        $page->name = $request->input('txtName');
        $page->content = $request->input('txtGhiChu');
        $page->save();
        return redirect()->route('listpage');
//        return("asdf");
    }

    public function getAdd() {
        return view('admin.page.add');
    }

    public function getpostAdd(Request $request) {
        $this->validate($request, [
           
            'name' => 'required|max:30',
            'content' => 'required|max:60'
            
        ]);
        $page =new Pages();
        $page->name = $request->input('txtName');
        $page->content = $request->input('txtGhiChu');
        $page->save();
        return redirect()->route('listpage');
    }

}
