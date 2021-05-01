<?php

namespace Modules\WebSettings\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\WebSettings\Tests\Unit\MenuRepository;

class MenuController extends Controller
{
    protected $menu;
    public function __construct(MenuRepository $menu)
    {
        return $this->menu = $menu;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return $this->menu->index();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return $this->menu->create();
    }




    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return $this->menu->show($id);
    }


    public function store(Request $request, $id =null){
        if($id){
            return $this->menu->store($id,$request);
        }else{
            return $this->menu->store($id = null, $request);
        }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function status($id)
    {
        return $this->menu->status($id);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return $this->menu->edit($id);
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
        return $this->menu->destroy($id);
    }
}
