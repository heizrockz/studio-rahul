<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use App\Models\SettingModel;

class Home extends BaseController
{
    public function index(): string
    {
        $projectModel = new ProjectModel();
        $settingModel = new SettingModel();

        $data = [
            'title'    => 'AMBER STUDIO | Creative Cinematic Storytelling',
            'projects' => $projectModel->orderBy('sort_order', 'ASC')->findAll(),
            'settings' => $settingModel->getKeyValuePairs(),
        ];

        return view('home', $data);
    }
}
