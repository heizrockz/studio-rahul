<?php

namespace App\Controllers\Admin;

use App\Models\ServiceModel;

class Services extends BaseController
{
    public function index()
    {
        $model = new ServiceModel();
        $data['services'] = $model->findAll();
        $data['title'] = 'Manage Services';
        return view('admin/services/index', $data);
    }

    public function create()
    {
        return view('admin/services/create', ['title' => 'Add Service']);
    }

    public function store()
    {
        $model = new ServiceModel();
        $model->save($this->request->getPost());
        return redirect()->to('/admin/services')->with('success', 'Service added successfully');
    }

    public function edit($id)
    {
        $model = new ServiceModel();
        $data['service'] = $model->find($id);
        $data['title'] = 'Edit Service';
        return view('admin/services/edit', $data);
    }

    public function update($id)
    {
        $model = new ServiceModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('/admin/services')->with('success', 'Service updated successfully');
    }

    public function delete($id)
    {
        $model = new ServiceModel();
        $model->delete($id);
        return redirect()->to('/admin/services')->with('success', 'Service deleted successfully');
    }
}
