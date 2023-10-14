<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller

{ public function index()
    {
        // Truy van du lieu 
        $categories = Category::all();
        // Đổ ra view
        return view(view:'categories.index', compact( var_name:'categories'));
    }
}
