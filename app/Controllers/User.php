<?php

namespace App\Controllers;

use App\Models\UISetModel;

use App\Models\PegawaiModel;

use App\Models\cIntelModel;

use App\Models\cPembinaanModel;

use App\Models\cPidumModel;

use App\Models\cPidsusModel;

use App\Models\cDatunModel;

use App\Models\cBBModel;

use App\Models\kIntelModel;

use App\Models\kPembinaanModel;

use App\Models\kPidumModel;

use App\Models\kPidsusModel;

use App\Models\kDatunModel;

use App\Models\kBBModel;

use App\Entities\PiUI;



class User extends BaseController
{
	public function __construct()
	{
		$this->UISetModel  = new UISetModel();

		$this->dataPegawai = new PegawaiModel();

		$this->cIntelModel = new cIntelModel();

		$this->cPembinaanModel = new cPembinaanModel();

		$this->cPidumModel = new cPidumModel();

		$this->cPidsusModel = new cPidsusModel();

		$this->cDatunModel = new cDatunModel();

		$this->cBbModel = new cBBModel();

		$this->kIntelModel = new kIntelModel();

		$this->kPembinaanModel = new kPembinaanModel();

		$this->kPidumModel = new kPidumModel();

		$this->kPidsusModel = new kPidsusModel();

		$this->kDatunModel = new kDatunModel();

		$this->kBbModel = new kBBModel();

		$this->pUI = new PiUI();
	}

	public function index()
	{
		// $obg = $this->pUI->get();
		// dd($obg["home"]["title"]["text"]);
		$data = [
			'title' => 'Rin+',
			'dataPeg' => $this->dataPegawai->getData(),
			'ui_mode' => $this->UISetModel->getData(),
			'c_intel' => $this->cIntelModel->getData()->findAll(),
			'c_pembinaan' => $this->cPembinaanModel->getData()->findAll(),
			'c_pidum' => $this->cPidumModel->getData()->findAll(),
			'c_pidsus' => $this->cPidsusModel->getData()->findAll(),
			'c_datun' => $this->cDatunModel->getData()->findAll(),
			'c_bb' => $this->cBbModel->getData()->findAll(),
			'k_intel' => $this->kIntelModel->getData()->findAll(),
			'k_pembinaan' => $this->kPembinaanModel->getData()->findAll(),
			'k_pidum' => $this->kPidumModel->getData()->findAll(),
			'k_pidsus' => $this->kPidsusModel->getData()->findAll(),
			'k_datun' => $this->kDatunModel->getData()->findAll(),
			'k_bb' => $this->kBbModel->getData()->findAll()
		];
		return view('index', $data);
	}
}
