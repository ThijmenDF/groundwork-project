<?php

namespace App\Controllers;

use App\Models\Setting;
use App\Requests\TestRequest;
use Groundwork\Controller;
use Groundwork\Response\View;

class IndexController extends Controller {

    public function index() : View
    {
        $hello = Setting::where('name', 'hello')->first();

        return $hello;
    }

    public function test() : View
    {
        return view('test/form');
    }

    public function testPost(TestRequest $data)
    {
        $session = session();

        dd($data->validated(), $data->failed(), $session->all());
    }
}