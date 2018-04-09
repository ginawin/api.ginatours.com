<?php
/**
 * Created by PhpStorm.
 * User: DELL
 * Date: 4/3/2018
 * Time: 10:23 AM
 */

class TourController extends Controller
{
    public function __construct(){
        parent::__construct();
        $this->loadUtil("TourUtil");
    }

    public function getList(){
        /**
         * [$req description]
         * @see tour/getList?city_cd=SGN&tour_cd=&date=2018/01/05&trf_type=1&car_type=0&keyword=&curr_cd=USD&offset=0&limit=20&adult_num=2&child_num=0&infant_num=0
         * @var [type]
         */
        if (Request::isGET()) {
            $req = $_GET;
    
            //process data
            $data = $this->TourUtil->execute("getList",$req,$this->user);
    
            if($data !== false){
                //response
                $this->res(1,$data);
            }
        }
        $this->res(0,$data);
    }

    public function getDetail(){
        /**
         * @see tour/getDetail?city_cd=SGN&tour_cd=SGNF03&date=2018/01/05&trf_type=1&car_type=1&curr_cd=USD&adult_num=2&child_num=0&infant_num=0
         */
        if (Request::isGET()) {
            $req = $_GET;
    
            //process data
            $data = $this->TourUtil->execute("getDetail",$req,$this->user);
    
            if($data !== false){
                //response
                $this->res(1,$data);
            }
        }
        $this->res(0,$data);
    }

    public function getTariff(){
        /**
         * @see tour/getTariff?search_season=0,1&search_place=162&search_agent=TBKT&search_year=2017&search_price_fr=&search_price_to=&search_tariff=0&mark_value=0&mark_type=1&currency=USD
         */
        if (Request::isGET()) {
            $req = $_GET;
    
            //process data
            $data = $this->TourUtil->execute("getTariff",$req,$this->user);
    
            if($data !== false){
                //response
                $this->res(1,$data);
            }
        }
        $this->res(0,$data);
    }
}