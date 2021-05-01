<?php

namespace Modules\WebSettings\Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Modules\WebSettings\Entities\Social;

class SocialRepository extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function index()
    {
        $social = Social::find(1);
        return view('websettings::socialinfo.index', compact('social'));
    }

    public function store($request, $id)
    {
        $social = Social::find($id);
        $social->phone = $request->phone;
        $social->email = $request->email;
        $social->facebook = $request->facebook;
        $social->twitter = $request->twitter;
        $social->linkdin = $request->linkdin;
        $social->google = $request->google;
        $social->instagram = $request->instagram;
        $social->save();
        return redirect('social/');
    }
}
