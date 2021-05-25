<?php

namespace App\Http\Controllers;

use App\Models\SkillModel;
use App\Libraries\View;

class SkillController extends Controller
{
    public function index()
        {
            $skillModel = new SkillModel();
       
            View::render('skills/index.view',[
                'skills' => $skillModel::all(),
            ]);
        }
}