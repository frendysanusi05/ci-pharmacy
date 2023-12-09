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
        // return view('transaksi.index');
    }

    public function getTransaksi()
    {
        try {
            $data = $this->transaksi->findAll();
            return $this->response->setJSON([
                'status' => 'success',
                'data'   => $data
            ]);
            // return view('transaksi.index', $data);
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }

    public function getTransaksiById($id)
    {
        $data = $this->transaksi->find($id);
        if (empty($data)) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
        else {
            return $this->response->setJSON([
                'status' => 'success',
                'data'   => $data
            ]);
        }
    }

    public function createTransaksi() {
        $body = (array) $this->request->getJSON();

        $validationData = [
            'tanggal'  => 'required',
            'detail'  => 'required',
            'total_biaya'  => 'required',
        ];

        if (!$this->validate($validationData, $body)) {
            return $this->response->setStatusCode(400)->setJSON($this->validator->getErrors());
        }

        try {
            $data = $this->transaksi->insert([
                'tanggal' => $body['tanggal'],
                'detail' => $body['detail'],
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

    public function updateTransaksi($id) {
        $body = (array) $this->request->getJSON();

        $validationData = [
            'tanggal'  => 'required',
            'detail'  => 'required',
            'total_biaya'  => 'required'
        ];

        if (!$this->validate($validationData, $body)) {
            return $this->response->setStatusCode(400)->setJSON($this->validator->getErrors());
        }

        try {
            $data = $this->transaksi->update($id, [
                'tanggal' => $body['tanggal'],
                'detail' => $body['detail'],
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

    public function deleteTransaksi($id) {
        try {
            $res = $this->transaksi->find($id);

            if (!$res) {
                return $this->response->setStatusCode(404)->setJSON(['error' => 'An error occured']);
            }

            $data = $this->transaksi->delete($id);
            return $this->response->setJSON([
                'status' => 'success',
                'data' => $res
            ]);
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }
}
