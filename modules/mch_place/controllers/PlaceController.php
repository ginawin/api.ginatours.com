<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 4/3/2018
 * Time: 10:20 AM
 */

class PlaceController extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->loadUtil("PlaceUtil");
    }

    public function getList4Tour(){
        /**
         * [$req description]
         * @see getList4Tour
         * @var [type]
         */
        if (Request::isGET()) {
            $req = $_GET;
    
            //process data
            $data = $this->PlaceUtil->execute("getList4Tour",$req,$this->user);
    
            if($data !== false){
                //response
                $this->res(1,$data);
            }
        }
        $this->res(0,$data);
    }

    public function getList4Hotel(){
        /**
         * [$req description]
         * @see getList4Hotel
         * @var [type]
         */
        if (Request::isGET()) {
            $req = $_GET;
    
            //process data
            $data = $this->PlaceUtil->execute("getList4Hotel",$req,$this->user);
    
            if($data !== false){
                //response
                $this->res(1,$data);
            }
        }
        $this->res(0,$data);
    }

}