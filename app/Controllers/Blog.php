<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Blog extends BaseController
{
    public function index()
    {
        echo view("header");
        echo view("myview");
        echo view("footer");
    }
}
