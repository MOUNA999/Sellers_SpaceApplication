<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

use App\Models\Gerant;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Hash;
class GerantAdminController extends Controller
{
    function index(Request $request){

        $data = DB::table('gerant')->get();

        if (is_bool($data)) {
            return view('admin.login.index')->with('message', 'Failed to retrieve data');
        }

        $data = $data->toArray();

       return view('admin.gerant.index', compact('data'));
   }

}