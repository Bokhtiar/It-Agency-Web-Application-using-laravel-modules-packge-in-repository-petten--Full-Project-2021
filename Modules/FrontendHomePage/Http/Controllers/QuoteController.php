<?php

namespace Modules\FrontendHomePage\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Quote\Entities\Quote;

class QuoteController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        return view('frontendhomepage::quote.index');
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function save(Request $request, Quote $quote)
    {

    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        $quote = new Quote;

            $image = array();
            if ($request->hasFile('doc')) {
                foreach ($request->doc as $key => $photo) {
                    $path = $photo->store('uploads/file');
                    array_push($image, $path);
                }
                $quote->doc = json_encode($image);
            }


            $image = array();
            if ($request->hasFile('images')) {
                foreach ($request->images as $key => $photo) {
                    $path = $photo->store('uploads/photos');
                    array_push($image, $path);
                }
                $quote->image = json_encode($image);
            }

        $quote->name = $request->name;
        $quote->email = $request->email;
        $quote->phone = $request->phone;
        $quote->description = $request->description;
        $quote->project_name = $request->project_name;
        $quote->budget = $request->budget;
        $quote->start_date = $request->start_date;
        $quote->end_date = $request->end_date;
        $quote->save();
        return redirect('/');
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('frontendhomepage::show');
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('frontendhomepage::edit');
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
        //
    }
}
