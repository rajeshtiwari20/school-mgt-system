<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ParantController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$student = DB::table('students')->get();// fetching data from the users table
        $breadcrumb = 'Parent List';
       return view('admin.parent.index', compact('breadcrumb'));
        //return view('admin.student.index');
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $breadcrumb = 'Add Parent';
        return view('admin.parent.create', compact('breadcrumb'));
    }
}
