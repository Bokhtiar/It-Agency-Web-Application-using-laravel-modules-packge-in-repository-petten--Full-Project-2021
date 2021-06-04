<?php

namespace Modules\ProductCategory\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ProductCategory\Tests\Unit\ProductCategoryRepository;

class ProductCategoryController extends Controller
{
    protected $productCategory;
    public function __construct(ProductCategoryRepository $productCategory)
    {
        return $this->productCategory = $productCategory;
    }
     /**
    * Display a listing of the resource.
    * @return Renderable
    */
   public function index()
   {
       return $this->productCategory->index();
   } 

   /**
    * Show the form for creating a new resource.
    * @return Renderable
    */
   public function create()
   {
       return $this->productCategory->create();
   }

   /**
    * Store a newly created resource in storage.
    * @param Request $request
    * @return Renderable
    */
   public function store(Request $request, $id =null){
       if($id){
           return $this->productCategory->store($id,$request);
       }else{
           return $this->productCategory->store($id = null, $request);
       }

   }

   /**
    * Show the specified resource.
    * @param int $id
    * @return Renderable
    */
   public function status($id)
   {
       return $this->productCategory->status($id);
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Renderable
    */
   public function edit($id)
   {
       return $this->productCategory->edit($id);
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
       return $this->productCategory->destroy($id);
   }
}
