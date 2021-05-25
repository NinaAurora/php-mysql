<?php

$router->get('users', 'app/Http/Controllers/UserController.php@index');
$router->get('educations', 'app/Http/Controllers/EducationController.php@index');
$router->get('languages', 'app/Http/Controllers/LanguageController.php@index');
$router->get('skills', 'app/Http/Controllers/SkillController.php@index');
$router->get('tools', 'app/Http/Controllers/ToolController.php@index');
$router->get('', 'app/Http/Controllers/HomeController.php@index');

