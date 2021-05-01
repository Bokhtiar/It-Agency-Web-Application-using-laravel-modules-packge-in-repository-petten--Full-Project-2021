<?php

namespace Modules\Portfolio\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Portfolio\Entities\Portfolio;
use Illuminate\Http\Request;

class PortfolioRepository extends TestCase
{
    public function index()
    {
            return view('portfolio::index');
    }//index function end

    public function create()
    {
            return view('portfolio::create');
    }//create function end

    public function valid($request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'description' => 'required',
            'company_name' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'url' => 'required',
            'images' => 'required',
            'cover_image' => 'required',
        ]);
    }//validation function end
    public function save(Portfolio $portfolio, Request $request){
        $portfolio->title = $request->title;
        $portfolio->category_id = $request->category_id;
        $portfolio->slug = $request->title;
        $portfolio->description = $request->description;
        $portfolio->company_name = $request->company_name;
        $portfolio->start_date = $request->start_date;
        $portfolio->end_date = $request->end_date;
        $portfolio->url = $request->url;

        if(!$request->cover_image){
            $portfolio->cover_image = $portfolio->cover_image;
        }else{
            $image = array();
            if ($request->hasFile('cover_image')) {
                foreach ($request->cover_image as $key => $photo) {
                    $path = $photo->store('uploads/photos');
                    array_push($image, $path);
                }
                $portfolio->cover_image = json_encode($image);
            }
        }//cover image
        if(!$request->images){
            $portfolio->images = $portfolio->images;
        }else{
            $image = array();
            if ($request->hasFile('images')) {
                foreach ($request->images as $key => $photo) {
                    $path = $photo->store('uploads/photos');
                    array_push($image, $path);
                }
                $portfolio->images = json_encode($image);
            }
        }//multiple image
        $portfolio->save();
    }//save function end

    public function redirect(){
            return redirect('portfolio/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){

            $portfolio = Portfolio::find($id);
            $this->save($portfolio, $request);
            return $this->redirect();
        }else{
            $this->valid($request);
            $portfolio = new Portfolio;
            $this->save($portfolio, $request);
            return $this->redirect();
        }

    }//store end

    public function status($id){
        $portfolio = Portfolio::find($id);
        if($portfolio->status==1){
            $portfolio['status']= 0;
            $portfolio->save();
            return $this->redirect();
        }else{
            $portfolio['status']= 1;
            $portfolio->save();
            return $this->redirect();
        }
    }//status function end

    public function edit($id){
            $portfolio = Portfolio::find($id);
            return view('portfolio::edit', compact('portfolio'));
    }//edit function end

    public function destroy($id){
            $dstroy = Portfolio::find($id);
            $dstroy->delete();
            return $this->redirect();
    }
}
