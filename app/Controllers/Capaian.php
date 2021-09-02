<?php

namespace App\Controllers;

use App\Models\PegawaiModel;

use App\Models\RinCodeModel;

use App\Models\CCodeModel;

use App\Models\UISetModel;

use App\Models\cIntelModel;

use App\Models\cPembinaanModel;

use App\Models\cPidumModel;

use App\Models\cPidsusModel;

use App\Models\cDatunModel;

use App\Models\cBBModel;



use function PHPUnit\Framework\returnSelf;

class Capaian extends BaseController
{
    protected $rin1rModel;

    public function __construct()
    {
        $this->dataPegawai = new PegawaiModel();

        $this->cCodeModel = new CCodeModel();

        $this->cIntelModel = new cIntelModel();

        $this->cPembinaanModel = new cPembinaanModel();

        $this->cPidumModel = new cPidumModel();

        $this->cPidsusModel = new cPidsusModel();

        $this->cDatunModel = new cDatunModel();

        $this->cBbModel = new cBBModel();

        $this->UISetModel  = new UISetModel();
    }

    public function laporan()
    {

        $data = [
            'title' => 'Data | Laporan',
            'head_t' => 'Laporan',
            'c_intel' => $this->cIntelModel->getData()->findAll(),
            'c_pembinaan' => $this->cPembinaanModel->getData()->findAll(),
            'c_pidum' => $this->cPidumModel->getData()->findAll(),
            'c_pidsus' => $this->cPidsusModel->getData()->findAll(),
            'c_datun' => $this->cDatunModel->getData()->findAll(),
            'c_bb' => $this->cBbModel->getData()->findAll(),
            'ui_mode' => $this->UISetModel->getData()
        ];

        $href = '/laporan/capaian/all';

        return view($href, $data);
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
            'curretPage' => $curretPage,
            'ui_mode' => $this->UISetModel->getData(),

        ];

        return view('capaian/' . $c_code, $data);
    }

    public function tambah($c_code)
    {
        // $c_code = $this->request->getVar('code');
        $bar = ucfirst(strtolower($c_code));
        $kosta =  'c' . $bar . 'Model';
        $data = [
            'title' => $c_code,
            'head_t' => 'Tambah | Capaian ',
            'code_rin' => $c_code,
            'data' => 'null',
            'cont_dis' => 1,
            'data' => $this->dataPegawai->getData(),
            'c_hasil' => $this->$kosta->getData()->findAll(),
            'ui_mode' => $this->UISetModel->getData()
        ];

        return view('laporan/capaian/input/' . 'ic_' . $c_code, $data);
    }

    public function save()
    {
        $codekos = $this->request->getVar('codekos');
        $kosta =  $codekos . 'Model';

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

    public function edit($c_code)
    {
        $bar = ucfirst(strtolower($c_code));
        $kosta =  'c' . $bar . 'Model';
        $data = [
            'title' => $c_code,
            'head_t' => 'Tambah | Capaian ',
            'code_rin' => $c_code,
            'data' => 'null',
            'cont_dis' => 1,
            'data' => $this->dataPegawai->getData(),
            'c_hasil' => $this->$kosta->getData()->findAll(),
            'ui_mode' => $this->UISetModel->getData()
        ];

        return view('laporan/capaian/input/' . 'ic_' . $c_code, $data);
    }

    public function update()
    {

        $arr = $this->request->getVar();
        $bar = 'c' .  ucfirst(strtolower($arr['code'])) . 'Model';

        if ($arr['code'] == 'intel') {
            $in1 = $arr['lpg-1'] . '+' . $arr['lpg-2'] . '+' . $arr['lpg-3'];
            $in2 = $arr['pakem-1'] . '+' . $arr['pakem-2'] . '+' . $arr['pakem-3'];
            $in3 = $arr['penkum-1'] . '+' . $arr['penkum-2'] . '+' . $arr['penkum-3'];
            $in4 = $arr['jms-1'] . '+' . $arr['jms-2'] . '+' . $arr['jms-3'];

            $in12 = $arr['lpg-12'] . '+' . $arr['lpg-22'] . '+' . $arr['lpg-32'];
            $in22 = $arr['pakem-12'] . '+' . $arr['pakem-22'] . '+' . $arr['pakem-32'];
            $in32 = $arr['penkum-12'] . '+' . $arr['penkum-22'] . '+' . $arr['penkum-32'];
            $in42 = $arr['jms-12'] . '+' . $arr['jms-22'] . '+' . $arr['jms-32'];

            $data = [
                'id' => 1,
                'lpg' => $in1,
                'pakem' => $in2,
                'penkum' => $in3,
                'jms' => $in4
            ];

            $data2 = [
                'id' => 2,
                'lpg' => $in12,
                'pakem' => $in22,
                'penkum' => $in32,
                'jms' => $in42
            ];

        } elseif ($arr['code'] == 'pembinaan') {
            $in1 = $arr['pegawai-1'] . '+' . $arr['pegawai-2'] . '+' . $arr['pegawai-3'];
            $in2 = $arr['barang-1'] . '+' . $arr['barang-2'] . '+' . $arr['barang-3'];
            $in3 = $arr['pembangunan-1'] . '+' . $arr['pembangunan-2'] . '+' . $arr['pembangunan-3'];

            $in12 = $arr['pegawai-12'] . '+' . $arr['pegawai-22'] . '+' . $arr['pegawai-32'];
            $in22 = $arr['barang-12'] . '+' . $arr['barang-22'] . '+' . $arr['barang-32'];
            $in32 = $arr['pembangunan-12'] . '+' . $arr['pembangunan-22'] . '+' . $arr['pembangunan-32'];

            $data = [
                'id' => 1,
                'pegawai' => $in1,
                'barang' => $in2,
                'pembangunan' => $in3
            ];

            $data2 = [
                'id' => 2,
                'pegawai' => $in12,
                'barang' => $in22,
                'pembangunan' => $in32
            ];

        } elseif ($arr['code'] == 'pidum') {
            $pratut = $arr['pratut-1'] . '+' . $arr['pratut-2'] . '+' . $arr['pratut-3'];
            $tut = $arr['tut-1'] . '+' . $arr['tut-2'] . '+' . $arr['tut-3'];
            $eks = $arr['eks-1'] . '+' . $arr['eks-2'] . '+' . $arr['eks-3'];

            $pratut2 = $arr['pratut-12'] . '+' . $arr['pratut-22'] . '+' . $arr['pratut-32'];
            $tut2 = $arr['tut-12'] . '+' . $arr['tut-22'] . '+' . $arr['tut-32'];
            $eks2 = $arr['eks-12'] . '+' . $arr['eks-22'] . '+' . $arr['eks-32'];

            $data = [
                'id' => 1,
                'pratut' => $pratut,
                'tut' => $tut,
                'eks' => $eks
            ];

            $data2 = [
                'id' => 2,
                'pratut' => $pratut2,
                'tut' => $tut2,
                'eks' => $eks2
            ];

        } elseif ($arr['code'] == 'pidsus') {
            $in1 = $arr['lid-1'] . '+' . $arr['lid-2'] . '+' . $arr['lid-3'];
            $in2 = $arr['dik-1'] . '+' . $arr['dik-2'] . '+' . $arr['dik-3'];
            $in3 = $arr['tut-1'] . '+' . $arr['tut-2'] . '+' . $arr['tut-3'];
            $in4 = $arr['eks-1'] . '+' . $arr['eks-2'] . '+' . $arr['eks-3'];

            $in12 = $arr['lid-12'] . '+' . $arr['lid-22'] . '+' . $arr['lid-32'];
            $in22 = $arr['dik-12'] . '+' . $arr['dik-22'] . '+' . $arr['dik-32'];
            $in32 = $arr['tut-12'] . '+' . $arr['tut-22'] . '+' . $arr['tut-32'];
            $in42 = $arr['eks-12'] . '+' . $arr['eks-22'] . '+' . $arr['eks-32'];

            $data = [
                'id' => 1,
                'lid' => $in1,
                'dik' => $in2,
                'tut' => $in3,
                'eks' => $in4
            ];

            $data2 = [
                'id' => 2,
                'lid' => $in12,
                'dik' => $in22,
                'tut' => $in32,
                'eks' => $in42
            ];

        } elseif ($arr['code'] == 'datun') {
            $in1 = $arr['perkara-1'] . '+' . $arr['perkara-2'] . '+' . $arr['perkara-3'];
            $in2 = $arr['info-1'] . '+' . $arr['info-2'] . '+' . $arr['info-3'];
            $in3 = $arr['hukum-1'] . '+' . $arr['hukum-2'] . '+' . $arr['hukum-3'];

            $in12 = $arr['perkara-12'] . '+' . $arr['perkara-22'] . '+' . $arr['perkara-32'];
            $in22 = $arr['info-12'] . '+' . $arr['info-22'] . '+' . $arr['info-32'];
            $in32 = $arr['hukum-12'] . '+' . $arr['hukum-22'] . '+' . $arr['hukum-32'];

            $data = [
                'id' => 1,
                'perkara' => $in1,
                'info' => $in2,
                'hukum' => $in3
            ];

            $data2 = [
                'id' => 2,
                'perkara' => $in12,
                'info' => $in22,
                'hukum' => $in32
            ];

        } elseif ($arr['code'] == 'bb') {
            $pratut = $arr['pratut-1'] . '+' . $arr['pratut-2'] . '+' . $arr['pratut-3'];
            $tut = $arr['tut-1'] . '+' . $arr['tut-2'] . '+' . $arr['tut-3'];
            $eks = $arr['eks-1'] . '+' . $arr['eks-2'] . '+' . $arr['eks-3'];

            $pratut2 = $arr['pratut-12'] . '+' . $arr['pratut-22'] . '+' . $arr['pratut-32'];
            $tut2 = $arr['tut-12'] . '+' . $arr['tut-22'] . '+' . $arr['tut-32'];
            $eks2 = $arr['eks-12'] . '+' . $arr['eks-22'] . '+' . $arr['eks-32'];

            $data = [
                'id' => 1,
                'pratut' => $pratut,
                'tut' => $tut,
                'eks' => $eks
            ];

            $data2 = [
                'id' => 2,
                'pratut' => $pratut2,
                'tut' => $tut2,
                'eks' => $eks2
            ];
        };

        $this->$bar->save(
            $data
        );

        $this->$bar->save(
            $data2
        );

        return redirect()->to($arr['href']);
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
