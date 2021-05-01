<?php

namespace Modules\Role\Http\Controllers;

use App\Traits\schedule;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Role\Tests\Unit\RoleRepository;

use function PHPUnit\Framework\isNull;

class RoleController extends Controller
{
    use schedule;
    protected $role;
    public function __construct(RoleRepository $role)
    {
        return $this->role = $role;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return $this->role->index();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('role::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function StoreOrUpdate(Request $request, $id = null)
    {
        //$collection = $request->except(['_token','_method']);

        if( isset( $id ) )
        {
            return $this->role->StoreOrUpdate($id, $request);
        }
        else
        {
            return $this->role->StoreOrUpdate($id = null, $request);
        }


    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('role::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return $this->role->edit($id);
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
    public function destroy($id)
    {
        return $this->role->destroy($id);
    }
}
