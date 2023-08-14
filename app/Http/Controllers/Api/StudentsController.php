<?php

namespace App\Http\Controllers\Api;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{
    public function index(){
        return response()->json(['ret' => 0, 'data' => ['name' => 'student1']]);
    }
}