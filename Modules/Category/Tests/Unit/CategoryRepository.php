<?php

namespace Modules\Category\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Category\Entities\Category;
use Illuminate\Http\Request;

class CategoryRepository extends TestCase
{
    public function index()
    {
            return view('category::index');
    }//index function end

    public function valid($request){
        $validated = $request->validate([
            'name' => 'required|unique:categories|max:25',
        ]);
    }//validation function end

    public function save(Category $category, Request $request){
        $category->position = $request->position;
        $category->name = $request->name;
        $category->save();
    }//save function end

    public function redirect(){
            return redirect('category/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){
            $category = Category::find($id);
            $this->save($category, $request);
            return $this->redirect();
        }else{
            $this->valid($request);
            $category = new Category;
            $this->save($category, $request);
            return $this->redirect();
        }

    }//store end

    public function status($id){
        $category = Category::find($id);
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
            $dstroy = Category::find($id);
            $dstroy->delete();
            return $this->redirect();
    }
}
