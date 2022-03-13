<?php

namespace App\Controllers;

class Mahasiswa extends BaseController
{
    public function index()
    {
        $mahasiswaModel = new \App\Models\mahasiswaModel();
        $mahasiswa = $mahasiswaModel->findAll();

        return view('mahasiswa/index', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function create()
    {
        helper('form');

        if ($this->request->getMethod() == 'post') {
            $mahasiswa = [
                'nama' => $this->request->getPost('nama'),
                'nim' => $this->request->getPost('nim'),
                'alamat' => $this->request->getPost('alamat'),
                'telepon' => $this->request->getPost('telepon'),
            ];

            $mahasiswaModel = new \App\Models\mahasiswaModel();
            if ($mahasiswaModel->insert($mahasiswa)) {
                session()->setFlashdata('success', 'Data berhasil disimpan');
                return redirect()->to('/mahasiswa/index');
            }
        }

        return view('mahasiswa/create');
    }

    public function update($id)
    {
        helper('form');

        $mahasiswaModel = new \App\Models\mahasiswaModel();
        $mahasiswa = $mahasiswaModel->find($id);
        if (empty($mahasiswa)) {
            session()->setFlashdata('error', 'Data tidak ditemukan');
            return redirect()->to('/mahasiswa/index');
        }

        if ($this->request->getMethod() == 'post') {
            $mahasiswa = [
                'nama' => $this->request->getPost('nama'),
                'nip' => $this->request->getPost('nim'),
                'alamat' => $this->request->getPost('alamat'),
                'telepon' => $this->request->getPost('telepon'),
            ];

            if ($mahasiswaModel->update($id, $mahasiswa)) {
                session()->setFlashdata('success', 'Data berhasil disimpan');
                return redirect()->to('/mahasiswa/index');
            }
        }

        return view('mahasiswa/update', [
            'mahasiswa' => $mahasiswa
        ]);
    }

    public function delete($id)
    {
        helper('form');

        $mahasiswaModel = new \App\Models\mahasiswaModel();
        if ($mahasiswaModel->delete($id)) {
            session()->setFlashdata('success', 'Data berhasil dihapus');
            return redirect()->to('/mahasiswa/index');
        }
    }
}
