<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Home extends BaseController
{
    public function index()
    {
        $data = [
            'pageHeading' => 'This is home page'
        ];
        echo view("layout/header",$data);
        echo view("homeview" );
        echo view("layout/footer");
    }
    public function about()
    {
        $data = [
            'pageHeading' => 'This is about page'
        ];
        echo view("layout/header",$data);
        echo view("aboutview");
        echo view("layout/footer");
    }
}
