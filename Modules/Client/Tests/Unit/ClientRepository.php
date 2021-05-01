<?php

namespace Modules\Client\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Client\Entities\Client;
use Illuminate\Http\Request;

class ClientRepository extends TestCase
{
    public function index()
    {
            return view('client::index');
    }//index function end

    public function create()
    {
            return view('client::create');
    }//create function end

    public function valid($request){
        $validated = $request->validate([
            'name' => 'required|unique:clients|max:25',
            'description' => 'required',
        ]);
    }//validation function end

    public function save(Client $client, Request $request){
        $client->name = $request->name;
        if(!$request->image){
            $client->image = $client->image;
        }else{
            $image = array();
            if ($request->hasFile('image')) {
                foreach ($request->image as $key => $photo) {
                    $path = $photo->store('uploads/photos');
                    array_push($image, $path);
                }
                $client->image = json_encode($image);
            }
        }
        $client->description = $request->description;
        $client->save();
    }//save function end

    public function redirect(){
            return redirect('client/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){
            $client = Client::find($id);
            $this->save($client, $request);
            return $this->redirect();
        }else{
            $this->valid($request);
            $client = new Client;
            $this->save($client, $request);
            return $this->redirect();
        }

    }//store end

    public function status($id){
        $client = Client::find($id);
        if($client->status==1){
            $client['status']= 0;
            $client->save();
            return $this->redirect();
        }else{
            $client['status']= 1;
            $client->save();
            return $this->redirect();
        }
    }//status function end

    public function edit($id){
            $client = Client::find($id);
            return view('client::edit', compact('client'));
    }//edit function end

    public function destroy($id){
            $dstroy = Client::find($id);
            $dstroy->delete();
            return $this->redirect();
    }
}
