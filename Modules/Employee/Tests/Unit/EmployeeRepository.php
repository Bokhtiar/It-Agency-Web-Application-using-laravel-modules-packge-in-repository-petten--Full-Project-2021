<?php

namespace Modules\Employee\Tests\Unit;

use App\Models\User;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Modules\Employee\Entities\Employee;
use Illuminate\Support\Facades\Hash;

class EmployeeRepository extends TestCase
{
    public function index()
    {
            return view('employee::index');
    }//index function end

    public function create()
    {
            return view('employee::create');
    }//create function end

    public function valid($request){
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'password' => ['required'],

        ]);
    }//validation function end

    public function redirect(){
            return redirect('employee/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){
            $employee = User::find($id);
            $employee->name = $request->name;
            if(!$request->email){
                $request->email = $employee->email;
            }else{
                $employee->email = $request->email;
            }

            $employee->role_id = $request->role_id;
            $employee->password = Hash::make($request->password);
            $employee->save();
            return $this->redirect();
        }else{
            $this->valid($request);
            $employee = new User;
            $employee->name = $request->name;
            $employee->email = $request->email;
            $employee->role_id = $request->role_id;
            $employee->password = Hash::make($request->password);
            $employee->save();
            return $this->redirect();
        }

    }//store end



    public function edit($id){
            $user = User::find($id);
            return view('employee::edit', compact('user'));
    }//edit function end

    public function destroy($id){
            $dstroy = User::find($id);
            $dstroy->delete();
            return $this->redirect();
    }
}
