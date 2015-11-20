<?php
$username="root";
$password="gear3rdd";
$database="mysql";

mysql_connect(localhost,$username,$password);
@mysql_select_db($database) or die("Unable to select database");
$query="SELECT * FROM customers";
$result=mysql_query($query);

$num =mysql_numrows($result);

mysql_close();

echo "<h1><center>Customer Table</center></h1><br><br>";
echo "<tbody><tr>
    <th>CustomerID</th>
    <th>CustomerName</th>
    <th>ContactName</th>
    <th>Address</th>
    <th>City</th>
    <th>PostalCode</th>
    <th>Country</th>
  </tr>"

$i=0;
while ($i <$num) {
  $customerid = mysql_result($result,$i, "customerid");
  $customername = mysql_result($result,$i, "customername");
  $contactname = mysql_result($result,$i, "contactname");
  $address = mysql_result($result,$i, "address");
  $city = mysql_result($result,$i, "city");
  $postalcode = mysql_result($result,$i, "postalcode");
  $country = mysql_result($result,$i, "country");

  echo "<tr>
    <td>$customerid</td>
    <td>$customername</td>
    <td>$contactname</td>
    <td>$address</td>
    <td>$city</td>
    <td>$postalcode</td>
    <td>$country</td>
  </tr>"
  $i++;
}

echo "</tbody>"
?>