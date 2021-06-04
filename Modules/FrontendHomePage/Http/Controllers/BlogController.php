<?php

namespace Modules\FrontendHomePage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Blog\Entities\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('frontendhomepage::blog.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function detail($slug)
    {
        $blog = Blog::where('slug',$slug)->first();
        return view('frontendhomepage::blog.detail',compact('blog'));
    }

}
