<?php

namespace App\Http\Controllers;

use App\services;
use App\User;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function index(Request $request)
    {
        $items = services::all();
        return view('pages.home'
        ,[
            'items' => $items
        ]
    );
    }

    public function create()
    {
        $user = User::all();
        return view('pages.create', [
            'user' => $user
        ]);
    }

    public function store(Request $request)
    {
       $request->validate([
            'divisi' => 'required',
            'keluhan' => 'required',
        ]);
        services::create($request->all());

        return redirect()->route('services.index')
                        ->with('success','Product created successfully.');
    }

    public function show()
    {
        //
    }

    public function edit()
    {
        //
    }

    public function update()
    {
        //
    }

    public function destroy()
    {
        //
    }
}
