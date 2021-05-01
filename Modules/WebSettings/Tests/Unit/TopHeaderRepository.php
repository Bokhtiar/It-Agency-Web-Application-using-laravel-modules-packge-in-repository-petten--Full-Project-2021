<?php

namespace Modules\WebSettings\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Modules\WebSettings\Entities\TopHeader;

class TopHeaderRepository extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function index()
    {
        $edit = TopHeader::find(1);
        return view('websettings::topheader.index',compact('edit'));
    }

    public function pageRedirect(){
        return redirect('topheader/');
    }

    public function save(TopHeader $topHeader, Request $request){
        $topHeader->company_name = $request->company_name;
        $topHeader->company_address = $request->company_address;
        $topHeader->email = $request->email;
        $topHeader->phone = $request->phone;
        $topHeader->twitter = $request->twitter;
        $topHeader->facebook = $request->facebook;
        $topHeader->instagram = $request->instagram;
        $topHeader->skype = $request->skype;
        $topHeader->linkdin = $request->linkdin;

    }

    public function StoreOrCreate($id = null, $request = []){
        if(isset($id)){
            $topHeader = TopHeader::find($id);
            $this->save($topHeader, $request);
            $topHeader->save();
            return $this->pageRedirect();
        }else{
            $topHeader = New TopHeader;
            $this->save($topHeader, $request);
            $topHeader->save();
            return $this->pageRedirect();
        }
    }


    public function edit($id)
    {
        $edit = TopHeader::find($id);
        return view('websettings::topheader.edit', compact('edit'));
    }

    public function destroy($id){
        $del = TopHeader::find($id);
        $del->delete();
        return $this->pageRedirect();
    }
}
