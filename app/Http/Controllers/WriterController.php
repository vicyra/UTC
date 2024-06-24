<?php

namespace App\Http\Controllers;

use App\Models\Writer;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class WriterController extends Controller
{
    public function index(){
        $writers = Writer::get();
        $categories = Category::all();
        return view('writer', compact('writers', 'categories'));
    }

    public function detail($id){
        $writer = Writer::findOrFail($id);
        $categories = Category::all();
        return view('detail-writer', compact('writer', 'categories'));
    }
}
