<?php

namespace Modules\WebSettings\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\WebSettings\Tests\Unit\TeamRepository;

class TeamController extends Controller
{
    protected $team;
    public function __construct(TeamRepository $team)
    {
        return $this->team = $team;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return $this->team->index();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request, $id =null){
        if($id){
            return $this->team->store($id,$request);
        }else{
            return $this->team->store($id = null, $request);
        }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function status($id)
    {
        return $this->team->status($id);
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return $this->team->edit($id);
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
        return $this->team->destroy($id);
    }
}
