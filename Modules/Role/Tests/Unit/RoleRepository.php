<?php

namespace Modules\Role\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Role\Entities\Role;
use Illuminate\Http\Request;

use function PHPUnit\Framework\isNull;

class RoleRepository extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function index()
    {
        return view('role::index');
    }


    public function save(Role $role, Request $request){
        $role->name = $request->name;
        $role->save();
    }


    public function StoreOrUpdate( $id = null, $request = []){
        if(isset($id)) {
            $role = Role::find($id);
            $this->save($role, $request);
            return redirect('role/');
        }else{
            $role = new Role;
            $this->save($role, $request);
            return back();
        }
    }

    public function edit($id){
        $edit = Role::find($id);
        return view('role::edit', compact('edit'));
    }


    public function destroy($id){
        $destroy = Role::find($id);
        $destroy->delete();
        return redirect('role/');
    }


}
