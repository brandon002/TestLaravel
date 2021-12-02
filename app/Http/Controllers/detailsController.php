<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class detailsController extends Controller
{
    
    public function index(){
    $author = DB::table('details')->get();
    return view ('resources/views/home.blade.php')->with('author',$author); 
    }
    
}
