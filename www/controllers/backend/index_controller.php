<?php
/**
 * Created by PhpStorm.
 * User: asus1
 * Date: 29.08.2015
 * Time: 0:10
 */
class index_controller extends controller
{
    public function index()
    {
        $this->addScript(SITE_DIR . 'assets/global/plugins/bootstrap-summernote/summernote.min.js');
        $this->addStyle(SITE_DIR . 'assets/global/plugins/bootstrap-summernote/summernote.css');
        $this->view('index' . DS . 'index');
    }

    public function index_ajax()
    {

    }

    public function index_na()
    {

    }
}