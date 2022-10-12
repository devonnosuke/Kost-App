<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\KostTersimpanModel;

class KostTersimpanController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use ResponseTrait;
    public function index()
    {
        $model = new KostTersimpanModel();
        $data['kost_tersimpan'] = $model->getKostTersimpan();
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $model = new KostTersimpanModel();
        $data = $model->where('id_kost_tersimpan', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No kost tersimpan found');
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
        $model = new KostTersimpanModel();
        $data = [
            'id_kost'   => $this->request->getVar('id_kost'),
            'id_user'   => $this->request->getVar('id_user'),
        ];
        $model->insert($data);
        $response = [
            'status'    => 201,
            'error'     => null,
            'message'   => [
                'success' => 'Kost tersimpan created succesfully'
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
        $model = new KostTersimpanModel();
        if ($id === null) {
            $id = $this->request->getVar('id_kost_tersimpan');
        }

        $data = [
            'id_kost'   => $this->request->getVar('id_kost'),
            'id_user'   => $this->request->getVar('id_user'),
        ];

        $model->update($id, $data);
        $response = [
            'status'    => 200,
            'error'     => null,
            'messages'   => [
                'success' => 'Kost tersimpan update successfully'
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
        $model = new KostTersimpanModel();
        $data = $model->where('id_kost_tersimpan', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'    => 200,
                'error'     => null,
                'messages'  => [
                    'success' => 'Kost tersimpan successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No like found');
        }
    }
}
