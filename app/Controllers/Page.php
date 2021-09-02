<?php

namespace App\Controllers;

use App\Models\UISetModel;

class page extends BaseController
{
    public function __construct()
    {
        $this->UISetModel  = new UISetModel();
    }

    public function about()
    {
        $data = [
            'title' => 'About',
            'ui_mode' => $this->UISetModel->getData()
        ];
        return view('page/about', $data);
    }
}
