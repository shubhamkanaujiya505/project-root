<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use  \CodeIgniter\Exceptions\PageNotFoundException;

class Welcome extends BaseController
{
    public function index() // index method is a default method 
    {
        echo ("this is the index method");
    }
    public function test($name)
    {
        echo ("this is the test method".$name);
    }
    public function address($city,$country)
    {
        echo("i am from " . $country." ". "from". " " .$city );
    }
    public function _remap($method, $param1 = null, $param2 = null){
        // echo"if _remap() method= .$method. not define in page then they redirect to existing method.";

        // this logic check if method exist use instid of this  use method_exist($param1=null,$param2=null)
        // if($method == "test"){
        //     return $this->$method($param1);
        // }elseif($method == "address"){
        //     return $this->$method($param1,$param2);
        // }
        // else{
        //     $this->index();
        // }

        if(method_exists($this,$method)){ // this means -> current class like "Welcome"
            return $this->$method($param1,$param2);
        }
        // else{
        //     $this->index();
        // }
        throw PageNotFoundException::forPageNotFound();
    }

}
