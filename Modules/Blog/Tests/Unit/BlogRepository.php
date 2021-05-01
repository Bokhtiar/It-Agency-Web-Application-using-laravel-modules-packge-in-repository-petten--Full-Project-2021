<?php

namespace Modules\Blog\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\Blog\Entities\Blog;
use Illuminate\Http\Request;

class BlogRepository extends TestCase
{
    public function index()
    {
            return view('blog::index');
    }//index function end

    public function create()
    {
            return view('blog::create');
    }//create function end

    public function valid($request){
        $validated = $request->validate([
            'title' => 'required|max:255',
            'short_des' => 'required',
            'body' => 'required',
            'images' => 'required',
            'cover_image' => 'required',
        ]);
    }//validation function end
    public function save(Blog $blog, Request $request){
        $blog->title = $request->title;
        $blog->category_id = $request->category_id;
        $blog->slug = $request->title;
        $blog->short_des = $request->short_des;
        $blog->body = $request->body;
        $blog->posted_by = 1;

        if(!$request->cover_image){
            $blog->cover_image = $blog->cover_image;
        }else{
            $image = array();
            if ($request->hasFile('cover_image')) {
                foreach ($request->cover_image as $key => $photo) {
                    $path = $photo->store('uploads/photos');
                    array_push($image, $path);
                }
                $blog->cover_image = json_encode($image);
            }
        }//cover image
        if(!$request->images){
            $blog->images = $blog->images;
        }else{
            $image = array();
            if ($request->hasFile('images')) {
                foreach ($request->images as $key => $photo) {
                    $path = $photo->store('uploads/photos');
                    array_push($image, $path);
                }
                $blog->images = json_encode($image);
            }
        }//multiple image
        $blog->save();
    }//save function end

    public function redirect(){
            return redirect('blog/');
    }//redirect function end

    public function store($id=null, $request){
        if($id){

            $blog = Blog::find($id);
            $this->save($blog, $request);
            return $this->redirect();
        }else{
            $this->valid($request);
            $blog = new Blog;
            $this->save($blog, $request);
            return $this->redirect();
        }

    }//store end

    public function status($id){
        $blog = Blog::find($id);
        if($blog->status==1){
            $blog['status']= 0;
            $blog->save();
            return $this->redirect();
        }else{
            $blog['status']= 1;
            $blog->save();
            return $this->redirect();
        }
    }//status function end

    public function edit($id){
            $blog = Blog::find($id);
            return view('blog::edit', compact('blog'));
    }//edit function end

    public function destroy($id){
            $dstroy = Blog::find($id);
            $dstroy->delete();
            return $this->redirect();
    }
}
