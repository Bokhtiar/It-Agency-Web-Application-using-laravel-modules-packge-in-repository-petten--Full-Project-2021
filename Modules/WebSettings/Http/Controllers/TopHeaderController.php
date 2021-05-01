<?php

namespace Modules\WebSettings\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\WebSettings\Tests\Unit\TopHeaderRepository;

class TopHeaderController extends Controller
{
    protected $topheader;
    public function __construct(TopHeaderRepository $topheader)
    {
        return $this->topheader = $topheader;
    }
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
    
        return $this->topheader->index();
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('websettings::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request, $id = null)
    {
        if(isset($id)){
            return $this->topheader->StoreOrCreate($id, $request);
        }else{
            return $this->topheader->StoreOrCreate($id = null, $request);
        }

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('websettings::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return $this->topheader->edit($id);
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
        return $this->topheader->destroy($id);
    }
}
