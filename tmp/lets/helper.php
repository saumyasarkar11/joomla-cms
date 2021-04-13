<?php
/**
 * @package Joomla.Site
 * @subpackage mod_hello
 *
 * @copyright Copyright (C) 2005 - 2019 Open Source Matters, Inc. All rights reserved.
 * @license GNU General Public License version 2 or later; see LICENSE.txt
 */

// No direct access to this file
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
