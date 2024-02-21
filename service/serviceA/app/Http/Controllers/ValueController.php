<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ValueController extends Controller
{
    public function get_value(){
        $data = ['a', 'b'];
        return response()->json($data);
    }
}
