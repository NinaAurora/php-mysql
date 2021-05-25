<?php

namespace App\Http\Controllers;

use App\Models\LanguageModel;
use App\Libraries\View;
use App\Libraries\MySql;

class LanguageController extends Controller
{
    public function index()
        {
            $languageModel = new LanguageModel();
       
            View::render('languages/index.view',[
                'languages' => $languageModel::all(),
            ]);
        
        }
}