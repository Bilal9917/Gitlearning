<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
// use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function index()
    {
        $data = Employe::get();
        return view('list',compact('data'));
    }
    public function delete($id)
    {
        $data = Employe::find($id)->delete();
        return redirect('show');
    }
    public function edit($id)
    {
        $data = Employe::find($id);
        return view('form',compact('data'));
    }
    public function update(Request $req)
    {
        $id =  $req->id;
        $data = Employe::find($id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->city = $req->city;
        $data->save();
        return redirect('show');
    }
    // public function relation()
    // {
    //     $data = Employe::find(1)->companyData;
    //     return $data;
    // }
}
