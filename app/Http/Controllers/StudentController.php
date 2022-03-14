<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
// use Illuminate\Support\Facades\DB;

class StudentController extends Controller
{
    public function index()
    {

        $data = Data::where('name','bilal')->get();
        return view('list2',compact('data'));
    }
    public function delete($id)
    {
        $data = Data::find($id)->delete();
        return redirect('show');
    }
    public function edit($id)
    {
        $data = Data::find($id);
        return view('form2',compact('data'));
    }
    public function update(Request $req)
    {
        $id =  $req->id;
        $data = Data::find($id);
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = $req->password;
        $data->save();
        return redirect('show');
    }
    public function save()
    {
        $data = Data::insert([
            "name" => "bilal",
            "email"  => "bilal@gmail.com",
            "password"  => "bilal@2323"
        ]);
        if(!empty($data))
        {
            echo "data inserted successfully";
        }
        else
        {
            echo "data not inserted";
        }
    }
}
