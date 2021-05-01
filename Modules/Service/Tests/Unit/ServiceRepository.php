<?php

namespace Modules\Service\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Service\Entities\Service;
use Illuminate\Http\Request;

class ServiceRepository extends TestCase
{
    public function index()
    {
            return view('service::index');
    }//index function end

    public function create()
    {
            return view('service::create');
    }//create function end

    public function valid($request){
        $validated = $request->validate([
            'name' => 'required|unique:services|max:25',
            'description' => 'required',
        ]);
    }//validation function end

    public function save(Service $service, Request $request){
        $service->name = $request->name;
        $service->slug = $request->name;
        if(!$request->image){
            $service->image = $service->image;
        }else{
            $image = array();
            if ($request->hasFile('image')) {
                foreach ($request->image as $key => $photo) {
                    $path = $photo->store('uploads/photos');
                    array_push($image, $path);
                }
                $service->image = json_encode($image);
            }
        }
        $service->description = $request->description;
        $service->save();
    }//save function end

    public function redirect(){
            return redirect('service/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){
            $service = Service::find($id);
            $this->save($service, $request);
            return $this->redirect();
        }else{
            $this->valid($request);
            $service = new Service;
            $this->save($service, $request);
            return $this->redirect();
        }

    }//store end

    public function status($id){
        $service = Service::find($id);
        if($service->status==1){
            $service['status']= 0;
            $service->save();
            return $this->redirect();
        }else{
            $service['status']= 1;
            $service->save();
            return $this->redirect();
        }
    }//status function end

    public function edit($id){
            $service = Service::find($id);
            return view('service::edit', compact('service'));
    }//edit function end

    public function destroy($id){
            $dstroy = Service::find($id);
            $dstroy->delete();
            return $this->redirect();
    }
}


