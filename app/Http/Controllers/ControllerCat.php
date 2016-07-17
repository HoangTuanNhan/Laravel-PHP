<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Categorys;

class ControllerCat extends Controller {

    public function getCat() {
        $cat = Categorys::all();
        return view('admin.cat.list', compact('cat'));
    }

    public function getAdd() {
        return view('admin.cat.add');
    }

    public function getpostAdd(Request $request) {
       
        $file = $request->file('avatar');
        $file_name = $file->getClientOriginalName();
        $pieces = explode(".", $file_name);
        $ext = end($pieces);
        $file_name = "foody-" . time() . "." . $ext;
        $user = new Categorys();

        $user->name = $request->input('name');
        $user->images = $file_name;

        if ($user->save()) {
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file_name);
            $msg = "Add successfuly";
            return redirect()->route('listCat', compact('msg'));
        } else {
            $msg = "Erorr in adding";
            return redirect()->route('listCat', compact('msg'));
        }
    }

    public function editCat($id) {
        $user = Categorys::findOrFail($id)->toArray();
        return view('admin.cat.edit', compact('user', 'id'));
    }

    public function editPostCat(Request $request, $id) {
        $user = Categorys::find($id);
        $file = $request->file('avatar');
        $file_name = $file->getClientOriginalName();
        $pieces = explode(".", $file_name);
        $ext = end($pieces);
        $file_name = "foody-" . time() . "." . $ext;
        $user->name = $request->input('name');
        $user->images = $file_name;
        if ($user->save()) {
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file_name);
            $msg = "edit successfuly";
            return redirect()->route('listCat', compact('msg'));
        } else {
            $msg = "Erorr in editing";
            return redirect()->route('listCat', compact('msg'));
        }
    }

    public function deletePage($id) {
        $data = Categorys::find($id);
        $data->delete($id);
        return redirect()->route('listCat');
    }

}
