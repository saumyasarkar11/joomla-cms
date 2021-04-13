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

use Joomla\CMS\Helper\ModuleHelper;
use Joomla\CMS\Session\Session;

$url="index.php?option=com_ajax&module=foo&method=getData&format=json&".Session::getFormToken()."=1";
$document = JFactory::getDocument();
$jQueryPath = 'https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js';
$document->addScript($jQueryPath);
$document->addScriptDeclaration('
    function showInput(){
        document.getElementById("cat_img").style.display="none";
        document.getElementById("myForm").style.display="block";
    }
    function requestSubmission(){
        $.ajax({
            url: "'.$url.'",
            type: "post",
            datatype: "json",
            success :function(result){
                document.getElementById("response").innerHTML=JSON.stringify(result);
            }
        });
        
    }
');
$style = "
#myForm {
	display:none;
}
";
$document->addStyleDeclaration($style);

require ModuleHelper::getLayoutPath('mod_foo', $params->get('layout', 'default'));