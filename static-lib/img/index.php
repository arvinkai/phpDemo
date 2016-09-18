<form name="form1" method="post" action="">
<input type="text" name="year" value="" size="20">
<input type="submit" name="button" value="计算">
</form>
<input type="text" name="te" value="<?php echo $_POST['year'];?>" size="20">
<tr>
<td height="37" colspan="2" align="center">
<?php
if (isset($_POST['Button']) != "") {
    $year = $_POST['year'];
    echo $year;
}
?>
</td>
</tr>
