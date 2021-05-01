<?php

namespace Modules\Slider\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Slider\Entities\Slider;
use Illuminate\Http\Request;

class SliderRepository extends TestCase
{
    public function index()
    {
            return view('slider::index');
    }//index function end

    public function create()
    {
            return view('slider::create');
    }//create function end

    public function valid($request){
        $validated = $request->validate([
            'name' => 'required|unique:sliders|max:25',
            'description' => 'required',
        ]);
    }//validation function end

    public function save(Slider $slider, Request $request){
        $slider->name = $request->name;
        if(!$request->image){
            $slider->image = $slider->image;
        }else{
            $image = array();
            if ($request->hasFile('image')) {
                foreach ($request->image as $key => $photo) {
                    $path = $photo->store('uploads/photos');
                    array_push($image, $path);
                }
                $slider->image = json_encode($image);
            }
        }
        $slider->description = $request->description;
        $slider->save();
    }//save function end

    public function redirect(){
            return redirect('slider/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){
            $slider = Slider::find($id);
            $this->save($slider, $request);
            return $this->redirect();
        }else{
            $this->valid($request);
            $slider = new Slider;
            $this->save($slider, $request);
            return $this->redirect();
        }

    }//store end

    public function status($id){
        $slider = Slider::find($id);
        if($slider->status==1){
            $slider['status']= 0;
            $slider->save();
            return $this->redirect();
        }else{
            $slider['status']= 1;
            $slider->save();
            return $this->redirect();
        }
    }//status function end

    public function edit($id){
            $slider = Slider::find($id);
            return view('slider::edit', compact('slider'));
    }//edit function end

    public function destroy($id){
            $dstroy = Slider::find($id);
            $dstroy->delete();
            return $this->redirect();
    }
}
