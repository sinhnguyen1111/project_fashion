<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        return view('backend.products.index');
    }
    public function create()
    {
        return view('backend.products.create');
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
