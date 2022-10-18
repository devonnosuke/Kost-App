<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\PemilikModel;

class PemilikController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use ResponseTrait;
    public function index()
    {
        $model = new PemilikModel();
        $data['pemilik'] = $model->orderBy('id_pemilik', 'ASC')->getPemilik();
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $model = new PemilikModel();
        $data = $model->where('id_pemilik', '$id')->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No pemilik found ');
        }
    }

    /**
     * Return a new resource object, with default properties
     *
     * @return mixed
     */
    public function new()
    {
        //
    }

    /**
     * Create a new resource object, from "posted" parameters
     *
     * @return mixed
     */
    public function create()
    {
        $model = new PemilikModel();
        $data = [
            'nama_pemilik' => $this->request->getVar('nama_pemilik'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'no_wa' => $this->request->getVar('no_wa'),
            'alamat_ktp' => $this->request->getVar('alamat_ktp'),
            'password' => $this->request->getVar('password'),
            'salt' => $this->request->getVar('salt'),
        ];
        $model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'pemilik created successfully'
            ]
        ];
        return $this->respondCreated($response);
    }

    /**
     * Return the editable properties of a resource object
     *
     * @return mixed
     */
    public function edit($id = null)
    {
        //
    }

    /**
     * Add or update a model resource, from "posted" properties
     *
     * @return mixed
     */
    public function update($id = null)
    {
        $model = new PemilikModel();
        if ($id === null) {
            $id = $this->request->getvar();
        }

        $data = [
            'nama_pemilik' => $this->request->getVar('nama_pemilik'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'no_telp' => $this->request->getVar('no_telp'),
            'no_wa' => $this->request->getVar('no_wa'),
            'alamat_ktp' => $this->request->getVar('alamat_ktp'),
            'password' => $this->request->getVar('password'),
            'salt' => $this->request->getVar('salt'),
        ];
        $model->update($id, $data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'kost update successfully'
            ]
        ];
        return $this->respond($response);
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        $model = new PemilikModel();
        $data = $model->where('id_pemilik', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status' => 201,
                'error' => null,
                'messages' => [
                    'success' => 'kost delete successfully'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No Kost Found');
        }
    }
}
