<?php

namespace App\Controllers\Admin;

use App\Models\TestimonialModel;

class Testimonials extends BaseController
{
    public function index()
    {
        $model = new TestimonialModel();
        $data['testimonials'] = $model->findAll();
        $data['title'] = 'Manage Testimonials';
        return view('admin/testimonials/index', $data);
    }

    public function create()
    {
        return view('admin/testimonials/create', ['title' => 'Add Testimonial']);
    }

    public function store()
    {
        $model = new TestimonialModel();
        $model->save($this->request->getPost());
        return redirect()->to('/admin/testimonials')->with('success', 'Testimonial added successfully');
    }

    public function edit($id)
    {
        $model = new TestimonialModel();
        $data['testimonial'] = $model->find($id);
        $data['title'] = 'Edit Testimonial';
        return view('admin/testimonials/edit', $data);
    }

    public function update($id)
    {
        $model = new TestimonialModel();
        $model->update($id, $this->request->getPost());
        return redirect()->to('/admin/testimonials')->with('success', 'Testimonial updated successfully');
    }

    public function delete($id)
    {
        $model = new TestimonialModel();
        $model->delete($id);
        return redirect()->to('/admin/testimonials')->with('success', 'Testimonial deleted successfully');
    }
}
