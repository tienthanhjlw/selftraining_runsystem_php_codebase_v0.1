<?php

if (!defined('PATH_SYSTEM')) die ('Bad request');

/**
 * Class Controller
 */
class Controller
{
    /**
     * @var null|ViewLoader
     */
    protected $view = NULL;

    /**
     * @var ModelLoader|null
     */
    protected $model = NULL;

    /**
     * @var LibraryLoader|null
     */
    protected $library = NULL;

    /**
     * @var HelperLoader|null
     */
    protected $helper = NULL;

    /**
     * @var ConfigLoader|null
     */
    protected $config = NULL;

    /**
     * Controller constructor.
     * @desc Load cac thu vien can thiet
     */
    public function __construct()
    {
        /**
         * @desc Load cho config
         */
        require_once PATH_SYSTEM . '/core/loader/ConfigLoader.php';
        $this->config = new ConfigLoader();
        $this->config->load('config');

        /**
         * @desc Load Library
         */
        require_once PATH_SYSTEM . '/core/loader/LibraryLoader.php';
        $this->library = new LibraryLoader();

        /**
         * @desc Load helper
         */
        require_once PATH_SYSTEM . '/core/loader/HelperLoader.php';
        $this->helper = new HelperLoader();

        /**
         * @desc Load view
         */
        require_once PATH_SYSTEM . '/core/loader/ViewLoader.php';
        $this->view = new ViewLoader();

        /**
         * @desc Load Model
         */
        require_once PATH_SYSTEM . '/core/loader/ModelLoader.php';
        $this->model = new ModelLoader();
    }
}
