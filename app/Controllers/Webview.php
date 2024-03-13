<?php

namespace App\Controllers;

class Webview extends BaseController
{
    public function index()
    {
        return view('index');
    }
    public function data_pesanan()
    {
        return view('data_pemesan');
    }
    public function pengecoran_logam()
    {
        return view('pengecoran_logam');
    }
    public function pengujian_material()
    {
        return view('pengujian_material');
    }
    public function form_peleburan()
    {
        return view('form_peleburan');
    }
    public function form_qc()
    {
        return view('form_qc');
    }
    public function order_logistik()
    {
        return view('order_logistik');
    }
    public function project_selesai()
    {
        return view('project_selesai');
    }
}
