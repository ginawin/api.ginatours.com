<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 4/3/2018
 * Time: 10:33 AM
 */

class UserController extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->loadUtil("UserClientUtil");
    }

    public function register()
    {
        /**
         * [$req description]
         * @see getList4Tour
         * @var [type]
         */
        if (Request::isPOST()) {
            $iData = $_POST;
            
            $iData = SBArray::removeNull($iData);
            
            if(isset($iData['user_pass']) && !empty($iData['user_pass']))
                $iData['user_pass'] = hash("sha256",PASSWORDPREFIX.$iData['user_pass']);
            $iData['updated_by'] = 1;
            if(empty($iData['user_id'])){
                $iData['created_at'] = SBDate::Now2Str();
                $iData['created_by'] = 1;
            }
            
            //process data
            $data = $this->UserClientUtil->execute("register",$iData,$this->user);
        
            if($data !== false){
                //response
                $this->res(1,$data);
            }
        }
        $this->res(0,$data);
    }

    public function login()
    {
        /**
         * [$req description]
         * @see getList4Tour
         * @var [type]
         */
        if (Request::isPOST()) {
            $iData = $_POST;
    
            $iData = SBArray::removeNull($iData);
        
            //process data
            $oData = $this->UserClientUtil->execute("login",$iData,$this->user);
    
            if($oData !== false){
                $token = hash("sha256", $oData['user_pass'].PREFIX.$oData['user_email']);
                $_SESSION[$token]['time'] = new DateTime();
                $_SESSION[$token]['user'] = $oData;
                $this->res(1,array("token"=>$token));
            }
        }
        $this->res(0,$oData);
    }
}