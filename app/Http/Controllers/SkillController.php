<?php

namespace App\Http\Controllers;

use App\Models\SkillModel;
use App\Libraries\View;
use App\Libraries\MySql;
use PDO;

class SkillController extends Controller
{

    public function index() 
    {
        $skillModel = new SkillModel();

        $sql = "SELECT * FROM skills INNER JOIN rating ON skills.rating_id = rating.id ";
        $res = MySql::query($sql)->fetchAll(PDO::FETCH_ASSOC);
// dd($res);
        View::render('skills/index.view', [
            'skills' => $res,
        ]);
    }
}



