<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Handsontable1Controller extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = [];
        return view('handsontable1',$data);
    }

}
