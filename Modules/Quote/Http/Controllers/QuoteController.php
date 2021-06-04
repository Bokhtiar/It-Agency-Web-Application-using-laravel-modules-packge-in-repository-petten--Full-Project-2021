<?php

namespace Modules\Quote\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Quote\Entities\Quote;

class QuoteController extends Controller
{
  
    public function index()
    {
        return view('quote::index');
    }


    public function status($id)
    {
        $portfolio = Quote::find($id);
        if($portfolio->status==1){
            $portfolio['status']= 0;
            $portfolio->save();
            return back();
        }else{
            $portfolio['status']= 1;
            $portfolio->save();
            return back();
        }
    }


    public function show($id)
    {
        return view('quote::show');
    }

    public function edit($id)
    {
        return view('quote::edit');
    }

    public function destroy($id)
    {
        $dstroy = Quote::find($id);
            $dstroy->delete();
            return back();
    }
}
