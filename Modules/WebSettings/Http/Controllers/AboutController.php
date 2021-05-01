<?php

namespace Modules\WebSettings\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\WebSettings\Entities\About;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $about = About::find(1);
        return view('websettings::about.index',compact('about'));
    }



    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request, $id)
    {
        $update = About::find($id);
        if(!$request->image){
            $update->image = $update->image;
        }else{
            $image = array();
            if ($request->hasFile('image')) {
                foreach ($request->image as $key => $photo) {
                    $path = $photo->store('uploads/photos');
                    array_push($image, $path);
                }
                $update->image = json_encode($image);
            }
        }
        $update->title = $request->title;
        $update->description = $request->description;
        $update->save();
        return back();
    }

}
