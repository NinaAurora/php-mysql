<?php

namespace App\Http\Controllers;

use App\Models\LanguageModel;
use App\Libraries\View;
use App\Libraries\MySql;

class LanguageController extends Controller
{
    public function index()
        {
            $sql = "SELECT * FROM languages WHERE user_id=1";

            $result = MySql::query($sql);
            // dd($result);
            $languageModel = new LanguageModel();
       
            View::render('languages/index.view',[
                'languages' => $languageModel::all(),
            ]);
        
        }
}