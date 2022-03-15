<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;
// use Illuminate\Support\Facades\DB;
class StudentController extends Controller
{
    public function index()
    {
        $data = Data::get();
        return view('list',compact('data'));
    }
    public function delete($id)
    {
        $data = Data::find($id)->delete();
        return redirect('show');
    }
    public function edit($id)
    {
        $data = Data::find($id);
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

    public function Register(Request $req)
    {
        $id = $req->id;
        $data =new Data;
        $data->name = $req->name;
        $data->email = $req->email;
        $data->password = $req->password;
        // dd($data);
        $data->save();
        if($data)
        {
            echo "Register successfully";
        }
        else{
            echo "Register fail";
        }
    }
    public function accessData()
    {
        $data = Data::find(1);
        return $data;
    }
    public function muteData()
    {
        $data =new Data;
        $data->name ='bilal';
        $data->email ='bila@gmail.com';
        $data->city ='Meerut';
        $data->save();

        if($data)
        {
            echo "data inserted";
        }
        else{
            echo "data not inserted";
        }

    }
}
