<html>
<head></title>
BillCard
</title>
<style>


table {width: 600px;}
th, td {padding: 7px 10px 10px 10px;}
th {text-transform: uppercase;
letter-spacing: 0.1em;
font-size: 90%;
border-bottom: 2px solid #111111;
border-top: 1px solid #999;
border-style: ridge;
text-align: left;}
tr.even {background-color: #efefef;}
tr:hover {background-color: #c3e6e5;}



</style>
<head>

<body >

<?php
	$item=array("Tea"=>"3", "Coffee"=>"5", "Bread n Butter"=>"15", "Plain Sandwich"=>"20", "Veg Sandwich"=>"25");

	$_t=$_POST["tea"];
	$_c=$_POST["coffee"];
	$_b=$_POST["breadnbutter"];
	$_p=$_POST["plainsandwich"];
	$_v=$_POST["vegsandwich"];

	echo "<table align=center border=2>";
	<tr><th>Item-Name</th>	<th>Cost(Rs.)</th>	<th>Quantity</th>	<th>Price</th>
	</tr>

	echo "<tr><td>Tea</td>";	echo "<td>3</td>";	echo "<td>$_t</td>";	echo "<td>$item['Tea']*$_t</td>
	</tr>";

	echo "<tr><td>Coffee</td>";	 echo "<td>5</td>"; echo "<td>$_c</td>";	echo "<td>$item['Coffee']*$_c</td>
	</tr>";

	echo "<tr><td>Bread n Butter</td>";	echo "<td>15</td>";  echo "<td>$_b</td>";	echo "<td>$item['Bread n Butter']*$_b</td>
	</tr>";

	echo "<tr><td>Plain Sandwich</td>";	echo "<td>20</td>";  echo "<td>$_p</td>";	echo "<td>$item['Plain Sandwich']*$_p</td>
	</tr>";

	echo "<tr><td>Veg Sandwich</td>";	echo "<td>25</td>";  echo "<td>$_v</td>";	echo "<td>$item['Veg Sandwich']*$_v</td>
	</tr>";

	echo "<tr><th></th>"; echo "<th></th>"; echo "<th></th>";  echo <th>Total:$item['Tea']*$_t + $item['Coffee']*$_c + $item['Bread n Butter']*$_b + $item['Plain Sandwich']*$_p + $item['Veg Sandwich']*$_v </th></tr>

	echo "</table>";



?>




</body>
</html>
