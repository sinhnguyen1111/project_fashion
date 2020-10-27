<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CategoryController extends Controller
{
    public function index()
    {
        // dd($user);
        $category = DB::table('categories')->paginate(3); 
        return view('backend.categories.index')->with([
            'categories' => $category
        ]);
           
        // return view('backend.users.index');
    }
    public function create()
    {
        // return view('backend.users.create');
    }
    public function store(Request $request)
    {
     
    }

   
    public function show($id)
    {
       
    }

   
    public function edit($id)
    {
     
    }

 
    public function update(Request $request, $id)
    {
       
    }
}
