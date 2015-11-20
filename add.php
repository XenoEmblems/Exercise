<?php
  mysql_connect('localhost', 'root', '');
  if ($cn)
  {
  mysql_select_db("mysql", $cn);
  }
?>

<!-- Add input into MySQL database -->
<?
$username="root";
$password="";
$database="mysql";

$customername=$_POST['customername'];
$contactname=$_POST['contactname'];
$address=$_POST['address'];
$city=$_POST['city'];
$postalcode=$_POST['postalcode'];
$country=$_POST['country'];

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die( "Unable to select database");
$query = "INSERT INTO customers VALUES ('$customername', '$contactname', '$address', '$city', '$postalcode', '$country')";
mysql_query($query);
mysql_close();
?>