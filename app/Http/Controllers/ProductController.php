<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class ProductController extends Controller
{
    //
    public function index()
    {
        return view('admin.product.home');
    }

    public function create()
    {
        return view('admin.product.create');
    }

    public function store(Request $request)
    
    {
        
        ProductController::create($request->all());

        return redirect(route('admin.products'));
    }

    public function show()
    {
        return view('admin.product.show');
    }
}
