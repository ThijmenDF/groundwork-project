<?php

namespace App\Controllers;

use App\Models\Setting;
use App\Requests\TestRequest;
use Groundwork\Controller;
use Groundwork\Request\Request;
use Groundwork\Response\View;

class IndexController extends Controller {

    public function index()
    {
        $hello = Setting::where('name', 'hello')->first();

        return $hello;
    }

    public function test() : View
    {
        return view('test/form');
    }

    public function testPost(TestRequest $input, Request $request)
    {
        dd($request, $request->path(), $request->method(), $request->ip(), $input->validated());
    }
}