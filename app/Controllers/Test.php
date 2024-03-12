<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Test extends BaseController
{
    public function index()
    {
    $parser = \config\Services::parser();
    // Creating an associative array
    $person = [
        'name' => 'John',
        'age' => 30,
        'city' => 'New York',
        'subjects_list' => [
            ['subject' => 'HTML', 'abbr' => 'HyperText Markup Language'],
            ['subject' => 'CSS', 'abbr' => 'Cascading Style Sheets'],
            ['subject' => 'JavaScript', 'abbr' => 'JS'],
            ['subject' => 'PHP', 'abbr' => 'Hypertext Preprocessor'],
            ['subject' => 'SQL', 'abbr' => 'Structured Query Language']
        ],
        "status" => true
    ];
    // $parser->setData($person);
    // return $parser->render("myview");

    return $parser->setData($person)->render("myview"); // alternate method to show the data using parser view also called chaining method

    // echo view("myview",$person); // old method to show the data without parser view
    }
}


