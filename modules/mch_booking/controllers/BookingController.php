<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 4/3/2018
 * Time: 10:15 AM
 */

class BookingController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->loadUtil("BookingUtil");
    }


    public function create(){
    
        
        
        if (Request::isPOST()) {
            $req = $_POST;
            /*
            * @see: data is array. using post key and value.
            * @exam: key: user_email, key: user_password.
            * @return: true : false
            */
            //validate
            //if(!$this->BookingUtil->createValid($req)){
                //$this->res(0);
            //}

            //process data
            //$data = $this->BookingUtil->create($req,$this->user);
            $data = $this->BookingUtil->execute("create",$req,$this->user);

            //response
            $this->res(1,$data);
        }
        $this->res(0,$data);
    }
}