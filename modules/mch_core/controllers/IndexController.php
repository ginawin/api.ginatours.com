<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 4/5/2018
 * Time: 11:54 AM
 */

class IndexController extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }
    
    public function index(){
        $this->res(0);
    }
}