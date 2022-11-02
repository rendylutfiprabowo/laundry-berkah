<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\outputModel;

class LandingpageController extends BaseController
{
    public function index()
    {
        //
    }

    public function home()
    {
        $output = new outputModel();
        $output = $output->findAll();
        $data = [
            'title' => 'Output',
            'output' => $output
        ];

        return view('landingpage/home', $data);
    }

    public function paketlayanan()
    {
        $output = new outputModel();
        $output = $output->findAll();
        $data = [
            'title' => 'Paket Layanan',
            'output' => $output
        ];
        return view('landingpage/paketlayanan', $data);
    }

    public function tentangkami()
    {
        $output = new outputModel();
        $output = $output->findAll();
        $data = [
            'title' => 'Tentang Kami',
            'output' => $output
        ];
        return view('landingpage/tentangkami', $data);
    }

    public function layanantambahan()
    {
        $output = new outputModel();
        $output = $output->findAll();
        $data = [
            'title' => 'Layanan Tambahan',
            'output' => $output
        ];
        return view('landingpage/layanantambahan', $data);
    }

    public function testimoni()
    {
        $output = new outputModel();
        $output = $output->findAll();
        $data = [
            'title' => 'Testimoni',
            'output' => $output
        ];
        return view('landingpage/testimoni', $data);
    }

    public function hubungikami()
    {
        $output = new outputModel();
        $output = $output->findAll();
        $data = [
            'title' => 'Hubungi Kami',
            'output' => $output
        ];
        return view('landingpage/hubungikami', $data);
    }
}
