<?php

namespace Modules\Permission\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Permission\Entities\Permission;
use Illuminate\Http\Request;

class PermissioinRepository extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function index()
    {
        return view('permission::index');
    }

    public function create(){
        return view('permission::create');
    }

    public function redirect(){
        return redirect('permission/');
    }//page redirect function

    public function save(Permission $permission, Request $request){
        $permission->role_id = $request->role_id;
        $permission->permission = $request->permission;
        $permission->save();
    }//store or update database table colum function end

    public function StoreOrUpdate($id = null, $request = []){
        if(isset($id)){
            $permission = Permission::find($id);
            $this->save($permission, $request);
            return $this->redirect();
        }else{
            $permission = new Permission;
            $this->save($permission, $request);
            return $this->redirect();
        }
    }//store or update end


    public function edit($id){
        $permission = Permission::find($id);
        return view('permission::edit', compact('permission'));
    }

    public function destroy($id){
        $destroy = Permission::find($id);
        $destroy->delete();
        return $this->redirect();
    }


}
