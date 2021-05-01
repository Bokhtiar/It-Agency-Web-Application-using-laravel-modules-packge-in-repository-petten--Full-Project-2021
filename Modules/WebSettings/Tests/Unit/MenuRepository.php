<?php

namespace Modules\WebSettings\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Modules\WebSettings\Entities\Menu;

class MenuRepository extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */



    public function index(){
        return view('websettings::navbar_index');
    }

    public function create(){
        return view('websettings::navbar_create');
    }

    public function show($id){
        $menu = Menu::find($id);
        return view('websettings::navbar_show', compact('menu'));
    }




    public function valid($request){
        $validated = $request->validate([
            'name' => 'required|unique:menus|max:25',
            'description' => 'required',
            'position' => 'required',
        ]);
    }//validation function end

    public function save(Menu $menu, Request $request){
        $menu->name = $request->name;
        $slug = Str::slug($request->name);
        $menu->slug = $slug;
        $menu->link = $slug;
        $menu->description = $request->description;
        $menu->sl = 1;
        $menu->footerSl = $request->footerSl;
        $menu->footerCulUnderMenu = $request->footerCulUnderMenu;
        $menu->position = $request->position;
        $menu->save();
    }//save function end

    public function redirect(){
            return redirect('navbar/index');
    }//redirect function end

    public function store($id=null, $request){
        if($id){
            $menu = Menu::find($id);
            $this->save($menu, $request);
            return $this->redirect();
        }else{
            $this->valid($request);
            $menu = new Menu;
            $this->save($menu, $request);
            return $this->redirect();
        }

    }//store end

    public function status($id){
        $menu = Menu::find($id);
        if($menu->status==1){
            $menu['status']= 0;
            $menu->save();
            return $this->redirect();
        }else{
            $menu['status']= 1;
            $menu->save();
            return $this->redirect();
        }
    }//status function end

    public function edit($id){
            $menu = menu::find($id);
            return view('websettings::navbar_edit', compact('menu'));
    }//edit function end

    public function destroy($id){
            $dstroy = menu::find($id);
            $dstroy->delete();
            return $this->redirect();
    }

}
