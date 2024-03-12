<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class Test extends BaseController
{
    public $parser;

    public function __construct()
    {
       $this->parser = \config\Services::parser();
    }

    public function index()
    {
    
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

    return $this->parser->setData($person)->render("myview"); // alternate method to show the data using parser view also called chaining method

    // echo view("myview",$person); // old method to show the data without parser view
    }

    public function viewFilters(){
        $parser = \config\Services::parser();
        $person = [
            'name' => 'shubham kanaujiya',
            'age' => 30,
            'city' => 'New York',
            'date' => '12-03-2024',
            'price' => '500'
        ];
        return $this->parser->setData($person)->render("filterView");
    }
}


