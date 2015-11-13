<?php

namespace CodeDelivery\Http\Controllers;

use CodeDelivery\Http\Requests;

class CategoriesController extends Controller
{
    public function index()
    {
        $nome = "Bruno Castro";
        $linguagens = [
            'PHP',
            'JAVA',
            'PYTHON'
        ];
        return view('admin.categories.index',compact('nome','linguagens'));
    }
}
