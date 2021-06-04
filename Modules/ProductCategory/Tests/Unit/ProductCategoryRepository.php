<?php

namespace Modules\ProductCategory\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Modules\ProductCategory\Entities\ProductCategory;

class ProductCategoryRepository extends TestCase
{
    public function index()
    {
        return view('productcategory::index');
    }//index function end
    public function valid($request){
        $validated = $request->validate([
            'name' => 'required|unique:product_categories|max:25',
        ]);
    }//validation function end

    public function save(ProductCategory $ProductCategory, Request $request){
        $ProductCategory->name = $request->name;
        $ProductCategory->save();
    }//save function end

    public function redirect(){
            return redirect('productcategory/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){
            $ProductCategory = ProductCategory::find($id);
            $this->save($ProductCategory, $request);
            return $this->redirect();
        }else{
            $this->valid($request);
            $ProductCategory = new ProductCategory;
            $this->save($ProductCategory, $request);
            return $this->redirect();
        }

    }//store end

    public function status($id){
        $category = ProductCategory::find($id);
        if($category->status==1){
            $category['status']= 0;
            $category->save();
            return $this->redirect();
        }else{
            $category['status']= 1;
            $category->save();
            return $this->redirect();
        }
    }//status function end


    public function destroy($id){
            $dstroy = ProductCategory::find($id);
            $dstroy->delete();
            return $this->redirect();
    }
}
