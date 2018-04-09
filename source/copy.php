<?php

class #CLASS_NAME# extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->template = new View("admin/home");
    }

    public function index(){
        echo 123;
    }
    
    #FUNCTION1#

}