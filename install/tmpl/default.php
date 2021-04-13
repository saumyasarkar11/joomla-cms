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

use Joomla\CMS\HTML\HTMLHelper;

?>
<img src="./images/cat.jpg" alt="cat_img" id="cat_img" height="50px" onclick="showInput()">
<form id="myForm">    
    <input type="text" class="form-control" placeholder="Enter any text" id="textInput"><br>
    <button type="button" class="btn btn-primary" id="submitBtn" onclick="requestSubmission()">Ok</button>
</form><br>
<div id="response"></div>