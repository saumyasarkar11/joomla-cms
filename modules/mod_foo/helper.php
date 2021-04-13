<?php
/**
 * @package    [PACKAGE_NAME]
 *
 * @author     [AUTHOR] <[AUTHOR_EMAIL]>
 * @copyright  [COPYRIGHT]
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 * @link       [AUTHOR_URL]
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
