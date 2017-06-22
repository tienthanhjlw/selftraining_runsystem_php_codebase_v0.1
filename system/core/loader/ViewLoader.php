<?php
if (!defined('PATH_SYSTEM')) die ('Bad request');

class ViewLoader
{

    /**
     * @desc Luu tru cac bien view da load
     */
    private $__content = array();

    /**
     * @param $view
     * @param array $data
     */
    public function load($view, $data = array())
    {
        /**
         * @desc Chuyen mang du lieu thanh tung bien
         */
        extract($data);

        /**
         * @desc Chuyen noi dung view thanh bien thay vi in ra
         */
        ob_start();
        require_once PATH_APP . '/view/' . $view . '.view.php';
        $content = ob_get_contents();
        ob_end_clean();

        /**
         * @desc Gan noi dung vao danh sach view da load
         */
        $this->__content[] = $content;
    }

    /**
     * @desc  Hien thi toan bo view da load duoc dung o controller
     */
    public function show()
    {
        foreach ($this->__content as $html) {
            echo $html;
        }
    }
}
