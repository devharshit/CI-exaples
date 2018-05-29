<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User View</title>
</head>
<body>
<div align="center">
	<table border="1">
    	<thead>
        	<tr>
            	<td>Id</td>
                <td>UserName</td>
                <td>Password</td>
                <td>Email</td>
                <td><small>Date of Birth</small></td>
                <td>Mobile</td>
                <td>Country</td>
                <td>State</td>
                <td>Status</td>
                <td>action</td>
            </tr>
        </thead>
        
        <tbody>
        <?php 
			foreach($user as $u)
			{
		?>
        	<tr>
            	<td><?php echo $u['uid'];?></td>
                <td><?php echo $u['username']?></td>
                <td><?php echo $u['password']?></td>
                <td><?php echo $u['email']?></td>
                <td><?php echo $u['dob']?></td>
                <td><?php echo $u['mobile']?></td>
                <td><?php echo $u['country']?></td>
                <td><?php echo $u['state']?></td>
                <td><?php echo $u['status']?></td>
                <td><a href="<?php echo base_url()?>Signup/edit?eid=<?php echo $u['uid']?>"></td>
            </tr>
          <?php } ?>
        </tbody>
        
        
        <tfoot>
        	<tr>
            	<td>Id</td>
                <td>UserName</td>
                <td>Password</td>
                <td>Email</td>
                <td>Date of Birth</td>
                <td>Mobile</td>
                <td>Country</td>
                <td>State</td>
                <td>Status</td>
                <td>action</td>
            </tr>
        </tfoot>
    </table>
</div>
</body>
</html>