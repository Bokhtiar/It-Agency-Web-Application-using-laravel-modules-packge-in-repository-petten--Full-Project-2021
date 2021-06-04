<?php

namespace Modules\FrontendHomePage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class TestimonialController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function all_testimonial()
    {
        return view('frontendhomepage::testimonial.index');
    }

}
