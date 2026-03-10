<?php

namespace App\Controllers\Admin;

use App\Models\ProjectModel;

class Projects extends BaseController
{
    public function index()
    {
        $model = new ProjectModel();
        $data['projects'] = $model->orderBy('sort_order', 'ASC')->findAll();
        return view('admin/projects/index', $data);
    }

    public function create()
    {
        return view('admin/projects/create');
    }

    public function store()
    {
        $model = new ProjectModel();
        $data = [
            'title'       => $this->request->getPost('title'),
            'category'    => $this->request->getPost('category'),
            'thumbnail'   => $this->request->getPost('thumbnail'),
            'video_url'   => $this->request->getPost('video_url'),
            'description' => $this->request->getPost('description'),
            'sort_order'  => $this->request->getPost('sort_order'),
        ];
        $model->save($data);
        return redirect()->to('/admin/projects')->with('success', 'Project created successfully');
    }

    public function edit($id)
    {
        $model = new ProjectModel();
        $data['project'] = $model->find($id);
        return view('admin/projects/edit', $data);
    }

    public function update($id)
    {
        $model = new ProjectModel();
        $data = [
            'id'          => $id,
            'title'       => $this->request->getPost('title'),
            'category'    => $this->request->getPost('category'),
            'thumbnail'   => $this->request->getPost('thumbnail'),
            'video_url'   => $this->request->getPost('video_url'),
            'description' => $this->request->getPost('description'),
            'sort_order'  => $this->request->getPost('sort_order'),
        ];
        $model->save($data);
        return redirect()->to('/admin/projects')->with('success', 'Project updated successfully');
    }

    public function delete($id)
    {
        $model = new ProjectModel();
        $model->delete($id);
        return redirect()->to('/admin/projects')->with('success', 'Project deleted successfully');
    }
}
