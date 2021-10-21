<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;


class CController extends Controller
{
    public function index(Request $request)
    {
        return view('index', ['txt' => '']);
    }
    public function post(ClientRequest $request)
    {

            //public function post(ClientRequest $request)
        //$validate_rule = [
            //'name' => 'required|string',
            //'role' => 'required',
            //'email' => 'required|email',
            //'age' => 'numeric|between:0,150',
            //'registered_at' => 'date|nullable',
            //'building' => '',
            //'comment' => 'required|size:120|string',
        //];
        //$this->validate($request, $validate_rule);
        return view('index', ['txt' => 'ご意見いただきありがとうございました']);
    }
    public function verror()
    {
        return view('verror');
    }
}
