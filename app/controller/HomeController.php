<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * Class NewsController
 */
class HomeController extends BaseController
{
    /**
     * @return ViewLoader
     */
    public function index()
    {
        $this->model->load('Staff');
        $staffs = $this->model->Staff->select();
        $data = array(
            'title' => 'Staff',
            'staffs' => $staffs
        );
        return $this->view->load('index', $data);
    }

    /**
     *
     */
    public function create()
    {
        $data = array(
            'title' => 'Staff'
        );
        return $this->view->load('create', $data);
    }

    /**
     *
     */
    public function edit()
    {
        $id = $_GET['id'];
        $this->model->load('Staff');
        $staff = $this->model->Staff->select($id);
        $data = array(
            'title' => 'Staff',
            'staff' => $staff[0]
        );
        return $this->view->load('edit', $data);
    }

    /**
     * @return mixed
     */
    public function store()
    {
        $data = [$_POST['name']];
        $this->model->load('Staff');
        $this->model->Staff->store($data);
        $this->helper->load('direction');
        redirect('http://localhost');
    }

    /**
     * @return mixed
     */
    public function update()
    {
        $id = $_POST['id'];
        $name = $_POST['name'];
        $data = array(
            'name' => $name
        );
        $this->model->load('Staff');
        $this->model->Staff->update($id, $data);
        $this->helper->load('direction');
        redirect('http://localhost');
    }

    /**
     * @return mixed
     */
    public function delete()
    {
        $id = $_GET['id'];
        $this->model->load('Staff');
        $this->model->Staff->delete($id);
        $this->helper->load('direction');
        redirect('http://localhost');
    }
}
