<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

use App\Models\RinCodeModel;

use App\Models\cIntelModel;

use App\Models\CCodeModel;

use App\Models\UISetModel;


class UISet extends BaseController
{
    protected $rin1rModel;

    public function __construct()
    {
        $this->dataPegawai = new PegawaiModel();

        $this->cCodeModel = new CCodeModel();

        $this->cIntelModel = new cIntelModel();
        $this->UISetModel  = new UISetModel();
    }

    public function setMode()
    {
        // $link = $this->request->getVar();
        $mode = $this->request->getVar('code');
        $link = $this->request->getVar('link');
        // dd($link);

        $data = [
            'id' => 2,
            'code' => $mode
        ];
        $this->UISetModel->save($data);
        return redirect()->to($link);
    }

    public function data($c_code = 'a')
    {
        $curretPage =  $this->request->getVar('page') ? $this->request->getVar('page') : 1;
        $kosta = 'c' . $c_code . 'Model';

        $tgl_fil = $this->request->getVar('tgl_fil');

        if ($tgl_fil) {
            $tgl_fil_sec = $this->$kosta->search($tgl_fil, $c_code);
        } else {
            $tgl_fil_sec = $this->$kosta->getData();
        }

        $data = [
            'title' => $c_code,
            'head_t' => $c_code,
            'data_h' => $tgl_fil_sec->paginate(5),
            'pager'  => $this->$kosta->pager,
            'curretPage' => $curretPage
        ];

        return view('capaian/' . $c_code, $data);
    }

    public function tambah()
    {
        $c_code = $this->request->getVar('code');

        $data = [
            'title' => $c_code,
            'head_t' => 'Tambah | Capaian ' . $c_code,
            'code_rin' => $c_code,
            'data' => 'null',
            'cont_dis' => 1,
            'dataU' => $this->dataPegawai->getData()
        ];

        return view('capaian/tambah/' . $c_code, $data);
    }

    public function save()
    {

        $this->UISetModel->save(
            $this->request->getVar()
        );
        return redirect()->to('/');
    }

    public function delete($codekos, $id)
    {
        $kosta =  $codekos . 'Model';

        $this->$kosta->delete($id);

        return redirect()->to('/rin/data/' . $codekos);
    }

    public function edit($codekos, $id)
    {
        $kosta =  $codekos . 'Model';
        $data = [
            'title' => $codekos . ' | Rin+',
            'head_t' => 'Edit | ' . $codekos,
            'code_rin' => $codekos,
            'code_rinid' => $id,
            'data' => $this->$kosta->getData($id),
            'cont_dis' => 2
        ];

        return view('dataRin/tambah/' . $codekos, $data);
    }

    public function update()
    {
        $codekos = $this->request->getVar('codekos');

        $kosta =  $codekos . 'Model';
        $this->$kosta->save(
            $this->request->getVar()
        );

        return redirect()->to('/rin/data/' . $codekos);
    }

    public function cetak()
    {
        $c_code = $this->request->getVar('code');
        $bs = $this->request->getVar();
        $gos = $bs['rows_1'];

        $data = [
            'c_code' => $c_code,
            'data' => $bs,
            'time' => $gos
        ];

        return view('dataRin/cetak/' . $c_code, $data);
    }
}
