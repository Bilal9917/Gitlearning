<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employe;
// use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
       public function relation()
    {
        $data = Employe::find(4)->companyData;
        return $data;
    }
}
