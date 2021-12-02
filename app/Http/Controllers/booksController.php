<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class booksController extends Controller
{
    public function index(){
        $title = DB::table('books')->get();
        return view ('resources/views/home.blade.php')->with('title',$title); 
        }
}
