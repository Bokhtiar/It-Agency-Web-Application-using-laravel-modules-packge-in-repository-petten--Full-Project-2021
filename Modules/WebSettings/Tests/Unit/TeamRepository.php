<?php

namespace Modules\WebSettings\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\WebSettings\Entities\Team;
use Illuminate\Http\Request;
use Modules\WebSettings\Entities\About;

class TeamRepository extends TestCase
{
    public function index()
    {
            $about = About::find(1);
            return view('websettings::about.index',compact('about'));
    }//index function end


    public function valid($request){
        $validated = $request->validate([
            'name' => 'required|unique:teams|max:25',
            'designation' => 'required',
            'image' => 'required',
        ]);
    }//validation function end

    public function save(Team $team, Request $request){
        $team->name = $request->name;
        if(!$request->image){
            $team->image = $team->image;
        }else{
            $image = array();
            if ($request->hasFile('image')) {
                foreach ($request->image as $key => $photo) {
                    $path = $photo->store('uploads/photos');
                    array_push($image, $path);
                }
                $team->image = json_encode($image);
            }
        }
        $team->designation = $request->designation;
        $team->save();
    }//save function end

    public function redirect(){
            return redirect('about/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){
            $team = Team::find($id);
            $this->save($team, $request);
            return $this->redirect();
        }else{
            $this->valid($request);
            $team = new Team();
            $this->save($team, $request);
            return $this->redirect();
        }

    }//store end

    public function status($id){
        $team = Team::find($id);
        if($team->status==1){
            $team['status']= 0;
            $team->save();
            return $this->redirect();
        }else{
            $team['status']= 1;
            $team->save();
            return $this->redirect();
        }
    }//status function end

    public function edit($id){
            $team = Team::find($id);
            return view('team::edit', compact('team'));
    }//edit function end

    public function destroy($id){
            $dstroy = Team::find($id);
            $dstroy->delete();
            return $this->redirect();
    }
}
