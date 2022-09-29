<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\KostModel;
use CodeIgniter\HTTP\RequestTrait;

class KostController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use RequestTrait;
    public function index()
    {
        $model = new KostModel();
        $data['kost'] = $model->orderBy('id_kost', 'ASC')->findAll();
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $model = new KostModel();
        $data = $model->where('id_kost', '$id')->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No Kost found ');
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
        $model = new KostModel();
        $data = [
            'id_pemilik' => $this->request->getVar('id_pemilik'),
            'nama_kost' => $this->request->getVar('nama_kost'),
            'alamat_kost' => $this->request->getVar('alamat_kost'),
            'longitude' => $this->request->getVar('longitude'),
            'latitude' => $this->request->getVar('latitude'),
            'jenis' => $this->request->getVar('jenis'),
            'fasilitas' => $this->request->getVar('fasilitas'),
            'foto' => $this->request->getVar('foto')
        ];
        $model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'success' => 'kost created successfully'
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
        $model = new KostModel();
        if ($id === null) {
            $id = $this->request->getvar();
        }

        $data = [
            'id_pemilik' => $this->request->getVar('id_pemilik'),
            'nama_kost' => $this->request->getVar('nama_kost'),
            'alamat_kost' => $this->request->getVar('alamat_kost'),
            'longitude' => $this->request->getVar('longitude'),
            'latitude' => $this->request->getVar('latitude'),
            'jenis' => $this->request->getVar('jenis'),
            'fasilitas' => $this->request->getVar('fasilitas'),
            'foto' => $this->request->getVar('foto'),
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
        $model = new KostModel();
        $data = $model->where('id_kost', $id)->delete($id);
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
