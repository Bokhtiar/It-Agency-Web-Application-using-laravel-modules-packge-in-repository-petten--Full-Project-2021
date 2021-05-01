<?php

namespace Modules\Contact\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Contact\Entities\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('contact::index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function status($id)
    {
        $portfolio = Contact::find($id);
        if($portfolio->status==1){
            $portfolio['status']= 0;
            $portfolio->save();
            return back();
        }else{
            $portfolio['status']= 1;
            $portfolio->save();
            return back();
        }
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        $destroy = Contact::find($id);
        $destroy->delete();
        return back();
    }
}
