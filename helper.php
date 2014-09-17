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
        return '<html>
<head>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
</head>
<body>
<!-- Example Form -->
<meta http-equiv="Content-Type" content="text/html;charset=UTF-8">

<div class="row example-row example-forms">
<div class="col-lg-12"><h2>For More Information</h2>
<div class="well">

 <form name="Contact Us" class="form-horizontal" action="http://latechdirect.com/service/modules/Webforms/capture.php" method="post" accept-charset="utf-8">
 <input type="hidden" name="publicid" value="18fc99715e87673d28b83cdd00f38839">
 <input type="hidden" name="name" value="Contact Us">
 
  <fieldset name="jvleads">
  <legend>Enter Your: </legend>
  
  <div class="form-group"><label for="inputLastName" class="col-lg-2 control-label" required="true">Last Name *</label>
  <div class="col-lg-10"><input type="text" name="lastname" required class="form-control" id="inputLastName" placeholder="Last Name" /></div></div>
  
  <div class="form-group"><label for="inputFirstName" class="col-lg-2 control-label" required="true">First Name *</label>
  <div class="col-lg-10"><input type="text" name="firstname" required class="form-control" id="inputFirstName" placeholder="First Name" /></div></div>
  
  <div class="form-group"><label for="email" class="col-lg-2 control-label" required="true">Email *</label>
  <div class="col-lg-10"><input type="email" name="email" required class="form-control" id="email" placeholder="Email" /></div></div>
  
  <div class="form-group"><label for="description" class="col-lg-2 control-label">Description *</label>
  <div class="col-lg-10"><textarea class="form-control" name="description" requiredrows="3" id="description"></textarea><span class="help-block">A longer block of help </span></div></div>

  <div class="form-group">
  <div class="col-lg-10 col-lg-offset-2"><button class="btn btn-default">Cancel</button><button type="submit" class="btn btn-primary">Submit</button></div></div>
  </fieldset>
 </form>
</div>
</div>
</div>
<!-- //Example Form -->
</body>

</html>';
    }
}
?>
