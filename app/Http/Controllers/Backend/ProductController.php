<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index()
    {
        // dd($user);
        $product = DB::table('products')->paginate(5); 
        return view('backend.products.index')->with([
            'products' => $product
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
