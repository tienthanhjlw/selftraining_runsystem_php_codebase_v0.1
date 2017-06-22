<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * Class NewsController
 */
class NewsController extends BaseController
{
    public function index()
    {
        print_r($this);
        echo '</pre>';
        print_r($this->config->item('base_url'));
        $this->library->load('upload');
        $this->library->upload->upload();
        $this->helper->load('string');
        echo stringToInt(' I love you');
    }


    /**
     * @return ViewLoader
     */
    public function show()
    {
        $this->model->load('Staff');
        $users = $this->model->Staff->select();
        $data = array(
            'title' => 'Helloworld',
            'meme' => $users
        );
        return $this->view->load('index', $data);
    }

    public function create()
    {
        $data = array(
            'title' => 'Create'
        );
        return $this->view->load('create', $data);
    }
}
