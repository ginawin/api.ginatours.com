<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 4/3/2018
 * Time: 10:15 AM
 */

class CheckerController extends Controller
{
    public function __construct()
    {
        parent::__construct();
        $flg = false;
        if(Request::isPOST()){
            $flg = true;
            $signature = Request::post("signature");
            $permission = Request::post("permission");
            if(empty($signature))
                $flg &= false;
            if(empty($permission))
                $flg &= false;
        }
        if(!$flg)
            $this->res(0);
        
        $this->loadUtil("CheckerUtil");
    }
    
    
    public function secureCheck(){
        if (Request::isPOST()) {
            $req = $_POST;
            
            $today = new DateTime();
            $req['date'] = $today->format("Y-m-d H:i:s");
            
            //process data
            $data = $this->CheckerUtil->execute("secureCheck",$req,$this->user);
            
            if($data !== false){
                //response
                $this->res(1,$data);
            }
        }
        $this->res(0,$data);
    }
}