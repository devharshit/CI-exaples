<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<?php echo form_open_multipart('Mycontroller/index');?>
		<table width="200" border="1">
  <tr>
    <td>Name:</td>
    <td><label for="textfield"></label>
      <input type="text" name="name" id="textfield" tabindex="2" maxlength="5"/></td>
  </tr>
  <tr>
    <td>Age:</td>
    <td><label for="textfield2"></label>
      <input tabindex="1" type="text" name="age" id="textfield2" /></td>
  </tr>
  <tr>
    <td>Country:</td>
    <td><label for="select"></label>
      <select name="country" id="select">
      <option>--SELECT--</option>
      <?php
	  		foreach($cnt as $c)
			{
      ?>
      		<option value="<?php echo $c['cid']?>"><?php echo $c['cname']?></option>
      <?php
			}
      ?>
      </select></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><label for="textfield3"></label>
      <input type="text" name="mail" id="textfield3" tabindex="3"/></td>
  </tr>
  <tr>
  	<td>Image</td>
    <td><input type="file" name="myimg"></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="submit" id="button" value="Submit" tabindex="4"/></td>
  </tr>
</table>
<H1>All Records</H1>
<table border="2">
	<tr>
    	<td>Sr.No</td>
        <td>Name</td>
        <td>Age</td>
        <td>Country</td>
        <td>Email</td>
        <td>Edit</td>
        <td>Delete</td>
    </tr>
    <?php
		$no=1;
		foreach($all as $s)
		{
    ?>
	<tr>
    	<td><?php echo $no;?></td>
        <td><?php echo $s['name'];?></td>
        <td><?php echo $s['age'];?></td>
        <td><?php echo $s['cid'];?></td>
        <td><?php echo $s['email'];?></td>
        <td><?php echo anchor("mycontroller/edit/".$s['rid'],"EDIT");?></td>
        <td><?php echo anchor("mycontroller/delete/".$s['rid'],"DELETE");?></td>
    </tr>
    <?php $no++; }  ?>
</table>
</form>
<?php echo base_url()."/mycontroller/login";?>
</body>
</html>
