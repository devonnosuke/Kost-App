<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\UserModel;
use CodeIgniter\HTTP\RequestTrait;

class UserController extends ResourceController
{
    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    use RequestTrait;
    public function index()
    {
        $model = new UserModel();
        $data['user'] = $model->orderBy('id_user', 'ASC')->getUser();
        return $this->respond($data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        $model = new UserModel();
        $data = $model->where('id_user', $id)->first();
        if ($data) {
            return $this->respond($data);
        } else {
            return $this->failNotFound('No user found');
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
        $model = new UserModel();
        $data = [
            'nama_user' => $this->request->getVar('nama_user'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];
        $model->insert($data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'succes' => 'User created succesfully'
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
        $model = new UserModel();
        if ($id === null) {
            $id = $this->request->getVar('id_user');
        }
        $data = [
            'nama_user' => $this->request->getVar('nama_user'),
            'username' => $this->request->getVar('username'),
            'email' => $this->request->getVar('email'),
            'password' => $this->request->getVar('password'),
        ];
        $model->update($id, $data);
        $response = [
            'status' => 201,
            'error' => null,
            'messages' => [
                'succes' => 'User updated succesfully'
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
        $model = new UserModel();
        $data = $model->where('id_user', $id)->delete($id);
        if ($data) {
            $model->delete($id);
            $response = [
                'status' => 200,
                'error' => null,
                'masseges' => [
                    'success' => 'User successfully deleted'
                ]
            ];
            return $this->respondDeleted($response);
        } else {
            return $this->failNotFound('No siswa found');
        }
    }
}
