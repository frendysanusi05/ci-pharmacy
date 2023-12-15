<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use App\Models\Pesanan;
use CodeIgniter\Config\Services;

class PesananController extends BaseController
{
    protected $pesanan;

    function __construct()
    {
        $this->pesanan = new Pesanan();   
        helper(['curl']);
    }

    public function index()
    {
        $data['orders'] = $this->getPesanan(false);
        return view('order', $data);
    }

    public function getPesanan($returnJSON = true)
    {
        try {
            $data = $this->pesanan->findAll();
            
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

    public function getPesananById($id, $returnJSON = true)
    {
        $data = $this->pesanan->find($id);
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

    public function getPesananByIdPesanan($id, $returnJSON = true)
    {
        try {
            $orders = $this->getPesanan(false);
    
            $filteredOrder = array_filter($orders, function ($order) use ($id) {
                return $order['id_pesanan'] == $id;
            });
    
            if ($returnJSON) {
                return $this->response->setJSON([
                    'status' => 'success',
                    'data'   => $filteredOrder
                ]);
            }
            else
            {
                return $filteredOrder;
            }
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }

    public function createPesanan() {
        $body = (array) $this->request->getJSON();

        $validationData = [
            'id_pesanan'   => 'required',
            'id_obat'      => 'required',
            'nama_pasien'  => 'required',
        ];

        if (!$this->validate($validationData, $body)) {
            return $this->response->setStatusCode(400)->setJSON($this->validator->getErrors());
        }

        $body['status_bayar'] = 0;
        $body['status_ambil'] = 0;

        try {
            $data = $this->pesanan->insert([
                'id_pesanan' => $body['id_pesanan'],
                'id_obat' => $body['id_obat'],
                'nama_pasien' => $body['nama_pasien'],
                'status_bayar' => $body['status_bayar'],
                'status_ambil' => $body['status_ambil'],
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

    public function updatePesanan($id, $returnJSON = true) {
        $body = (array) $this->request->getJSON();

        if (!$body) {
            $returnJSON = false;

            $body['status_bayar'] = $_POST['status_bayar'];
            $body['status_ambil'] = $_POST['status_ambil'];
        }

        // check if pesanan exist
        $res = $this->pesanan->find($id);
        
        if (!$res) {
            return $this->response->setStatusCode(400)->setJSON(['error' => 'An error occured']);
        }

        try {
            $data = $this->pesanan->update($id, [
                'status_bayar' => $body['status_bayar'],
                'status_ambil' => $body['status_ambil'],
            ]);

            if ($returnJSON) {
                $res = $this->getPesananById($id, false);

                return $this->response->setJSON([
                    'status' => 'success',
                    'data' => $res
                ]);
            }
            else {
                return redirect()->to('/order');
            }
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }
    }

    public function deletePesanan($id, $returnJSON = true) {
        try {
            $res = $this->pesanan->find($id);

            if (!$res) {
                return $this->response->setStatusCode(404)->setJSON(['error' => 'An error occured']);
            }

            $data = $this->pesanan->delete($id);

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

    public function recommendSupplement() {
        $data = $this->getPesanan(false);

        $countItem = [];
        foreach ($data as $medicine) {
            $id = $medicine['id_obat'];
            if (!array_key_exists($id, $countItem)) {
                $countItem[$id] = 1;
            }
            else
            {
                $countItem[$id] += 1;
            }
        }

        $maxItemId = array_search(max($countItem), $countItem);

        $baseURL = config('App')->baseURL;
        $url = $baseURL . 'api/obat/' . $maxItemId;

        $client = Services::curlrequest();

        try {
            $res = $client->request('GET', $url);
            $data = json_decode($res->getBody(), true);

            return $this->response->setJSON([
                'status' => 'success',
                'data' => $data
            ]);
        }
        catch (\Exception $e) {
            return $this->response->setStatusCode(500)->setJSON([
                'status' => 'error',
                'message' => 'An error occured'
            ]);
        }

        // Make a GET request using cURL
        // $response = perform_http_request('GET', $url);
    }
}
