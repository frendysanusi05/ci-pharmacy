<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Obat;

class ObatController extends BaseController
{
    protected $obat;

    function __construct()
    {
        $this->obat = new Obat();   
    }

    public function index()
    {
        // return view('obat.index');
    }

    public function getObat()
    {
        $data['obat'] = $this->obat->findAll();
        return $this->response->setJSON($data);
        // return view('obat.index', $data);
    }

    public function getObatById($id)
    {
        $data['obat'] = $this->obat->find($id);
        if (empty($data['obat'])) {
            return $this->response->setStatusCode(404)->setJSON('An error occured');
        }
        else {
            return $this->response->setJSON($data);
        }
    }

    public function createObat() {
        $body = (array) $this->request->getJSON();

        $validationData = [
            'nama'  => 'required',
            'jenis'  => 'required',
            'harga'  => 'required|integer',
            'jumlah_stok'  => 'required|integer',
        ];

        if (!$this->validate($validationData, $body)) {
            return $this->response->setStatusCode(400)->setJSON($this->validator->getErrors());
        }

        // check if obat exist
        $res = $this->obat->where('nama', $body['nama'])->first();

        if ($res) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'An error occured']);
        }

        try {
            $data['obat'] = $this->obat->insert([
                'nama' => $body['nama'],
                'jenis' => $body['jenis'],
                'harga' => $body['harga'],
                'jumlah_stok' => $body['jumlah_stok'],
            ]);
    
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Data obat berhasil ditambahkan',
                'data' => $body
            ]);
            // return redirect('obat.index')->with('success', 'Data obat berhasil ditambahkan');
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON(['error' => 'An error occured']);
        }
    }

    public function updateObat($id) {
        $body = (array) $this->request->getJSON();

        $validationData = [
            'nama'  => 'required',
            'jenis'  => 'required',
            'harga'  => 'required|integer',
            'jumlah_stok'  => 'required|integer',
        ];

        if (!$this->validate($validationData, $body)) {
            return $this->response->setStatusCode(400)->setJSON($this->validator->getErrors());
        }

        // check if obat exist
        $res = $this->obat->find($id);
        
        if (!$res) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'An error occured']);
        }

        try {
            $data['obat'] = $this->obat->update($id, [
                'nama' => $body['nama'],
                'jenis' => $body['jenis'],
                'harga' => $body['harga'],
                'jumlah_stok' => $body['jumlah_stok'],
            ]);
    
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Data obat berhasil diubah',
                'data' => $body
            ]);
            // return redirect('obat.index')->with('success', 'Data obat berhasil diubah');
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON(['error' => 'An error occured']);
        }
    }

    public function deleteObat($id) {
        try {
            $res = $this->obat->find($id);

            if (!$res) {
                return $this->response->setStatusCode(404)->setJSON(['error' => 'An error occured']);
            }

            $data['obat'] = $this->obat->delete($id);
            return $this->response->setJSON([
                'success' => true,
                'message' => 'Data obat berhasil dihapus',
                'data' => $res
            ]);
            // return redirect('obat.index')->with('success', 'Data obat berhasil dihapus');
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON(['error' => 'An error occured']);
        }
    }
}
