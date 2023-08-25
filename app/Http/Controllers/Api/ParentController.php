<?php

namespace App\Http\Controllers\Api;

use App\Models\Parents;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParentController extends Controller
{
    public function index(Request $request){
        $parents = Parents::latest()->paginate();
        
        return response()->json(['ret' => 0, 'data' => $parents]);
    }

    public function store(Request $request){
        dump(auth()->user());
        dd($request);
    }
}