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
        $request->validate([
            'imagem' => 'nullable|mimes:png,jpg,jpeg,webp',
        ]);

        if($request->has('imagem')) {
            $file = $request->file('imagem');
            $extension =$file->getClientOriginalExtension();

            $filename = time().'.'.$extension;
            $path = 'uploads/fotos';
            $file->move($path, $filename);

            HomeController::create([
                'imagem' => $path.$filename,
            ]);
;        }
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
