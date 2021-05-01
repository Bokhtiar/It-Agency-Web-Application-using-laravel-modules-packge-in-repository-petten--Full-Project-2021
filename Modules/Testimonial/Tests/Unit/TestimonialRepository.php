<?php

namespace Modules\Testimonial\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Testimonial\Entities\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialRepository extends TestCase
{

    public function index()
    {
            $testimonial = Testimonial::find(1);
            return view('testimonial::index',compact('testimonial'));
    }//index function end

    public function create()
    {
            return view('testimonial::create');
    }//create function end

    public function valid($request){
        $validated = $request->validate([
            'name' => 'required|max:25',
            'description' => 'required',
            'designation' => 'required',
        ]);
    }//validation function end

    public function save(Testimonial $testimonial, Request $request){
        $testimonial->name = $request->name;
        if(!$request->image){
            $testimonial->image = $testimonial->image;
        }else{
            $image = array();
            if ($request->hasFile('image')) {
                foreach ($request->image as $key => $photo) {
                    $path = $photo->store('uploads/photos');
                    array_push($image, $path);
                }
                $testimonial->image = json_encode($image);
            }
        }
        $testimonial->description = $request->description;
        $testimonial->designation = $request->designation;
        $testimonial->user_id = Auth::id();
        $testimonial->save();
    }//save function end

    public function redirect(){
            return redirect('testimonial/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){
            $testimonial = Testimonial::find($id);
            $this->save($testimonial, $request);
            return $this->redirect();
        }else{
            $this->valid($request);
            $testimonial = new Testimonial;
            $this->save($testimonial, $request);
            return $this->redirect();
        }

    }//store end

    public function status($id){
        $testimonial = Testimonial::find($id);
        if($testimonial->status==1){
            $testimonial['status']= 0;
            $testimonial->save();
            return $this->redirect();
        }else{
            $testimonial['status']= 1;
            $testimonial->save();
            return $this->redirect();
        }
    }//status function end

    public function edit($id){
            $testimonial = Testimonial::find($id);
            return view('testimonial::edit', compact('testimonial'));
    }//edit function end

    public function destroy($id){
            $dstroy = Testimonial::find($id);
            $dstroy->delete();
            return $this->redirect();
    }
}
