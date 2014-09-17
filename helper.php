<?php
/**
 * Helper class for Hello World! module
 * 
 * @package    Joomla.Tutorials
 * @subpackage Modules
 * @link http://dev.joomla.org/component/option,com_jd-wiki/Itemid,31/id,tutorials:modules/
 * @license        GNU/GPL, see LICENSE.php
 * mod_helloworld is free software. This version may have been modified pursuant
 * to the GNU General Public License, and as distributed it includes or
 * is derivative of works licensed under the GNU General Public License or
 * other free or open source software licenses.
 */
class modJvLeadsHelper
{
    /**
     * Retrieves the hello message
     *
     * @param array $params An object containing the module parameters
     * @access public
     */    
    public static function getJvLeads( $params )
    {
        return '<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<form name="Contact Us" action="http://latechdirect.com/service//modules/Webforms/capture.php" method="post" accept-charset="utf-8">
	<input type="hidden" name="publicid" value="18fc99715e87673d28b83cdd00f38839">
	<input type="hidden" name="name" value="Contact Us">
	<table>
<tbody><tr>
<td><label>First Name*</label></td>
<td>
		<input type="text" name="firstname" value="" required="true"></td></tr>
<tr>
<td><label>Last Name*</label></td>
<td>
		<input type="text" name="lastname" value="" required="true"></td></tr>
<tr>
<td><label>Email*</label></td>
<td>
		<input type="email" name="email" value="" required="true"></td></tr>
<tr>
<td><label>Description*</label></td>
<td>
		<textarea name="description" required="true"></textarea>
</td></tr>
	</tbody></table>
<input type="submit" value="Submit">
</form>';
    }
}
?>
