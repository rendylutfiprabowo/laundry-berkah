<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pemasukan;

class PemasukanController extends BaseController
{
    public function index()
    {
        $pemasukanModel = new Pemasukan();
        $pemasukan = $pemasukanModel->findAll();

        $data = [
            'title' => 'Pemasukan',
            'pemasukan' => $pemasukan
        ];

        return view('templates/header', $data)
            . view('pemasukan/list', $data)
            . view('templates/footer');
    }

    public function create()
    {
        $data = [
            'title' => 'Create Pemasukan'
        ];

        return view('templates/header', $data)
            . view('pemasukan/create')
            . view('templates/footer');
    }

    public function store()
    {
        if(!$this->validate([
            'jumlah_pemasukan' => 'required|string',
        ])) {
            return redirect()->to('/create');
        }
        $pemasukanModel = new Pemasukan();
        $data = [
            'jumlah_pemasukan' => $this->request->getPost('jumlah_pemasukan'),
        ];
        $pemasukanModel->save($data);

        return redirect()->to('/pemasukan');
    }

    public function edit($id)
    {
        $pemasukanModel = new Pemasukan();
        $pemasukan = $pemasukanModel->find($id);

        $data = [
            'title' => 'Edit Pemasukan'
        ];

        return view('templates/header', $data)
            . view('pemasukan/edit', $pemasukan)
            . view('templates/footer');
    }

    public function update($id)
    {
        if(!$this->validate([
            'jumlah_pemasukan' => 'required|string',
        ])) {
            return redirect()->to('/edit'.$id);
        }
        $pemasukanModel = new Pemasukan();
        $data = [
            'jumlah_pemasukan' => $this->request->getVar('jumlah_pemasukan'),
        ];
        $pemasukanModel->update($id, $data);

        return redirect()->to('/pemasukan');
    }

    public function delete($id)
    {
        $pemasukanModel = new Pemasukan();
        $pemasukanModel->delete($id);
        return redirect()->to('/pemasukan');
    }
}
