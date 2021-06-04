<?php

namespace Modules\Product\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Modules\Product\Entities\Product;

class ProductRepository extends TestCase
{
    public function index()
    {
            return view('product::index');
    }//index function end

    public function create()
    {
            return view('product::createOrUpdate');
    }//create function end



    public function save(Product $product, Request $request){

        $product->name = $request->name;
        $product->category_id = $request->category_id;
        $product->short_des = $request->short_des;
        $product->software_version = $request->software_version;
        $product->software_framword = $request->software_framword;
        $product->price = $request->price;
        $product->url = $request->url;

        if($request->image){

            $image=$request->file('image');
            if ($image){
            $image_name=Str::random(20);
            $ext=strtolower($image->getClientOriginalExtension());
            $image_full_name=$image_name.'.'.$ext;
            $upload_path='image/';
            $image_url=$upload_path.$image_full_name;
            $success=$image->move($upload_path,$image_full_name);
                if ($success) {
                $product['image']=$image_url;

                 }
             }
        }else{
            $product['image'] = $product->image;
        }

        $product->languse = $request->languse;
        $product->save();
    }//save function end

    public function redirect(){
            return redirect('product/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){
            $product = Product::find($id);
            $this->save($product, $request);
            return $this->redirect();
        }else{
            $product = new Product;
            $this->save($product, $request);
            return $this->redirect();
        }

    }//store end

    public function status($id){
        $product = Product::find($id);
        if($product->status==1){
            $product['status']= 0;
            $product->save();
            return $this->redirect();
        }else{
            $product['status']= 1;
            $product->save();
            return $this->redirect();
        }
    }//status function end


    public function edit($id){
            $edit = Product::find($id);
            return view('product::createOrUpdate', compact('edit'));

    }

    public function show($id){
        $detail = Product::find($id);
        return view('product::detail', compact('detail'));

}

    public function destroy($id){
        $destroy = Product::find($id);
        $destroy->delete();
        return $this->redirect();
}
}
