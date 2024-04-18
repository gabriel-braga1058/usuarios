<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        return view('admin.dashboard');
    }

    public function inicio()
    {
        return view('welcome');
    }


    public function create()
    {
        return view('admin.create');
    }

    public function store(Request $request)

    {
        dd($request->nome);
        HomeController::create($request->all());


        return redirect()->route('admin.show')->with('suceess', 'Conta cadastrada com sucesso');
    }

    public function show()
    {
        return view('admin/show');
    }

    public function edit()
    {
    }

    public function update()
    {
    }

    public function destroy()
    {
    }
}
