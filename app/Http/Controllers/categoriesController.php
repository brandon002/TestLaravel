<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class categoriesController extends Controller
{
    public function index(){
        $category = DB::table('categories')->get();
        return view ('resources/views/home.blade.php')->with('category',$category); 
        }
}
