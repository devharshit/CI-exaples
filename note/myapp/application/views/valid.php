<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form method="post">
<table width="400" border="0">
  <tr>
    <td>Name:</td>
    <td><input type="text" name="txtname"></td>
	<td><?php echo form_error('txtname'); ?></td>
  </tr>
  <tr>
    <td>Age:</td>
    <td><input type="text" name="txtage"></td>
	<td><?php echo form_error('txtage'); ?></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><input type="text" name="txtemail"></td><td><?php echo form_error('txtemail'); ?></td>
  </tr>
  <tr>
    <td>User Name:</td>
    <td><input type="text" name="txtuser"></td><span><?php echo form_error('txtusername'); ?></span>
    
  </tr>
  <tr>
    <td colspan="2"><input type="submit" name="btnsubmit" value="VALID"></td>
   
  </tr>
</table>
</form>
</body>
</html>