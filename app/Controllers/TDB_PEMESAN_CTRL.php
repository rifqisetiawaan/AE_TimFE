<?php

namespace App\Controllers;
use App\Models\enterprise_feModel;

class TDB_PEMESAN_CTRL extends BaseController
{
    protected $DATAPEMESAN;

    public function __construct()
    {
        $this->DATAPEMESAN = new enterprise_feModel();
    }
    public function index()
    {
        $vardatapemesan = $this->DATAPEMESAN->FindAll();
        $diti = [
            'parmesan' => $vardatapemesan,
            'validation' => \Config\Services::validation()
        ];
        return view('data_pemesan', $diti);
        //ini kirim si $data ke mana (Data/isian).====
    }
    public function create()
     {
        $data = [
            'validation' => \Config\Services::validation()
        ];
        return view('data_pemesan', $data);
     }


     public function save()
     {
        // VALIDASI INPUT
        // if(!$this->validate([

        //     'perusahaan' =>'required|is_unique[tdb_pemesan.perusahaan]',
        //     'contact_person' => 'required',
        //     'no_tlp' => 'required',
        //     'alamat' => 'required'
        // ])){
        //     $validation = \Config\Services::validation();
        //     return redirect()->to('/TDB_PEMESAN_CTRL/save')->withInput()->with('validation', $validation);
        // }

            $this->DATAPEMESAN->save([
            'perusahaan' => $this->request->getVar('perusahaan'),
            'contact_person' => $this->request->getVar('contact_person'),
            'no_tlp' => $this->request->getVar('no_tlp'),
            'alamat' => $this->request->getVar('alamat')            
        ]);
        session()->setFlashdata('pesan', 'Data Berhasil Ditambahkan :)');
        return redirect()->to('/TDB_PEMESAN_CTRL');
    }
}