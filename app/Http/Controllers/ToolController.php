<?php

namespace App\Http\Controllers;

use App\Models\ToolModel;
use App\Libraries\View;

class ToolController extends Controller
{
    public function index()
        {
            $toolModel = new ToolModel();
       
            View::render('tools/index.view',[
                'tools' => $toolModel::all(),
            ]);
        }
}