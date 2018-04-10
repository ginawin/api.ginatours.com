<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 4/10/2018
 * Time: 3:15 PM
 */

class ContactController extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->loadUtil("ContactUtil","MailUtil");
    }
    
    public function create(){
        
        if (Request::isPOST()) {
            $req = $_POST;
            
            //process data
            $data = $this->ContactUtil->execute("create",$req,$this->user);
            
            if($data !== false){
                //response
                $this->res(1,$data);
            }
        }
        $this->res(0,$data);
    }
}