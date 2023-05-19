<?php

namespace App\Controllers;

use CodeIgniter\RESTful\ResourceController;
use App\Models\GalleryModel;

class Dashboard extends ResourceController
{

    public function __construct() {
        $this->galleryModel = new GalleryModel();
       
    }

    /**
     * Return an array of resource objects, themselves in array format
     *
     * @return mixed
     */
    public function index($id = null)
    {
        $gallery2 = $this->galleryModel->find($id);
        
        $data = [
            "gallery2" => $gallery2
        ];
        return view('dashboard/index', $data);
    }

    /**
     * Return the properties of a resource object
     *
     * @return mixed
     */
    public function show($id = null)
    {
        //
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
        //
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
        //
    }

    /**
     * Delete the designated resource object from the model
     *
     * @return mixed
     */
    public function delete($id = null)
    {
        //
    }

    public function detail($id)
{

    $galleryModel = new GalleryModel();
    $data['gallery'] = $galleryModel->find($id);

    return view('dashboard/detail', $data);

}
}
