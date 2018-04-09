<?php
Router::setRoute("/",array("module" => "mch_core","controller"=>"Index","action"=>"index"));
Router::setRoute("/user/:action/*",array("module" => "mch_user","controller"=>"User"));
Router::setRoute("/place/:action/*",array("module" => "mch_place","controller"=>"Place"));
Router::setRoute("/hotel/:action/*",array("module" => "mch_hotel","controller"=>"Hotel"));
Router::setRoute("/tour/:action/*",array("module" => "mch_tour","controller"=>"Tour"));
Router::setRoute("/booking/:action/*",array("module" => "mch_booking","controller"=>"Booking"));
Router::setRoute("/checker/:action/*",array("module" => "mch_checker","controller"=>"Checker"));