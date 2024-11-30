<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function loginHandle(Request $request)
    {
        $method = $request->method();
        if ($method == 'GET') {
            return $this->loginIndex();
        } elseif ($method == 'POST') {
            return $this->loginProcess($request);
        }
    }

    public function registerHandle(Request $request)
    {
        $method = $request->method();
        if ($method == 'GET') {
            return $this->registerIndex();
        } elseif ($method == 'POST') {
            return $this->registerProcess($request);
        }
    }

    public function loginIndex()
    {
        return view('login');
    }

    public function loginProcess() {}

    public function registerIndex()
    {
        $data = [];

        $data['provinces'] = DB::table('province')
            ->get()
            ->toArray();

        return view('register', $data);
    }

    public function getMunicipality($province)
    {
        $municipality = DB::table('municipality')
            ->where('province_id', $province)
            ->orderByRaw('municipality_name ASC')
            ->pluck('municipality_name', 'id')
            ->all();

        return response()->json($municipality);
    }

    public function registerProcess(){

    }

    public function logout()
    {
        return redirect('/login');
    }
}
