<?php

namespace Modules\Product\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Product\Tests\Unit\ProductRepository;

class ProductController extends Controller
{

    protected $product;
    public function __construct(ProductRepository $product)
    {
        return $this->product = $product;
    }   /**
    * Display a listing of the resource.
    * @return Renderable
    */
   public function index()
   {
       return $this->product->index();
   }

   /**
    * Show the form for creating a new resource.
    * @return Renderable
    */
   public function create()
   {
       return $this->product->create();
   }

   /**
    * Store a newly created resource in storage.
    * @param Request $request
    * @return Renderable
    */
   public function store(Request $request, $id =null){
       if($id){
           return $this->product->store($id,$request);
       }else{
           return $this->product->store($id = null, $request);
       }

   }

   /**
    * Show the specified resource.
    * @param int $id
    * @return Renderable
    */
   public function status($id)
   {
       return $this->product->status($id);
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Renderable
    */
   public function edit($id)
   {
       return $this->product->edit($id);
   }

   /**
    * Show the form for editing the specified resource.
    * @param int $id
    * @return Renderable
    */
    public function show($id)
    {
        return $this->product->show($id);
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
       return $this->product->destroy($id);
   }
}
