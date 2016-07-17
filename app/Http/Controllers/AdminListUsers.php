<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\User;


class AdminListUsers extends Controller {

    public function getList() {
        $data = User::all();
        return view('admin.user.list', compact('data'));
    }

    public function getAdd() {
        return view('admin.user.add');
    }

    public function postAdd(Request $request) {
     
        $file = $request->file('avatar');
        $file_name = $file->getClientOriginalName();
        $pieces = explode(".", $file_name);
        $ext = end($pieces);
        $file_name = "foody-" . time() . "." . $ext;
        $user = new User();
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->name = $request->input('fullname');
        $user->avatar = $file_name;
        $user->level = $request->input('role');
        if ($user->save()) {
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file_name);
            $msg = "Add successfuly";
            return redirect()->route('list', compact('msg'));
        } else {
            $msg = "Erorr in adding";
            return redirect()->route('list', compact('msg'));
        }
    }

    public function getEdit($id) {
        $user = User::findOrFail($id)->toArray();
        return view('admin.user.edit', compact('user', 'id'));
    }

    public function postEdit(Request $request, $id) {
        $user = User::find($id);
        $file = $request->file('avatar');
        if ($file != null) {
            $file_name = $file->getClientOriginalName();
            $pieces = explode(".", $file_name);
            $ext = end($pieces);
            $file_name = "foody-" . time() . "." . $ext;
            $user->avatar = $file_name;
        }
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));
        $user->name = $request->input('fullname');

        $user->level = $request->input('role');
        if ($user->save()) {
            $destinationPath = 'uploads';
            $file->move($destinationPath, $file_name);
            $msg = "Add successfuly";
            return redirect()->route('list', compact('msg'));
        } else {
            $msg = "Erorr in adding";
            return redirect()->route('list', compact('msg'));
        }
    }
     public function deleteUser($id) {
        $data = User::find($id);
        $data->delete($id);
        return redirect()->route('list');
    }

}
