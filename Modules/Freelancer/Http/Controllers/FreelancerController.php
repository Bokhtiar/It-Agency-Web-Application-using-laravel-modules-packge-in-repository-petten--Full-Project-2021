<?php

namespace Modules\Freelancer\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Freelancer\Entities\Freelancer;
use Illuminate\Support\Str;

class FreelancerController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $freelancers = Freelancer::all();
        return view('freelancer::index', compact('freelancers'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('freelancer::create');
    }


    public function save(Freelancer $freelancer, Request $request)
    {
        $freelancer->name = $request->name;
        $freelancer->email = $request->email;
        $freelancer->phone = $request->phone;

        if($request->image){

            $image=$request->file('image');
            if ($image){
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
                if ($success) {
                $freelancer['image']=$image_url;

                 }
             }
        }else{
            $freelancer['image'] = $freelancer->image;
        }

        $freelancer->save();
    }


    public function store($id = null, Request $request)
    {
        if(isset($id)){
            $freelancer = Freelancer::find($id);
            $this->save($freelancer, $request);
            return redirect('freelancer');
        }else{
            $freelancer = new Freelancer;
            $this->save($freelancer, $request);
            return redirect('freelancer');
        }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('freelancer::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {

        $edit = Freelancer::find($id);
        return view('freelancer::create', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function delete($id)
    {
        Freelancer::find($id)->delete();
        return back();
    }
}
