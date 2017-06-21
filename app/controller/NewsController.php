<?php

if (!defined('PATH_SYSTEM')) die ('Bad requested !');

class NewsController extends Controller
{
    public function index()
    {
        echo '<h1>Hello</h1>';
        echo '<h3>Token: csrf_token_name: ' . $this->config->item('csrf_token_name') . '</h3>';
        $this->config->setItem('csrf_token_name', 'new_token');
        echo '<h3>Token: csrf_token_name(changed): '  . $this->config->item('csrf_token_name') . '</h3>';
    }

    public function detail()
    {
        echo '<h1>Detail</h1>';
    }
}

