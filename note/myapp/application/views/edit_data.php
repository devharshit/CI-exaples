<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>
<body>
<form method="post">
<?php
	//print_r($edi);
?>
		<table width="200" border="1">
  <tr>
    <td>Name:</td>
    <td><label for="textfield"></label>
      <input type="text" name="name" id="textfield" value="<?php echo $edi[0]['name'];?>"/></td>
  </tr>
  <tr>
    <td>Age:</td>
    <td><label for="textfield2"></label>
      <input type="text" name="age" id="textfield2" value="<?php echo $edi[0]['age'];?>"/></td>
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
      		<option value="<?php echo $c['cid']?>" 
			<?php if($c['cid']==$edi[0]['cid'])
			{
				echo "selected";
			}?>>
			<?php echo $c['cname']?>
            </option>
      <?php
			}
      ?>
      </select></td>
  </tr>
  <tr>
    <td>Email:</td>
    <td><label for="textfield3"></label>
      <input type="text" name="mail" id="textfield3" value="<?php echo $edi[0]['email'];?>"/></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td><input type="submit" name="btnupdate" id="button" value="UPDATE" /></td>
  </tr>
</form>
</body>
</html>
