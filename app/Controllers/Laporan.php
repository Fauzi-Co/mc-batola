<?php

namespace App\Controllers;

use App\Models\RinCodeModel;

use App\Models\rin1bModel;

use App\Models\cIntelModel;
use App\Models\cPidumModel;

use App\Models\CCodeModel;

use App\Models\UISetModel;


class Laporan extends BaseController
{
    protected $dataModel;
    public function __construct()
    {
        $this->CCodeMod = new CCodeModel();
        $this->cIntelModel = new cIntelModel();
        $this->cPidumModel = new cPidumModel();

        $this->UISetModel  = new UISetModel();
    }

    public function capaian($all = '')
    {
        $c_code = explode('+', $this->request->getVar('rintype'));

        if (implode(' ', $c_code)) {
            $rint = $c_code[0];
            $kosta =  'c' . $c_code[1] . 'Model';
        } else {
            $rint  = 'Intel';
            $kosta =  'cIntelModel';
        }

        $keyword = [
            '2021-01',
            '2021-02',
            '2021-03',
            '2021-04',
            '2021-05',
            '2021-06',
            '2021-07',
            '2021-08',
            '2021-09',
            '2021-10',
            '2021-11',
            '2021-12'
        ];


        if ($keyword) {
            $keywordsec = $this->$kosta->countRin($keyword);
        } else {
            $keywordsec = 0;
        }

        $data = [
            'title' => 'Data | Laporan',
            'head_t' => 'Laporan',
            'rint'   => $rint,
            'rincoda' => $keywordsec,
            'c_hasil' => $this->$kosta->getData()->findAll(),
            'rinCo' => $this->CCodeMod->getData(),
            'ui_mode' => $this->UISetModel->getData()
        ];
        if ($all == 'semua') {
            $vs = 'all';
        } else {
            $vs = 'main';
        };
        return view('laporan/' . $vs, $data);
    }

    public function data($rin_code = 'a')
    {

        $kosta =  $rin_code . 'Model';
        $data = [
            'title' => 'Data | ' . $rin_code,
            'head_t' => $rin_code,
            'data_h' => $this->$kosta->getData()
        ];

        return view('dataRin/' . $rin_code, $data);
    }

    public function tambah()
    {
        $rin_code = $this->request->getVar('code');

        $data = [
            'title' => $rin_code . ' | Rin+',
            'head_t' => 'Tambah | ' . $rin_code,
            'code_rin' => $rin_code,
            'data' => 'null',
            'cont_dis' => 1
        ];

        return view('dataRin/tambah/' . $rin_code, $data);
    }

    public function save()
    {
        $codekos = $this->request->getVar('codekos');
        $kosta =  $codekos . 'Model'; // rinModel
        $this->$kosta->save(
            $this->request->getVar()
        );
        return redirect()->to('/rin/data/' . $codekos);
    }

    public function delete($codekos, $id)
    {
        $kosta =  $codekos . 'Model';

        $this->$kosta->delete($id);

        return redirect()->to('/rin/data/' . $codekos);
    }

    public function edit($codekos, $id)
    {
        $kosta =  $codekos . 'Model'; // rinModel
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

        $kosta =  $codekos . 'Model'; // rinModel
        $this->$kosta->save(
            $this->request->getVar()
        );

        return redirect()->to('/rin/data/' . $codekos);
    }
}
