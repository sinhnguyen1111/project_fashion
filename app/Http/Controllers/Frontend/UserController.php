<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        return view('backend.users.index');
    }
    public function create()
    {
        return view('backend.users.create');
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
