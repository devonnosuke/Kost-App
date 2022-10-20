<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use CodeIgniter\API\ResponseTrait;
use App\Models\LikeModel;

class LikeController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use ResponseTrait;
    public function index()
    {
        $model = new LikeModel();
        $id_kost = $this->request->getVar('id_kost');
        if ($id_kost) {
            $data['like'] = $model->getKostLike($id_kost);
            $data['id_kost'] = $id_kost;
        } else {
            $data['like'] = $model->getLike();
        }

        $id_user = $this->request->getVar('id_user');
        if ($id_user) {
            $data['like'] = $model->getKostLike($id_user);
            $data['id_user'] = $id_user;
        } else {
            $data['like'] = $model->getLike();
        }
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $model = new LikeModel();
        $data = $model->where('id_like', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No like found');
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
        $model = new LikeModel();
        $data = [
            'id_kost'   => $this->request->getVar('id_kost'),
            'id_user'   => $this->request->getVar('id_user'),
        ];
        $model->insert($data);
        $response = [
            'status'    => 201,
            'error'     => null,
            'message'   => [
                'success' => 'Like created succesfully'
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
        $model = new LikeModel();
        if ($id === null) {
            $id = $this->request->getVar('id_like');
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
                'success' => 'Like update successfully'
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
        $model = new LikeModel();
        $data = $model->where('id_like', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status'    => 200,
                'error'     => null,
                'messages'  => [
                    'success' => 'Like successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No like found');
        }
    }
}
