<?php

namespace App\Controllers;

use App\Models\PegawaiModel;
use App\Models\UISetModel;

class Pengaturan extends BaseController
{
    public function __construct()
    {
        $this->pegawaiData = new PegawaiModel();
        $this->UISetModel  = new UISetModel();
    }

    public function index()
    {

        $data = [
            'title' => 'Pengaturan | Rin+',
            'data' => $this->pegawaiData->getData(),
            'ui_mode' => $this->UISetModel->getData()
        ];

        return view('pengaturan/index', $data);
    }

    public function beta()
    {

        $data = [
            'title' => 'Pengaturan | Rin+',
            'data' => $this->pegawaiData->getData(),
            'ui_mode' => $this->UISetModel->getData()
        ];

        return view('pengaturan/beta', $data);
    }

    public function detail($id)
    {

        $data = [
            'title' => 'Detail',
            'data'  => $this->pegawaiData->getData($id),
            'ui_mode' => $this->UISetModel->getData()
        ];

        return view('pengaturan/detail', $data);
    }

    public function tambah()
    {
        $data = [
            'heat_t' => 'Tambah Peg | Rin +'
        ];

        return view('pengaturan', $data);
    }

    public function save()
    {

        $this->pegawaiData->save(
            $this->request->getVar()
        );

        return redirect()->to('/pengaturan');
    }

    public function edit($id)
    {
        $data = [
            'title' => 'Edit',
            'data' => $this->pegawaiData->getId($id),
            'ui_mode' => $this->UISetModel->getData()
        ];

        return view('/pengaturan/edit', $data);
    }

    public function update()
    {
        $this->pegawaiData->save(
            $this->request->getVar()
        );
    }

    public function delete($id)
    {
        $this->pegawaiData->delete($id);
        redirect()->to('/pengaturan');
    }
}
