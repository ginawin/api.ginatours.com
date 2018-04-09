<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 4/3/2018
 * Time: 10:20 AM
 */

class HotelController extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->loadUtil("HotelUtil");

        /*$apiKey = "xv4kn7zhxre94uja73xxttvb";
        $Secret = "8nTPMzCaJr";
        $signature = hash("sha256", $apiKey.$Secret.time());
        //echo $signature."<br/>";
        $headers = getallheaders();

        if(!(isset($headers['X-Signature']) && !empty($headers['X-Signature']))){
            //error
        }
        if(!(isset($headers['Api-Key']) && !empty($headers['Api-Key']))){
            //error
        }
        if($apiKey != $headers['Api-Key']){
            //error
        }
        $valid = false;
        if($signature == $headers['X-Signature']){
            $valid = true;
            //set session va time out
        }

        if(isset($_SESSION[$apiKey]) && !empty($_SESSION[$apiKey]) && $headers['X-Signature'] == $_SESSION[$apiKey]){
            $valid = true;
            //set session va time out
        }

        if($valid == false){
            //error
        }*/
    }

    public function getList(){
        /**
         * [$req description]
         * @see getList?city_cd=SGN&checkin_date=2018/01/20&checkout_date=2018/01/22&curr_cd=USD&star&hotel_cd&offset=0&limit=100&price_fr&price_to&avail_flg=0&cancel_flg=0&trf_type=1&promotion_flg=0&rq_rooms[0]={"adult_num":"2","child_num":"2","child_age_1":"5","child_age_2":"10"}
         * @var [type]
         */
        if (Request::isGET()) {
            $req = $_GET;

            //process data
            $data = $this->HotelUtil->execute("getList",$req,$this->user);

            if($data !== false){
                //response
                $this->res(1,$data);
            }
        }
        $this->res(0,$data);
    }

    public function getDetail(){
        /**
         * @see getDetail?hotel_cd=38&category&checkin_date=2018/01/05&checkout_date=2018/01/07&curr_cd=USD&trf_type=1&car_type=0&lco=12:00&rq_rooms[0]={"adult_num":"2","child_num":"2","child_age_1":"5","child_age_2":"10"}
         */
        if (Request::isGET()) {
            $req = $_GET;
    
            //process data
            $data = $this->HotelUtil->execute("getDetail",$req,$this->user);
    
            if($data !== false){
                //response
                $this->res(1,$data);
            }
        }
        $this->res(0,$data);
    }

    public function getTariff(){
        /**
         * @see getTariff?search_season=[0,1]&search_place=[162,61]&search_option=&search_star=[1,2,3,4,5]&search_agent=TBK&search_year=2018&search_price_fr=&search_price_to=&search_tariff=8&mark_value=0&mark_type=1&currency=USD&hotel_queue=&cb_hotel_only=
         */
        if (Request::isGET()) {
            $req = $_GET;
    
            //process data
            $data = $this->HotelUtil->execute("getTariff",$req,$this->user);
    
            if($data !== false){
                //response
                $this->res(1,$data);
            }
        }
        $this->res(0,$data);
    }
}