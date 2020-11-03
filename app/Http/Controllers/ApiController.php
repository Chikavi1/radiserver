<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class ApiController extends Controller
{
    public function getBlogs(){
        
        return response()->json(Blog::all());
    }
}
