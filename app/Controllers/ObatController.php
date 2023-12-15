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
        $data['medicines'] = $this->getObat(false);
        return view('medicine', $data);
    }

    public function editForm($id)
    {
        $data['medicine'] = $this->getObatById($id, false);
        return view('popupedit', $data);
    }

    public function getObat($returnJSON = true)
    {
        try {
            $data = $this->obat->findAll();
            
            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data'   => $data
                ]);
            }
            else {
                return $data;
            }
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }

    public function getObatById($id, $returnJSON = true)
    {
        $data = $this->obat->find($id);
        if (empty($data)) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
        else {
            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data'   => $data
                ]);
            }
            else
            {
                return $data;
            }
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
            $data = $this->obat->insert([
                'nama' => $body['nama'],
                'jenis' => $body['jenis'],
                'harga' => $body['harga'],
                'jumlah_stok' => $body['jumlah_stok'],
            ]);
    
            return $this->response->setJSON([
                'status' => 'success',
                'data' => $body
            ]);
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }

    public function updateObat($id, $returnJSON = true) {
        $body = (array) $this->request->getJSON();

        if (!$body) {
            $returnJSON = false;

            $body['nama'] = $_POST["nama"];
            $body['harga'] = $_POST["harga"];
            $body['jumlah_stok'] = $_POST["jumlah_stok"];
            $body['deskripsi'] = $_POST["deskripsi"];
        }

        $validationData = [
            'nama'  => 'required',
            'harga'  => 'required|integer',
            'jumlah_stok'  => 'required|integer',
            'deskripsi' => 'required',
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
            $data = $this->obat->update($id, [
                'nama' => $body['nama'],
                'harga' => $body['harga'],
                'jumlah_stok' => $body['jumlah_stok'],
                'deskripsi' => $body['deskripsi'],
            ]);
            
            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data' => $body
                ]);
            }
            else {
                return redirect()->to('/medicines');
            }
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }

    public function deleteObat($id, $returnJSON = true) {
        try {
            $res = $this->obat->find($id);

            if (!$res) {
                return $this->response->setStatusCode(404)->setJSON(['error' => 'An error occured']);
            }

            $data = $this->obat->delete($id);

            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data' => $res
                ]);
            }
            else
            {
                return redirect()->to('/medicines');
            }
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }
}
