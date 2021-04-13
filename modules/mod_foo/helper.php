<?php

defined('_JEXEC') or die;

use Joomla\CMS\Session\Session;

class modFooHelper{
    public static function getDataAjax(){
        if(Session::checkToken('get'))
            return 'Request Recieved Successfully';
        else
            return 'Invalid Token!';   
    }
}