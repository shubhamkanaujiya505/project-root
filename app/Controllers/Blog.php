<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Blog extends BaseController
{
    public function index()
    {
        $person = [
            'name' => 'John',
            'age' => 30,
            'city' => 'New York',
            'subject' => ['html','css','java','js','jquery','ajax']
        ];
       
        echo view("myview",$person);
        
    }
}
