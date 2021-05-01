<?php

namespace Modules\Permission\Http\Controllers;

use App\Traits\schedule;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Permission\Tests\Unit\PermissioinRepository;

class PermissionController extends Controller
{
    use schedule;
    protected $permission;
    public function __construct(PermissioinRepository $permission)
    {
        return $this->permission = $permission;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return $this->permission->index();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return $this->permission->create();
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function StoreOrUpdate(Request $request, $id = null)
    {
        if(isset($id)){
            return $this->permission->StoreOrUpdate($id, $request);
        }else{
            return $this->permission->StoreOrUpdate($id = null, $request);
        }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('permission::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return $this->permission->edit($id);
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
        return $this->permission->destroy($id);
    }
}
