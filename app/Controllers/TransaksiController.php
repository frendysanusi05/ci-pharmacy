<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Transaksi;

class TransaksiController extends BaseController
{
    protected $transaksi;

    function __construct() {
        $this->transaksi = new Transaksi();
    }

    public function index()
    {
        $data['transactions'] = $this->getTransaksi(false);
        return view('transaction', $data);
    }

    public function getTransaksi($returnJSON = true)
    {
        try {
            $data = $this->transaksi->findAll();
            
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

    public function getTransaksiById($id, $returnJSON = true)
    {
        $data = $this->transaksi->find($id);
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

    public function createTransaksi() {
        $body = (array) $this->request->getJSON();

        
        $validationData = [
            'bulan'  => 'required',
            'total_biaya'  => 'required',
        ];
        
        if (!$this->validate($validationData, $body)) {
            return $this->response->setStatusCode(400)->setJSON($this->validator->getErrors());
        }
        
        try {
            $data = $this->transaksi->insert([
                'bulan' => $body['bulan'],
                'total_biaya' => $body['total_biaya']
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

    public function updateTransaksi($id, $returnJSON = true) {
        $body = (array) $this->request->getJSON();

        if (!$body) {
            $returnJSON = false;

            $body['bulan'] = $_POST['bulan'];
            $body['total_biaya'] = $_POST['total_biaya'];
        }

        $validationData = [
            'bulan'  => 'required',
            'total_biaya'  => 'required'
        ];

        if (!$this->validate($validationData, $body)) {
            return $this->response->setStatusCode(400)->setJSON($this->validator->getErrors());
        }

        // check if transaksi exist
        $res = $this->transaksi->find($id);
        
        if (!$res) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'An error occured']);
        }

        try {
            $data = $this->transaksi->update($id, [
                'bulan' => $body['bulan'],
                'total_biaya' => $body['total_biaya']
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

    public function deleteTransaksi($id, $returnJSON = true) {
        try {
            $res = $this->transaksi->find($id);

            if (!$res) {
                return $this->response->setStatusCode(404)->setJSON(['error' => 'An error occured']);
            }

            $data = $this->transaksi->delete($id);
            
            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data' => $res
                ]);
            }
            else
            {
                return redirect()->to('/transaction');
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
