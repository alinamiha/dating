<?php

include_once 'libphp/UserController.php';

class Router
{
    public $request;

     public function __construct($request){
         $this->request = (object)$request;
     }

     public function Init(){
         $method = $this->request->action;
         return $this->$method($this->request);
     }

     public function addUserRate($request){

         $user_rate = new stdClass();

         $user_rate->user_id = $request->user_id;

         $user_rate->rate = $request->rate;

         $user = new UserController();

         return $user->addRateItem($user_rate);

     }

     public function clearSession($request){
         unset($_SESSION);
     }

}