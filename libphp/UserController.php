<?php
class UserController{

    public function addRateItem($rate_item){
        if (!empty($rate_item->rate)){
            //Должно быть добавление в базу... Но пока что просто в сессию
            $_SESSION['user_rates'][$rate_item->user_id] = $rate_item;
            return $rate_item;
        }else{
            return false;
        }

    }
}