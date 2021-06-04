<?php

namespace Modules\FrontendHomePage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Freelancer\Entities\Freelancer;
use Modules\Portfolio\Entities\Portfolio;

class PortfolioController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('frontendhomepage::portfolio.index');
    }


    public function freelancer()
    {
        $freelancers =Freelancer::all();
        return view('frontendhomepage::freelancer.index', compact('freelancers'));
    }
    public function show($slug)
    {
        $portfolio = Portfolio::where('slug', $slug)->first();
        return view('frontendhomepage::portfolio.show',compact('portfolio'));
    }

}
