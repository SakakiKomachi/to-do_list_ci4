<?php

namespace App\Controllers;

use App\Models\TodoModel;
use CodeIgniter\Controller;

class TodoController extends BaseController
{
    public function index()
    {
        $todoModel = new TodoModel();
        $data['todos'] = $todoModel->findAll();

        return view('todo/index', $data);
    }

    public function create()
    {
        echo view('todo/create');
    }

    public function store()
    {
        $todoModel = new TodoModel();
        $todoModel->insert([
            'task' => $this->request->getVar('task'),
            'completed' => 0
        ]);

        return redirect()->to('/todo');
    }

    public function delete($id)
    {
        $todoModel = new TodoModel();
        $todoModel->delete($id);

        return redirect()->to('/todo');
    }

    public function complete($id)
    {
        $todoModel = new TodoModel();
        $todoModel->update($id, ['completed' => 1]);

        return redirect()->to('/todo');
    }
}
