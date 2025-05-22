<?php

namespace App\Controllers;

use App\Models\MessageModel;

class Messages extends BaseController
{
    public function index()
    {
        $model = new MessageModel();
        $data['messages'] = $model->findAll();

        return view('messages/index', $data);
    }

    public function create()
    {
        return view('messages/create');
    }

    public function store()
    {
        $model = new MessageModel();
        $model->save([
            'title'     => $this->request->getPost('title'),
            'content'   => $this->request->getPost('content'),
            'send_date' => $this->request->getPost('send_date')
        ]);

        return redirect()->to('/messages')->with('status', 'Message Created Successfully!');
    }

    public function edit($id)
    {
        $model = new MessageModel();
        $data['message'] = $model->find($id);

        return view('messages/edit', $data);
    }

    public function update($id)
    {
        $model = new MessageModel();
        $model->update($id, [
            'title'     => $this->request->getPost('title'),
            'content'   => $this->request->getPost('content'),
            'send_date' => $this->request->getPost('send_date')
        ]);

        return redirect()->to('/messages')->with('status', 'Message Updated Successfully!');
    }

    public function delete($id)
    {
        $model = new MessageModel();
        $model->delete($id);

        return redirect()->to('/messages')->with('status', 'Message Deleted Successfully!');
    }
}
