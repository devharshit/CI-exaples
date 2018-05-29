<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User Signup</title>
</head>

<body>
<div align="center">
<form method="post" enctype="multipart/form-data">
	<table border="1" align="center">
    	<tr>
        	<td>User Name</td>
            <td><input type="text" name="user"  /></td>
        </tr>
        <tr>
        	<td>Password</td>
            <td><input type="password" name="pass"  /></td>
        </tr>
        <tr>
        	<td>Email</td>
            <td><input type="text" name="mail"  /></td>
        </tr>
        <tr>
        	<td>Date Of Birth</td>
            <td><input type="date" name="date"  /></td>
        </tr>
        <tr>
        	<td>Contact</td>
            <td><input type="text" name="mobile"  /></td>
        </tr>
        <tr>
        	<td>Country</td>
            <td><select name="country">
            <option  />--Select Country--
				<?php 
					  
					foreach($cnt as $c)
					{
				?>
                
            		<option value="<?php echo $c['cid'];?>"/><?php echo $c['cname'];?>
                <?php
					}
				?>
                </select></td>
        </tr>
        <tr>
        	<td>State</td>
            <td><select name="state">
            <option  />--Select State--
				<?php 
					  
					foreach($stat as $s)
					{
				?>
                
            		<option value="<?php echo $s['sid'];?>"/><?php echo $s['sname'];?>
                <?php
					}
				?>
                </select></td>
        </tr>


        <tr>
        	<td></td>
            <td><input type="submit" value="Submit" name="Submit"  />
            	<input type="reset" value="Clear"  /></td>
        </tr>
    </table>
</form>
</div>
</body>
</html>

