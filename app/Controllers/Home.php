<?php

namespace App\Controllers;

use App\Models\ProjectModel;
use App\Models\SettingModel;

class Home extends BaseController
{
    public function index(): string
    {
        $projectModel = new \App\Models\ProjectModel();
        $settingModel = new \App\Models\SettingModel();
        $serviceModel = new \App\Models\ServiceModel();
        $testimonialModel = new \App\Models\TestimonialModel();

        $data = [
            'projects'     => $projectModel->where('is_featured', 1)->orderBy('sort_order', 'ASC')->findAll(),
            'services'     => $serviceModel->findAll(),
            'testimonials' => $testimonialModel->findAll(),
            'settings'     => $settingModel->first(),
            'title'        => 'LOGRAVA STUDIO | Creative Cinematic Storytelling'
        ];

        return view('home', $data);
    }
}
