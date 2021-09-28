<?php

namespace App\Http\Controllers;

use App\services;
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
        return view('pages.create');
    }

    public function store(Request $request)
    {
       $request->validate([
            'nama' => 'required',
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
