<?php

namespace Modules\Category\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Category\Tests\Unit\CategoryRepository;

class CategoryController extends Controller
{
    protected $category;
    public function __construct(CategoryRepository $category)
    {
        return $this->category = $category;
    }   /**
    * Display a listing of the resource.
    * @return Renderable
    */
   public function index()
   {
       return $this->category->index();
   }

   /**
    * Show the form for creating a new resource.
    * @return Renderable
    */
   public function create()
   {
       return $this->category->create();
   }

   /**
    * Store a newly created resource in storage.
    * @param Request $request
    * @return Renderable
    */
   public function store(Request $request, $id =null){
       if($id){
           return $this->category->store($id,$request);
       }else{
           return $this->category->store($id = null, $request);
       }

   }

   /**
    * Show the specified resource.
    * @param int $id
    * @return Renderable
    */
   public function status($id)
   {
       return $this->category->status($id);
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Renderable
    */
   public function edit($id)
   {
       return $this->category->edit($id);
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
       return $this->category->destroy($id);
   }
}
